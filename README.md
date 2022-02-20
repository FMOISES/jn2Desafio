<p> para a Criação da api foi utilizada a docker, então recomendamos que utilize para rodar o projeto</p>
<p> para iniciar o projeto precisamos de 3 cogigos </p>
<p>primeiro,no diretorio principal, o mesmo onde fica o arquivo "docker-compose.yml" abra o terminal e digite:<br>
<code>$ docker-compose up</code>
<p>logo após, abra a pasta Jn2TesteMoises onde ficam os aquivos do laravel</p>
<p> execute novamente o codigo:</p>
<code>$ docker-compose up</code>
<p>após executar a aplicação passará a ser servida no endereço:</> http://localhost:8000/ </p>
<p> para que a aplicação crie as tabelas dentro do banco de dados deve executar o seguinte codido no mesmo nivel do projeto do laravel</p>
<code>$ docker-compose exec myapp php artisan migrate</code>
