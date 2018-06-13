<?php

include 'user.php';
?>
<form class="ajout">
    <h2>Nouvelle Réservation</h2>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Id Client:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" name="idClient" placeholder="Id Client">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Id Chambre:
    </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" name="idChambre" placeholder="Id Chambre">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Date Entree:</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="inputPassword3" name="dateEntree">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Date Sortie:</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="inputPassword3" name="dateSortie">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Statut:</label>
    <div class="col-sm-9">
        <select class="custom-select" id="inputGroupSelect01">
          <option name="statut"value="attente">Attente</option>
          <option name="statut"value="valide">Valide</option>
          <option name="statut"value="refus">Refus</option>
        </select>    
    </div>
  </div>

   <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" value="ok" name="submit">Ajouter</button>
    </div>
  </div>
</form>
</body>
</html>

<?php

if (isset($_GET['submit'])) {
    $client = $_GET['idClient'];
    $chambre = $_GET['idChambre'];
    $dateEntree = $_GET['dateEntree'];
    $dateSortie = $_GET['dateSortie'];
    $statut = $_GET['statut'];

    $perso = new User($id, $idClient, $idChambre, $dateEntree, $dateSortie, $statut);
    $perso->ajoutBdd();
}
