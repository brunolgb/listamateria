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
    <a href="./" class="cadastrar">Voltar</a>
    <div class="cadastro">
        <span>Cadastro</span>
        <form method="post" action="verificar.php">
            <input type="text" name='materia' placeholder="Nome da máteria">
            <select name="periodo" id="periodo">
                <!-- adicionando os options dinamicamente -->
                <?php
                for($i = 1; $i <= 6; $i++)
                {
                    $selected = null;
                    if($i === 5)
                    {
                        $selected = "selected";
                    }
                    echo "<option value='$i' $selected>" . $i . "º Semestre</option>";
                    // tenho duas opções de colocar uma variavel em uma string
                    // colocando direto, ou concatenando
                }
                ?>
            </select>
            <input type="submit" name="salvar" value="Salvar">
        </form>
    </div>
</body>
</html>