<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Livro - Pesquisar </title>
    <link rel="stylesheet" href="../../../assets/css/output.css">
</head>
<body>
    <?php include("../../../componentes/BarraMenuInterna.php") ?>

    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Pesquisar Livro
        </h1>

        <div>
            <form 
                name="exform" 
                action="" 
                method="post" 
                class="
                flex flex-col gap-2 
                max-w-[380px] px-6 py-3 mx-auto
                border border-gray-400 rounded-lg
                ">
                <h2 class="smaller-title">
                    Informe o Título do Livro desejado
                </h2>
                <hr>
                <div class="flex items-center max-w-[200px] mx-auto my-4 text-lg">
                    <label for="titulo_livro"></label>
                    <input 
                        required autocomplete="off"
                        type="text" 
                        name="titulo_livro" 
                        id="titulo_livro" 
                        placeholder="Título"
                        class="flex-1 regular-input">
                </div>
                
                <!-- Botões -->
                <div class="relative">
                    <button name="btnenviar" type="submit" class="block w-fit mx-auto px-4 py-2 rounded border border-gray-300 transition-all hover:shadow-md hover:-translate-y-0.5">
                        Pesquisar
                    </button>
                    <button name="limpar" type="reset" class="absolute right-2 h-full -translate-y-[100%] hover:underline">
                        Limpar
                    </button>
                </div>
            </form>

            <div class="text-center mt-6">
                <?php
                extract ($_POST, EXTR_OVERWRITE); 
                if (isset($btnenviar))
                {
                    include_once '../Livro.php';
                    $p = new Livro();
                    $p->setTitulo($titulo_livro . '%');
                    $livros = $p->consultar();

                    if (count($livros) != 0) {
                        ?>
                        <h1 class="smaller-title mb-2 underline underline-offset-4">
                            Resultado
                        </h1>
                        <div 
                            role="table"
                            class="
                            flex flex-col
                            text-left 
                            w-[960px] 
                            mx-auto p-6 pt-4 
                            border border-gray-400 rounded-lg
                            ">
                            <!-- Header -->
                            <div role="row" class="grid grid-cols-[repeat(18,minmax(0,1fr))] text-lg font-semibold mr-4 *:px-2 *:pb-2">
                                <div role="cell" class="col-span-1">
                                    id
                                </div>
                                <div role="cell" class="col-span-8">
                                    titulo
                                </div>
                                <div role="cell" class="col-span-2">
                                    categoria
                                </div>
                                <div role="cell" class="col-span-3">
                                    ISBN
                                </div>
                                <div role="cell" class="col-span-2">
                                    idioma
                                </div>
                                <div role="cell" class="col-span-2">
                                    qtde_pag
                                </div>
                            </div>

                            <!-- Body -->
                            <div role="rowgroup" class="
                                border overflow-y-scroll h-[120px]
                                [&>*:nth-child(odd)]:bg-gray-200 *:*:px-2
                                ">
                                <?php foreach ($livros as $registro) { ?>
                                <div role="row" class="
                                    grid grid-cols-[repeat(18,minmax(0,1fr))] py-0.5
                                    ">
                                    <div role="cell" class="col-span-1">
                                        <?php echo $registro[0]; ?>
                                    </div>
                                    <div role="cell" class="col-span-8">
                                        <?php echo $registro[1]; ?> 
                                    </div>
                                    <div role="cell" class="col-span-2">
                                        <?php echo $registro[2]; ?>
                                    </div>
                                    <div role="cell" class="col-span-3">
                                        <?php echo $registro[3]; ?>
                                    </div>
                                    <div role="cell" class="col-span-2">
                                        <?php echo $registro[4]; ?> 
                                    </div>
                                    <div role="cell" class="col-span-2">
                                        <?php echo $registro[5]; ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                    }
                    else {
                        echo "Nenhum registro encontrado";
                    }
                }
                ?> &nbsp;
            </div>
        </div>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>