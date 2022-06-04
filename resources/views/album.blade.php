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
        <label for="nomeFaixa" class="lblPesquisa">Digite o Nome do album</label>
                <input type="text" name="nomeFaixa" class="faixa">
                <label for="tmpFaixa" class="lblPesquisa">Digite o ano</label>
                <input type="text" name="tmpFaixa" class="faixa">
                <br><br>
            <button id="btnAdd">Adicionar</button>
        </form>
    </nav>

</section>

@endsection