@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <tabela-lista
            v-bind:titulos="['teste', 'outros']"
            v-bind:itens="[[1,'PHP OO', 'Curso de PHO OO'], [2, 'Vue JS', 'Curso de Vue JS']]"
            ordem="asc" ordemcol="2"
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="7887522323"
            ></tabela-lista>

            </painel>
    </pagina>
@endsection