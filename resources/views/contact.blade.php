<x-layout>
  <div class="container-fluid text-white py-5 mt-5 bg-main">
    <div class="row justify-content-center pt-lg-5">
      <div class="col-12 text-center col-md-6">
        <h1 class="text-mix hidden">Contatti</h1>
      </div>    
      <div class="col-12 col-md-8">
        @if (session()->has('status'))
          <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
    </div>                    
  </div>


  <div class="container-fluid text-white bg-main pb-5">
    <div class="row justify-content-center pb-5">
      <div class="col-12 col-md-4 py-lg-5 my-5">
        <div class="col-12 col-md-8 about__box mx-auto shadow box hidden-left">
          <i class="uil uil-envelope-edit display-5 text-mix"></i>
          <h4 class="about__title">Email</h4>
          <span class="about__subtitle">user@gmail.com</span>
        </div>
        <div class="col-12 col-md-8 about__box my-5 mx-auto shadow box hidden-left">
          <i class="uil uil-whatsapp display-5 text-mix"></i>
          <h4 class="about__title">Whatsapp</h4>
          <span class="about__subtitle">999-888-777</span>
        </div>
      </div>
      <div class="col-12 col-md-6 hidden-right">
        <form class="p-lg-5 shadow" method="POST" action="{{route('contact_us_submit')}}">
          @csrf
          
          <div class="input__container mb-3">
            <label for="name">Nome completo</label>
            <input type="text" name="name" class="input bg-main" id="name">
            <span>Nome completo</span>
          </div>
          <div class="input__container mb-3">
            <label for="email">Indirizzo email</label>
            <input type="email" name="email" class="input" id="email" aria-describedly="emailHelp">
            <span>Email</span>
          </div>
          <div class=" input__container textarea mb-3">
            <label for="message">Lascia il tuo messaggio</label>
            <textarea name="message" id="message" cols="30" rows="7" class="input"></textarea>
            <span>Scrivi qui</span>
          </div>

          <button type="submit" class="button">Contattaci</button>
        </form>
      </div>    
    </div>                    
  </div>
</x-layout>