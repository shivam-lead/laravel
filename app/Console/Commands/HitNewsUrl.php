<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
class HitNewsUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'url:hit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
            // $url = '/news';
            $response = Http::get(url('http://127.0.0.1:8000/news'));
            // Additional processing or logging if needed
            // dd($response->status(), $response->body());
           $this->info('command run successfully');
            // Log or handle the exception

    }
}
