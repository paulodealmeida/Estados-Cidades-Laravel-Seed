<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        DB::table('states')->insert(['id' => 1, 'name' => 'Acre', 'abbreviation' => 'AC']);
        DB::table('states')->insert(['id' => 2, 'name' => 'Alagoas', 'abbreviation' => 'AL']);
        DB::table('states')->insert(['id' => 3, 'name' => 'Amapá', 'abbreviation' => 'AP']);
        DB::table('states')->insert(['id' => 4, 'name' => 'Amazonas', 'abbreviation' => 'AM']);
        DB::table('states')->insert(['id' => 5, 'name' => 'Bahia', 'abbreviation' => 'BA']);
        DB::table('states')->insert(['id' => 6, 'name' => 'Ceará', 'abbreviation' => 'CE']);
        DB::table('states')->insert(['id' => 7, 'name' => 'Distrito Federal', 'abbreviation' => 'DF']);
        DB::table('states')->insert(['id' => 8, 'name' => 'Espírito Santo', 'abbreviation' => 'ES']);
        DB::table('states')->insert(['id' => 9, 'name' => 'Goiás', 'abbreviation' => 'GO']);
        DB::table('states')->insert(['id' => 10, 'name' => 'Maranhão', 'abbreviation' => 'MA']);
        DB::table('states')->insert(['id' => 11, 'name' => 'Mato Grosso', 'abbreviation' => 'MT']);
        DB::table('states')->insert(['id' => 12, 'name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS']);
        DB::table('states')->insert(['id' => 13, 'name' => 'Minas Gerais', 'abbreviation' => 'MG']);
        DB::table('states')->insert(['id' => 14, 'name' => 'Pará', 'abbreviation' => 'PA']);
        DB::table('states')->insert(['id' => 15, 'name' => 'Paraíba', 'abbreviation' => 'PB']);
        DB::table('states')->insert(['id' => 16, 'name' => 'Paraná', 'abbreviation' => 'PR']);
        DB::table('states')->insert(['id' => 17, 'name' => 'Pernambuco', 'abbreviation' => 'PE']);
        DB::table('states')->insert(['id' => 18, 'name' => 'Piauí', 'abbreviation' => 'PI']);
        DB::table('states')->insert(['id' => 19, 'name' => 'Rio de Janeiro', 'abbreviation' => 'RJ']);
        DB::table('states')->insert(['id' => 20, 'name' => 'Rio Grande do Norte', 'abbreviation' => 'RN']);
        DB::table('states')->insert(['id' => 21, 'name' => 'Rio Grande do Sul', 'abbreviation' => 'RS']);
        DB::table('states')->insert(['id' => 22, 'name' => 'Rondônia', 'abbreviation' => 'RO']);
        DB::table('states')->insert(['id' => 23, 'name' => 'Roraima', 'abbreviation' => 'RR']);
        DB::table('states')->insert(['id' => 24, 'name' => 'Santa Catarina', 'abbreviation' => 'SC']);
        DB::table('states')->insert(['id' => 25, 'name' => 'São Paulo', 'abbreviation' => 'SP']);
        DB::table('states')->insert(['id' => 26, 'name' => 'Sergipe', 'abbreviation' => 'SE']);
        DB::table('states')->insert(['id' => 27, 'name' => 'Tocantins', 'abbreviation' => 'TO']);
    }

}
