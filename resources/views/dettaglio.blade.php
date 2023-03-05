<x-layout>
  <div class="container-fluid min-vh-100 p-5 bg-main text-white">
  <div class="row align-items-center">
    <div class="col-md-12 text-center py-5">
      <h2>{{$service['name']}}</h2>
    </div>
    <div class="col-md-4 ps-lg-5 pb-5 hidden-left">
      <img src="{{$service['img']}}" alt="Immagine prodotto" class="img-fluid">
    </div>
    <div class="col-md-8 ps-lg-5">
      <p class="box hidden">{{$service['description']}}</p>
      <h4 class="mb-3 box hidden">Requisiti del cliente</h4>
      <ul class="box hidden">
        <li>Materiale grafico e testuale da includere nella pagina web (se disponibile)</li>
        <li>Dominio e hosting del sito web (se già acquisiti)</li>
        <li>Accesso all'amministrazione del sito web (se richiesto)</li>
      </ul>
      <h4 class="box hidden">Processo di lavoro</h4>
      <ul class="box hidden">
        <li>Da definire con il cliente.</li>      
      </ul>
      <p class="box hidden"><strong>Tempo di realizzazione: </strong>{{$service['timeframe']}} settimane a partire dalla data di inizio del progetto.</p>
      <p class="box hidden"><strong>Prezzo:</strong> A partire da {{$service['price']}}, il prezzo finale dipende dalla complessità del design e delle funzionalità richieste.</p>
      <div class="col-md-12 pt-5">
        <a href="/contact" type="submit" class="button px-5 m-5 box hidden-right">Contattaci</a>
        <a href="/services" type="submit" class="button px-5 m-5 box hidden-right">Torna Indietro</a>
      </div>
    </div>
  </div>
</div>

</x-layout>