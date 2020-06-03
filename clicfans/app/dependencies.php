<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Illuminate\Database\Capsule\Manager;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        LoggerInterface::class => function (ContainerInterface $c) {
            $settings = $c->get('settings');

            $loggerSettings = $settings['logger'];
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },
        Manager::class => function (ContainerInterface $c) {

            $settings = $c->get('settings');
            $eloquent = new Manager();
            $eloquent->addConnection($settings['db']);

            // Make this Capsule instance available globally via static methods
            $eloquent->setAsGlobal();
            // Setup the Eloquent ORM...
            $eloquent->bootEloquent();

            // Set the fetch mode to return associative arrays.
            $eloquent->setFetchMode(PDO::FETCH_ASSOC);

            return $eloquent;
        }
    ]);
};
