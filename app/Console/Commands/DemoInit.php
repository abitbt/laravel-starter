<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the demo environment by refreshing the database and clearing caches.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        if (config('app.env') !== 'local' || ! config('app.debug')) {
            $this->components->error('The demo:init command can only run when APP_ENV=local and APP_DEBUG=true.');

            return self::FAILURE;
        }

        $this->components->info('Refreshing database (migrate:fresh --seed)...');

        $exitCode = $this->call('migrate:fresh', ['--seed' => true]);

        if ($exitCode !== self::SUCCESS) {
            $this->components->error('Database refresh failed. Check the logs for more details.');

            return $exitCode ?? self::FAILURE;
        }

        $this->components->info('Clearing compiled views...');

        $viewExitCode = $this->call('view:clear');

        if ($viewExitCode !== self::SUCCESS) {
            $this->components->error('Failed to clear compiled views.');

            return $viewExitCode ?? self::FAILURE;
        }

        $this->components->info('Clearing application cache...');

        $cacheExitCode = $this->call('cache:clear');

        if ($cacheExitCode !== self::SUCCESS) {
            $this->components->error('Failed to clear application cache.');

            return $cacheExitCode ?? self::FAILURE;
        }

        $this->components->info('demo:init completed successfully.');

        return self::SUCCESS;
    }
}
