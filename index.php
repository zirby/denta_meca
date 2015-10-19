<?php 
    require_once 'inc/conn.php';
    $req = $pdo->prepare("SELECT * FROM cd16_reservations ");
    $req->execute();
?>
<?php require 'inc/header.php'; ?>
<h1>Réservations</h1>
<div class="col-md-12">
    <table class="table table-striped table-hover ">
        <thead>
            <th>N° reservation</th>
            <th>Zone</th>
            <th>Bloc</th>
            <th>Nb.Places</th>
            <th style="text-align: right;">Montant</th>
            <th style="text-align: right;">Réservé le</th>
            <th style="text-align: right;">Payé le</th>
            <th style="text-align: right;">Envoyé le</th>
            <th style="text-align: right;">Action</th>
        </thead>
        <tbody>
            <?php while($res = $req->fetch()): ?>
            <tr>
                <td style="text-align: left;"><?= $res->id; ?></td>
                <td style="text-align: left;"><?= $res->zone; ?></td>
                <td style="text-align: left;"><?= $res->bloc; ?></td>
                <td style="text-align: left;"><?= $res->nbplaces; ?></td>
                <td style="text-align: right;"><?= $res->montant; ?> €</td>
                <td style="text-align: right;"><?= $res->reserve_le; ?></td>
                <td style="text-align: right;"><?= $res->paye_le; ?></td>
                <td style="text-align: right;"><?= $res->envoye_le; ?></td>
                <td style="text-align: right;">
                    <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm" data-id="<?= $res->id; ?>">A</a>
                    <a href="#" class="btn btn-primary btn-xs">B</a>
                    <a href="#" class="btn btn-success btn-xs">C</a>
                    <a href="#" class="btn btn-info btn-xs">A</a>
                    <a href="#" class="btn btn-warning btn-xs">B</a>
                    <a href="#" class="btn btn-danger btn-xs">C</a>
                </td>
             </tr>
             <?php endwhile; ?>
        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Réservation</h4>
      </div>
     <form action="" method="POST">
         <div class="modal-body ">
            <div class="form-group">
                <label for="recipient-name" class="control-label">Réservation n°:</label>
                <input name="Nreserve" id="Nreserve" type="text" class="form-control" id="recipient-name">
                </div>
             <strong> Payé le:</strong>
          <div class="form-group">
              <div id="dtPaye"></div>
          </div>
        </div>
        <div class="modal-footer">
             <button name="btnPayeLeReset" id="btnPayeLe" type="button" class="btn btn-primary">Reset</button>
        </div>
     </form>
    </div>
  </div>
</div>
<?php require 'inc/footer.php';