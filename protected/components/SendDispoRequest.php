<?php


class SendDispoRequest extends CApplicationComponent
{
    /**
     *
     */
    public function sendRequest(DispoConfiguration $dispoConfiguration, $mobileNumber, $other_http_parameters)
    {
        $httpParams = array(
            "phone_number" => $mobileNumber,
            "source"=>$dispoConfiguration->source,
            "user"=>$dispoConfiguration->user,
            "pass"=>$dispoConfiguration->pass,
            "function"=>$dispoConfiguration->function,
            "phone_code"=>doubleval($dispoConfiguration->phone_code),
            "list_id"=>$dispoConfiguration->list_id,
            "dnc_check"=>$dispoConfiguration->dnc_check,
            "duplicate_check"=>$dispoConfiguration->duplicate_check,
            "add_to_hopper"=>$dispoConfiguration->add_to_hopper,
            "hopper_priority"=>$dispoConfiguration->hopper_priority
        );
        $httpParams = array_merge($httpParams, $other_http_parameters);
        // $curlURL = "https://" . $dispoConfiguration->server_ip . "/vicidial/non_agent_api.php?";
        $curlURL = $dispoConfiguration->server_ip;//have to change
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
        if (stripos($rawCurlRes, "SUCCESS") !== FALSE) {
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