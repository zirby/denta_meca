<!-- Modal Update-->

<div class="modal fade bs-insert-modal-sm" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="envoyeModalLabel">Ajouter un ouvrage</h4>
      </div>
     <form action="inc/doInsert.php" method="POST">
         <div class="modal-body ">
            <div class="form-group">
                <label for="insDateOuvr" class="control-label">Date ouvrage:</label>
                <input name="insDateOuvr" id="insDateOuvr" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="insNoteEnvoi" class="control-label">Note d'envoi:</label>
                <input name="insNoteEnvoi" id="insNoteEnvoi" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="insPatient" class="control-label">Patient:</label>
                <input name="insPatient" id="insPatient" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="insOuvrage" class="control-label">Ouvrage:</label>
                <input name="insOuvrage" id="insOuvrage" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="insAsd" class="control-label">N° ASD:</label>
                <input name="insAsd" id="insAsd" type="text" class="form-control" >
            </div>            
            <div class="form-group">
                <label for="insTvac" class="control-label">Prix TVAC:</label>
                <input name="insTvac" id="insTvac" type="text" class="form-control" >
            </div>            
        </div>
        <div class="modal-footer">
            <button name="btnDoInsert" id="btnDoInsert" type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
     </form>
    </div>
  </div>
</div>
