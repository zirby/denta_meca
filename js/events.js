/**
 * @author Christian ZIRBES
 */
function date2sql(laDate){
    var an = laDate.getFullYear().toString();
    var mois = (laDate.getMonth()+1).toString();
     if(mois.length == 1){mois = "0"+mois};
    var jour = laDate.getDate().toString();
    if(jour.length == 1){jour = "0"+jour};
    
    return an + "-" + mois + "-" +jour;
}



$(document).ready(function(){
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var recipient = button.data('id'); // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      //modal.find('.modal-title').text('Commande ' + recipient)
      modal.find('.modal-body input').val(recipient);
    });
    $('#envoyeModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var recipient = button.data('id'); // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      //modal.find('.modal-title').text('Commande ' + recipient)
      modal.find('.modal-body input').val(recipient);
    });

    $('#dtPaye').datepicker()
        .on('changeDate', function(e) {
            var dtPayele = date2sql(e.date);
            var reserv = $('#Nreserve').val();
            $.ajax({
                url:'inc/doPayeLe.php?reserv='+reserv+'&payele='+dtPayele,
                success: function(data) {
                        $('#exampleModal').modal('toggle')
                        location.href="index.php";
                 }
            });
    });
    $('#btnPayeLeReset').click( function () {
            var reserv = $('#Nreserve').val();
            $.ajax({
                url:'inc/doPayeLe.php?reserv='+reserv+'&payele=NULL',
                success: function(data) {
                        $('#exampleModal').modal('toggle')
                        location.href="index.php";
                 }
            });
        
    });
    $('#dtEnvoye').datepicker()
        .on('changeDate', function(e) {
            var dtEnvoyele = date2sql(e.date);
            var reserv = $('#NEreserve').val();
            $.ajax({
                url:'inc/doEnvoyeLe.php?reserv='+reserv+'&envoyele='+dtEnvoyele,
                success: function(data) {
                        $('#envoyeModal').modal('toggle')
                        //location.href="index.php";
                 }
            });
    });
    $('#btnEnvoyeLeReset').click( function () {
            var reserv = $('#NEreserve').val();
            $.ajax({
                url:'inc/doEnvoyeLe.php?reserv='+reserv+'&payele=NULL',
                success: function(data) {
                        $('#envoyeModal').modal('toggle')
                        location.href="index.php";
                 }
            });
        
    });
});
