<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Produto - Excluir </title>
    <link rel="stylesheet" href="../../../output.css">
</head>
<body>
    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Excluir Produto
        </h1>

        <div>
            <form name="exform" action="" method="post" class="flex flex-col gap-2 px-6 py-3 border border-gray-400 rounded-lg">
                <h2 class="font-medium text-lg text-center">
                    Informe o ID do Produto desejado
                </h2>
                <hr>
                <div class="flex items-center max-w-[200px] mx-auto my-4 text-lg">
                    <label for="id_prod"></label>
                    <input 
                        required autocomplete="off"
                        type="number" 
                        name="id_prod" 
                        id="id_prod" 
                        min="0" max="4294967295"
                        placeholder="ID"
                        class="flex-1 py-1 px-2 border-2 rounded-md outline-none focus:border-orange-500">
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
                    include_once '../Produto.php';
                    $p = new Produto();
                    $p->setId($id_prod);
                    echo $p->exclusao();
                }
                ?> &nbsp;
            </p>
        </div>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>