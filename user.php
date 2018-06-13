<?php

include 'connexion.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="style.css"/>

<?php

class User
{
    private $id;
    private $idClient;
    private $idChambre;
    private $dateEntree;
    private $dateSortie;
    private $statut;

    public function __construct($id, $idClient, $idChambre, $dateEntree, $dateSortie, $statut)
    {
        $this->id = $id;
        $this->idClient = $idClient;
        $this->idChambre = $idChambre;
        $this->dateEntree = $dateEntree;
        $this->dateSortie = $dateSortie;
        $this->statut = $statut;
    }

    public function ajoutBdd()
    {
        try {
            $stmt = Connexion :: prepare('INSERT INTO `reservations`(id, clientId, `chambreId`, `dateEntree`, `dateSortie`, `statut`)  (:id, :clientId, :chambreId, :dateEntree, :dateSortie, :statut)');
            $stmt->execute([':id' => $this->id, ':clientId' => $this->clientId, ':chambreId' => $this->chambreId, ':dateEntree' => $this->dateEntree, ':dateSortie' => $this->dateSortie, ':staut' => $this->staut]);
            echo 'Ajout de données';
        } catch (PDOException $e) {
            // echo 'Error!: '.$e->getMessage().'<br />';
            echo '<b>Erreur</b>';
            header('Refresh: 2; url=../index.php');
            die();
        }
    }

    public static function affiche()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=ritzCahors;charset=utf8', 'root', 'simplonco');
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $req = $bdd->query('SELECT *, clients.id AS idCli,reservations.id AS idResa, chambres.id AS idCham, clients.nom AS nomclient, chambres.nom AS nomroom, reservations.statut AS statutresa FROM reservations, clients, chambres WHERE reservations.clientId = clients.id AND reservations.chambreId = chambres.id');
        while ($donnee = $req->fetch()) {
            echo '<tr class="col">';
            echo '<td class="col">'.$donnee['idResa'];
            echo '<td class="col">'.$donnee['nomclient'].' '.$donnee['prenom'].'</td>';
            echo '<td class="col">N° '.$donnee['numero'].'</td>';
            echo '<td class="col">'.$donnee['dateEntree'].' / '.$donnee['dateSortie'].'</td>';
            echo '<td class="col">'.$donnee['statutresa'].'</td>';
            echo'<td class="col"><a href="modif.php/?id='.$donnee['idResa'].'" ><button>Editer</button></a><button>Supprimer</button></td>';
            echo '</tr>';
        }
    }

    public static function recupUserId($userId)
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=ritzCahors;charset=utf8', 'root', 'simplonco');
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $stmt = Connexion :: prepare('SELECT * FROM reservations WHERE id=:id');
        $stmt->execute([':id' => $userId]);

        while ($donnee = $stmt->fetch()) {
            echo "<form class='modifId' method='POST'>";
            echo '<h2>Modification</h2>';
            echo '<input type="text" id="test" value="'.$donnee['statut'].'" name="statut">';
            echo '<button value="'.$donnee['idResa'].'"type="submit" name="submit">Modifier</button>';
            echo '</form><br />';
        }
    }

    public function update()
    {
        $stmt = Connexion :: prepare('UPDATE `reservations` SET prenom=:prenom, nom=:nom, statut=:statut, dateEntree=:dateEntree WHERE id=:id');
        $stmt->execute([':prenom' => $this->prenom, ':nom' => $this->nom, ':statut' => $this->year, ':dateEntree' => $this->dateEntree, ':dateSortie' => $this->dateSortie, ':id' => $this->id]);
    }
}
