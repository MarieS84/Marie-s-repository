<?php



require_once 'header.php';

if(empty($_GET['id'])){
    header('Location: index.php');
 }

 $id = htmlspecialchars($_GET['id']);
 
 

 $id = $_GET['id'];
require_once 'db.php';
$stmt = $conn->prepare("SELECT * FROM produkter WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();
if($stmt->rowCount() > 0){
  $row  = $stmt->fetch(PDO::FETCH_ASSOC);
  $Namn = $row['Namn'];
  $Pris  = $row['Pris'];
  $Beskrivning  = $row['Beskrivning'];
  $Bild  = $row['Bild'];
}
else{
  header('Location: index.php');
}


?>

<h3 class="m-4 text-center">Your order</h3>
  <br>

<div class="row">
<div class="col">
    </div>
<div class="col-md-3">
<div class="ml-4">
<card method="post" action="?id=<?php echo $id; ?>" >
<div class="card" style="width: 18rem;">
<img class="card-img-top" src=<?php echo 'Images/' . $row['Bild'];?>>
<div class="card-body">
<h5 class="card-title"><?php echo $Namn; ?></h5>
<h5 class="card-title"><?php echo $Pris . ' SEK'; ?></h5>
<p class="card-text"><?php echo $Beskrivning; ?></p> 
</div>
</div>
</div>
</card>
</div>

<div class="col-md-3">
<form action="ordermail.php" method="post">
 
   <input name="name" type="text" required
           class="form-control mt-2" placeholder="Name">
           

           <input name="phone" type="text" required
        class="form-control mt-2" placeholder="Phone Number">
 
 
   <input name="email" type="email" required
        class="form-control mt-2" placeholder="Email">

        <textarea name="deliveryaddress" cols="30" rows="4" type="text"
        class="form-control mt-2" placeholder="Delivery Address" required></textarea>
      
 
  <input type="submit" value="Order"
         class="btn btn-success form-control mt-2">

         <input type="hidden" name="id" value="<?=$id?>">
         <input type="hidden" name="product" value="<?=$Namn?>">
         <input type="hidden" name="price" value="<?=$Pris?>">

         
 
</form>

</div>

<div class="col">
    </div>




<?php

