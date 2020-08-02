<p align="center">
    <img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1200px-Vue.js_Logo_2.svg.png" width="100" height=87>
    <img src="https://media-exp1.licdn.com/dms/image/C560BAQG4j49xKuufSg/company-logo_200_200/0?e=2159024400&v=beta&t=bPbU9frzW281eDPOOSODtFeuPuFrEofLYQtBZvYOBv8" width="150"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Desafio Sell2Brasil
Foi realizado a criação de uma API em laravel e o front em Vue.js<br>
Para emular o projeto, basta seguir os requisitos básico do Laravel 7.x, que se encontra no link: https://laravel.com/docs/7.x

Após o clone do projeto, basta entrar no projeto e seguir o procedimento abaixo<br>
<ul>
    <li>executar o comando "composer install"</li>
    <li>executar o comando "git clone https://github.com/laradock/laradock.git"</li>
    <li>após isso, entrar na pasta resources/js/project</li>
    <li>npm install</li>
</ul>

Com isso, a API e o front esta pronto para inicializar.<br>
A API utiliza o laradock para instanciar o docker e foi criado um DockerFile no diretorio resources/js/project para o front(Vue.js)

Para utilizar o Docker na api, entre na pasta laradock e execute o comando "sudo docker-compose up -d nginx mysql phpmyadmin".<br>
OBS: Após o git clone do laradock, deve-se configurar um arquivo .env dentro da pasta laradock, existe um arquivo .env.example para melhor entendimento.

Para utilizar o Docker no front, entre na pasta resources/js/project e execute o comando "sudo docker run -it -p 8080:80 --rm --name dockerize-vuejs-app-1 vuejs-cookbook/dockerize-vuejs-app"


#### Rotas da API

```
+--------+----------+-------------------+------+------------------------------------------------+------------+
| Domain | Method   | URI               | Name | Action                                         | Middleware |
+--------+----------+-------------------+------+------------------------------------------------+------------+
|        | GET|HEAD | /                 |      | Closure                                        | web        |
|        | GET|HEAD | api/spin-discount |      | App\Http\Controllers\SpinController@spinRandom | api        |
+--------+----------+-------------------+------+------------------------------------------------+------------+
```

#### api/discount 
```
Rota do tipo GET, retorna um desconto randômico 
Exemplo do Response abaixo
```
<img src="https://i.imgur.com/Hv1XkdU.png">
<br>

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
