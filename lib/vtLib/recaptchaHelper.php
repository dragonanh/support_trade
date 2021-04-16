<?php

class recaptchaHelper{

    private $token;
    private $url;
    private $secretKey = "6Lem1HcUAAAAAMp5NXR7IjcXLtZyJXvmjWtZATSC";

    public function __construct($token)
    {
        $this->token = $token;
        $this->url = "https://www.google.com/recaptcha/api/siteverify";
    }

    public function validate(){
        $logger = VtHelper::getLogger4Php("all");
        try{
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,$this->url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 
                    http_build_query(array('secret' =>$this->secretKey, "response" => $this->token)));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // Receive server response ...
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $server_output = json_decode(curl_exec($ch));

            curl_close ($ch);
            if($server_output){
                if($server_output->success){
                    $errorCode = 0;
                    $message = "success";
                }else{
                    $errorCode = 1;
                    $message = "failure";
                }
            }else{
                $errorCode = 500;
                $message = "Timeout";
            }
        }catch(Exception $e){
            $errorCode = 500;
            $message = $e->getMessage();
        }
        $logger->info(sprintf("[recaptchaHelper] validate | %s | response: %s", $message, json_encode($server_output)));

        return ["errorCode" => $errorCode, "message" => $message];
    }
}