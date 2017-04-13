<?php
/**
 * Created by PhpStorm.
 * User: jctan
 * Date: 13/04/2017
 * Time: 15:56
 */

namespace GreenCrud\Console;

use Illuminate\Console\Command;

class BootstrapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:bootstrap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create skeleton admin theme';


    /**
     * Create a new command instance.
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
        $destination = resource_path('views/_layout');
        if (file_exists($destination)) {
            $confirmation = $this->confirm('resources/views/_layout exists, are you sure you want to replace it?');
            if ( ! $confirmation) {
                return;
            }
        }

        if ( ! file_exists($destination)) {
            mkdir($destination);
        }

        copy(dirname(__DIR__) . '/Views/stub/_layout/base_backend.blade.php', $destination . '/base_backend.blade.php');
        copy(dirname(__DIR__) . '/Views/stub/_layout/left_nav.blade.php', $destination . '/left_nav.blade.php');
        copy(dirname(__DIR__) . '/Views/stub/_layout/top_nav.blade.php', $destination . '/top_nav.blade.php');
        copy(dirname(__DIR__) . '/Views/stub//home.blade.php', resource_path('views/home.blade.php'));
    }

}