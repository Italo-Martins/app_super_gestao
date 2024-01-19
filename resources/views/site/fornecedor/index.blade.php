<h3>Fornecedor</h3>


{{-- {{ 'Texto de teste' }} --}}
{{-- <?= 'Texto de teste' ?> --}}

{{-- Dessa forma que se comenta os codigos utilizando o blade --}}

{{-- Bloco de comando PHP --}}

{{-- @php
    // Para comentar uma linha

    /*
        Para comentar multiplas linhas
    */

    echo 'Texto de teste';

@endphp --}}


{{-- Usado para imprimir Arrays --}}
{{-- @dd($fornecedores) --}}

{{-- Operado if, elseif e else no blade --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
 <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

{{-- Operador Unless --}}

{{-- @dd($fonecedores) --}}

{{-- Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
<br> --}}

{{-- Função isset --}}

{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
@endisset --}}

{{-- Função empty --}}

{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['CNPJ'] }}
    @empty($fornecedores[0]['CNPJ'])
        Vazio
    @endempty
@endisset --}}


<!-- Operador condicional de valor default -->

{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['CNPJ'] ?? 'Valor Default' }}
@endisset --}}

<!-- Switch Case -->

{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['CNPJ'] ?? 'Valor Default' }}
    <br>
    Telefone: {{ $fornecedores[0]['dd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }}
    @switch($fornecedores[1]['dd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Forntaleza - CE
            @break
        @case ('85')
            Juiz de Fora - MG
            @break
        @default
            Estado não identificado

    @endswitch
@endisset --}}


<!-- Operador FOR -->

{{-- @isset($fornecedores)
    @for($i = 0;isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['CNPJ'] ?? 'Valor Default' }}
        <br>
        Telefone: {{ $fornecedores[$i]['dd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset --}}


<!-- Operador While -->

{{-- @isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['CNPJ'] ?? 'Valor Default' }}
        <br>
        Telefone: {{ $fornecedores[$i]['dd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset --}}


<!-- Comando FOREACH -->

{{-- @isset($fornecedores)
    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['CNPJ'] ?? 'Valor Default' }}
        <br>
        Telefone: {{ $fornecedor['dd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset --}}

<!-- Comando FORELSE -->

{{-- @isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['CNPJ'] ?? 'Valor Default' }}
        <br>
        Telefone: {{ $fornecedor['dd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <hr>
        @empty
            Não existem fornecedores cadastrados!!!
    @endforelse
@endisset --}}

<!-- Variavel LOOP -->

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        @if ($loop->first)
            Numero de interações: {{ $loop->count }}
            <br>
            Primeira interação
            <br>
        @endif
        Intereção Atual: {{ $loop->iteration}}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['CNPJ'] ?? 'Valor Default' }}
        <br>
        Telefone: {{ $fornecedor['dd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <hr>

        @if ($loop->last)
            Ultima interação
        @endif

        @empty
            Não existem fornecedores cadastrados!!!
    @endforelse
@endisset



