<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['college']))
{
    header("location:../login.php");
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$a=$_SESSION['college'];
 if(isset($_POST['send']))
{
     $year = $_POST["year"];
     $message = $_POST["message"];
     $sql = "select email from col_alumni where col_name='$a' and year = '$year'";
     $rec=mysqli_query($db,$sql);
     $row = mysqli_num_rows($rec);
    //  $data = mysqli_fetch_array($rec);
     if($row>0)
     {
            
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'priyankagrawal76660@gmail.com';                     //SMTP username
            $mail->Password   = '@123Priyank';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
             
            while( $data = mysqli_fetch_array($rec)){
            
                //Recipients
                $mail->setFrom('priyankagrawal76660@gmail.com', $a);
                $mail->addAddress($data[0], '');     //Add a recipient
                $mail->addAddress($data[0]);               //Name is optional
               //  $mail->addReplyTo('info@example.com', 'Information');
               //  $mail->addCC('cc@example.com');
               //  $mail->addBCC('bcc@example.com');
            
                //Attachments
               //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
               //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                if($mail->send()){
                    $esMessage = true;
                }else{
                    $esMessage = false;
                }
            }
            if($esMessage){
                echo "<script> alert('mail sent sucessfully') </script>";
                echo '<script> window.location.replace("MailSend.php")</script>';
            }else{
                echo "<script> alert('mail does not sent sucessfully') </script>";
                echo '<script> window.location.replace("MailSend.php")</script>';        
            }
            // $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) 
        {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
    // $emails = ["mohitagrawal76660@gmail.com","agrawalpriyank68@gmail.com"];
    // while( $data = mysqli_fetch_array($rec)){
    //     echo $data[0];
    // }