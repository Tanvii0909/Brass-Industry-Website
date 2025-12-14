<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('❌ Invalid email address. Please try again.');</script>";
        exit; 
    }

    
    $mail = new PHPMailer(true);

    try {
        // SMTP 
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  
        $mail->SMTPAuth   = true;
        $mail->Username   = 'drashtikapuriya07@gmail.com';  
        $mail->Password   = 'blpn woux deap lcem';    
        $mail->SMTPSecure = 'ssl';                   
        $mail->Port       = 465;

        // Sender & Receiver
        $mail->setFrom('drashtikapuriya07@gmail.com', 'Compaq Brass Website'); 
        $mail->addAddress('drashtikapuriya07@gmail.com'); 
        $mail->addReplyTo($email, $name);          
       
        // Mail 
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $subject";
        $mail->Body    = "
            <h3>New Message from Website Contact Form</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Subject:</b> $subject</p>
            <p><b>Message:</b><br>$message</p>
        ";

        $mail->send();

        $mail->clearAddresses(); // Clear previous recipients
        $mail->setFrom('drashtikapuriya07@gmail.com', 'Compaq Brass Industries');
        $mail->addAddress($email); // User email

        $mail->Subject = "✅ Your message has been received";
        $mail->Body    = "
            Hello <b>$name</b>,<br><br>
            Thank you for contacting <b>Compaq Brass Industries</b>. <br>
            We have received your message:<br><br>
            <blockquote>$msg</blockquote>
            <br>
            Regards,<br>
            <b>Compaq Brass Industries</b>
        ";
        $mail->send();
        
        echo "<script>
            alert('✅ Thank you $name, your message has been sent successfully!');
            window.location.href = '../contact.php';
        </script>";
        
        } catch (Exception $e) {
            echo "<script>
                alert('❌ Message could not be sent. Error: {$mail->ErrorInfo}');
                window.location.href = '../contact.php';
            </script>";
        }
        
}
?>
