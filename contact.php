<?php
if(isset($_POST['submit'])) {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "lalithkarikelly@gmail.com"; // 🔴 change this
    $subject = "New Contact Message";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "<div style='text-align:center; margin-top:50px; font-size:18px;'>
                ✅ Message sent successfully!
              </div>";
    } else {
        echo "<div style='text-align:center; margin-top:50px; font-size:18px; color:red;'>
                ❌ Message not sent. Try again.
              </div>";
    }
}
?>
