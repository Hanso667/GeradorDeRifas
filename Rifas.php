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
                const container = document.getElementById('Rifas-Card-View');
                for (let index = 1; index <= quant; index++) {

                   let card = document.createElement('div')
                   card.className = 'rifa-card';

                   let divDesc = document.createComment('div');
                   divDesc.className = 'divDesc';

                   let cardTitulo = document.createElement('h3')
                   cardTitulo.textContent = titulo

                   let cardDesc = document.createElement('p')
                   cardDesc.textContent = titulo

                   let cardValor = document.createElement('p')
                   cardValor.textContent = valor

                   let cardPremio1 = document.createElement('p')
                   cardPremio1.textContent = premio1

                   let cardPremio2 = document.createElement('p')
                   cardPremio2.textContent =premio2

                   let cardPremio3 = document.createElement('p')
                   cardPremio3.textContent =premio3

                   container.appendChild(card)
                   card.appendChild(cardTitulo)
                   card.appendChild(cardDesc)
                   card.appendChild(cardValor)
                   divDesc.appendChild(cardTitulo)
                   divDesc.appendChild(cardDesc)
                   divDesc.appendChild(cardValor)
                   card.appendChild(cardPremio1)
                   card.appendChild(cardPremio2)
                   card.appendChild(cardPremio3)
                    
                }
            </script>

        </container>

    </main>

    <footer>

    </footer>

</body>

</html>