<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'titre_id'=>'1',
                'specialite_id'=>'4',
                'nom'=>'ERNESTO',
                'prenom'=>'Rabutin',
                'tel'=>'+261341268492',
                'matricule'=>'123456',
                'email'=>'rabutinernesto2@gmail.com',
                'password'=>hash::make('pass'),
            ]);
    }
}
