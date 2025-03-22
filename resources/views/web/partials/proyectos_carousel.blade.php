<div class="project-carousel owl-carousel">

    @foreach ($proyectos as $item)
        <!-- Project Carousel Item 1 -->
        <a href="#{{ $item->slug }}" class="project-item item-shadow popup-with-zoom-anim {{ $item->slug_tipo_proyecto }}">
            <img alt="" class="img-responsive" src="/storage/{{ $item->imagen_presentacion }}">
            <div class="project-hover">
                <div class="project-hover-content">
                    <h3 class="project-title">{!! $item->titulo_slider !!}</h3>
                    <p class="project-description">
                        {{ $item->descripcion_detalle }}
                    </p>
                </div>
            </div>
            <span class="link-arrow">Ver proyecto <i class="icon ion-ios-arrow-right"></i></span>
        </a>
    @endforeach

</div>

@foreach ($proyectos as $item)
    <!-- Project Modal Dialog 1 -->
    <div id="{{ $item->slug }}" class="container zoom-anim-dialog mfp-hide">
        <div class="row">
            <div class="col-lg-8"><img alt="" class="project-detail-img" src="/storage/{{ $item->imagen_detalle }}"></div>
            <div class="col-lg-4">
                <h3 class="project-detail-title">{{$item->titulo }}</h3>
                <p class="project-detail-text">{{$item->descripcion}}</p>
                <ul class="project-detail-list text-dark">
                    <li>
                        <span class="left">Cliente:</span>
                        <span class="right">{{ $item->cliente }}</span>
                    </li>
                    <li>
                        <span class="left">Culminación:</span>
                        <span class="right">{{ $item->fecha_termino_formateada }}</span>
                    </li>
                    <li>
                        <span class="left">Tipo de proyecto:</span>
                        <span class="right">{{ $item->tipoProyecto->nombre }}</span>
                    </li>
                    <li>
                        <span class="left">Arquitectos:</span>
                        <span class="right">{{ $item->nombre_arquitecto }}</span>
                    </li>
                    <li>
                        <span class="left">Presupuesto:</span>
                        <span class="right">${{ $item->presupuesto }}</span>
                    </li>
                </ul>
                <div class="project-detail-meta">
                    <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                    <div class="social-list pull-sm-right">
                        @foreach ($redes_sociales as $item)
                            <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
