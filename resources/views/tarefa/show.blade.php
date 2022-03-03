@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $tarefa->tarefa }}</div>

                <div class="card-body">
                    <fieldset disabled>    
                        <div class="mb-3">
                            <label class="form-label">Data limite conclusão</label>
                            <input type="date" class="form-control" value="{{ $tarefa->data_limite_conclusao }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hora</label>
                            <input type="tipe" class="form-control" value="{{ $tarefa->hora }}">
                        </div>                                            
                        <div class="mb-3">
                            <label class="form-label">Nota</label>
                            <textarea class="form-control" rows="5">{{ $tarefa->nota }}</textarea>
                        </div>
                    </fieldset>    
                    <div class="row">
                        <!-- Botão Voltar -->
                        <div class="ml-3">
                        <a href="{{ route('tarefa.index') }}" class="btn btn-primary">Voltar</a>
                        </div>                                            
                        <div class="ml-3">
                        <!-- Botão Editar -->
                        <a href="{{ route('tarefa.edit', $tarefa->id) }}" class="btn btn-success" 
                            role="button" title="Editar" alt="Editar">Editar
                        </a>
                        </div>                                            
                        <div class="ml-3">
                        <!-- Botão Excluir -->                    
                        <form id="form_{{ $tarefa->id }}" method="post" action="{{ route('tarefa.destroy', ['tarefa' => $tarefa->id]) }}">
                            @method('DELETE')
                            @csrf                                            
                        </form>
                        <a href="#" class="btn btn-danger" role="button" title="Excluir" alt="Excluir"
                            onclick="if (confirm('Deseja excluir esta tarefa?')) {
                                        document.getElementById('form_{{ $tarefa->id }}').submit();
                                    }">
                            Excluir
                        </a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
