<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the BookSeeder to seed books
        $this->call(BookSeeder::class);
    }
}