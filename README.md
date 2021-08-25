#  🚙  Cadastro de veículos (com utlização de api)
## Apresentação

Sistema para cadastro e controle de veículos em oficinas, mecânicas, chapeações entre outros. O projeto conta com:
- [Api](https://github.com/100n0m3/API-Carros) pública de terceiros para consulta de placas e auto preenchimento de campos.
- [Bootstrap](https://getbootstrap.com/) para a estilização da página.

<img src="assets/img/inicio.png">
<img src="assets/img/cadastro.png">


## Instalação
### Requisitos:

``` 
- Servidor WEB VPS linux. É necessário que o apache, php e mysql estejam instalados e configurados corretamente. 
 ```
 
 ### Banco de dados:

 ``` 
 - Criação do banco de dados chamado "veiculos";
 - Importação do arquivo "placas.sql" dentro do banco de dados;
 ```
> A api para consulta de placas trabalha com um countdown entre um consulta e outra, aconselhemos que seja aguardado cerca de 30s entre cadastros no sistema.

