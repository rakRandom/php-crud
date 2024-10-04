<!DOCTYPE html>
<html lang="pt-br">
<?php 
    include_once("../../../componentes/BotaoSubmit.php");
    extract ($_POST, EXTR_OVERWRITE); 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Autor - Alterar </title>
    <link rel="stylesheet" href="../../../output.css">
</head>
<body>
    <div class="flex flex-col gap-16 w-fit mx-auto my-16 h-[50%]">
        <h1 class="regular-title">
            Alterar Autor
        </h1>

        <div>
            <form name="exform" action="" method="post" class="flex flex-col gap-2 px-6 py-3 border border-gray-400 rounded-lg">
                <?php 
                    if (isset($btnenviar)) { 
                        include_once '../Autor.php';
                        $p = new Autor();
                        $p->setCodAutor($cod_autor);
                        $p_lista = $p->alterar();
                ?>
                    <h2 class="font-medium text-lg text-center">
                        Lista de Autores encontrados
                    </h2>

                    <!-- Table -->
                    <div 
                        role="table"
                        class="
                            flex flex-col
                            text-left 
                            w-[900px] 
                            mx-auto"
                        >
                        <!-- Header -->
                        <div role="row" class="grid grid-cols-[repeat(16,minmax(0,1fr))] text-lg font-semibold mr-4 *:px-2 *:pb-2">
                            <div role="cell" class="col-span-1">
                                ID
                            </div>
                            <div role="cell" class="col-span-3">
                                nome_autor
                            </div>
                            <div role="cell" class="col-span-4">
                                sobrenome
                            </div>
                            <div role="cell" class="col-span-5">
                                email
                            </div>
                            <div role="cell" class="col-span-3">
                                nasc
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
                                    grid grid-cols-[repeat(16,minmax(0,1fr))] py-0.5
                                    *:*:w-full *:*:px-2 *:*:py-0.5"
                                >
                                <div role="cell" class="col-span-1">
                                    <label for="cod_autor"><?php echo $p_registro[0]; ?></label>
                                    <input 
                                        hidden
                                        type="text" 
                                        name="cod_autor" 
                                        value="<?php echo $p_registro[0]; ?>">
                                </div>
                                <div role="cell" class="col-span-3">
                                    <input 
                                        type="text" 
                                        name="nome_autor" 
                                        value="<?php echo $p_registro[1]; ?>">
                                </div>
                                <div role="cell" class="col-span-4">
                                    <input 
                                        type="text"
                                        name="sobrenome_autor" 
                                        value="<?php echo $p_registro[2]; ?>">
                                </div>
                                <div role="cell" class="col-span-5">
                                    <input 
                                        type="text" 
                                        name="email_autor" 
                                        value="<?php echo $p_registro[3]; ?>">
                                </div>
                                <div role="cell" class="col-span-3">
                                    <input 
                                        type="date" 
                                        name="nasc_autor" 
                                        value="<?php echo $p_registro[4]; ?>">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <h2 class="font-medium text-lg text-center">
                        Informe o Código do Autor desejado
                    </h2>
                    <hr>
                    <div class="flex items-center max-w-[200px] mx-auto my-4 text-lg">
                        <label for="cod_autor"></label>
                        <input 
                            required autocomplete="off"
                            type="number" 
                            name="cod_autor" 
                            id="cod_autor" 
                            min="0" max="4294967295"
                            placeholder="Código"
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
                    include_once '../Autor.php';
                    $p = new Autor();
                    $p->setCodAutor($cod_autor);
                    $p->setNomeAutor($nome_autor);
                    $p->setSobrenome($sobrenome_autor);
                    $p->setEmail($email_autor);
                    $p->setNasc($nasc_autor);
                    
                    echo $p->alterar2();
                }
            ?>
        </p>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>