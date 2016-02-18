<?php


class SendDispoRequest extends CApplicationComponent
{
    /**
     *
     */
    public function sendRequest($serverIp, $mobileNumber, $other_http_parameters)
    {
        $httpParams = array("phone_number" => $mobileNumber);
        $httpParams = array_merge($httpParams, $other_http_parameters);
        $curlURL = "https://" . $serverIp . "/vicidial/non_agent_api.php?";
        $curlURL .= http_build_query($httpParams);
        $curlres = curl_init($curlURL);
        curl_setopt($curlres, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlres, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curlres, CURLOPT_SSL_VERIFYPEER, false);
        $curlResultStr = curl_exec($curlres);
        return $this->processResult($curlResultStr);
    }

    /**
     * @param $rawCurlRes
     * @return array
     */
    public function processResult($rawCurlRes){
        $returnMessage = array();
        if (stripos($rawCurlRes, "SUCCESS")) {
            $rawCurlResArr = explode(":", $rawCurlRes);
            $returnMessage = array(
                "type"=>"success",
                "message"=>$rawCurlResArr[1],
                "raw_response"=>$rawCurlRes
            );
        }else{
            $rawCurlResArr = explode(":", $rawCurlRes);
            $returnMessage = array(
                "type"=>"failed",
                "message"=>$rawCurlResArr[1],
                "raw_response"=>$rawCurlRes
            );
        }
        return $returnMessage;
    }
}