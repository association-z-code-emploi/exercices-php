<?php
$revenu = 2000;

if ($revenu > 3000) {
    echo "Salaire élevé";
} else {
    if ($revenu > 1500) {
        echo "Salaire moyen";
    } else {
        echo "Salaire faible";
    }
}
?>
