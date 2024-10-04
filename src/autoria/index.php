<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Autoria</title>
    <link rel="stylesheet" href="../assets/css/output.css">
</head>
<body>
    <div class="flex flex-col gap-28 w-fit mx-auto mt-16 h-[50%]">
        <h1 class="regular-title">
            Menu - Banco de Dados Autoria
        </h1>
        
        <nav>
            <h2 class="text-center text-xl mb-4">
                Selecione uma tabela
            </h2>
            <ul class="flex gap-2 px-5 py-3 w-fit mx-auto border border-gray-400 rounded-lg *:w-28 *:h-fit *:transform-button">
                <li>
                    <a href="autor">
                        Autor
                    </a>
                </li>
                <li>
                    <a href="autoria">
                        Autoria
                    </a>
                </li>
                <li>
                    <a href="livro">
                        Livro
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="absolute top-8 left-8">
        <?php include("../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>
