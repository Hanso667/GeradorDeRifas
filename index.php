<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="src/css/reset.css">
    <link rel="stylesheet" href="src/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Rifas</title>
</head>

<body>

    <header>

    </header>

    <main>
        <form action="Rifas.php" method="POST" class="Form">

            <h1>Gerador de Rifas</h1>

            <div class="Card-view">
                <div class="Card">
                    <label for="label" class="Label01">Titulo</label>
                    <input maxlength="18" type="text" name="Titulo" class="Input01">

                    <label for="Descricao" class="Label01">Descrição</label>
                    <textarea maxlength="320" id="Descricao" name="Descricao" class="Input01"></textarea>

                    <script>
                        const textarea = document.getElementById('Descricao');
                        const maxLinhas = 10;

                        textarea.addEventListener('keydown', (e) => {
                            const linhas = textarea.value.split('\n');
                            if (e.key === 'Enter' && linhas.length >= maxLinhas) {
                                e.preventDefault();
                            }
                        });

                        textarea.addEventListener('input', () => {
                            const linhas = textarea.value.split('\n');
                            if (linhas.length > maxLinhas) {
                                textarea.value = linhas.slice(0, maxLinhas).join('\n');
                            }
                        })
                    </script>
                </div>

                <div class="Card">
                    <label for="Valor" class="Label01">Valor</label>
                    <input maxlength="5" type="text" name="Valor" class="Input01">

                    <label for="Quantidade" class="Label01">Quantidade</label>
                    <input type="text" name="Quantidade" class="Input01">
                </div>
            </div>

            <h2>Premios</h2>
            <div class="Premios">

                <div class="Card-Premio">
                    <label for="Premio01" class="LabelPremios">Primeiro Premio</label>
                    <input maxlength="15" type="text" name="Premio01" class="InputPremios">
                </div>

                <div class="Card-Premio">
                    <label for="Premio01" class="LabelPremios">Segundo Premio</label>
                    <input maxlength="15" type="text" name="Premio02" class="InputPremios">
                </div>

                <div class="Card-Premio">
                    <label for="Premio01" class="LabelPremios">Terceiro Premio</label>
                    <input maxlength="15" type="text" name="Premio03" class="InputPremios">
                </div>

            </div>

            <button id="submit" type="submit" class="Button-submit">Enviar</button>

        </form>


    </main>

    <footer>

    </footer>

</body>

</html>