<?php

class DispoController extends Controller
{

    public function actionIndex($dispo_name,$phone_number){
        /**
         * @var SendDispoRequest $dispoSender
         */
        /*search for that dispo*/
        $foundDispoConf = DispoConfiguration::model()->findByAttributes(array("dispo_name" => $dispo_name));
        if($foundDispoConf){
            $dispoSender = Yii::app()->dispo_sender;
            $resultMessage = $dispoSender->sendRequest($foundDispoConf->server_ip, $phone_number, $_GET);

            $newDispoRequest = new DispoRequest();
            $newDispoRequest->dispo_conf_id = $foundDispoConf->id;
            $newDispoRequest->mobile_number = $phone_number;
            $newDispoRequest->request_parameters = json_encode($_GET);
            $newDispoRequest->request_from = $_SERVER['REMOTE_ADDR'];
            $newDispoRequest->response_message = $resultMessage;
            if (!$newDispoRequest->save()) {
                throw new CHttpException(500,"Error Processing Request");
            }
            $newDispoRequest->save();
            header("Content-Type: application/json");
            echo json_encode($resultMessage);
        }else{
            throw new CHttpException(404, "Cant find dispo configuration for this " . CHtml::encode($dispo_name));
        }
    }
}