<?php
$res=mostrarTodos($link);
 ?>
 <h3>PERSONAS</h3><a href="index.php?mod=new" class="btn btn-success">Nuevo</a>
     <?php
     while ($data=mysqli_fetch_array($res))
     {
       include 'card.vw.php';
       
     }
      ?>

    

