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
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '98175c23341998';
$phpmailer->Password = '58038e83c72dd0';


    $phpmailer->FromName = $_POST['name'];
    $name =  $phpmailer->FromName;
    $email = $phpmailer->setFrom ($_POST['email']);
    $phpmailer->isHTML(true);
    $phpmailer->Subject = $_POST['subject'];
    $subject = $phpmailer->Subject;
    $phpmailer->Body = $_POST['message'];
    $message = $phpmailer->Body;

    // Set recipient email address
    $to = $phpmailer->addAddress('monirbd.me@gmail.com');
    $phpmailer->send();

    echo "
        <script>
            alert('Mail Send Successfully');
            document.location.href = 'contact-us.php';
        </script>
    ";
}
?>
