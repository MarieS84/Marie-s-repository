<?php


require_once 'header.php';


?>


<h3 class="m-4 text-center">Our wines</h3>
  <br><br>


  <?php

require 'db.php';


$stmt = $conn->prepare("SELECT * FROM produkter"); 
$stmt->execute();
echo "<div class='container'>
<div class='row'>";


while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
  $Namn = $row['Namn'];
  $Pris  = $row['Pris'];
  $Beskrivning  = $row['Beskrivning'];
  $Bild  = $row['Bild'];



?>


  
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
        
      <div class="card h-100" style=width:70%>
        <img class="card-img-top" src=<?php echo 'Images/' . $row['Bild'];?>>
          <div class="card-body">
            <h4 class="card-title"><?php echo $row['Namn']; ?></h4>
            <p class="card-text"><?php echo $row['Pris'] . ' SEK'; ?></p>
          
            <p class="card-text"><?php echo $row['Beskrivning']; ?></p>
            </div>
            <div class="card-footer">
            <a href="wines.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Buy</a>
            </div>
          
            
      </div>
      </div>
 
      

<?php



endwhile;
echo '</div>';
echo '</div>';
require_once 'footer.php';


?>

