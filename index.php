<?php 
    require_once 'inc/conn.php';
    $req = $pdo->prepare("SELECT  * FROM ouvrages ");
    $req->execute();


?>
<?php require 'inc/header.php'; ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Relevés mécanicien</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><button id="btnModalInsert" type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target=".bs-insert-modal-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un ouvrage</button></li>
        <li></li>

      </ul>
        <form action="" method="POST" class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <select class="selectpickert">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
            </select>
        </div>
            <button name="btnSearchNom" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
      </form>
      <form action="" method="POST" class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input name="searchReserv" type="text" class="form-control" placeholder="Search">
        </div>
          <button name="btnSearchReserv" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></button>
      </form>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-md-12">
    <table class="table table-striped table-hover ">
        <thead>
            <th>ID</th>
            <th>Date</th>
            <th>Note envoi</th>
            <th>Patient</th>
            <th>Ouvrage</th>
            <th>Qui?</th>
            <th style="text-align: right;">ASD</th>
            <th style="text-align: right;">Prix TVAc</th>
            <th style="text-align: right;">Action</th>
        </thead>
        <tbody>
            <?php while($ouvr = $req->fetch()): ?>
            <tr>
                <td style="text-align: left;"><?= $ouvr->id; ?></td>
                <td style="text-align: left;"><?= $ouvr->date_ouvr; ?></td>
                <td style="text-align: left;"><?= $ouvr->note_envoi; ?></td>
                <td style="text-align: left;"><?= $ouvr->patient; ?></td>
                <td style="text-align: left;"><?= $ouvr->ouvrage; ?></td>
                <td style="text-align: right;"><?= $ouvr->qui; ?></td>
                <td style="text-align: right;"><?= $ouvr->asd; ?></td>
                <td style="text-align: right;"><?= $ouvr->tvac; ?> €</td>
                <td style="text-align: right;">
                    <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-update-modal-sm"
                            data-id="<?= $ouvr->id; ?>"
                            data-dateouvr="<?= $ouvr->date_ouvr; ?>"
                            data-noteenvoi="<?= $ouvr->note_envoi; ?>"
                            data-patient="<?= $ouvr->patient; ?>"
                            data-ouvrage="<?= $ouvr->ouvrage; ?>"
                            data-qui="<?= $ouvr->qui; ?>"
                            data-asd="<?= $ouvr->asd; ?>"
                            data-tvac="<?= $ouvr->tvac; ?>"                       
                            title="Modifier l' ouvrage"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="inc/doDelete.php?id=<?= $ouvr->id; ?>" class="btn btn-danger btn-xs" title="Supprimer"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                </td>
             </tr>
             <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php require 'inc/modalUpdate.php';?>
<?php require 'inc/modalInsert.php';?>

<?php require 'inc/footer.php';