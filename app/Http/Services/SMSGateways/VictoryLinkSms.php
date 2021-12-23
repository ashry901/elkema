<?php

namespace App\http\Services\SMSGateways;

class VictoryLinkSms
{
    public $client;

    public function __construct()
    {
        if(!$this->client){
            $this->client = new Client();
        }
    }

    public function sendSms(
        $phone,
        $message,
        //$type = 'non_survey',
        $language = 'en',
        $model = null
        )
    {
        $params = [
            'UserName' => config('sms.VICTROY_LINK.USERNAME'),
            'Password' => config('sms.VICTROY_LINK.PASSWORD'),
            'SMSText' => $message,
            'SMSLang' => $language == 'ar' ? 'A' : 'E',
            'SMSSender' => config('sms.VICTROY_LINK.SMS.SENDER'),
            'SMSReceiver' => $phone,
        ];

        try{
            DB::beginTransaction();

            //$smsURL = "https://smsvas.vlserv.com/KannelSending/service.asmx/SendSMS";
            $smsURL = "";
            
            $response = $this->client->post($smsURL, ['form_params' => $params]);
            $content = $response->getBody();

            $xml = (array) simplexml_load_string($content);

            if($xml[0] == '0'){
                return true;
            }else{
                info("VictoryLink error status!");
                return false;
            }

        } catch (\Exception $ex) {
            DB::rollback();
            info("VictoryLink has been trying to phone but operation failed !");

            return false;
        }
    }
}
