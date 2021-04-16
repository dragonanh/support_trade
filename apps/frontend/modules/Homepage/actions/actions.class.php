<?php

/**
 * vtCommon actions.
 *
 * @package    mobile_marketing
 * @subpackage vtCommon
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php_bak.bak 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HomepageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request){

  }

  public function executeAjaxLogin(sfWebRequest $request){
    $this->getResponse()->setContentType('application/json; charset=utf-8');
    $logger = VtHelper::getLogger4Php("all");
    $logger->info(sprintf("[executeAjaxLogin] input: %s", json_encode($_REQUEST)));
    
    $username = $request->getParameter("username");
    $password = $request->getParameter("password");
    $code = $request->getParameter("code");
    $token = $request->getParameter("token");

    $data = [
      "usernameMessage" => "",
      "passwordMessage" => "",
      "codeMessage" => "",
    ];

    $recaptcha = new recaptchaHelper($token);
    $checkCaptcha = $recaptcha->validate();
    if($checkCaptcha["errorCode"] != 0){
      $data["usernameMessage"] = "Dữ liệu không hợp lệ";
      return $this->renderText(json_encode([
        "errorCode" => 1,
        "data" => $data
      ]));
    }

    if(empty($username)){
      $data["usernameMessage"] = "Vui lòng nhập Tài khoản";
      return $this->renderText(json_encode([
        "errorCode" => 1,
        "data" => $data
      ]));
    }
    if(empty($password)){
      $data["passwordMessage"] = "Vui lòng nhập Mật khẩu";
      return $this->renderText(json_encode([
        "errorCode" => 1,
        "data" => $data
      ]));
    }
    if(empty($code)){
      $data["codeMessage"] = "Vui lòng nhập Mã phần mềm";
      return $this->renderText(json_encode([
        "errorCode" => 1,
        "data" => $data
      ]));
    }

    if($username != "chung" && $password != "123456" && $code != "292241176"){
      $data["usernameMessage"] = "Thông tin đăng nhập không chính xác";
      return $this->renderText(json_encode([
        "errorCode" => 2,
        "data" => $data
      ]));
    }

    return $this->renderText(json_encode([
      "errorCode" => 0,
      "message" => "Thành công",
      "data" => $data
    ]));
  }
}
