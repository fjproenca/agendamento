@extends('layout')

@section('cabecalho', 'Listagem de Reservas')


@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif
    
    
    <a href="/reserva/criar" class="btn btn-dark mb-2">
        Adicionar
    </a>

    <table class="table table-dark">

        <thead>
            <tr>
                <th>Id</th>
                <th>Nome da Atividade</th>             
                <th>Solicitante</th>
                <th>E-mail</th>
                <th>Departamento</th>
                <th>Descrição</th>
                <th>Obs</th>
                <th>Status</th>
                <th>Usuário</th>
                <th>Unidade</th>
            </tr>
        </thead>

        <tbody>
         
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id_reserva }}</td>
                    <td>{{ $reserva->nome_atividade }}</td>
                    <td>{{ $reserva->nome_solicitante }}</td>
                    <td>{{ $reserva->email }}</td>
                    <td>{{ $reserva->departamento }}</td>
                    <td>{{ $reserva->descricao_atividade }}</td>
                    <td>{{ $reserva->obs }}</td>
                    <td>{{ $reserva->status }}</td>
                    <td>{{ $reserva->name }}</td>
                    <td>{{ $reserva->nome_unidade }}</td>
                    
                    
                    <td>
                        <div class="d-flex justify-content-center">

                            
                                <a href="#" class="btn btn-primary btn-sm mr-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                           

                            
                                <a href="#" class="btn btn-success btn-sm mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            

                            
                                <form action="#" method="POST" 
                                onsubmit="return confirm('Tem certeza que deseja excluir o reserva ?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    
@endsection