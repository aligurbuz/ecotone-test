<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'it creates service';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $serviceName = $this->ask('What is service name?');
        $serviceDirectoryName = $this->ask('What is service it\'s directory name?',$serviceName);
        $modelName = $this->ask('What is model name for service?');

        Artisan::call('create:crud',[
           'controller' => $serviceName,
           'dir' => $serviceDirectoryName,
           'model' => $modelName
        ]);

        $this->warn('Service has been successfully created');

        return 0;
    }
}