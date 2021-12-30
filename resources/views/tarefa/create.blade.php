@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Tarefa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('tarefa.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tarefa</label>
                            <input type="text" class="form-control" name="tarefa" value="{{ old('tarefa') }}">                            
                        </div>
                         @if($errors->has('tarefa')) 
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('tarefa') }}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Data limite conclusão</label>
                            <input type="date" class="form-control" name="data_limite_conclusao" value="{{ old('data_limite_conclusao') }}">
                        </div>
                        @if($errors->has('data_limite_conclusao')) 
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('data_limite_conclusao') }}
                            </div>
                        @endif                        
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
