<?php

use Illuminate\Database\Seeder;

require_once 'users.php';
require_once 'backgrounds.php';

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(users::class);
        $this->call(backgrounds::class);
    }
}
