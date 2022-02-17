@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            Tarefas 
                        </div>    
                        <div class="col-6">
                            <div class="float-right">
                                <a href="{{ route('tarefa.create') }}" class="mr-3">
                                    Novo 
                                </a>
                                <a href="{{ route('tarefa.exportacao', ['extensao' => 'xlsx']) }}" class="mr-3">XLSX</a>
                                <a href="{{ route('tarefa.exportacao', ['extensao' => 'csv']) }}" class="mr-3">CSV</a>
                                <a href="{{ route('tarefa.exportacao', ['extensao' => 'pdf']) }}" class="mr-3">PDF</a>
                                <a href="{{ route('tarefa.exportar') }}" target="_blank">PDF V2</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>                                
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data limite conclusão</th>              
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $key => $t)
                                <tr>                                    
                                    <td>{{ $t['tarefa'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime($t['data_limite_conclusao']))}}</td>                            
                                    <td>
                                        <a href="{{ route('tarefa.edit', $t['id']) }}" class="btn btn-success" role="button" >
                                        <i class="material-icons">edit</i>
                                        </a>
                                    </td>                                     
                                    <td>                                    
                                        <form id="form_{{ $t['id'] }}" method="post" action="{{ route('tarefa.destroy', ['tarefa' => $t['id']]) }}">
                                            @method('DELETE')
                                            @csrf                                            
                                        </form>
                                        <a href="#" class="btn btn-danger" role="button" 
                                            onclick="if (confirm('Deseja excluir esta tarefa?')) {
                                                        document.getElementById('form_{{ $t['id'] }}').submit();
                                                    }">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <nav aria-label="Página de navegação de tarefas">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>
                            @for ($i = 1 ; $i  <= $tarefas->lastPage() ; $i++)
                                <li class="page-item {{ $tarefas->currentPage() == $i ? 'active': '' }}" >
                                    <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>
                        </ul>
                    </nav>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
