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
        <form action="/album" method="POST">
            @csrf
            <table class="FormAlbum">
                <tr>
                    <td><label for="nomeAlbum" class="lblPesquisa">Digite o Nome do album</label></td>
                    <td><input type="text" name="nomeAlbum" id="nomeAlbum" class="faixa" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><label for="anoAlbum" class="lblPesquisa">Digite o ano</label></td>
                    <td><input type="text" name="anoAlbum" id="anoAlbum" class="faixa" autocomplete="off"></td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonTD">
                        <input type="submit" class="btnAdd" value="Adicionar Album">
                    </td>
                </tr>
            </table>
        </form>
    </nav>

    
    <main class="containerAlbuns">
        <table class="AlbunsAdd">
            <h1>Todos os Albuns</h1>
            <tr>
                <th></th>
                <th>Ano</th>
                <th>Nome</th>
            </tr>

            @foreach($albuns as $album)
            <tr>
                <td>
                    <form action="/album/{{$album->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="BtnRemove">-</button></td>
                    </form>    
                <td>{{$album->dt_lanc}}</td>
                <td>{{$album->name}}</td>
            </tr>
            @endforeach
        </table>
    </main>



</section>

@endsection