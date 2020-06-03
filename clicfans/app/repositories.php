<?php
declare(strict_types=1);

use App\Domain\User\UserRepository;
use \App\Domain\Comment\CommentRepository;
use App\Infrastructure\Persistence\User\InMemoryUserRepository;
use \App\Infrastructure\Persistence\Comment\CommentRepositoryImpl;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        UserRepository::class => \DI\autowire(InMemoryUserRepository::class),
        CommentRepository::class => \DI\autowire(CommentRepositoryImpl::class),
    ]);
};
