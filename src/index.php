<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>
    <div class="flex flex-col gap-28 w-fit mx-auto mt-16 h-[50%]">
        <h1 class="regular-title">
            Menu - Banco de Dados
        </h1>

        

        <nav>
        <p class="text-lg text-center mb-4">
            Selecione um Banco de Dados para acessar
        </p>
        <ul class="
            flex gap-2 px-5 py-3 border border-gray-400 rounded-lg
            *:flex-1 *:h-fit *:text-center *:transition-transform
            hover:*:-translate-y-[0.125rem]
            *:*:block *:*:w-full *:*:p-2 *:*:rounded *:*:border *:*:border-transparent *:*:transition-shadows *:*:transition-colors
            hover:*:*:border-gray-300 hover:*:*:shadow-md 
            ">
            <li>
                <a href="./autoria">
                    Autoria
                </a>
            </li>
            <li>
                <a href="./produto">
                    Produto
                </a>
            </li>
        </ul>
        </nav>
    </div>
</body>
</html>
