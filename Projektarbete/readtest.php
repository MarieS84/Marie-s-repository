<?php


require_once 'header.php';

require_once 'db.php';

?>

<h3 class="m-4">Our wines</h3>
  <br><br>

  <?php

$stmt = $conn->prepare("SELECT * FROM produkter"); 
$stmt->execute();
$card  = '<div class="card">';


while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
   $card .= '<div>';
   $card .= '<div class="card" "style=width: 18rem">';
   $card .= '<img src="Images/' . $row['Bild'] . '" class="card-image-top">';
   $card .= '<div class="card-body">';
   $card .= '<h5>' . $row['Namn'] . '</h5>';
   $card .= '<h5>' . $row['Pris'] . ' SEK' . '</h5>';
   $card .= '<p>' . $row['Beskrivning'] . '</p>';
   $card .= '<a class="btn btn-primary" href="wines.php?id=' . $row['id'] . '">
    Buy</a>';
    $card .= '</div>';
    
   

   
}

$card .= "</div>"; 
echo $card;



require_once 'footer.php';

?>



