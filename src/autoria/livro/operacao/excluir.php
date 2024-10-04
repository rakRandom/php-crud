<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Livro - Excluir </title>
    <link rel="stylesheet" href="../../../assets/css/output.css">
</head>
<body>
    <?php include("../../../componentes/BarraMenuInterna.php") ?>

    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Excluir Livro
        </h1>

        <div>
            <form name="exform" action="" method="post" class="flex flex-col gap-2 px-6 py-3 border border-gray-400 rounded-lg">
                <h2 class="font-medium text-lg text-center">
                    Informe o Código do Livro desejado
                </h2>
                <hr>
                <div class="flex items-center max-w-[200px] mx-auto my-4 text-lg">
                    <label for="cod_livro"></label>
                    <input 
                        required autocomplete="off"
                        type="number" 
                        name="cod_livro" 
                        id="cod_livro" 
                        min="0" max="4294967295"
                        placeholder="Código"
                        class="flex-1 regular-input">
                </div>
                
                <!-- Botões -->
                <div class="relative">
                    <button name="btnenviar" type="submit" class="block w-fit mx-auto px-4 py-2 rounded border border-gray-300 transition-all hover:shadow-md hover:-translate-y-0.5">
                        Excluir
                    </button>
                    <button name="limpar" type="reset" class="absolute right-2 h-full -translate-y-[100%] hover:underline">
                        Limpar
                    </button>
                </div>
            </form>

            <p class="text-center text-lg mt-6">
                <h2 class="font-medium">
                    Resultado: 
                </h2>
                <?php
                extract ($_POST, EXTR_OVERWRITE); 
                if (isset($btnenviar))
                {
                    include_once '../Livro.php';
                    $p = new Livro();
                    $p->setCodLivro($cod_livro);
                    echo $p->exclusao();
                }
                ?> &nbsp;
            </p>
        </div>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>