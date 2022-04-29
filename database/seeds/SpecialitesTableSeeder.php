<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialites')->insert([
            [
                'abr'=>'SP',
                'specialite'=>'Santé Publiques',
            ],
            [
                'abr'=>'AP',
                'specialite'=>'Anato-patologie',
            ],
            [
                'abr'=>'NR',
                'specialite'=>'Neurochirurgie',
            ],
            [
                'abr'=>'OP',
                'specialite'=>'Ophtalmologie',
            ],
            [
                'abr'=>'CD',
                'specialite'=>'Cardiologie',
            ],
            [
                'abr'=>'OT',
                'specialite'=>'Orthopédiie Traumatologie',
            ],
            [
                'abr'=>'AT',
                'specialite'=>'Anesthésie Réanimation',
            ],
            [
                'abr'=>'HM',
                'specialite'=>'Hématologie',
            ],
            [
                'abr'=>'CS',
                'specialite'=>'Chirurgie Stomatologique',
            ],
            [
                'abr'=>'MI',
                'specialite'=>'Maladie Infectieuse',
            ],
            [
                'abr'=>'IM',
                'specialite'=>'Imagerie Médicale',
            ],
            [
                'abr'=>'BMN',
                'specialite'=>'Biophysique et Médicine',
            ],
            [
                'abr'=>'E',
                'specialite'=>'Endocrinologie',
            ],
            [
                'abr'=>'ORL',
                'specialite'=>'Chirurgie Cervio-facial et ORL',
            ],
            [
                'abr'=>'Med Int',
                'specialite'=>'Médecine Interne',
            ],
            [
                'abr'=>'BM',
                'specialite'=>'Biologie Medicale',
            ],
            [
                'abr'=>'OM',
                'specialite'=>'Oncologie Médicale',
            ],
        ]);
    }
}
