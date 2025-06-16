@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')

<div class="min-h-screen bg-stone-900 text-stone-100 flex flex-col">

  <!-- Hero / Banner -->
  <section class="bg-gradient-to-r from-yellow-800 via-yellow-800 to-yellow-700 py-12 px-4 sm:py-20 sm:px-6 text-center md:px-12 rounded-md">
    <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold max-w-4xl mx-auto leading-tight drop-shadow-lg">
      Sobre o <span class="text-yellow-300">VINIVINIL</span>
    </h1>
    <p class="mt-4 sm:mt-6 max-w-3xl mx-auto text-base sm:text-xl text-stone-300 font-light tracking-wide">
      Uma plataforma inovadora para amantes de discos de vinil — focada em usabilidade, tecnologia de ponta e design responsivo.
    </p>
  </section>

  <!-- Conteúdo Principal -->
  <section class="flex-grow max-w-5xl mx-auto px-2 sm:px-6 md:px-12 py-8 sm:py-16 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-16">

    <!-- Equipe -->
    <aside class="bg-stone-800 rounded-xl p-4 sm:p-8 flex flex-col justify-center shadow-lg mb-8 md:mb-0">
      <h3 class="text-xl sm:text-2xl font-semibold mb-4 sm:mb-6 text-center text-yellow-200 tracking-wide">
        Nossa Equipe
      </h3>
      <ul role="list" class="space-y-4 sm:space-y-6 text-center text-base sm:text-lg text-stone-300">
        <li class="relative group">
          <span class="block text-yellow-300 font-semibold text-lg sm:text-xl">Marcos Vinícius</span>
          <p class="mt-1 text-stone-400 group-hover:text-yellow-200 transition-colors text-sm sm:text-base">
            Desenvolvedor FullStack & UX Designer
          </p>
        </li>
        <li class="relative group">
          <span class="block text-yellow-300 font-semibold text-lg sm:text-xl">Vinícius Lucas</span>
          <p class="mt-1 text-stone-400 group-hover:text-yellow-200 transition-colors text-sm sm:text-base">
            Desenvolvedor Back-end & Especialista Laravel
          </p>
        </li>
      </ul>
    </aside>

    <!-- Texto sobre o projeto -->
    <article class="space-y-4 sm:space-y-6">
      <h2 class="text-2xl sm:text-3xl font-semibold border-b border-yellow-500 pb-2 sm:pb-3 max-w-max">
        O que é o VINIVINIL?
      </h2>
      <p class="text-stone-300 leading-relaxed text-base sm:text-lg">
        Criado por <strong class="text-yellow-300">Marcos Vinícius</strong> e <strong class="text-yellow-300">Vinícius Lucas</strong>, este site conecta colecionadores e apaixonados por música por meio de uma interface intuitiva, rápida e segura. Construído com tecnologias sólidas — Laravel e TailwindCSS — o foco é garantir uma experiência fluida e acessível em todos os dispositivos.
      </p>
      <p class="text-stone-400 leading-relaxed text-base sm:text-lg">
        Nosso compromisso é com a qualidade técnica e com a comunidade de amantes de vinil, proporcionando cadastro fácil, catálogo de discos completo e suporte contínuo.
      </p>
      <div class="flex justify-end">
        <button
          class="cursor-pointer mt-4 sm:mt-6 inline-block bg-yellow-500 hover:bg-yellow-600 text-stone-950 font-semibold py-2 sm:py-3 px-4 sm:px-8 rounded-md transition-colors duration-200 focus:outline-none focus:ring-4 focus:ring-yellow-400 text-sm sm:text-base"
          onclick="window.location.href='contato'"
          aria-label="Entre em contato com o VINIVINIL"
        >
          FALE CONOSCO
        </button>
      </div>
    </article>

  </section>


</div>

@endsection
