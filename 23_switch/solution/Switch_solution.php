<?php
$jour = "mercredi";

switch ($jour) {
    case "lundi":
        echo "Début de semaine";
        break;
    case "mercredi":
        echo "Milieu de semaine";
        break;
    case "vendredi":
        echo "Fin de semaine";
        break;
    case "samedi":
    case "dimanche":
        echo "Week-end";
        break;
    default:
        echo "Journée normale";
}
?>
