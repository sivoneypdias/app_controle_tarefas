@component('mail::message')
# {{ $tarefa }}

Data de limite de conclusão: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Ver a Tarefa
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
