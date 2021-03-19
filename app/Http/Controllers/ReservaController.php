<?php

namespace App\Http\Controllers;

use App\User;
use App\Reserva;
use App\Unidade;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function index(Request $request)
    {
        $mensagem = $request->session()->get('mensagem');
        
        $reservas = DB::table('reserva')
        ->join('users', 'users.id', '=', 'reserva.id_usuario')
        ->join('unidades', 'unidades.id_unidade', '=', 'reserva.id_unidade')
        ->select('reserva.*', 'users.id', 'users.name', 'unidades.id_unidade', 'unidades.nome_unidade')
        ->get();

       
        return view('reserva.index', ['reservas' => $reservas,  'mensagem'  => $mensagem]);
    }

    // ATUALIZAR

    public function update(Request $request, $id_equipamento)
    {
        $equipamento = Equipamento::where('id_equipamento', $id_equipamento)->firstOrFail();    

        // validação
        $this->validate($request, [
            
            'nome_equipamento' => 'required|min:3',
            
        ]);

        $equipamento->where('id_equipamento', $id_equipamento)->update([
            
            'nome_equipamento'=>$request->nome_equipamento
        
        ]);

        // Imprimir em uma sessão flash
        $request->session()->flash(
            'mensagem', 
            "Infração de id {$request->id_equipamento} foi atualizada com sucesso!"
        );
        
        return redirect()->route('equipamentos_home');
    }

    public function edit($id_reserva)
    {
        //$equipamento = Equipamento::where('id_equipamento', $id_equipamento)->firstOrFail();

        $reservas = DB::table('reserva')
        ->join('users', 'users.id', '=', 'reserva.id_usuario')
        ->join('unidades', 'unidades.id_unidade', '=', 'reserva.id_unidade')
        ->join('periodo', 'periodo.id_reserva', '=', 'reserva.id_reserva')
        ->join('instancia', 'instancia.id_instancia', '=', 'periodo.id_instancia')
        ->join('equipamentos_x_reserva', 'equipamentos_x_reserva.id_reserva', '=', 'reserva.id_reserva')
        ->join('equipamentos', 'equipamentos.id_equipamento', '=', 'equipamentos_x_reserva.id_equipamento')
        ->select('reserva.*', 'users.id', 'users.name', 'unidades.id_unidade', 'unidades.nome_unidade',
        'periodo.*', 'instancia.*', 'equipamentos.*', 'equipamentos_x_reserva.*')
        ->where('reserva.id_reserva', $id_reserva)
        ->get();
        
        dd($reservas);
        exit();

        return view('equipamentos.edit', [ 'reserva' => $reserva ]);
    }
}
