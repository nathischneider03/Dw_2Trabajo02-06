
<?php
$res=mostrarCiudades($link);
 ?>
 <h3>CIUDADES</h3><a href="index.php?mod=new" class="btn btn-success">Nuevo</a>
     <?php
     while ($data=mysqli_fetch_array($res))
     {
        include 'card2.vw.php';
     }
      ?>