<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResetCategoriesSeeder extends Seeder
{
    public function run()
    {
        // Delete all records from the categories table
        DB::table('categories')->truncate();

        // Reset auto-increment to 1
        DB::statement('ALTER TABLE categories AUTO_INCREMENT = 1');
    }
}
