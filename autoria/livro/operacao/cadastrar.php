<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Livro - Cadastrar </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="text-center text-4xl font-semibold">
            Cadastrar Livro
        </h1>

        <form name="cdform" action="" method="post" class="px-8 py-3 border border-gray-400 rounded-lg">
            <!-- Campos -->
            <div class="grid grid-cols-2 grid-rows-4 gap-y-4 w-[380px] mx-auto mb-6">
                <!-- Título -->
                <label for="campo_titulo" class="pt-2 pl-1">
                    Título
                </label>
                <input 
                    autofocus required autocomplete="off"
                    type="text" 
                    name="campo_titulo" 
                    id="campo_titulo"
                    class="py-1 px-2 border-2 rounded-md outline-none focus:border-orange-500">
            
                <!-- Categoria -->
                <label for="campo_categoria" class="pt-2 pl-1">
                    Categoria
                </label>
                <input 
                    required autocomplete="off"
                    type="text" 
                    name="campo_categoria" 
                    id="campo_categoria" 
                    class="py-1 px-2 border-2 rounded-md outline-none focus:border-orange-500">
            
                <!-- ISBN -->
                <label for="campo_isbn" class="pt-2 pl-1">
                    ISBN
                </label>
                <input 
                    required autocomplete="off"
                    type="number" 
                    name="campo_isbn" 
                    id="campo_isbn" 
                    class="py-1 px-2 border-2 rounded-md outline-none focus:border-orange-500">

                <!-- Idioma -->
                <label for="campo_idioma" class="pt-2 pl-1">
                    Idioma
                </label>
                <input 
                    required autocomplete="off"
                    type="text" 
                    name="campo_idioma" 
                    id="campo_idioma" 
                    class="py-1 px-2 border-2 rounded-md outline-none focus:border-orange-500">

                <!-- Quantidade/Qt de Páginas -->
                <label for="campo_qtde_pag" class="pt-2 pl-1">
                    Num. de Páginas
                </label>
                <input 
                    required autocomplete="off"
                    type="number" min="0" max="4294967295" 
                    name="campo_qtde_pag" 
                    id="campo_qtde_pag" 
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
                include_once "Livro.php";
                $pro=new Livro();
                $pro->setTitulo($campo_titulo);
                $pro->setCategoria($campo_categoria);
                $pro->setIsbn($campo_isbn);
                $pro->setIdioma($campo_idioma);
                $pro->setQtdePag($campo_qtde_pag);
                echo $pro->salvar();
            }
            else { echo "&nbsp;"; }
            ?>
        </p>

        <a href="." class="block w-fit mx-auto px-4 py-2 rounded border border-gray-300 transition-all hover:shadow-md hover:-translate-y-0.5">
            Voltar
        </a>
    </div>
</body>
</html>
