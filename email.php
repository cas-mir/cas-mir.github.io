<?php
require 'vendor/autoload.php';

// Check if form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields are set
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Create PHPMailer instance
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'casmir1108@gmail.com'; // Your Gmail email
        $mail->Password = 'rzvokpgzbusfozrx'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom($email, $name); // Set the From email and name based on user input
        $mail->addAddress('casmir1108@gmail.com'); // Your receiving email
        $mail->isHTML(true);
        $mail->Subject = $subject; // Subject from the form
        $mail->Body    = 'Name: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message; // Message from the form

        // Check if email is sent successfully
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            // Redirect or display a success message
            echo 'Message sent successfully.';
        }
    } else {
        // Handle case where form fields are not set
        echo "Form fields are not set.";
    }
} else {
    // Handle case where form is not submitted via POST method
    echo "Form is not submitted.";
}
?>