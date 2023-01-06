<?php
use PHPMailer\PHPMailer\PHPMailer;

require '../../config.php';
require 'PHPMailer/PHPMailer.php';

$response["success"] = false;

if (isset($_POST) && !empty($_POST)) {

    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';

    foreach ($_POST as $post_key => $post_val) {
        $$post_key = htmlspecialchars($post_val);
    }

    $body = '';

    if (!empty($name)) { $body .= "Имя: ".$name."<br>"; }
    if (!empty($email)) { $body .= "Почта: ".$email."<br>"; }
    if (!empty($phone)) { $body .= "Телефон: ".$phone."<br>"; }
    if (!empty($description)) { $body .= "Описание формы: ".$description."<br>";}
    if (!empty($comment)) { $body .= "Клиента заинтересовали: ".$comment."<br>"; }
    
    $body .= "Заявка с сайта: ".$url_site;
    $subject = "Заявка с формы: ".$url_site.' от '.date("m.d.y H:i");
        
    // От кого
    $mail->setFrom('adm@' . $_SERVER['HTTP_HOST'], '');
 
    // Кому
    foreach ( $admin_email as $key => $value ) {
        $mail->addAddress($value);
    }

    // Тема письма
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->msgHTML($body);
    $result = $mail->send();

    if($result === true){
        $response["success"] = true;
    }else{
        print_r($result);
        $response["success"] = false;
    }
}
echo json_encode($response);
die();