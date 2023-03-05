<x-layout>
  <div class="container-fluid p-5 bg-main text-white ">
    <div class="row justify-content-center">
      <div class="col-8 py-lg-5 text-center hidden">
        <h1 class="text-mix pt-5">Servizi</h1>
        <p>Questa è la pagina dei nostri servizi, scegli il pacchetto più adatto alle tue esigenze.</p>
      </div>    
    </div>                    
  </div>

  <div class="container-fluid px-5 bg-main text-white ">
    <div class="row justify-content-center mx-auto">
      @foreach($services as $service)
      <div class="col-md-3 pb-5 my-5 box hidden">
        <x-card 
        id="{{$service['id']}}"
        name="{{$service['name']}}"
        description="{{$service['description']}}"
        deliverables="{{$service['deliverables']}}"
        timeframe="{{$service['timeframe']}}"
        price="{{$service['price']}}"
        img="{{$service['img']}}"
        />
      </div>
      @endforeach
    </div>                    
  </div>
</x-layout>