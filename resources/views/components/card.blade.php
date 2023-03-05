<div class="card card-cs about__box shadow">
    <img src="{{$img}}" height="200rem" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column justify-content-between">
        <h5 class="card-title">{{$name}}</h5>
        <a href="{{route('services-dettaglio', ['id' => $id])}}" class="button mx-auto">Visualizza prodotto</a>
    </div>
</div>