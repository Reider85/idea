<?php
class MailSend {
    private static $mail="l.dyachkov@gmail.com";

    private static $domain="idea.ru";

    public static function getDomain(){
        return self::$domain;
    }

    public static function getMailAddress(){
        return self::$mail;
    }

    public static function sendMail($name,$address,$message){
        $mail_to=self::getMailAddress();
        $mail_subject="Сообщение от пользователя ".$name;
        $mail_body=$message;
        $domain=self::getDomain();

        $mail_headers = "From: ".$name."<".$address.">\r\nX-Mailer: ".$domain." Mailer\r\nContent-Type: text/html; charset=utf-8";
        return mail($mail_to, $mail_subject, $mail_body, $mail_headers);
    }

    public static function send(){
        $name=htmlspecialchars($_POST["name"],ENT_COMPAT,"UTF-8");
        $address=htmlspecialchars($_POST["address"],ENT_COMPAT,"UTF-8");
        $message=htmlspecialchars($_POST["message"],ENT_COMPAT,"UTF-8");
        $real=htmlspecialchars($_POST["real"],ENT_COMPAT,"UTF-8");
        if (($real==1)&&($name!='')&&($address!='')&&($message!='')){
            self::sendMail($name,$address,$message);
            header('location:/index.php');
        }
    }
}

MailSend::send();

?>