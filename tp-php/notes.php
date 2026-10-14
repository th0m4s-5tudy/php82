<?php
declare(strict_types=1);
require_once __DIR__ . '/fonctions.php';
require_once __DIR__ . '/modele.php';
$notes = [
    'Ada' => 17.5,
    'Alan' => 14.0,
    'Grace' => 9.5,
    'Linus' => 12.0,
    'Margaret' => 6.5,
];
$classe = '';   
$min = $notes['Ada'];
$moy=0;
$notes['Ismaël'] = 20.0;
$tab = [];
foreach($notes as $nom => $note) {
    $tab[] = new Etudiant(nom : $nom, note : $note);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Notes</title>
    <link rel="stylesheet" href="notes.css">
</head>
    
<body>
    <table>
        <?php
            foreach ($tab as $valeur) {
                $mentionT =  $valeur->mention()->value;
                $classe = '';   
                if (!estAdmis($valeur->note)) {
                    $classe = 'echec';
                }
                echo "<tr class = '$classe'>";
                echo "<th>$valeur->nom</th>";
                echo "<td>$valeur->note</td>";
                echo "<td>$mentionT</td>";
            }
            echo "</tr>";
        ?>
    </table>
    <p>Moyenne :</p>
        <?php
            foreach ($notes as $nom => $note) {} 
            echo moyenne($notes);        
        ?>
    <p>Note minimal :</p>
        <?php
            foreach ($notes as $nom => $note) {}
            echo min($notes);      
        ?>
    <p>Note maximal :</p>
        <?php
            foreach ($notes as $nom => $note) {}
            echo max($notes);       
        ?>
    <br>
    <?php
        echo "Meilleur étudiant : ".meilleurEtudiant($notes);       
    ?>
</body>
</html>