<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(database_path('db.sql')));
        $this->command->info('SQL query runned');
    }
}
