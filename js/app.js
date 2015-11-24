$(document).ready(function(){
   
    $('#updateModal').on('show.bs.modal', function (event) {
      var modalInput = $(event.relatedTarget); // Button that triggered the modal
      var id = modalInput.data('id'); 
      var dateouvr = modalInput.data('dateouvr');
      var noteenvoi = modalInput.data('noteenvoi');
      var patient = modalInput.data('patient');
      var ouvrage = modalInput.data('ouvrage');
      var qui = modalInput.data('qui');
      var asd = modalInput.data('asd');
      var tvac = modalInput.data('tvac');
      var modal = $(this);
      //modal.find('.modal-title').text('Commande ' + recipient)
      modal.find('.modal-body input[name="updId"]').val(id);
      modal.find('.modal-body input[name="updDateOuvr"]').val(dateouvr);
      modal.find('.modal-body input[name="updNoteEnvoi"]').val(noteenvoi);
      modal.find('.modal-body input[name="updPatient"]').val(patient);
      modal.find('.modal-body input[name="updOuvrage"]').val(ouvrage);
      modal.find('.modal-body input[name="updQui"]').val(qui);
      modal.find('.modal-body input[name="updAsd"]').val(asd);
      modal.find('.modal-body input[name="updTvac"]').val(tvac);
    });
     
    $('#btnUpdCat').click( function () {
        var id = $('#updId').val();
        var dateouvr = $('#updDateOuvr').val();
        var noteenvoi = $('#updNoteEnvoi').val();
        var patient = $('#updPatient').val();
        var ouvrage = $('#updOuvrage').val();
        var qui = $('#updQui').val();
        var asd = $('#updAsd').val();
        var tvac = $('#updTvac').val();

        $.ajax({
            url:'inc/doUpdate.php',
            data:{updId:id,updDateOuvr:dateouvr,updNoteEnvoi:noteenvoi,updPatient:patient,updOuvrage:ouvrage,updQui:qui,updAsd:asd,updTvac:tvac},
            method:"POST",
            success: function(data) {
                    $('#updateModal').modal('toggle')
                    location.href="index.php";
             }
        });
        
    });


    $('#btnDoInsert').click( function () {
        var id = $('#insId').val();
        var dateouvr = $('#insDateOuvr').val();
        var noteenvoi = $('#insNoteEnvoi').val();
        var patient = $('#insPatient').val();
        var ouvrage = $('#insOuvrage').val();
        var qui = $('#insQui').val();
        var asd = $('#insAsd').val();
        var tvac = $('#insTvac').val();

        $.ajax({
            url:'inc/doInsert.php',
            data:{insId:id,insDateOuvr:dateouvr,insNoteEnvoi:noteenvoi,insPatient:patient,insOuvrage:ouvrage,insQui:qui,insAsd:asd,insTvac:tvac},
            type:"POST",
            success: function(data) {
                    $('#insertModal').modal('toggle')
                    location.href="index.php";
             }
        });
        
    });

    
});
