@extends('layout')

@section('cabecalho')
    @if(isset($reservas->id_id_reserva))
        Editar Reserva #{{ $reservas->id_reservas }}
    @else
        Criar Reserva
    @endif
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if(isset($equipamento->id_equipamento))
    <form action="{{ route('atualizar_equipamento', $equipamento->id_equipamento) }}" method="POST">
    @method('PUT')
@else
    <form action="{{ route('criar_equipamento') }}" method="POST">
@endif


    @csrf
    
        
    
    <div class="form-group">
        <label for="nome_equipamento">Nome do Equipamento</label>
        @if(isset($equipamento->nome_equipamento))
            <input type="text" name="nome_equipamento" id="nome_equipamento" class="form-control" 
            value="{{ old('nome_equipamento', $equipamento->nome_equipamento) ?? '' }}">
        @else
            <input type="text" name="nome_equipamento" id="nome_equipamento" class="form-control" 
            value="">
        @endif    
        
        
        
        
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>

</form>
            
@endsection