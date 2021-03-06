<?php

class DispoController extends Controller
{

    public function actionIndex($dispo_name,$phone_number){
        /**
         * @var SendDispoRequest $dispoSender
         */
        /*search for that dispo*/
        $phoneNumberFinal = $phone_number;
        $phoneNumberFinal = ltrim($phoneNumberFinal, '0');
        $foundDispoConf = DispoConfiguration::model()->findByAttributes(array("dispo_name" => $dispo_name));
        if($foundDispoConf){
            $dispoSender = Yii::app()->dispo_sender;
            $resultMessage = $dispoSender->sendRequest($foundDispoConf, $phoneNumberFinal, $_GET);
            $newDispoRequest = new DispoRequest();
            $newDispoRequest->dispo_conf_id = $foundDispoConf->id;
            $newDispoRequest->mobile_number = $phoneNumberFinal;
            $newDispoRequest->request_parameters = json_encode($_GET);
            $newDispoRequest->request_from = $_SERVER['REMOTE_ADDR'];
            $newDispoRequest->response_message = json_encode($resultMessage);
            if (!$newDispoRequest->save()) {
                throw new CHttpException(500,"Error Processing Request" .CHtml::errorSummary($newDispoRequest) );
            }else{
                header("Content-Type: application/json");
                echo json_encode($resultMessage);
            }
            //check dispo here
            $injectTableDispo = array("5PF","DELAY8");
            if(  in_array($foundDispoConf->dispo_name , $injectTableDispo)    ){
                $spreadSheetInserter = new SpreadSheetInject;
                $dateInsert = date("Y-m-d H:i:s");
                // @TODO
                //$spreadSheetInserter->injectRow($dateInsert , );
            }

            Yii::app()->end();
        }else{
            throw new CHttpException(404, "Cant find dispo configuration for this " . CHtml::encode($dispo_name));
        }
    }
    public function actionCrm(){
        /**
         * Prepare required post data
         */
        //dont be fooled , this is fullname
        if (isset($_POST['first_name'])) {
            $nameArr = explode(" ", $_POST['first_name']);
            if (isset($nameArr[0])) {
                $_POST['first_name'] = $nameArr[0];
            }else{
                $_POST['first_name'] = '';
            }
            if (isset($nameArr[1])) {
                $_POST['last_name'] = $nameArr[1];
            }else{
                $_POST['first_name'] = '';
            }
        }
        if (isset($_POST['phone_number'])) {
            $_POST['phone_number'] = str_replace(" ", "", $_POST['phone_number']);
            $_POST['phone_number'] = preg_replace("/[^0-9,.]/", "", $_POST['phone_number']);
            //if starts with 44 
            
            if (substr($_POST['phone_number'], 0, 2) === '44' && (  isset($_POST['phone_number'][2])  && $_POST['phone_number'][2] != '0')  ) {
                $_POST['phone_number'] = '0' .  substr($_POST['phone_number'], 2, strlen($_POST['phone_number']) -1 );//start with 3rd character
                // $_POST['phone_number'] = substr($_POST['phone_number'], 2, strlen($_POST['phone_number']) -1 );
            } else if (substr($_POST['phone_number'], 0, 2) === '44' && (  isset($_POST['phone_number'][2])  && $_POST['phone_number'][2] == '0')  ) {
                $_POST['phone_number'] = '0' .  substr($_POST['phone_number'], 3, strlen($_POST['phone_number']) -1 );//start with the 4th character , to exclude 0
            } else if (  isset($_POST['phone_number'][0])  && $_POST['phone_number'][0] == '7')  {
                $_POST['phone_number'] = '0' .  $_POST['phone_number'];
            }
            
        }
        $commentField = 'id='.$_POST['leadid'] ."\r\n";
        $commentField .= 'adset_id='.$_POST['adid'] . "\r\n";
        $commentField .= 'created_time='.date("Y-m-d H:i:s");
        $_POST['comments'] = $commentField;
        file_get_contents('http://data.site8.co/dispo/NEW/'.$_POST['phone_number'] . '/?' . http_build_query($_POST));
    }
    public function actionUpi()
    {
        if (isset($_POST['phone_number'])) {
            $_POST['phone_number'] = str_replace(" ", "", $_POST['phone_number']);
            $_POST['phone_number'] = preg_replace("/[^0-9,.]/", "", $_POST['phone_number']);
            //if starts with 44 
            if (substr($_POST['phone_number'], 0, 2) === '44' && (  isset($_POST['phone_number'][2])  && $_POST['phone_number'][2] != '0')  ) {
                $_POST['phone_number'] = '0' .  substr($_POST['phone_number'], 2, strlen($_POST['phone_number']) -1 );//start with 3rd character
                // $_POST['phone_number'] = substr($_POST['phone_number'], 2, strlen($_POST['phone_number']) -1 );
            } else if (substr($_POST['phone_number'], 0, 2) === '44' && (  isset($_POST['phone_number'][2])  && $_POST['phone_number'][2] == '0')  ) {
                $_POST['phone_number'] = '0' .  substr($_POST['phone_number'], 3, strlen($_POST['phone_number']) -1 );//start with the 4th character , to exclude 0
            } else if (  isset($_POST['phone_number'][0])  && $_POST['phone_number'][0] == '7')  {
                $_POST['phone_number'] = '0' .  $_POST['phone_number'];
            }
        }
        $_POST['comments'] = $_POST['product'];
        $product = $_POST['product'];
        if (strpos($product, 'Lloyds')  !== FALSE) {            
            file_get_contents('http://data.site8.co/dispo/Lloyds/'.$_POST['phone_number'] . '/?' . http_build_query($_POST));
        } else {
            file_get_contents('http://data.site8.co/dispo/DND/'.$_POST['phone_number'] . '/?' . http_build_query($_POST));
        }
    }
}