<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoria - Listar</title>
    <link rel="stylesheet" href="../../../assets/css/output.css">
</head>
<body class="max-h-screen">
    <?php
    include_once '../Autoria.php';

    $autoria = new Autoria();
    $listar_autoria = $autoria->listar();
    ?>

    <div class="flex flex-col gap-8 w-fit mx-auto mt-8 h-[50%]">
    <h1 class="regular-title">
            Relação de Autoria Cadastrados
        </h1>

        <!-- Table -->
        <div 
            role="table"
            class="
            flex flex-col
            text-left 
            w-[800px] 
            mx-auto p-8 pt-4 
            border border-gray-400 rounded-lg
            ">
            <!-- Header -->
            <div role="row" class="grid grid-cols-11 text-lg font-semibold mr-4 *:px-2 *:pb-2">
                <div role="cell" class="col-span-2">
                    Cód. Autor
                </div>
                <div role="cell" class="col-span-2">
                    Cód. Livro
                </div>
                <div role="cell" class="col-span-3">
                    Data de Lanç.
                </div>
                <div role="cell" class="col-span-4">
                    Editora
                </div>
            </div>

            <!-- Body -->
            <div role="rowgroup" class="
                border overflow-y-scroll h-[480px]
                [&>*:nth-child(odd)]:bg-gray-200 *:*:px-2
                ">
                <?php foreach ($listar_autoria as $registro) { ?>
                <div role="row" class="
                    grid grid-cols-11 py-0.5
                    ">
                    <div role="cell" class="col-span-2">
                        <?php echo $registro[0]; ?>
                    </div>
                    <div role="cell" class="col-span-2">
                        <?php echo $registro[1]; ?> 
                    </div>
                    <div role="cell" class="col-span-3">
                        <?php echo $registro[2]; ?>
                    </div>
                    <div role="cell" class="col-span-4">
                        <?php echo $registro[3]; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>