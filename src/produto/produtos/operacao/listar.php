<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Listar</title>
    <link rel="stylesheet" href="../../../assets/css/output.css">
</head>
<body class="max-h-screen">
    <?php
    include_once '../Produto.php';

    $p = new Produto();
    $pro_bd = $p->listar();
    ?>

    <?php include("../../../componentes/BarraMenuInterna.php") ?>

    <div class="flex flex-col gap-8 w-fit mx-auto mt-8 h-[50%]">
        <h1 class="regular-title">
            Relação de Produtos Cadastrados
        </h1>

        <!-- Table -->
        <div 
            role="table"
            class="
            flex flex-col
            text-left 
            w-[600px] 
            mx-auto p-8 pt-4 
            border border-gray-400 rounded-lg
            ">
            <!-- Header -->
            <div role="row" class="grid grid-cols-8 text-lg font-semibold mr-4 *:px-2 *:pb-2">
                <div role="cell" class="col-span-1">
                    ID
                </div>
                <div role="cell" class="col-span-5">
                    Nome
                </div>
                <div role="cell" class="col-span-2">
                    Estoque
                </div>
            </div>
            
            <!-- Body -->
            <div role="rowgroup" class="
                border overflow-y-scroll h-[480px]
                [&>*:nth-child(odd)]:bg-gray-200 *:*:px-2
                ">
                <?php foreach ($pro_bd as $pro_mostrar) { ?>
                <div role="row" class="
                    grid grid-cols-8 py-0.5
                    ">
                    <div role="cell" class="col-span-1">
                        <?php echo $pro_mostrar[0]; ?>
                    </div>
                    <div role="cell" class="col-span-5">
                        <?php echo $pro_mostrar[1]; ?> 
                    </div>
                    <div role="cell" class="col-span-2">
                        <?php echo $pro_mostrar[2]; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <?php include("../../../componentes/BotaoVoltar.php") ?>
    </div>
</body>
</html>