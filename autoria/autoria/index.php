<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Autoria</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col gap-28 w-fit mx-auto mt-16 h-[50%]">
        <h1 class="text-center text-4xl font-semibold">
            Menu - Tabela Autoria
        </h1>

        <nav>
        <ul class="
            flex gap-2 px-5 py-3 border border-gray-400 rounded-lg
            *:w-28 *:h-fit *:text-center *:transition-transform
            hover:*:-translate-y-[0.125rem]
            *:*:block *:*:w-full *:*:p-2 *:*:rounded *:*:border *:*:border-transparent *:*:transition-shadows *:*:transition-colors
            hover:*:*:border-gray-300 hover:*:*:shadow-md 
            ">
            <li>
                <a href="#">
                    Principal
                </a>
            </li>
            <li>
                <a href="cadastro.php">
                    Cadastrar
                </a>
            </li>
            <li>
                <a href="#">
                    Excluir
                </a>
            </li>
            <li>
                <a href="#">
                    Pesquisar
                </a>
            </li>
            <li>
                <a href="listar.php">
                    Listar
                </a>
            </li>
            <li>
                <a href="#">
                    Alterar
                </a>
            </li>
        </ul>
        </nav>

        <a href=".." class="block w-fit mx-auto px-4 py-2 rounded border border-gray-300 transition-all hover:shadow-md hover:-translate-y-0.5">
            Voltar
        </a>
    </div>
</body>
</html>
