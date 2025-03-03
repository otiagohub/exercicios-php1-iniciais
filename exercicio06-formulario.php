<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 Formulário</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
</head>
<body>
<div class="container">
    <header class="titulo">
        <h1>Exercício 06 Formulário</h1>
        <p class="link-enunciado">
            <a href="https://github.com/otiagohub/exercicios-php1-iniciais/blob/main/README.md#exerc%C3%ADcio-06-manipula%C3%A7%C3%A3o-de-dados-a-partir-de-formul%C3%A1rio" target="_blank">
                Ver enunciado do exercício 06
            </a>
        </p>        
    </header>
    
    <form action="" method="post">
        <div>
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto">
        </div>
        <div>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <option value=""></option>

            </select>
        </div>

        <div>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </div>

        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" min="0" max="1000">
        </div>       

        <button type="submit">Enviar</button>

    </form>
</div>    
</body>
</html>
