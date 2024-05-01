# votacao

<div> Esta solução permite que o administrador cadastre enquetes com opções de resposta com título, descrição e imagem. É possível consumir estas enquetes usando REST e visualizar o resultado das votações utilizando webform analysis. Os módulos utilizados são webform, entity reference, webform rest, webforma analysis. </div>


<div> Crie o banco de dados. Importe o banco.sql </div>

```
create database votacao;
grant all privileges on votacao.* to votacao@localhost identified by 'vlV94sasd3CRg';
flush privileges;
use votacao;
source banco.sql;
```

<div> Na raiz do drupal execute os comandos: </div>
```
composer i
drush cr
drush cim
drush cr
```

<div> Acesse o /apresentacao para entender o funcionamento de cadastro e visualizar exemplos de enquetes. </div>


