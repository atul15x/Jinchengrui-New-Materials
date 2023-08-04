<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';




if (isset($_POST["email"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    // $mail->isSMTP();
    // $mail->Host = "smtp.hostinger.com";
    // $mail->SMTPAuth = true;

    // $mail->Username = "team@jcr-nem.site";
    // $mail->Password = "Hello@123456";
    // $mail->SMTPSecure = "ssl";
    // $mail->Port = 465;

    // $mail->setFrom("team@jcr-nem.site");
    // $mail->addAddress($email);


    $mail->isSMTP();
    $mail->Host = "smtp.163.com";
    $mail->SMTPAuth = true;

    $mail->Username = "da_shan2020@163.com";
    $mail->Password = "EQIGEUFEILFGZFBA";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom('da_shan2020@163.com');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "Jinchengrui New Materials";
    $mail->Body = "Thanks for contact us!, We will reach you as soon as possible.";



    if ($mail->send()) {

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.163.com";
        $mail->SMTPAuth = true;
        $mail->Username = "da_shan2020@163.com";
        $mail->Password = "EQIGEUFEILFGZFBA";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;

        $mail->setFrom('da_shan2020@163.com');
        $mail->isHTML(true);
        $mail->Subject = "Website Client";
        $message = "Client Messege   " . $message . "\r\n   Client_Email:   " . $email; 

        // List of email recipients
        $recipients = array(
            "atul_chandra@jcr-nem.com",
            "ratul_miah@jcr-nem.com",
            // Add more recipients as needed
        );

        // Send emails to each recipient
        foreach ($recipients as $recipient) {
            $mail->clearAddresses(); // Clear previous recipients
            $mail->addAddress($recipient);
            $mail->Body = $message;
            $mail->send();
        }

        // After the foreach loop
        if (count($recipients) > 0) {
            echo "Success";
        } else {
            echo "No recipients found.";
        }






    } else {
        echo "Error";
    }

}

?>