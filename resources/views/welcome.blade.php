
<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','CAD -CadastrarOlimpo')
<!-- cambiar el contido para mas de una linea -->
@section('content')

    <center><h1>HOME</h1></center>
    <h1><center>CadastrarOlimpo Usuário</center></h1>


    <a href="{{route('cadastros.create')}}"><center>Crear Cadastro</center></a>
    <br>
    <!--
    <a href="  /*route('cadastros.index')*/  ">Olhar Cadastros</a>
    -->
    <a href="{{route('cadastros.index')}}"><center>Olhar Cadastros</center></a>

    <br>
    <a href="http://192.168.2.111:3000/"><center>EXIT</center></a>
    <br>
    @endsection




