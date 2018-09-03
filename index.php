<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>CP - Passeio Turistico</title>
</head>
<body>
    <header>
        <h1>Expresso </h1>
    </header>
    <div class="banner">
        <img src="" alt="imagem do banner" class="banner-image">
    </div>
    <div class="servicos">
        <h2 class="servicos-title">Serviços</h2>
        <div class="servicos-flex">
            <div class="servico">
                <h2 class="servico-title">Passeio Normal</h2>
            </div>
            <div class="servico">
                <h2 class="servico-title">Expresso da meia noite</h2>
            </div>
            <div class="servico">
                <h2 class="servico-title">Passeio Panorâmico</h2>
            </div>
        </div>
    </div>
    <div class="form-div">
        <h2 class="form-title">Compre suas passagens</h2>
        <form action="/ler_dados.php" method="POST" id="form">
            <div class="input-name">
                <label for="first-name">Nome: <input type="text" name="first-name" id="first-name"></label>
                <label for="last-name">Sobrenome: <input type="text" name="last-name" id="last-name"></label>
            </div>
            <div class="select-tickets">
                <label for="ticket">Tipo de Bilhete: </label>
                <select name="ticket" id="ticket">
                    <option value="Passeio Normal">Passeio Normal</option>
                    <option value="Passeio Panorâmico">Passeio Panorâmico</option>
                    <option value="Expresso da Meia Noite">Expresso da Meia Noite</option>
                </select>
            </div>
            <p class="input-label">Qtde. de Bilhetes: <input type="number" placeholder="Qtde. de Bilhetes" name="qtde_bilhetes"></p>
            <button type="submit" class="btn btn-submit">Comprar</button>
        </form>
    </div>
</body>
</html>