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
    <a href="/">Voltar</a>
    <nav class="containerPesquisa">
        <form>
            <label for="pesquisa" class="lblPesquisa">Digite uma palavra chave</label><br>
            <input type="text" name="pesquisa" id="pesquisa" autocomplete="off">
            <button id="btnPesquisar">Procurar</button>
        </form>
    </nav>

    <main class="containerAlbuns">
        <table class="AlbunsT">
            @foreach($albuns as $album)
            <tr>
                <th colspan="2">{{$album->name}}, {{$album->dt_lanc}}</th>
            </tr>
            <tr>
                <td>N°</td>
                <td>Faixa</td>
                <td>Duração</td>
            </tr>
            @foreach($faixas as $faixa)
            @if($faixa->album_pert == $album->id)
            <tr>
                <td>{{$faixa->num}}</td>
                <td>{{$faixa->name}}</td>
                <td>{{$faixa->duracao}}</td>

            </tr>
            @endif

            @endforeach
            @endforeach

        </table>
    </main>

</section>

@endsection