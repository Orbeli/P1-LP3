# P1-LP3
Projeto criado para disciplina de Linguagem de Programação III, que será utilizado como método de avaliação, o objetivo do projeto consiste em sanar os problemas de um consultório de dentista ao digitalizar os processos.

---
## Requisitos
Projeto pode ser instalado com [Docker](https://www.docker.com/), caso opte por não usá-lo se atente ao requisitos:
1) PHP 7.4
2) PostgreSQL 12

---
## Install
1)Para a instalação utilizando Docker basta ir no diretório app/ e:
```
    docker-compose up -d --build
```

2) Após rodar o comando que ira gerar o autoloader da aplicação dentro do diretório app/:
```
    docker-compose exec app composer dump-autoload
```

3) Dar um composer install para instalar as dependências dentro do diretório app/:
```
    docker-compose exec app composer install
```

4) Renomear o arquivo .env.example para .env:

5) Criar as tabelas no banco:
```
    docker exec app_db_1 /bin/sh -c 'psql --username=username --dbname=database </var/scripts/consultorio.sql'
```

6) Pronto, o projeto já está configurado e pode ser acessado através de seu [Localhost](http://localhost:8000/)

---
## Links
[GitHub](https://github.com/Orbeli/P1-LP3) - GitHub do projeto  

---
## Author
Gabriel Orbeli Rodrigues Belíssimo

[E-mail](mailto:gabriel.orbeli@gmail.com)
[GitHub](https://github.com/Orbeli)
[Linkedin](https://www.linkedin.com/in/gabriel-orbeli-436815171/)

Matheus Lot Rizzo

[E-mail](mailto:matheus.l.rizzo@gmail.com)
[GitHub](https://github.com/MatheusLotRizzo)
[Linkedin](https://www.linkedin.com/in/matheus-lot-rizzo-a71595159/)

Ulisses da Silva Rosa

[E-mail](mailto:ulisses.skysect@hotmail.com)
[GitHub](https://github.com/UlissesSRosa)
[Linkedin](https://www.linkedin.com/in/ulisses-rosa/)

Guilherme Henrique de Oliveira

[E-mail](mailto:henriqueoliveiragui18@gmail.com)
[GitHub](https://github.com/Guilherme1-jpg)
[Linkedin](https://www.linkedin.com/in/guilherme-henrique-6b3389136/)

Lucas Sanches Faustino

[E-mail](lucassanchesfaustino3@hotmail.com)
[GitHub](https://github.com/LucasSanchesFaustino)
[Linkedin](https://www.linkedin.com/in/lucas-sanches-7374b4183/)
