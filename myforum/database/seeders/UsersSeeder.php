<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        "first_name"=>'Xavier',
        "last_name"=>'Carrel',
        "pseudo"=>'XCL',
        "role_id"=>1
        ]);

        DB::table('users')->insert([
        "first_name"=>'Dimitri',
        "last_name"=>'Imfeld',
        "pseudo"=>'DID',
        "role_id"=>2
        ]);

        DB::table('users')->insert([
        "first_name"=>'Quentin',
        "last_name"=>'Aellen',
        "pseudo"=>'QAN',
        "role_id"=>2
        ]);

        DB::table('users')->insert([
        "first_name"=>'Gabriel',
        "last_name"=>'Rossier',
        "pseudo"=>'GRR',
        "role_id"=>2
        ]);

        DB::table('users')->insert([
        "first_name"=>'Alexandre',
        "last_name"=>'Philibert',
        "pseudo"=>'APT',
        "role_id"=>2
        ]);

        DB::table('users')->insert([
        "first_name"=>'Cyril',
        "last_name"=>'Goldenschue',
        "pseudo"=>'CGE',
        "role_id"=>2
        ]);


        DB::table('users')->insert([
        "first_name"=>'Dylan',
        "last_name"=>'Oliveira Ramos',
        "pseudo"=>'DOS',
        "role_id"=>2
        ]);

        DB::table('users')->insert([
        "first_name"=>'Sou',
        "last_name"=>'Sam',
        "pseudo"=>'SSH',
        "role_id"=>2
        ]);

        DB::table('users')->insert([
        "first_name"=>'Andi',
        "last_name"=>'Santos Oliveira',
        "pseudo"=>'ASO',
        "role_id"=>2
        ]);

        DB::table('users')->insert([
        "first_name"=>'Mathieu',
        "last_name"=>'Burnat',
        "pseudo"=>'MBU',
        "role_id"=>2
        ]);


        DB::table('users')->insert([
        "first_name"=>'William',
        "last_name"=>'Hausmann',
        "pseudo"=>'WHN',
        "role_id"=>2
        ]);


    }
}
