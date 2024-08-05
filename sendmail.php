<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail2 = new PHPMailer (true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMT
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "yousefhussien919@gmail.com";                     //SMTP username
    $mail->Password   = "rafo fsmt tcfu pxgz";                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Server settings
    $mail2->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail2->isSMTP();                                            //Send using SMT
    $mail2->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail2->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail2->Username   = "yousefhussien919@gmail.com";                     //SMTP username
    $mail2->Password   = "rafo fsmt tcfu pxgz";                               //SMTP password
    $mail2->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail2->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = json_decode(file_get_contents("php://input"));
        $phone = $data->phone;
        $email = $data->email;
        $language = $data->language;
        $destination_city = $data->destination_city;
        $trip = $data->trip;
        $transportation = $data->transportation;
        $accommodation = $data->accommodation;
        $mail->setFrom( $email, "New Trip Request");
        $mail->addAddress(" yousefhussien919@gmail.com"); // HEEEEEEEEEEEEEEEEEEEEEEEEREEE            
        $mail->isHTML(true);                             
        $mail->Subject = 'New Trip Request';

        $mail->Body = "
        <h1 style = 'text-align: center; color: #97660e!important;'>New Trip Request</h1>
        <p '>Phone: $phone</p>
        <p '>Email: $email</p>
        <p '>Language: $language</p>
        <p '>Destination City: $destination_city</p>
        <p '>Trip: $trip</p>
        <p '>Transportation: $transportation</p>
        <p '>Accommodation: $accommodation</p>
        <img src=\"https://i.ibb.co/7VWjLGr/logo-1.png\" alt = \"logo\" style = \"width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;\"/>
        ";    
        $mail2->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        $mail2->setFrom( $email, "Client Package");
        $mail2->addAddress($email); // HEEEEEEEEEEEEEEEEEEEEEEEEREEE            
        $mail2->isHTML(true);                             
        $mail2->Subject = 'Client Package';
        $place = "";
        $image = "";
        if($accommodation== "Hotel"){
            $place = "The Grand Plaza Hotel";
            $image = "https://i.ibb.co/28t78cj/hotel-5.jpg";
        }else if($accommodation== "AirBNB"){  
            $place = "El Montazah building";
            $image = "https://i.ibb.co/wLT5KZ7/build.jpg";
        }      
        $mail2->Body = " 
        <h1 style = 'text-align: center; color: #97660e!important;'>Enjoy your own Package</h1>
        <p '>Destination City: $destination_city</p>
        <p '>Trip: $trip</p>
        <p '>Trip price : 1200 EGP</p>
        <img src=\"https://i.ibb.co/BKdPrP1/alex3.jpg\" alt= \"trip\" style = \"width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;\"/>
        <p '>Transportation: $transportation</p>
        <p '>Transportation price : 300 EGP</p>
        <img src=\"https://i.ibb.co/KK9H99L/bus-1.jpg\" alt= \"trip\" style = \"width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;\"/>
        <p '>Accommodation: $place</p>
        <p '>Accommodation price : 2000 EGP</p>
        <img src=$image alt= \"trip\" style = \"width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;\"/>
        <p '>Total price : 3500 EGP</p>
        <img src=\"https://i.ibb.co/7VWjLGr/logo-1.png\" alt = \"logo\" style = \"width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;\"/>
        "; 
        $mail2->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail2->send();
        
        return true;
    }
    } catch (Exception $e) {
        return false;
    }

?>