@extends('layout')

@section('cabecalho', 'Listagem de Equipamentos')


@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif
    
    
    <a href="/equipamentos/criar" class="btn btn-dark mb-2">
        Adicionar
    </a>

    <table class="table table-dark">

        <thead>
            <tr>
                <th>Id</th>
                <th>Nome do Equipamento</th>             
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($equipamentos as $equipamento)
                <tr>
                    <td>{{ $equipamento->id_equipamento }}</td>
                    <td>{{ $equipamento->nome_equipamento }}</td>
                    
                    <td>
                        <div class="d-flex justify-content-center">

                            
                                <a href="{{ route('exibir_equipamento', $equipamento->id_equipamento)}}" class="btn btn-primary btn-sm mr-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                           

                            
                                <a href="{{ route('form_editar_equipamento', $equipamento->id_equipamento)}}" class="btn btn-success btn-sm mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            

                            
                                <form action="/equipamentos/excluir/{{ $equipamento->id_equipamento }}" method="POST" 
                                onsubmit="return confirm('Tem certeza que deseja excluir o equipamento ?')"
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