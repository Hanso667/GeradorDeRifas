<?php
$titulo = $_POST['Titulo'];
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

    <main id="main">

        <script>
            function takePrint() {
                window.print();
            }

            const titulo = "<?php echo $titulo; ?>"
            const desc = <?php echo json_encode($_POST['Descricao']); ?>.replace(/(\r\n|\n|\r)/g, "<br>");
            const valor = "<?php echo $valor; ?>"
            const quant = "<?php echo $quant; ?>"
            const premio1 = "<?php echo $premio1; ?>"
            const premio2 = "<?php echo $premio2; ?>"
            const premio3 = "<?php echo $premio3; ?>"

            const printBtn = document.createElement('button')
            printBtn.onclick = takePrint
            printBtn.textContent = "Imprimir"
            printBtn.id = 'printBtn'
            document.getElementById('main').appendChild(printBtn)

            const container = document.createElement('container')
            container.id = 'Rifas-Card-View'
            container.style.gridTemplateRows = `repeat(${Math.ceil(quant/3)},200px)`
            document.getElementById('main').appendChild(container)

            for (let index = 1; index <= quant; index++) {

                let card = document.createElement('div')
                card.className = 'rifa-card';

                let divDesc = document.createElement('div');
                divDesc.className = 'divDesc';

                let cardTitulo = document.createElement('h3')
                cardTitulo.textContent = titulo

                let cardDesc = document.createElement('p')
                cardDesc.innerHTML = desc

                let cardValor = document.createElement('h4')
                cardValor.textContent = "R$" + parseFloat(valor).toFixed(2);

                let divPremio = document.createElement('div');
                divPremio.className = 'divPremio';

                let premioTitulo = document.createElement('h2');
                premioTitulo.textContent = "Premios"


                let premioList = document.createElement('ul')
                premioList.className = "Lista"


                let listPremio1 = document.createElement('li')
                let listPremio2 = document.createElement('li')
                let listPremio3 = document.createElement('li')

                let cardPremio1 = document.createElement('p')
                cardPremio1.textContent = premio1
                let cardPremio2 = document.createElement('p')
                cardPremio2.textContent = premio2
                let cardPremio3 = document.createElement('p')
                cardPremio3.textContent = premio3

                let numero = document.createElement('p')
                numero.textContent = "n. " + index + "º"
                numero.className = "numero"
                divPremio.appendChild(numero)

                let gift = document.createElement('img')
                gift.src = "src/img/gift.png"
                gift.className = 'gift'
                divPremio.appendChild(gift)


                container.appendChild(card)
                card.appendChild(cardTitulo)
                card.appendChild(cardDesc)
                card.appendChild(cardValor)
                card.appendChild(divDesc)
                card.appendChild(divPremio)
                divDesc.appendChild(cardTitulo)
                divDesc.appendChild(cardDesc)
                divDesc.appendChild(cardValor)
                divPremio.appendChild(cardPremio1)
                divPremio.appendChild(cardPremio2)
                divPremio.appendChild(cardPremio3)
                divPremio.appendChild(premioTitulo)
                divPremio.appendChild(premioList)
                premioList.appendChild(listPremio1)
                premioList.appendChild(listPremio2)
                premioList.appendChild(listPremio3)
                listPremio1.appendChild(cardPremio1)
                listPremio2.appendChild(cardPremio2)
                listPremio3.appendChild(cardPremio3);
            };
        </script>

    </main>

    <footer>

    </footer>

</body>

</html>