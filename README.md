# Enunciados dos exercícios de PHP

## Exercício 01: uso de variáveis e/ou constantes PHP e integração com HTML

Em seu XAMPP (pasta `htdocs`), crie uma pasta chamada **exercicios-php** e a abra no Visual Studio Code.

Nela, crie o arquivo **exercicio01.php** e faça as atividades abaixo.

Criar **variáveis** e/ou **constantes** para:

- Data de hoje (em formato de texto mesmo)
- Nome de uma pessoa
- Nome de um curso que esta pessoa faz
- Carga horária deste curso
- Limite de faltas (calculado em 25% da carga horária)

Coloque dados nestas variáveis e mostre no HTML uma mensagem apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas.
 
Destaque alguns destes dados usando CSS (com classes ou inline).

---

## Exercício 02: estruturas de dados com arrays e objetos
 
Em um novo arquivo **exercicio02.php**, crie um **array associativo** e um **objeto genérico** para armazenar os dados fictícios de duas pessoas diferentes: **nome de usuario, email, senha, idade, sexo e cidade**.
 
Em seguida, mostre **apenas** os valores de **nome de usuario**, **email** e **idade** de cada pessoa dentro de tags HTML de conteúdo (como `article` ou `section`, além de `h2`, `p` etc).
 
**Desafio:** destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando `flexbox`.

---

## Exercício 03: estruturas condicionais

Em um novo arquivo **exercicio03.php**, programe recursos que permitam avaliar o valor de um **salário** e **calcular um novo valor de salário** baseado nos seguintes critérios:

- Se salário menor que 2000, calcule um novo salário com aumento de 15%
- Senão, se salário menor ou igual a 3000, calcule um novo salário com aumento de 10%
- Senão calcule um novo salário com aumento de 5%

Mostre no HTML uma mensagem informando o valor do **salário antigo** *(antes do reajuste)* e do **novo salário** *(após o reajuste)*.
