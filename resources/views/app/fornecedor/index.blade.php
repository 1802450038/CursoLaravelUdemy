<h1>Index fornecedor</h1>

{{--Teste de comentario --}}




@php
	//Comentario php
@endphp


{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) <10)
    <h3>Existem fornecedores cadastrados</h3>
    @elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
    @else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

@php
    /*
    if(!<condicao>) {} // enquanto executa se o retorno for true
    */
@endphp
{{-- @dd($fornecedores); --}}

Fornecedor :: {{$fornecedores[0]['nome']}}
<br>
Status :: {{$fornecedores[0]['status']}}
<br>
@if(!($fornecedores[0]['status'] == 'S'))
Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- Executa se o retorno da condição for false -->
Fornecedor inativo
@endunless
<br>




{{-- @unless executa se o retorno for false --}}

