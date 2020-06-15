<?php

require_once 'header.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    require_once 'db.php';
    
    $stmt = $conn->prepare("INSERT INTO contactus  
    (name,   email,  message) 
    VALUES (:name, :email, :message) ");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email' , $email);
    $stmt->bindParam(':message' , $message);

    $stmt->execute(); 


    $to = "svenssonmc84@gmail.com";
    $subject = "Message for $name";

    $headers[] = "From: $email";
    $headers[] = "Reply-To: noreply@example.com";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=utf-8";
    $headers[] = "Bcc: $email";


mail($to, $subject, $message, implode("\r\n", $headers));



    echo "<h3>Thanks $name for your message! We'll reply shortly to your email $email</h3>";
    
    endif;

    require_once 'footer.php';



    ?>