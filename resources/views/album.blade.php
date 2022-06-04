@extends('layouts.main')
@section('title', 'Albuns')
@section('content')
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Adicionar Album</h1>
        </div>
    </header>
    <a href="/">Voltar</a>
    <nav class="containerAdicao">
        <form>

            <table class="FormAlbum">
                <tr>
                    <td><label for="nomeFaixa" class="lblPesquisa">Digite o Nome do album</label></td>
                    <td><input type="text" name="nomeFaixa" class="faixa"></td>
                </tr>
                <tr>
                    <td><label for="tmpFaixa" class="lblPesquisa">Digite o ano</label></td>
                    <td><input type="text" name="tmpFaixa" class="faixa"></td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonTD">
                        <button id="btnAdd">Adicionar</button>
                    </td>
                </tr>
            </table>
        </form>
    </nav>

    
    <main class="containerAlbuns">
        <table class="AlbunsAdd">
            <h1>Todos os Albuns</h1>
            <tr>
                <th>Ano</th>
                <th>Nome</th>
                <th>Operação</th>
            </tr>

            @foreach($albuns as $album)
            <tr>
                <td>{{$album->dt_lanc}}</td>
                <td>{{$album->name}}</td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </main>



</section>

@endsection