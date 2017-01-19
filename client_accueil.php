<?php include 'header_default.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="center-block text-center">
          <h1>Bienvenue sur la page de gestion des Machines Virtuelles.</h1>
          <p class="lead">Vous pouvez ajouter des machines virtuelles</p>
      </div>
    </div>
  </div><!--/row-->
    <hr>
<form name="ajout_vm" id="ajout_vm" action="desauthentification.php" method="post">

  <!--Machine-->
  <div class="form-group">
    <label for="Version">Machines</label>
     <select class="form-control" name="TRANSACTION[TYPE][<?php echo $i;?>]">
      <option value ="Virement">Machine1</option>
      <option value ="Prelevement">Machine2</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Version">Statut</label>
    <input class="form-control" name ="Version" id="Version" type="text" placeholder="" disabled="">
  </div>
  <div class="form-group">
    <label for="poids">Adresse Ip</label>
    <input class="form-control" name ="Poids" id="Poids" type="text" placeholder="" disabled="">
  </div>
  <div class="form-group">
    <label for="Prix">CPU % </label>
    <input class="form-control" name ="Prix" id="Prix" type="text" placeholder="" disabled="">
  </div>
  <div class="form-group">
    <label for="Nom"> MEM % </label>
    <input class="form-control" name ="Nom" id="Nom" type="text" placeholder="" disabled="">
  </div>
  <div class="footer" align ="right">
     <input type="submit" class="btn btn-primary" value="Déconnexion" ></input>
  </div>
</form>
</div><!--/container-->
<?php include 'footer.php'; ?>
