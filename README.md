# P1-LP3
Projeto criado para disciplina de Linguagem de Programação III, que será utilizado como método de avaliação, o objetivo do projeto consiste em sanar os problemas de um consultório de dentista ao digitalizar os processos.

---
## Requisitos
Projeto pode ser instalado com [Docker](https://www.docker.com/), caso opte por não usá-lo se atente ao requisitos:
1) PHP 7.4
2) PostgreSQL 12

---
## Install
1)Primeiro é preciso renomear o arquivo .env.example para .env:

2)Para a instalação utilizando Docker basta ir no diretório app/ e:
```
    docker-compose up -d --build
```

3) Após rodar o comando que ira gerar o autoloader da aplicação dentro do diretório app/:
```
    docker-compose exec app composer dump-autoload
```

4) Dar um composer install para instalar as dependências dentro do diretório app/:
```
    docker-compose exec app composer install
```

5) Pronto, o projeto já está configurado e pode ser acessado através de seu [Localhost](http://localhost:8000/)

---
## Links
[GitHub](https://github.com/Orbeli/P1-LP3) - GitHub do projeto  

---
## Author
Gabriel Orbeli Rodrigues Belíssimo

[E-mail](mailto:gabriel.orbeli@gmail.com)
[GitHub](https://github.com/Orbeli)
[Linkedin](https://www.linkedin.com/in/gabriel-orbeli-436815171/)
