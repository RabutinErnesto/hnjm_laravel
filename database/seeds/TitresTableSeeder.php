<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                'abr'=>'Dr',
                'titre'=>'Docteur',
            ],
            [
                'abr'=>'Pr',
                'titre'=>'Professeur',
            ],
        ]);
    }
}
