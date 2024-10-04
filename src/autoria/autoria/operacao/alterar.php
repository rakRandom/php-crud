<!DOCTYPE html>
<html lang="pt-br">
<?php 
    include_once("../../../componentes/BotaoSubmit.php");
    extract ($_POST, EXTR_OVERWRITE); 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Autoria - Alterar </title>
    <link rel="stylesheet" href="../../../output.css">
</head>
<body>
    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Alterar Autoria
        </h1>

        <div>
            <form name="exform" action="" method="post" class="flex flex-col gap-2 px-6 py-3 border border-gray-400 rounded-lg">
                <?php 
                    if (isset($btnenviar)) { 
                        include_once '../Autoria.php';
                        $p = new Autoria();
                        $p->setCodAutor($cod_autor);
                        $p->setCodLivro($cod_livro);
                        $p_lista = $p->alterar();
                ?>
                    <h2 class="font-medium text-lg text-center">
                        Lista de Autorias encontrados
                    </h2>
                    <hr>
                    
                    <!-- Table -->
                    <div 
                        role="table"
                        class="
                            flex flex-col
                            text-left 
                            w-[800px] 
                            mx-auto"
                        >
                        <!-- Header -->
                        <div role="row" class="grid grid-cols-11 text-lg font-semibold mr-4 *:px-2 *:pb-2">
                            <div role="cell" class="col-span-2">
                                Cód. Autor
                            </div>
                            <div role="cell" class="col-span-2">
                                Cód. Livro
                            </div>
                            <div role="cell" class="col-span-3">
                                Data de Lançamento
                            </div>
                            <div role="cell" class="col-span-4">
                                Editora
                            </div>
                        </div>
                        
                        <!-- Body -->
                        <div 
                            role="rowgroup" 
                            class="
                                border overflow-y-scroll h-[240px]
                                [&>*:nth-child(odd)]:bg-gray-200 *:*:px-2"
                            >
                            <?php foreach ($p_lista as $p_registro) { ?>
                            <div 
                                role="row" 
                                class="
                                    grid grid-cols-11 py-0.5
                                    *:*:w-full *:*:h-full *:*:regular-input *:*:px-2 *:*:py-0.5"
                                >
                                <div role="cell" class="col-span-2">
                                    <label for="cod_autor" class="flex align-center">
                                        <?php echo $p_registro[0]; ?>
                                    </label>
                                    <input 
                                        hidden
                                        type="text" 
                                        name="cod_autor" 
                                        value="<?php echo $p_registro[0]; ?>">
                                </div>
                                <div role="cell" class="col-span-2">
                                    <label for="cod_livro" class="flex align-center">
                                        <?php echo $p_registro[1]; ?>
                                    </label>
                                    <input 
                                        hidden
                                        type="text" 
                                        name="cod_livro" 
                                        value="<?php echo $p_registro[1]; ?>">
                                </div>
                                <div role="cell" class="col-span-3">
                                    <input 
                                        type="date"
                                        name="data_lanc" 
                                        value="<?php echo $p_registro[2]; ?>">
                                </div>
                                <div role="cell" class="col-span-4">
                                    <input 
                                        type="text" 
                                        name="editora" 
                                        value="<?php echo $p_registro[3]; ?>">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <h2 class="font-medium text-lg text-center">
                        Informe o Código do Autor e Livro da Autoria desejada
                    </h2>
                    <hr>
                    <div class="flex gap-4 items-center w-full mx-auto my-4 text-lg">
                        <input 
                            required autocomplete="off"
                            type="number" 
                            name="cod_autor" 
                            id="cod_autor" 
                            min="0" max="4294967295"
                            placeholder="Código do Autor"
                            class="flex-1 regular-input">
                        <input 
                            required autocomplete="off"
                            type="number" 
                            name="cod_livro" 
                            id="cod_livro" 
                            min="0" max="4294967295"
                            placeholder="Código do Livro"
                            class="flex-1 regular-input">
                    </div>
                <?php } ?>

                <!-- Botões -->
                <div class="relative">
                    <?php if(isset($btnenviar)) { ?>
                        <?php echo createButton("btnalterar", "Alterar") ?>

                        <button name="reconsultar" type="submit" class="absolute right-2 h-full -translate-y-[100%] hover:underline">
                            Reconsultar
                        </button>
                    <?php } else { ?>
                        <?php echo createButton("btnenviar", "Consultar") ?>

                        <button name="limpar" type="reset" class="absolute right-2 h-full -translate-y-[100%] hover:underline">
                            Limpar
                        </button>
                    <?php } ?>
                </div>
            </form>
        </div>

        <p class="text-center">
            <?php
                if(isset($btnalterar)) {
                    include_once '../Autoria.php';
                    $p = new Autoria();
                    $p->setCodAutor($cod_autor);
                    $p->setCodLivro($cod_livro);
                    $p->setDataLancamento($data_lanc);
                    $p->setEditora($editora);
                    
                    echo $p->alterar2();
                }
            ?>
        </p>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>