<?php
$materia = $_POST["materia"];
$periodo = $_POST["periodo"];
if(isset($materia))
{
    // iniciando a conexão com o banco de dados
    $conexaocomobancodedados = new PDO("pgsql:host=localhost, dbname=materiastsi","postgres","p21s11b96");

    // preparando a query para inserir no bando de dados
    $cadastrar = $conexaocomobancodedados->prepare("INSERT INTO materias (materia, periodo) VALUES (:materia, :periodo)");

    // colocando os dados de maneira segura dentro do banco de dados
    $cadastrar->bindParam(':materia', $materia);
    $cadastrar->bindParam(':periodo', $periodo);

    // executando o comando
    // obs: Sem esse ultimo comando não será feito nada no banco de dados
    $cadastrar->execute();
    if($cadastrar->rowCount())
    {
        echo "cadastrado com sucesso";
        header("Location: ./cadastro.php");
    }
}
?>