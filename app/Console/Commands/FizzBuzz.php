<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FizzBuzz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salmat:fizzbuzz';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Salmat Challenge 1';

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
     * @return mixed
     */
    public function handle()
    {
        for ($i = 1; $i <= 100; $i++) {
            $output = '';

            if (($i % 3) == 0) {
                $output .= 'Fizz';
            }

            if (($i % 5) == 0){
                $output .= 'Buzz';
            }

            if ($output === '') {
                $output = $i;
            }

            echo $output . PHP_EOL;
        }
    }
}
