<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
           [
               'name' => 'PHP',
           ],
           [
               'name' => 'Python',
           ],
           [
               'name' => 'Javascript',
           ],
           [
               'name' => 'C#',
           ],
           [
               'name' => 'C++',
           ],
           [
               'name' => 'Dart',
           ],
           [
               'name' => 'Java',
           ],
           [
               'name' => 'XML',
           ]
        ]);
    }
}
