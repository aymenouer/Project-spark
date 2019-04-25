<?PHP
include "../core/bib_c.php";
$bibc=new bibc();
if (isset($_POST["id"])){
	$bibc->supprimerbib($_POST["id"]);
	header('Location: afficherbib.php');
}

?>