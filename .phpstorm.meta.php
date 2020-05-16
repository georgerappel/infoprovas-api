<?php
// @formatter:off

namespace PHPSTORM_META {

   /**
    * PhpStorm Meta file, to provide autocomplete information for PhpStorm
    * Generated on 2020-05-16 20:48:12.
    *
    * @author Barry vd. Heuvel <barryvdh@gmail.com>
    * @see https://github.com/barryvdh/laravel-ide-helper
    */
    override(new \Illuminate\Contracts\Container\Container, map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));
    override(\Illuminate\Container\Container::makeWith(0), map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));
    override(\Illuminate\Contracts\Container\Container::make(0), map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));
    override(\Illuminate\Contracts\Container\Container::makeWith(0), map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));
    override(\App::make(0), map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));
    override(\App::makeWith(0), map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));
    override(\app(0), map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));
    override(\resolve(0), map([
        '' => '@',
        'Illuminate\Console\Scheduling\ScheduleFinishCommand' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        'Illuminate\Console\Scheduling\ScheduleRunCommand' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
        'Illuminate\Contracts\Debug\ExceptionHandler' => \App\Exceptions\Handler::class,
        'Illuminate\Contracts\Queue\EntityResolver' => \Illuminate\Database\Eloquent\QueueEntityResolver::class,
        'Mpociot\ApiDoc\Matching\RouteMatcherInterface' => \Mpociot\ApiDoc\Matching\RouteMatcher::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'cache.store' => \Illuminate\Cache\Repository::class,
        'command.auth.resets.clear' => \Illuminate\Auth\Console\ClearResetsCommand::class,
        'command.cache.clear' => \Illuminate\Cache\Console\ClearCommand::class,
        'command.cache.forget' => \Illuminate\Cache\Console\ForgetCommand::class,
        'command.cache.table' => \Illuminate\Cache\Console\CacheTableCommand::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'command.migrate' => \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        'command.migrate.fresh' => \Illuminate\Database\Console\Migrations\FreshCommand::class,
        'command.migrate.install' => \Illuminate\Database\Console\Migrations\InstallCommand::class,
        'command.migrate.make' => \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
        'command.migrate.refresh' => \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        'command.migrate.reset' => \Illuminate\Database\Console\Migrations\ResetCommand::class,
        'command.migrate.rollback' => \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        'command.migrate.status' => \Illuminate\Database\Console\Migrations\StatusCommand::class,
        'command.queue.failed' => \Illuminate\Queue\Console\ListFailedCommand::class,
        'command.queue.failed-table' => \Illuminate\Queue\Console\FailedTableCommand::class,
        'command.queue.flush' => \Illuminate\Queue\Console\FlushFailedCommand::class,
        'command.queue.forget' => \Illuminate\Queue\Console\ForgetFailedCommand::class,
        'command.queue.listen' => \Illuminate\Queue\Console\ListenCommand::class,
        'command.queue.restart' => \Illuminate\Queue\Console\RestartCommand::class,
        'command.queue.retry' => \Illuminate\Queue\Console\RetryCommand::class,
        'command.queue.table' => \Illuminate\Queue\Console\TableCommand::class,
        'command.queue.work' => \Illuminate\Queue\Console\WorkCommand::class,
        'command.seed' => \Illuminate\Database\Console\Seeds\SeedCommand::class,
        'command.seeder.make' => \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
        'command.wipe' => \Illuminate\Database\Console\WipeCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'config' => \Illuminate\Config\Repository::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'db.connection' => \Illuminate\Database\MySqlConnection::class,
        'db.factory' => \Illuminate\Database\Connectors\ConnectionFactory::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'memcached.connector' => \Illuminate\Cache\MemcachedConnector::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
        'queue' => \Illuminate\Queue\QueueManager::class,
        'queue.connection' => \Illuminate\Queue\SyncQueue::class,
        'queue.failer' => \Illuminate\Queue\Failed\DatabaseFailedJobProvider::class,
        'queue.listener' => \Illuminate\Queue\Listener::class,
        'queue.worker' => \Illuminate\Queue\Worker::class,
    ]));


    override(\Illuminate\Support\Arr::add(0), type(0));
    override(\Illuminate\Support\Arr::except(0), type(0));
    override(\Illuminate\Support\Arr::first(0), elementType(0));
    override(\Illuminate\Support\Arr::last(0), elementType(0));
    override(\Illuminate\Support\Arr::get(0), elementType(0));
    override(\Illuminate\Support\Arr::only(0), type(0));
    override(\Illuminate\Support\Arr::prepend(0), type(0));
    override(\Illuminate\Support\Arr::pull(0), elementType(0));
    override(\Illuminate\Support\Arr::set(0), type(0));
    override(\Illuminate\Support\Arr::shuffle(0), type(0));
    override(\Illuminate\Support\Arr::sort(0), type(0));
    override(\Illuminate\Support\Arr::sortRecursive(0), type(0));
    override(\Illuminate\Support\Arr::where(0), type(0));
    override(\array_add(0), type(0));
    override(\array_except(0), type(0));
    override(\array_first(0), elementType(0));
    override(\array_last(0), elementType(0));
    override(\array_get(0), elementType(0));
    override(\array_only(0), type(0));
    override(\array_prepend(0), type(0));
    override(\array_pull(0), elementType(0));
    override(\array_set(0), type(0));
    override(\array_sort(0), type(0));
    override(\array_sort_recursive(0), type(0));
    override(\array_where(0), type(0));
    override(\head(0), elementType(0));
    override(\last(0), elementType(0));
    override(\with(0), type(0));
    override(\tap(0), type(0));

}
