<?php

require_once 'header.php';




if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    

    $name    = htmlspecialchars( $_POST['name'] );
    $phone   = htmlspecialchars ($_POST['phone']);
    $email = htmlspecialchars ($_POST['email']);
    $deliveryaddress = htmlspecialchars ($_POST['deliveryaddress']);
    $id=htmlspecialchars ($_POST['id']);
    $product=htmlspecialchars ($_POST['product']);
    $pris=htmlspecialchars ($_POST['price']);
    //lägg till de hidden fields från wines.php

    require_once 'db.php';
    
    $stmt = $conn->prepare("INSERT INTO orderform  
    (name,   phone,  email, deliveryaddress) 
    VALUES (:name, :phone, :email, :deliveryaddress) ");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone' , $phone);
    $stmt->bindParam(':email' , $email);
    $stmt->bindParam(':deliveryaddress' , $deliveryaddress);

    $stmt->execute(); 


    $to = "svenssonmc84@gmail.com";
    $subject = "Message from $name";
    $message = "Order from $name. Email: $email Delivery address: $deliveryaddress. You have ordered $product at the price of $pris. Thank you for your order.";

    $headers[] = "From: $email";
    $headers[] = "Reply-To: noreply@example.com";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=utf-8";
    $headers[] = "Bcc: $email";

mail($to, $subject, $message, implode("\r\n", $headers));



    echo "<h3>Thanks $name for your order! We will ship your order within 3 business days. Have a nice day!</h3>";
    
    endif;

    require_once 'footer.php';



    ?>
