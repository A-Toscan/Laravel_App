<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Stringable;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title'=>'Comprar',
            'description'=>'pan, patatas, huevos y jamon',
            'status'=>0,
            'user_id'=>1
        ]);
    }
}
