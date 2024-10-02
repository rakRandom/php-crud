<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Produto - Cadastrar </title>
    <link rel="stylesheet" href="../../../output.css">
</head>
<body>
    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Cadastrar Produto
        </h1>

        <form name="cdform" action="" method="post" class="px-8 py-3 border border-gray-400 rounded-lg">
            <!-- Campos -->
            <div class="grid grid-cols-3 grid-rows-2 gap-x-4 w-[380px] mx-auto mb-6">
                <label for="campo-nome" class="pt-2 pl-1 col-span-2">
                    Nome
                </label>
                <label for="campo-estoque" class="pt-2 pl-1">
                    Estoque
                </label>
                <input 
                    autofocus required autocomplete="off"
                    type="text" 
                    name="campo_nome" 
                    id="campo-nome"
                    class="col-span-2 py-1 px-2 border-2 rounded-md outline-none focus:border-orange-500">
                <input 
                    required autocomplete="off"
                    type="number" 
                    name="campo_estoque" 
                    id="campo-estoque" 
                    min="0" max="4294967295"
                    class="py-1 px-2 border-2 rounded-md outline-none focus:border-orange-500">
            </div>

            <!-- Botões -->
            <div class="relative">
                <button name="btnenviar" type="submit" class="block w-fit mx-auto px-4 py-2 rounded border border-gray-300 transition-all hover:shadow-md hover:-translate-y-0.5">
                    Cadastrar
                </button>
                <button name="limpar" type="reset" class="absolute right-2 h-full -translate-y-[100%] hover:underline">
                    Limpar
                </button>
            </div>
        </form>

        <p class="text-center">
            <?php 
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnenviar)) {
                include_once "../Produto.php";
                $pro=new Produto();
                $pro->setNome($campo_nome);
                $pro->setEstoque($campo_estoque);
                echo $pro->salvar();
            }
            else { echo "&nbsp;"; }
            ?>
        </p>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>