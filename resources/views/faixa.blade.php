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
        <form>

            <table class="FormAlbum">
                <tr>
                    <td> <label for="albumPert" class="lblPesquisa">Album pertencente</label></td>
                    <td><select name="albumPert" id="albumPert" class="lblPesquisa"> </select></td>
                </tr>
                <tr>
                    <td><label for="nomeFaixa" class="lblPesquisa">Digite o Nome da Faixa</label></td>
                    <td><input type="text" name="nomeFaixa" class="faixa"></td>
                </tr>
                <tr>
                    <td><label for="tmpFaixa" class="lblPesquisa">Digite a duração da Faixa</label></td>
                    <td><input type="text" name="tmpFaixa" class="faixa"></td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonTD">
                        <button id="btnAdd">Adicionar</button>
                    </td>
                </tr>
            </table>
        </form>

        <main class="containerAlbuns">
        <table class="FaixasAdd">
            <h1>Todas as Faixas</h1>
            <tr>
                <th>Num</th>
                <th>Nome</th>
                <th>Duração</th>
                <th>Album</th>
            </tr>

        </table>
    </main>



    </nav>


</section>

@endsection