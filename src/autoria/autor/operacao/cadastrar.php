<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Autor - Cadastrar </title>
    <link rel="stylesheet" href="../../../assets/css/output.css">
</head>
<body>
    <?php include("../../../componentes/BarraMenuInterna.php") ?>

    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Cadastrar Autor
        </h1>

        <form name="cdform" action="" method="post" class="px-8 py-3 border border-gray-400 rounded-lg">
            <!-- Campos -->
            <div class="grid grid-cols-2 grid-rows-4 gap-y-4 w-[380px] mx-auto mb-6">
                <!-- Nome -->
                <label for="campo_nome" class="pt-2 pl-1">
                    Nome
                </label>
                <input 
                    autofocus required autocomplete="off"
                    type="text" 
                    name="campo_nome" 
                    id="campo_nome"
                    class="regular-input">
            
                <!-- Sobrenome -->
                <label for="campo_sobrenome" class="pt-2 pl-1">
                    Sobrenome
                </label>
                <input 
                    required autocomplete="off"
                    type="text" 
                    name="campo_sobrenome" 
                    id="campo_sobrenome" 
                    class="regular-input">
            
                <!-- Email -->
                <label for="campo_email" class="pt-2 pl-1">
                    Email
                </label>
                <input 
                    required autocomplete="off"
                    type="email" 
                    name="campo_email" 
                    id="campo_email" 
                    class="regular-input">
            
                <!-- Data de Nascimento -->
                <label for="campo_nasc" class="pt-2 pl-1">
                    Data de Nascimento
                </label>
                <input 
                    required autocomplete="off"
                    type="date" 
                    name="campo_nasc" 
                    id="campo_nasc" 
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
                include_once "../Autor.php";
                $pro=new Autor();
                $pro->setNomeAutor($campo_nome);
                $pro->setSobrenome($campo_sobrenome);
                $pro->setEmail($campo_email);
                $pro->setNasc($campo_nasc);
                echo $pro->salvar();
            }
            else { echo "&nbsp;"; }
            ?>
        </p>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>
