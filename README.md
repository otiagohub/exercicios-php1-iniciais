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
 
### Desafios:

- Destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando `flexbox`.

---

## Exercício 03: estruturas condicionais

Em um novo arquivo **exercicio03.php**, programe recursos que permitam avaliar o valor de um **salário** e **calcular um novo valor de salário** baseado nos seguintes critérios:

- Se salário menor que 2000, calcule um novo salário com aumento de 15%
- Senão, se salário menor ou igual a 3000, calcule um novo salário com aumento de 10%
- Senão calcule um novo salário com aumento de 5%

Mostre no HTML uma mensagem informando o valor do **salário antigo** *(antes do reajuste)* e do **novo salário** *(após o reajuste)*.

---

## Exercício 04: estruturas de repetição (loops) e estruturas de dados

Em um novo arquivo **exercicio04.php**, crie uma estrutura de dados com 5 nomes de linguagens, cada uma com um identificador numérico e uma pequena descrição.
 
Exemplo:
 
1. HTML: Estruturação
2. CSS: Estilos
3. JS: Comportamentos
4. PHP: Back-End
5. SQL: Manipulação de dados

Em seguida, use loop para iterar sobre esta estrutura de dados e exibir todos os dados na págima usandos tags básicas, como `h2`, `p`, `b`, `ul` e `li`.

### Desafios: 

- Mostre os dados usando uma tabela HTML, semelhante ao exemplo abaixo:
 
ID  | Linguagem   |   Descrição
--- | ---------   |   --------
1   | HTML        |   Estruturação
2   | CSS         |   Estilos
3   | JS          |   Comportamentos
4   | PHP         |   Back-End
5   | SQL         |   Manipulação de dados
 
---

## Exercício 05: funções

Em um novo arquivo **exercicio05.php**, crie três variáveis para representar as notas de um aluno. 

Crie duas **funções**: uma para os processos de **cálculo da média**, e outra para os processos de **verificação da situação** do aluno.

Chamando as funções, passando os dados para elas e obtendo seus retornos, calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado) - o critério para ser aprovado é ter média a partir de 7.

Mostre no HTML usando as tags de sua preferência.
 
### Desafios:
 
- Formate em **vermelho** se o aluno estiver **reprovado**, e em **verde** se estiver **aprovado**.
- Adapte o exercício para que funcione com uma **lista de 5 alunos**, com suas respectivas 3 notas.

---

## Exercício 06

Em um novo arquivo **exercicio06-formulario.php**, crie um formulário para cadastro (simulação) de produtos com os campos:

- Nome do produto (`input text`)
- Fabricante (`select` de `options` com pelo menos 4 nomes de fabricantes) - ***Obs.: as opções desta lista devem ser carregadas a partir dos dados de um array PHP com os nomes dos fabricantes.*** 
- Preço (`input number`com valor mínimo de 100 e máximo de 10000, além de suporte à 2 casas decimais para os centavos)
- Quantidade (`input number`, mínimo 0 e máximo de 1000, sem casas decimais)

Em um novo arquivo **exercicio06-processamento.php**, faça a programação de processamento do formulário considerando o envio/recebimento via **POST**, **filtros de sanitização** e **validação** de todos os campos como obrigatórios. 

Faça também a exibição dos dados no HTML usando as tags de sua preferências.
