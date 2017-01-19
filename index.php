<?php include 'header_default.php';
      session_start();
?>

<head>
  <style>
    #blocTopLeft{
      margin-top: 20px;
      margin-left: 100px;
      width:auto;
      height:118px;
      content:url(Projet1_GL/assets/image/VMM_logo.png);
    }
    #blocTopRight{
      float:left;
      width:auto;
    }
    #blocGeneral{
      height:100%;
      width:100%;
      margin:auto;
      border-bottom:1px solid #ccc;
      border-left:1px solid #ccc;
      border-right:1px solid #ccc;
      padding:20px;
    }
    #blocLeft{
      float:left;
      width:50%;
      height:100%;
      padding:20px;
    }
    #blocRight{
      float:right;
      width:50%;
      height:100%;
      padding:20px;
      border-left:1px solid #CCC;
    }
    #passwordLeft{
      text-align:left;
      width:50%;
    }
    #passwordRight{
      text-align:right;
      width:50%;
    }

</style>
</head>
<body>
  <div class="container-fluid">
      <div class="image" id="blocTopLeft"></div>
      <h1 class="text-center">Virtual Machine Master</h1>
      <p class="text-center">Windows, Mac OS, Ubuntu, on a tout</p>
      </div>
  </div>

  <hr>
  <div class="container-fluid" id="blocGeneral">
    <div class="container-fluid center" id="bloccenter">
      <div class="dialog">
        <div class="content">
          <form name="form_connexion" id="form_connexion" method="post" action="authentification.php">
          <div class="header">
            <h4 class="title">Connexion</h4>
          </div>
          <div class="body">
            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">Adresse mail</label>
              <input class="form-control" name="inputUser" placeholder="Adresse mail" type="email">
              <i class="glyphicon glyphicon-user form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input class="form-control" name="inputPassword" placeholder="Mot de passe" type="password">
              <i class="glyphicon glyphicon-lock form-control-feedback"></i>
            </div>
          </div>
          <div class="footer" align="right">
            <p width="50%" style="font-size:small"><a href="forgot_passwd.php">Mot de passe oublié ?</a></p>
            <button type="sumbit" class="btn btn-primary">Me connecter</a>
          </div>
         </form>
        </div>
      </div>
      <hr>
    </div><!--/container-fluid blocLeft-->

  </div>
  <div class="modal fade" id="modalCompte">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Infos du compte</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
          <div class="modal-footer">
            <a href="#" data-dismiss="modal" class="btn">Annuler</a>
            <a href="#" class="btn btn-primary">Valider</a>
          </div>
        </div>
      </div>
    </div>
  </div>




</body>
<?php include 'footer.php'; ?>
