<div class="card">
  <div class="card-header">
    Ciudades
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col">
      <p class="card-text">Id: <?php echo $data['id']; ?> </p>
      <p class="card-text">Ciudad: <?php if ($data['ciudad']){ echo $data['ciudad'];} ?> </p>
    </div>
    <div class="col">
      <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-warning">Editar</a>
      <a href="<?php echo "index.php?mod=delete&id=".$data["id"]; ?>" class="btn btn-danger">Borrar</a>
    </div>
    </div>
  </div>
</div>