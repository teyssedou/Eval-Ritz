<?php

include 'user.php'; ?>

<h1>Ajouter une nouvelle réservation</h1>
 <form class='modifId' method='POST'>
    
<!-- Ajout / Modif Client -->
    <h5>Client</h5>
    <select name="client" id="">

<?php
  try {
      $bdd = new PDO('mysql:host=localhost;dbname=ritzCahors;charset=utf8', 'root', 'simplonco');
  } catch (Exception $e) {
      die('Erreur : '.$e->getMessage());
  }
        $stmt = $bdd->query('SELECT *, clients.id AS idCli,reservations.id AS idResa, chambres.id AS idCham, clients.nom AS nomclient, chambres.nom AS nomroom, reservations.statut AS statutresa FROM reservations, clients, chambres WHERE reservations.clientId = clients.id AND reservations.chambreId = chambres.id');

        while ($donnee = $stmt->fetch()) {
            echo '<option value="'.$donnee['idCli'].'" name="'.$donnee['idCli'].'">'.$donnee['nomclient'].' '.$donnee['prenom'];
            echo '</option>';
        }
?>

</select>

<!-- Ajout / Modif Chambre -->
    <h5>Chambre</h5>
      <select name="chambre" id="">

<?php
  try {
      $bdd = new PDO('mysql:host=localhost;dbname=ritzCahors;charset=utf8', 'root', 'simplonco');
  } catch (Exception $e) {
      die('Erreur : '.$e->getMessage());
  }
        $stmt = $bdd->query('SELECT *, clients.id AS idCli,reservations.id AS idResa, chambres.id AS idCham, clients.nom AS nomclient, chambres.nom AS nomroom, reservations.statut AS statutresa FROM reservations, clients, chambres WHERE reservations.clientId = clients.id AND reservations.chambreId = chambres.id');

        while ($donnee = $stmt->fetch()) {
            echo '<option value="'.$donnee['idCham'].'" name="'.$donnee['idCham'].'">'.$donnee['numero'].' : '.$donnee['nomroom'];
            echo '</option>';
        }
?>

</select>
 <div class="form-group row">
    <div class="col-sm-10">
      <a href="/index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Retour</a>
    </div>
  </div>
<?php
// if (isset($_GET['idResa'])) {
//     $id = $_GET['idResa'];
//     echo User::recupUserId($id);

//     if (isset($_POST['submit'])) {
//         $firstName = $_POST['firstName'];
//         $nom = $_POST['nom'];
//         $year = $_POST['year'];
//         $comment = $_POST['comment'];

//         $perso = new User($id, $firstName, $nom, $year, $comment);
//         $perso->update();

//         header('Refresh: 1; url=../index.php');
//     }
// } else {
//     echo 'Erreur dans la direction';
//     header('Refresh: 1; url=../index.php');
// }
?>