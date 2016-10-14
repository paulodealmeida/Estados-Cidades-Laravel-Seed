<?php

use Illuminate\Database\Seeder;
use App\State;

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

        State::create(['id' => 1, 'name' => 'Acre', 'abbreviation' => 'AC']);
        State::create(['id' => 2, 'name' => 'Alagoas', 'abbreviation' => 'AL']);
        State::create(['id' => 3, 'name' => 'Amapá', 'abbreviation' => 'AP']);
        State::create(['id' => 4, 'name' => 'Amazonas', 'abbreviation' => 'AM']);
        State::create(['id' => 5, 'name' => 'Bahia', 'abbreviation' => 'BA']);
        State::create(['id' => 6, 'name' => 'Ceará', 'abbreviation' => 'CE']);
        State::create(['id' => 7, 'name' => 'Distrito Federal', 'abbreviation' => 'DF']);
        State::create(['id' => 8, 'name' => 'Espírito Santo', 'abbreviation' => 'ES']);
        State::create(['id' => 9, 'name' => 'Goiás', 'abbreviation' => 'GO']);
        State::create(['id' => 10, 'name' => 'Maranhão', 'abbreviation' => 'MA']);
        State::create(['id' => 11, 'name' => 'Mato Grosso', 'abbreviation' => 'MT']);
        State::create(['id' => 12, 'name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS']);
        State::create(['id' => 13, 'name' => 'Minas Gerais', 'abbreviation' => 'MG']);
        State::create(['id' => 14, 'name' => 'Pará', 'abbreviation' => 'PA']);
        State::create(['id' => 15, 'name' => 'Paraíba', 'abbreviation' => 'PB']);
        State::create(['id' => 16, 'name' => 'Paraná', 'abbreviation' => 'PR']);
        State::create(['id' => 17, 'name' => 'Pernambuco', 'abbreviation' => 'PE']);
        State::create(['id' => 18, 'name' => 'Piauí', 'abbreviation' => 'PI']);
        State::create(['id' => 19, 'name' => 'Rio de Janeiro', 'abbreviation' => 'RJ']);
        State::create(['id' => 20, 'name' => 'Rio Grande do Norte', 'abbreviation' => 'RN']);
        State::create(['id' => 21, 'name' => 'Rio Grande do Sul', 'abbreviation' => 'RS']);
        State::create(['id' => 22, 'name' => 'Rondônia', 'abbreviation' => 'RO']);
        State::create(['id' => 23, 'name' => 'Roraima', 'abbreviation' => 'RR']);
        State::create(['id' => 24, 'name' => 'Santa Catarina', 'abbreviation' => 'SC']);
        State::create(['id' => 25, 'name' => 'São Paulo', 'abbreviation' => 'SP']);
        State::create(['id' => 26, 'name' => 'Sergipe', 'abbreviation' => 'SE']);
        State::create(['id' => 27, 'name' => 'Tocantins', 'abbreviation' => 'TO']);
    }

}
