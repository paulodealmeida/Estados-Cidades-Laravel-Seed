<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        DB::table('states')->insert([
            ['id' => 1, 'name' => 'Acre', 'abbreviation' => 'AC'],
            ['id' => 2, 'name' => 'Alagoas', 'abbreviation' => 'AL'],
            ['id' => 3, 'name' => 'Amapá', 'abbreviation' => 'AP'],
            ['id' => 4, 'name' => 'Amazonas', 'abbreviation' => 'AM'],
            ['id' => 5, 'name' => 'Bahia', 'abbreviation' => 'BA'],
            ['id' => 6, 'name' => 'Ceará', 'abbreviation' => 'CE'],
            ['id' => 7, 'name' => 'Distrito Federal', 'abbreviation' => 'DF'],
            ['id' => 8, 'name' => 'Espírito Santo', 'abbreviation' => 'ES'],
            ['id' => 9, 'name' => 'Goiás', 'abbreviation' => 'GO'],
            ['id' => 10, 'name' => 'Maranhão', 'abbreviation' => 'MA'],
            ['id' => 11, 'name' => 'Mato Grosso', 'abbreviation' => 'MT'],
            ['id' => 12, 'name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS'],
            ['id' => 13, 'name' => 'Minas Gerais', 'abbreviation' => 'MG'],
            ['id' => 14, 'name' => 'Pará', 'abbreviation' => 'PA'],
            ['id' => 15, 'name' => 'Paraíba', 'abbreviation' => 'PB'],
            ['id' => 16, 'name' => 'Paraná', 'abbreviation' => 'PR'],
            ['id' => 17, 'name' => 'Pernambuco', 'abbreviation' => 'PE'],
            ['id' => 18, 'name' => 'Piauí', 'abbreviation' => 'PI'],
            ['id' => 19, 'name' => 'Rio de Janeiro', 'abbreviation' => 'RJ'],
            ['id' => 20, 'name' => 'Rio Grande do Norte', 'abbreviation' => 'RN'],
            ['id' => 21, 'name' => 'Rio Grande do Sul', 'abbreviation' => 'RS'],
            ['id' => 22, 'name' => 'Rondônia', 'abbreviation' => 'RO'],
            ['id' => 23, 'name' => 'Roraima', 'abbreviation' => 'RR'],
            ['id' => 24, 'name' => 'Santa Catarina', 'abbreviation' => 'SC'],
            ['id' => 25, 'name' => 'São Paulo', 'abbreviation' => 'SP'],
            ['id' => 26, 'name' => 'Sergipe', 'abbreviation' => 'SE'],
            ['id' => 27, 'name' => 'Tocantins', 'abbreviation' => 'TO'],
        ]);
    }

}
