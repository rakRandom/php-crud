<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Autoria - Cadastrar </title>
    <link rel="stylesheet" href="../../../assets/css/output.css">
</head>
<body>
    <?php include("../../../componentes/BarraMenuInterna.php") ?>

    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Cadastrar Autoria
        </h1>

        <form name="cdform" action="" method="post" class="px-8 py-3 border border-gray-400 rounded-lg">
            <!-- Campos -->
            <div class="grid grid-cols-2 grid-rows-4 gap-y-4 w-[380px] mx-auto mb-6">
                <!-- Cod Autor -->
                <label for="campo_cod_autor" class="pt-2 pl-1">
                    Cod Autor
                </label>
                <input 
                    autofocus required autocomplete="off"
                    type="number" min="0" max="4294967295" 
                    name="campo_cod_autor" 
                    id="campo_cod_autor"
                    class="regular-input">
            
                <!-- Cod Livro -->
                <label for="campo_cod_livro" class="pt-2 pl-1">
                    Cod Livro
                </label>
                <input 
                    required autocomplete="off"
                    type="number" min="0" max="4294967295" 
                    name="campo_cod_livro" 
                    id="campo_cod_livro" 
                    class="regular-input">
            
                <!-- Data de Lançamento -->
                <label for="campo_data_lancamento" class="pt-2 pl-1">
                    Data de Lançamento
                </label>
                <input 
                    required autocomplete="off"
                    type="date" 
                    name="campo_data_lancamento" 
                    id="campo_data_lancamento" 
                    class="regular-input">
            
                <!-- Editora -->
                <label for="campo_editora" class="pt-2 pl-1">
                    Editora
                </label>
                <input 
                    required autocomplete="off"
                    type="text" 
                    name="campo_editora" 
                    id="campo_editora" 
                    class="regular-input">
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
                include_once "../Autoria.php";
                $pro=new Autoria();
                $pro->setCodAutor($campo_cod_autor);
                $pro->setCodLivro($campo_cod_livro);
                $pro->setDataLancamento($campo_data_lancamento);
                $pro->setEditora($campo_editora);
                echo $pro->salvar();
            }
            else { echo "&nbsp;"; }
            ?>
        </p>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>
