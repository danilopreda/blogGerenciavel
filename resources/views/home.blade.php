@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                
                    Teste de Conteúdo..

                    <div class="row"> 
                    
                        <div class="col-md-4">

                            <caixa></caixa>

                        </div>

                        <div class="col-md-4">

                            <painel titulo="Conteúdo 2" cor="orange">

                                Teste de Conteúdo..

                            </painel>

                        </div>

                        <div class="col-md-4">

                            <painel titulo="Conteúdo 3" cor="panel-info">

                                Teste de Conteúdo..

                            </painel>

                        </div>
                    
                    </div>
                
                </painel>
            </div>
        </div>
    </div>
@endsection