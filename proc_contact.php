<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once('PHPMailer/PHPMailerAutoload.php');

    // Sanitize inputs
    $fullname = trim($_POST['fullname']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate required fields
    if (!$fullname || !$email || !$subject || !$message) {
        echo "<script>
            alert('All fields are required.');
            window.location.href = 'contact';
        </script>";
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Invalid Email Address.');
            window.location.href = 'contact';
        </script>";
        exit;
    }

    try {
        $mail = new PHPMailer(true);

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'mail.deevant.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@deevant.com';
        $mail->Password = 'dvZ.2TF3a!61Rq';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->isHTML(true);

        // ----------------------------
        // 1️⃣ Email to User (Auto Reply)
        // ----------------------------
        $mail->setFrom('info@deevant.com', 'Umunna Development');
        $mail->addAddress($email);

        $mail->Subject = 'We Received Your Message';
        $mail->Body = "
            Hello $fullname,<br><br>

            Thank you for contacting <strong>Umunna Development</strong>.<br><br>

            We have received your message and will get back to you shortly.<br><br>

            <strong>Your Message:</strong><br>
            $message<br><br>

            Best regards,<br>
            Umunna Development Team
        ";

        $mail->send();

        // ----------------------------
        // 2️⃣ Email to Admin
        // ----------------------------
        $mail->clearAddresses();
        $mail->addAddress('francisnwankwo1972@gmail.com');

        $mail->Subject = "New Contact Message: $subject";
        $mail->Body = "
            New message received:<br><br>

            <strong>Name:</strong> $fullname<br>
            <strong>Email:</strong> $email<br>
            <strong>Subject:</strong> $subject<br><br>

            <strong>Message:</strong><br>
            $message<br><br>

            Regards,<br>
            Umunna Development System
        ";

        $mail->send();

        echo "<script>
            alert('Message sent successfully!');
            window.location.href = 'contact';
        </script>";
    } catch (Exception $e) {
        echo "<script>
            alert('Email failed: {$mail->ErrorInfo}');
            window.location.href = 'contact';
        </script>";
    }
} else {
    echo "<script>
        alert('Invalid request.');
        window.location.href = 'contact';
    </script>";
}
