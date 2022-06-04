@extends('layouts.main')
@section('title', 'Faixas')
@section('content')
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Adicionar Faixa</h1>
        </div>
    </header>
    <a href="/">Voltar</a>
    <nav class="containerAdicao">
        <form action="/faixa" method="POST">
        @csrf
            <table class="FormAlbum">
                <tr>
                    <td> <label for="albumPert" class="lblPesquisa">Album pertencente</label></td>
                    <td><select name="albumPert" id="albumPert" class="lblPesquisa" required> 
                        <option value="none" selected disabled>Selecione o album</option>
                        @foreach($albuns as $album)
                        <option value="{{$album->id}}">{{$album->name}}</option>
                        @endforeach
                    </select></td>
                </tr>
                <tr>
                    <td><label for="nomeFaixa" class="lblPesquisa">Digite o Nome da Faixa</label></td>
                    <td><input type="text" name="nomeFaixa" class="faixa" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="tmpFaixa" class="lblPesquisa">Digite a duração da Faixa</label></td>
                    <td><input type="time" name="tmpFaixa" class="faixa" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="numFaixa" class="lblPesquisa">Digite o Numero da Faixa</label></td>
                    <td><input type="text" name="numFaixa" id="numFaixa" class="faixa" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonTD">
                        <input type="submit" class="btnAdd" value="Adicionar Faixa">
                    </td>
                </tr>
            </table>
        </form>

        <main class="containerAlbuns">
        <table class="FaixasAdd">
            <h1>Todas as Faixas</h1>
            <tr>
                <th></th>
                <th>Num</th>
                <th>Nome</th>
                <th>Duração</th>
                <th>Album</th>

            </tr>
        @foreach($faixas as $faixa)
        <tr>
                <td>
                <form action="/faixa/{{$faixa->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="BtnRemove">-</button></td>
                    </form>      
                <td>{{$faixa->num}}</td>
                <td>{{$faixa->name}}</td>
                <td>{{$faixa->duracao}}</td>
                @foreach($albuns as $album)
                    @if($album->id == $faixa->album_pert)
                <td>{{$album->name}}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
        </table>
    </main>



    </nav>


</section>

@endsection