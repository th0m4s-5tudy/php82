<?php
declare(strict_types=1);
$prenom = 'Thomas';
$langage_pref = ['C++', 'Java', 'Assembleur'];
?>

<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8"><title>Index</title></head>
<body>
    <h1>
        <?php
        echo "Rousset $prenom";
        ?>
    </h1>
    <p>Date du jour :
        <?php
        echo date('d/m/Y');
        ?>
    </p>
    <p> Languages de programmation préférés :</p>
    <ul>
        <?php
        foreach ($langage_pref as $index => $langage_pref) {
            echo "<li>$langage_pref <br>";
        }
        ?>
    </ul>
</body>
</html>