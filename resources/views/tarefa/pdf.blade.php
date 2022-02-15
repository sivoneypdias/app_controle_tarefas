<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            .page-break {
                page-break-after: always;
            }

            .titulo {
                border: 1px;
                background-color: #c2c2c2;
                text-align: center;
                width: 100%;
                text-transform: uppercase;
                font-weight: bold;
                margin-bottom: 25px; 
            }

            .table th {
                text-align: left;
            }


        </style>    
    </head>
    <body>    

        <div class="titulo"> Lista de Tarefas </div>

        <table class="table" style="width: 100%;">
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

        <div class="page-break"></div>
        <h1>Page 2</h1>

    </body>    
</html>                                    