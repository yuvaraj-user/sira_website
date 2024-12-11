<?php 
require_once __DIR__ . "/../vendor/autoload.php";
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


Class Send_Mail{

    public $conn;
    public $Created_At;
    public $Created_By;
    function __construct() 
    {

    }

    public function Send_Mail_Details($subject,$attachment = '',$fileName,$message = '',$to = array(),$cc = array(),$bcc=array())
    {
       // $to=array('jr_developer4@mazenetsolution.com');
        // $bcc=array('jr_developer4@mazenetsolution.com');
        $bcc=array('sathish.r@rasiseeds.com','saravanan.r@rasiseeds.com');

       $mail = new PHPMailer;
        //$mail->SMTPDebug = 2;                           
        $mail->isSMTP();        
        $mail->Host = "rasiseeds-com.mail.protection.outlook.com";
        $mail->SMTPAuth = false;                      
        $mail->Port = 25;                    
        $mail->From = "desk@rasiseeds.com";
        $mail->FromName = "desk@rasiseeds.com";
       foreach($to as $key => $val){   
             $mail->addAddress($val); 
        }
        // foreach($cc as $key => $val){   // To Mail ids
        //   $mail->addCC($val); 
        // }
        foreach($bcc as $key => $val){   // To Mail ids
          $mail->addBCC($val); 
        }
        $mail->Subject  = $subject;
        $mail->IsHTML(true);
        $mail->Body = $message;
        if($attachment != '') {
            $mail->addStringAttachment($attachment, $fileName);
        } 
        if(!$mail->send())
        {
         echo "Mailer Error: " . $mail->ErrorInfo;
         return false;
        }
        else
        {
         return true;
        }
    }
    public function Send_Mail_attachement($subject,$path,$fileName,$message = '',$to = array(),$cc = array(),$bcc=array())
    {
        // $to=array('jr_developer4@mazenetsolution.com');
       // $to=array('jr_developer4@mazenetsolution.com','sathish.r@rasiseeds.com','saravanan.r@rasiseeds.com');
        // $bcc=array('softwaredeveloper2@mazenetsolution.com','sathish.r@rasiseeds.com','jr_developer4@mazenetsolution.com');
        // $bcc=array('softwaredeveloper2@mazenetsolution.com','sathish.r@rasiseeds.com','jr_developer4@mazenetsolution.com','saravanan.r@rasiseeds.com','gopinath.m@rasiseeds.com');

        $bcc=array('sathish.r@rasiseeds.com','saravanan.r@rasiseeds.com');

       $mail = new PHPMailer;
        //$mail->SMTPDebug = 2;                           
        $mail->isSMTP();        
        $mail->Host = "rasiseeds-com.mail.protection.outlook.com";
        $mail->SMTPAuth = false;                      
        $mail->Port = 25;                    
        $mail->From = "desk@rasiseeds.com";
        $mail->FromName = "desk@rasiseeds.com";
       foreach($to as $key => $val){   
             $mail->addAddress($val); 
        }

        foreach($bcc as $key => $val){   // To Mail ids
          $mail->addBCC($val); 
        }

        $mail->Subject  = $subject;
        $mail->IsHTML(true);
        $mail->Body = $message;

        // Attach the Excel file
        $mail->addAttachment($path, $fileName);

        if(!$mail->send())
        {
         echo "Mailer Error: " . $mail->ErrorInfo;
         return false;
        }
        else
        {
         return true;
        }

    }

}