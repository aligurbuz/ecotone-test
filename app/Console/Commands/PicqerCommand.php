<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PicqerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'picqer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It takes products from picqer api';

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
        //picqer()->get();
        return 0;
    }
}
