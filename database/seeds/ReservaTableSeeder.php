<?php

use Illuminate\Database\Seeder;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserva')->insert([
            [
                
                'nome_atividade' => 'atividade 1',
                'nome_solicitante' => 'Marcelo',
                'e-mail' => 'marcelo@',
                'telefone' => '00000000000',
                'departamento' => 'DCC',
                'descricao_atividade' => 'DCC',
                'obs' => 'DCC',
                'status' => 'DCC',
                'id_unidade' => '1',
                'id_usuario'=>'1'
                              
            ],

            [
                
                'nome_atividade' => 'atividade 2',
                'nome_solicitante' => 'Marcelo 2',
                'e-mail' => 'marcelo2@',
                'telefone' => '00000000000',
                'departamento' => 'DCC 2',
                'descricao_atividade' => 'DCC 2',
                'obs' => 'DCC',
                'status' => 'DCC',
                'id_unidade' => '1',
                'id_usuario'=>'2'
                              
            ],

            [
                
                'nome_atividade' => 'atividade 3',
                'nome_solicitante' => 'Marcelo3',
                'e-mail' => 'marcelo3@',
                'telefone' => '00000000000',
                'departamento' => 'DCC',
                'descricao_atividade' => 'DCC',
                'obs' => 'DCC',
                'status' => 'DCC',
                'id_unidade' => '2',
                'id_usuario'=>'2'
                              
            ],

            [
                
                'nome_atividade' => 'atividade 4',
                'nome_solicitante' => 'Marcelo4',
                'e-mail' => 'marcelo4@',
                'telefone' => '00000000000',
                'departamento' => 'DCC',
                'descricao_atividade' => 'DCC',
                'obs' => 'DCC',
                'status' => 'DCC',
                'id_unidade' => '3',
                'id_usuario'=>'1'
                              
            ],

            [
                
                'nome_atividade' => 'atividade 5',
                'nome_solicitante' => 'Marcelo5',
                'e-mail' => 'marcelo5@',
                'telefone' => '00000000000',
                'departamento' => 'DCC',
                'descricao_atividade' => 'DCC',
                'obs' => 'DCC',
                'status' => 'DCC',
                'id_unidade' => '5',
                'id_usuario'=>'3'
                              
            ],

        ]);


         
    }
}
