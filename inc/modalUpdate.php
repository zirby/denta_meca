<!-- Modal Update-->

<div class="modal fade bs-update-modal-sm" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="envoyeModalLabel">Modifier l'Ouvrage</h4>
      </div>
     <form action="inc/doUpdate.php" method="POST">
         <div class="modal-body ">
            <div class="form-group">
                <label for="updId" class="control-label">Id:</label>
                <input name="updId" id="updId" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="updDateOuvr" class="control-label">Date ouvrage:</label>
                <input name="updDateOuvr" id="updDateOuvr" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="updNoteEnvoi" class="control-label">Note d'envoi:</label>
                <input name="updNoteEnvoi" id="updNoteEnvoi" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="updPatient" class="control-label">Patient:</label>
                <input name="updPatient" id="updPatient" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="updOuvrage" class="control-label">Ouvrage:</label>
                <input name="updOuvrage" id="updOuvrage" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="updAsd" class="control-label">N° ASD:</label>
                <input name="updAsd" id="updAsd" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="updTvac" class="control-label">Prix TVAC:</label>
                <input name="updTvac" id="updTvac" type="text" class="form-control" >
            </div>            
        </div>
        <div class="modal-footer">
            <button name="btnDoUpdate" id="btnDoUpdate" type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
     </form>
    </div>
  </div>
</div>
