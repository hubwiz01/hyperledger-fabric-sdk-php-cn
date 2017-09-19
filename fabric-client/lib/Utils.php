<?php
namespace org\amex\fabric_client;

class Utils{

    /**
    * Function for getting random nounce value
    * @return 
    */
    public static function getNonce()
    {
        $random = random_bytes(24); // read 24 from sdk default.json
        return $random;
    }

    public  function toByteArray($proposalString)
    {
        $hashing = new \Hash();
        $array = $hashing->generateByteArray($proposalString);
        return $array;
    }

    public  function arrayToBinaryString(array $arr)
    {
        $str = "";
        foreach ($arr as $elm) {
            $str .= chr((int) $elm);
        }
        return $str;
    }

    function FabricConnect()
    {
        //$connect = new Protos\EndorserClient('localhost:7051', [
        $connect = new \Protos\EndorserClient('localhost:7051', [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);

        return $connect;
    }

    public  function createChaincodeInvocationSpec($chaincodeID, $ccType)
    {
        $chaincodeInput = new \Protos\ChaincodeInput();

        $args = array();
        $args[]="getTransactionHistory";
        $args[]="bhai";

        $chaincodeInput->setArgs($args);

        $chaincodeSpec = new \Protos\ChaincodeSpec();
        $chaincodeSpec->setType("1");
        $chaincodeSpec->setChaincodeId($chaincodeID);
        $chaincodeSpec->setInput($chaincodeInput);

        $chaincodeInvocationSpec = new \Protos\ChaincodeInvocationSpec();
        $chaincodeInvocationSpec->setChaincodeSpec($chaincodeSpec);
        
        return $chaincodeInvocationSpec;
    }

    public  function createChannelHeader($type, $txID, $channelID, $epoch, $TimeStamp, $chaincodeHeaderExtension)
    {
        $channelHeader = new \Common\ChannelHeader();
        $channelHeader->setType($type);
        $channelHeader->setVersion(1);
        $channelHeader->setTxId($txID);
        $channelHeader->setChannelId($channelID);
        $channelHeader->setEpoch($epoch);
        $channelHeader->setTimestamp($TimeStamp);
        $chaincodeHeaderExtensionString = $chaincodeHeaderExtension->serializeToString();
        $channelHeader->setExtension($chaincodeHeaderExtensionString);

        return $channelHeader;
    }


    public   function proposalArrayToBinaryString(Array $arr) {
        $str = "";
        foreach($arr as $elm) {
            $str .= chr((int) $elm);
        }
        return $str;
    }
}