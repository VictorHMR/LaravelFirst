@extends('layouts.main')
@section('title', 'Menu')
@section('content')
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Discografia</h1>
        </div>
    </header>

    <main class="containerMenu">
        <a href="/listar" class="buttonMenu">Listar Tudo</a>
        <a href="/album" class="buttonMenu">Controlar Albuns</a>
        <a href="/faixa" class="buttonMenu">Controlar Faixas</a>

    </main>





</section>

@endsection