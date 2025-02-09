<?php
$langages = ["HTML", "CSS", "JS"];

echo $langages[1];

$langages[] = "PHP";

echo $langages[0]; /* "HTML" */
echo $langages[1]; /* "CSS" */
echo $langages[2]; /* "JS" */
echo $langages[3]; /* "PHP" */
?>
