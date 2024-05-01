# votacao

Crie o banco de dados mysql com o nome: votacao
Usuário: votacao, Senha: vlV94sasd3CRg
Importe o banco de dados banco.sql

---
create database votacao;
grant all privileges on votacao.* to votacao@localhost identified by 'vlV94sasd3CRg';
flush privileges;
use votacao;
source banco.sql;
---


