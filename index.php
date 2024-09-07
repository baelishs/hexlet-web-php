<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

 = AppFactory::create();

->get('/hello/{name}', function (Request , Response , array ) {
     = ['name'];
    ->getBody()->write(Hello, );
    return ;
});

->run();
