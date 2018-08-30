<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(::class);

        factory(\App\Sura::class, 114)->create();
        factory(\App\Ayat::class, 114)->create();

    }
}
