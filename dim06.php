<?php 
    require_once 'inc/conn.php';
    $req = $pdo->prepare("SELECT p.zone, p.bloc, p.id as place, u.firstname, u.lastname 
                            FROM cd16_places_06 p
                            LEFT OUTER JOIN cd16_reservations r ON r.id = p.spectateurs_id 
                            LEFT OUTER JOIN cd16_users u ON r.user_id = u.id
                            ORDER BY place; ");
    $req->execute();
?>
<?php require 'inc/header.php'; ?>
<div class="row">
    <div class="col-md-6">
        <h1>Places du Dimanche 06</h1>
    </div>
</div>
<div class="col-md-12">
    <table class="table table-striped table-hover ">
        <thead>
            <th>Zone</th>
            <th>Bloc</th>
            <th>Place</th>
            <th>Nom</th>
            <th>Prénom</th>
        </thead>
        <tbody>
            <?php while($res = $req->fetch()): ?>
            <tr>
                <td style="text-align: left;"><?= $res->zone; ?></td>
                <td style="text-align: left;"><?= $res->bloc; ?></td>
                <td style="text-align: left;"><?= $res->place; ?></td>
                <td style="text-align: left;color:red;"><?= strtoupper($res->lastname); ?></td>
                <td style="text-align: left;"><?= $res->firstname; ?></td>
             </tr>
             <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php require 'inc/footer.php';