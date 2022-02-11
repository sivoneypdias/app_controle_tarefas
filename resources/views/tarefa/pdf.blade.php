<h2> Lista de Tarefas </h2>

<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data limite conclusão</th>              
                            </tr>
                        </thead>
                        <tbody>

                            <?php //  dd($tarefas); ?>

                            @foreach ($tarefas as $key => $t)
                                <tr>
                                    <th scope="row">{{ $t['id'] }}</th>
                                    <td>{{ $t['tarefa'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime($t['data_limite_conclusao']))}}</td>                            
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    