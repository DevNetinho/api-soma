## Api Soma
Uma simples api para aplicar os conceitos aprendidos no Laravel, criando uma api para realizar as quatro operações básicas: soma, subtração, multiplicação e divisão.

## Instalação 🛠️
Clone do repositório:
```bash
    git clone https://github.com/DevNetinho/api-soma  
```

No diretório do projeto, execute o comando:
```bash
    composer install
```

Crie o arquivo .env com base no .env_example e configure o mesmo de acordo com suas configurações locais,
caso seu sistema operacional seja o Windows, substitua o " cp " para " copy ":
```bash
    cp .env_example .env
```

Gerar a chave do aplicativo:
```bash
    php artisan key:generate
```

Execute as migrations:
```bash
    php artisan migrate
```

Sirva a api:
```bash
    php artisan serve
```


## Principais endpoints 🎯
### Métodos GET
Index
O index nos retorna as opções de operações que temos disponíveis para uso:
```
  http://localhost:8000/api
```
Response:
```json
{
  "operacoes": "adicao, subtracao, multiplicacao, divisao"
}
```

Histórico de operações realizadas
Retorna o histórico e tipo das operações realizadas, caso houverem operações realizadas pelo usuário:
```
  http://localhost:8000/api/historico
```
Response caso não existam registros:
```json
{
    "vazio": "não há registros no banco de dados!"
}
```

### Métodos POST
OBS: Todas operações são feitas com base nos dados passados no body da requisição, o body espera o valor para somar em n1 e n2, e a operação que pode ser adicao, subtracao, multiplicacao ou divisao. Siga os exemplos abaixo:
Realizar uma operação de soma:
```
      http://localhost:8000/api/operacao
```
Body da requisição: 
```json
{
    "n1": 5,
    "n2": 5,
    "operacao": "adicao"
}
```

Response:
```json
{
    "resultado": 10
}

```
OBS: troque "adicao" por qualquer das quatro operações e terá o resultado pretendido.


Limpar todas operações realizadas
Deleta todas operações realizadas pelo usuário:

```
      http://localhost:8000/api/limpar
```
Response:
```json
{
    "limpar": "Todos registros foram removidos com sucesso!"
}
```

## Aprendizados 📚
Neste projeto, exercitei minha lógica criando uma api de operações aritméticas, aprendi a retornar responses para o cliente com o json e com principal foco também em retornar os códigos de status HTTP.



