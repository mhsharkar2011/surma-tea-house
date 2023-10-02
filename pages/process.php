<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


//Load Composer's autoloader
require '../vendor/autoload.php';



if (isset($_POST['submit'])) {

    //Create an instance; passing `true` enables exceptions
$phpmailer = new PHPMailer(true);

$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPAuth = true;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Port = 465;
$phpmailer->Username = 'monirbd.me@gmail.com';
$phpmailer->Password = 'alhiqollfegnlpux';


    // $phpmailer->FromName = $_POST['name'];
    $phpmailer->isHTML(true);
    $phpmailer->Subject = $_POST['subject'];
    $phpmailer->Body = $_POST['message'];
    // Set recipient email address
    $mailReceiver = $phpmailer->Username;
    $to = $phpmailer->addAddress($mailReceiver, "Monir Hossain");
    // Sender Email address
    $emailFrom = $_POST['email'];
    echo $emailFrom;
    $name = $_POST['name'];
    $phpmailer->setFrom ($emailFrom,$name,true);
}
    $phpmailer->send();

    echo "
        <script>
            alert('Mail Send Successfully');
            document.location.href = 'contact-us.php';
        </script>
    ";
// }
?>
