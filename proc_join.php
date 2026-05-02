<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once('PHPMailer/PHPMailerAutoload.php');

    // Sanitize inputs
    $fullname = trim($_POST['fullname']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['phone']);
    $location = trim($_POST['location']);
    $membership = trim($_POST['membership']);
    $reason = trim($_POST['reason']);

    if (!$fullname || !$email || !$phone || !$location || !$membership || !$reason) {
        echo "<script>
            alert('All fields are required.');
            window.location.href = 'join';
          </script>";
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
                alert('Invalid Email Address.');
                window.location.href = 'join';
              </script>";
        exit;
    }

    try {
        $mail = new PHPMailer(true);

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'mail.techbyfrancis.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'portfolio@techbyfrancis.com';
        $mail->Password = 'TECHbyfrancis101$$';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->isHTML(true);

        // ----------------------------
        // 1️⃣ Email to Applicant
        // ----------------------------
        $mail->setFrom('portfolio@techbyfrancis.com', 'Umunna Development');
        $mail->addAddress($email);

        $mail->Subject = 'Application Received';
        $mail->Body = "
            Hello $fullname,<br><br>
            Thank you for applying to join <strong>Umunna Development</strong>.<br><br>

            <strong>Membership Type:</strong> $membership<br>
            <strong>Location:</strong> $location<br><br>

            We’ve received your application and will review it shortly.<br><br>

            Best regards,<br>
            Umunna Development Team
        ";

        $mail->send();

        // ----------------------------
        // 2️⃣ Email to Admin
        // ----------------------------
        $mail->clearAddresses();
        $mail->addAddress('francisnwankwo1972@gmail.com');

        $mail->Subject = 'New Membership Application';
        $mail->Body = "
            New application received:<br><br>

            <strong>Name:</strong> $fullname<br>
            <strong>Email:</strong> $email<br>
            <strong>Phone:</strong> $phone<br>
            <strong>Location:</strong> $location<br>
            <strong>Membership:</strong> $membership<br>
            <strong>Reason:</strong> $reason<br><br>

            Regards,<br>
            Umunna System
        ";

        $mail->send();

        echo "<script>
                alert('Application submitted successfully!');
                window.location.href = 'join';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Email failed: {$mail->ErrorInfo}');
                window.location.href = 'join';
              </script>";
    }
} else {
    echo "<script>
            alert('Invalid request.');
            window.location.href = 'join';
          </script>";
}
