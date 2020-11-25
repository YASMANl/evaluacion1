@extends('principal')
@section('contenido')
    <h1>Bienvenidos a la tienda oficial de tu mascota </h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.emermedica.com.co/wp-content/uploads/2020/04/MASCOTAS.jpg" class="d-block w-100" alt="..." height ="550">
            </div>
            <div class="carousel-item">
                <img src="https://madrid.consulado.gov.co/sites/default/files/news/main_image/mascotas.gif" class="d-block w-100" alt="..." height ="550">
            </div>
            <div class="carousel-item">
                <img src="https://www.nationalgeographic.com.es/medio/2020/02/11/los-beneficios-de-la-interaccion-entre-dueno-y-mascota-van-en-ambas-direcciones-la-mente-de-las-mascotas-tambien-se-favorece-de-los-lazos-estrechos-con-su-dueno_9e2b9dea_1280x720.jpg" class="d-block w-100" alt="..." height ="550">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@stop