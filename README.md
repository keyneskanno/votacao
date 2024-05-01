# votacao
<summary>
Esta solução permite que o administrador cadastre enquetes com opções de resposta com título, descrição e imagem. É possível consumir estas enquetes usando REST e visualizar o resultado das votações utilizando webform analysis. Os módulos utilizados são webform, entity reference, webform rest, webforma analysis.
</summary>

Crie o banco de dados. Importe o banco.sql
```
create database votacao;
grant all privileges on votacao.* to votacao@localhost identified by 'vlV94sasd3CRg';
flush privileges;
use votacao;
source banco.sql;
```


