<?php

include "../core/panierC.php";
if (isset($_GET['id']))
{
$PanierC = new PanierC();
$PanierC->ajoutpanier($_GET['id']);
header("Location: ajouterPorduitdanspanier.php");
}
?>