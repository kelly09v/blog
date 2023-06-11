@extends('layouts.app')

@section('content')
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slides as $index => $slide)
                <li data-target="#slider" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}">
                    <div class="carousel-caption">
                        <h3>{{ $slide['title'] }}</h3>
                        <p>{{ $slide['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="jumbotron">
        <h1>Bienvenido a la tienda virtual de colonias C&C</h1>
        <p>Esta es la página de inicio de mi sitio web. Aquí puedes encontrar tus fragancias favoritas y muy buen precio 
        .</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Sección 1</h2>
            <p>aromas frutales.</p>
        </div>
        <div class="col-md-6">
            <h2>Sección 2 </h2>
            <p>colonias suaves.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>seccion 3</h2>
            <p> oriental .</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2> sección 4 </h2>
                <p> woody .</p>
            </div>
    </div>
@endsection