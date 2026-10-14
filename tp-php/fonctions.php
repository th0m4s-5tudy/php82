<?php
declare(strict_types=1);
$name = '';

function moyenne(array $notes) : float
{
    if ($notes === []) {
        return 0.0;
    }
    else {
        return array_sum($notes) / count($notes);
    }
}

function estAdmis(float $note, float $seuil = 10.0): bool 
{
    if ($note >= $seuil) {
        return True;
    }
    return False;
}

function meilleurEtudiant(array $notes): ?string {
    if ($notes === []) {
        return null;
    }
    else {
        $max = 0;
        foreach ($notes as $nom => $note) {
            if ($note > $max) {
                $name = $nom;
                $max = $note;
            }
        }
        return $name;
    }
}
?>

