<?php
$id = $_GET["id"];
if(isset($id))
{
    $conexaocomobancodedados = new PDO("pgsql:host=localhost, dbname=materiastsi","postgres","p21s11b96");
    $excluir = $conexaocomobancodedados->prepare("DELETE FROM materias WHERE id=:id");
    $excluir->bindParam(":id",$id);
    if($excluir->execute())
    {
        header("Location: ./");
    }
}

?>