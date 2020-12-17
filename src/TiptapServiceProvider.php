<?php

namespace Michaelueber\Tiptap;

use Illuminate\Support\ServiceProvider;
use Michaelueber\Tiptap\Commands\TiptapCommand;

class TiptapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/tiptap.php' => config_path('tiptap.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/tiptap'),
            ], 'views');

            $migrationFileName = 'create_tiptap_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                TiptapCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tiptap');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/tiptap.php', 'tiptap');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
