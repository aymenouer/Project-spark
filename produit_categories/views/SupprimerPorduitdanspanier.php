<?php

include "../core/panierC.php";
if (isset($_GET['id']))
{
$PanierC = new PanierC();
$PanierC->supprimerpanier($_GET['id']);
header("Location: ajouterPorduitdanspanier.php");
}
?>