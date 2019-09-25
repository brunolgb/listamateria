<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Lista de máterias</title>
</head>
<body>
    <header>
        <div class="cabecalho">
            <h1>Máterias do Curso de TSI</h1>
            <span>Cadastrando, atualizando e deletando</span>
        </div>
    </header>
    <a href="cadastro.php" class="cadastrar">+ Cadastrar</a>
    <div class="lista">
        <h3>Máterias cadastradas</h3>
            <?php
                $conexaocomobancodedados = new PDO("pgsql:host=localhost, dbname=materiastsi","postgres","p21s11b96");

                $mostrar = $conexaocomobancodedados->prepare("SELECT * FROM materias");
                $mostrar->execute();

                $lista = $mostrar->fetchAll(PDO::FETCH_ASSOC);
                if($mostrar->rowCount())
                {
                    echo "<div class='mostrarConteudo'>";
                           echo "<span class='materia'>Nome da Máteria</span>";
                            echo "<span class='periodo'>Periodo</span>";
                        echo "</div>";
                }
                else{
                    echo "Não possui registro";
                }

                foreach($lista as $linha)
                {
                    echo  "<div class='mostrarConteudo'>";
                        echo "<span class='materia'>" . $linha["materia"] . "</span>";
                        echo "<span class='periodo'>" . $linha["periodo"] . "</span>";
                        echo "<a href='excluir.php?id=" . $linha["id"] . "'>Excluir</a>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>