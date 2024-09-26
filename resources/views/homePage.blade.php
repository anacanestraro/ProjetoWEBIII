@extends('layouts.main')

@section('title', 'CãotinhoPet - HomePage')

@section('active', 'active')

@section('content')
<!--MAIN-->
<main class="flex-fill">
    <div class="container">
        <div class="row ">
            <div class="col-12 mt-3 ">
                <form action="post" class="justify-content-center justify-content-md-start mb-3">
                    <div class="input-group input-group-sm">
                        <input id="albumInput" type="text" class="form-control" placeholder="Digite aqui o nome do álbum">
                        <button id="buscarButton" class="btn btn-dark">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="containercards">
        
    </div>
</main>
@endsection