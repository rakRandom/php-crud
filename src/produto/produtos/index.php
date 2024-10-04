<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Produtos</title>
    <link rel="stylesheet" href="../../assets/css/output.css">
</head>
<body>
    <div class="flex flex-col gap-28 w-fit mx-auto mt-16 h-[50%]">
        <h1 class="regular-title">
            Menu - Tabela Produtos
        </h1>

        <nav>
        <ul class="flex gap-2 px-5 py-3 border border-gray-400 rounded-lg *:w-28 *:h-fit *:transform-button">
            <li>
                <a href="#">
                    Principal
                </a>
            </li>
            <li>
                <a href="operacao/cadastrar.php">
                    Cadastrar
                </a>
            </li>
            <li>
                <a href="operacao/excluir.php">
                    Excluir
                </a>
            </li>
            <li>
                <a href="operacao/pesquisar.php">
                    Pesquisar
                </a>
            </li>
            <li>
                <a href="operacao/listar.php">
                    Listar
                </a>
            </li>
            <li>
                <a href="operacao/alterar.php">
                    Alterar
                </a>
            </li>
        </ul>
        </nav>

        <?php include("../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>
