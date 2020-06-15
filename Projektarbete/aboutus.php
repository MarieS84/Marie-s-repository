

<?php


require_once 'header.php';

require_once 'db.php';


?>

<h3 class="m-4">From idea to execution</h3>
 
  <img class="float-left ml-4 mr-4" src="Carousel\Marie_smaller.jpg" height="230" width="172">
  <br>
  
  <p>
  In Vino Veritas Import was founded by Marie Svensson in 2020. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, consectetur totam dignissimos suscipit veritatis tenetur quam itaque.  Ea praesentium ex aspernatur nesciunt deleniti qui nostrum velit! Quos eum iste numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut maiores deleniti excepturi beatae earum odit dolor, reiciendis natus voluptatum fugit sit velit iusto nulla distinctio doloribus sequi magni consectetur soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci facilis, provident esse quia laudantium sed ad illum, illo a quod quas accusantium consequatur, ipsa repudiandae voluptates? Ea, culpa obcaecati? Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fuga voluptatem, dolorem laboriosam unde exercitationem corrupti distinctio ipsam natus delectus commodi sapiente, molestiae recusandae totam esse suscipit adipisci! Facere, quisquam. <br>
  We would be delighted to get your feeback so don't hesitate to contact us through our contact form below.
<br>
Best Regards
</p>
<br>




<h5 class="m-4">// Marie Svensson, CEO In Vino Veritas Import &#127815;</h5>

  </p>

<form action="mail.php" method="post" class="ml-2">
 <div class="col-md-4">
   <input name="name" type="text" required
           class="form-control mt-2" placeholder="Name">
 </div> 
 <div class="col-md-4">
   <input name="email" type="email" required
        class="form-control mt-2" placeholder="Email">
 </div> 
 
 <div class="col-md-4">
  <textarea name="message" cols="30" rows="5"
   class="form-control mt-2" placeholder="Write your message to us" required></textarea>
 </div>
 <div class="col-md-2">
  <input type="submit" value="Send message"
         class="btn btn-success form-control mt-2">
 </div>
</form>


<form action=# method="post">

<?php

require_once 'footer.php';