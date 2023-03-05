<!DOCTYPE html>
<html>

    <x-head />

    <body>

      <header>
        <x-navbar />
      </header>

      <main>
        <div class="min-vh-100">
          {{$slot}}
        </div>
      </main>

      <x-footer />

    </body>
</html>
