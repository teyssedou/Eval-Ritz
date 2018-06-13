<?php
include 'user.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <title>Test1</title>
  </head>

<body>
    <img src="Hotel.jpg" alt="logo Hotel">
<section class="head">

    <h1>Gestion des Réservations</h1>
    </section>

    <section class="choix">
    <a href="ajout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Créer</a>

<div class="input-group mb-3 filtre">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Filtre</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
   <option hidden selected>Filtre</option>
        <option value="valide" id="valide">Valider</option>
        <option value="refus" id="refus">Refuser</option>
        <option value="attente" id="attente">En Attente</option>
  </select>
</div>
</section>

  <table class="tableau">
<tr>
<th class="col">Id</th>
<th class="col">Client</th>
<th class="col">Chambre</th>
<th class="col">Dates</th>
<th class="col">Statut</th>
<th class="col">Actions</th>
</tr>

<?php
echo User::affiche();
?>
</table>

