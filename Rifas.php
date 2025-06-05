<?php
$titulo = $_POST['Titulo'];
$desc = $_POST['Descricao'];
$valor = $_POST['Valor'];
$quant = $_POST['Quantidade'];
$premio1 = $_POST['Premio01'];
$premio2 = $_POST['Premio02'];
$premio3 = $_POST['Premio03'];
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="src/css/reset.css">
    <link rel="stylesheet" href="src/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifas</title>
</head>

<body>

    <header>

    </header>

    <main>

        <container id="Rifas-Card-View">

            <script>
                function print() {
                    document.getElementById('').style.display = "none"
                    window.print();
                    document.getElementById('').style.display = "block"
                }
                const titulo = "<?php echo $titulo; ?>"
                const desc = "<?php echo $desc; ?>"
                const valor = "<?php echo $valor; ?>"
                const quant = "<?php echo $quant; ?>"
                const premio1 = "<?php echo $premio1; ?>"
                const premio2 = "<?php echo $premio2; ?>"
                const premio3 = "<?php echo $premio3; ?>"
            </script>

        </container>

    </main>

    <footer>

    </footer>

</body>

</html>