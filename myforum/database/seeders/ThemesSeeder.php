<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Theme;

class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            "name"=>'Agilité',
        ]);



        DB::table('themes')->insert([
            "name"=>'API'
] );


        DB::table('themes')->insert([
            "name"=>'Conventions de codage'
] );

        DB::table('themes')->insert([
            "name"=>'CSS'
] );


        DB::table('themes')->insert([
            "name"=>'Distribution Linux'
] );


        DB::table('themes')->insert([
            "name"=>'Éditeur de texte'
] );


        DB::table('themes')->insert([
            "name"=>'Environnement de travail'
] );


        DB::table('themes')->insert([
            "name"=>'Game design'
] );


        DB::table('themes')->insert([
            "name"=>'Javascript'
] );


        DB::table('themes')->insert([
            "name"=>'Linkedin'
] );


        DB::table('themes')->insert([
            "name"=>'Opensource'
] );


        DB::table('themes')->insert([
            "name"=>'Python'
] );


        DB::table('themes')->insert([
            "name"=>'SASS'
] );

        DB::table('themes')->insert([
            "name"=>'Système d\'exploitation'
] );

        DB::table('themes')->insert([
            "name"=>'TempleOS'
] );

    }
}
