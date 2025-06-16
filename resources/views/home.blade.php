@extends('template')
@section('titulo', 'Home')
@section('conteudo')

<main class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">
  <img src="/assets/catalogo.jpg" alt="Catálogo de Discos" class="absolute inset-0 w-full h-full object-cover object-center  z-0" style="filter: blur(2px);" loading="lazy" />
  <div class="relative z-20 flex flex-col md:flex-row items-center justify-between w-full max-w-6xl lg:px-16 px-4 py-12">
    <section class="md:w-1/2 max-w-lg">
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-stone-950 leading-tight mb-6 drop-shadow-xl">
        COMPRE DISCOS
        <span
          id="typed"
          class="text-yellow-700 inline-block min-w-[8ch]"
        >
          <noscript>FÁCIL</noscript>
        </span>
        NA VINIVINIL
      </h1>
      <p class="mb-8 text-stone-800 text-base leading-relaxed drop-shadow">
        Aqui você encontra os melhores discos de vinil, com variedade, qualidade e atendimento especializado para colecionadores e apaixonados por música.
      </p>
      <a
        href="/sobre"
        class="bg-stone-900 hover:bg-stone-950 transition-colors duration-200 text-yellow-400 font-medium py-3 px-6 rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-stone-950 inline-block text-center shadow-lg"
      >
        SAIBA MAIS!
      </a>
    </section>
    <section class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
      <!-- Espaço reservado para possível conteúdo visual extra -->
    </section>
  </div>
</main>

<div class="w-full max-w-6xl mx-auto px-4 py-10 flex flex-col md:flex-row gap-8 items-center justify-center">
  <img src="/assets/curadoria.jpg" alt="Curadoria" class="w-full max-w-xs h-80 object-contain rounded-2xl transition-transform duration-300 hover:scale-105 cursor-pointer" loading="lazy" />
  <img src="/assets/experiencia.jpg" alt="Experiência" class="w-full max-w-xs h-80 object-contain rounded-2xl transition-transform duration-300 hover:scale-105 cursor-pointer" loading="lazy" />
  <img src="/assets/garantia.jpg" alt="Garantia" class="w-full max-w-xs h-80 object-contain rounded-2xl transition-transform duration-300 hover:scale-105 cursor-pointer" loading="lazy" />
</div>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const el = document.getElementById('typed');
    el.innerHTML = '';

    new Typed(el, {
      strings: ['RAROS', 'CLÁSSICOS', 'NACIONAIS', 'INTERNACIONAIS', 'EXCLUSIVOS'],
      typeSpeed: 60,
      backSpeed: 40,
      backDelay: 1800,
      loop: true,
      showCursor: false
    });
  });
</script>

@endsection
