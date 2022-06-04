@extends('layouts.main')
@section('title', 'Discografia')
@section('content')
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Discografia</h1>
        </div>
    </header>
<a href="/album">Adicionar Albuns</a> &nbsp;&nbsp;&nbsp;
<a href="/faixa">Adicionar Faixas</a>

    <nav class="containerPesquisa">
        <form>
            <label for="pesquisa" class="lblPesquisa">Digite uma palavra chave</label><br>
            <input type="text" name="pesquisa" id="pesquisa">
            <button id="btnPesquisar">Procurar</button>
        </form>
    </nav>

    <main class="containerAlbuns">
        <table class="AlbunsT">
            <tr>
                <th>Album:Irineu</th>
            </tr>
            <tr>
                <td>N°</td>
                <td>Faixa</td>
                <td>Duração</td>
            </tr>

            @for($i = 0; $i< count($numero);$i++)
            <tr>
                <td>{{$numero[$i]}}</td>
                <td>{{$faixa[$i]}}</td>
                <td>{{$duracao[$i]}}</td>

            </tr>
            @endfor
        </table>
    </main>

</section>

@endsection