@extends('template')
@section('titulo', 'Dashboard')
@section('conteudo')

<section class="min-h-[80vh] flex flex-col justify-center px-2 sm:px-4 text-stone-100">
  <div class="max-w-7xl mx-auto">

    <div class="mb-8 sm:mb-12 text-center">
      <h2 class="text-2xl sm:text-3xl font-bold text-white">
        Bem-vindo(a), {{ session('usuario_nome') }}
      </h2>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 sm:gap-8">

      <a href="frmusuario"
        class="block p-10 bg-stone-950 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out min-h-[320px]">
        <div class="flex flex-col items-center justify-center h-full">
          <img src="https://cdn-icons-png.flaticon.com/512/153/153643.png" alt="Ícone de Usuário"
            class="h-20 w-20 mb-6 p-3 bg-stone-400 rounded-full">
          <h5 class="text-lg font-bold text-white">Cadastro de Usuários</h5>
          <p class="text-sm text-stone-400 mt-3">Criar novo usuário</p>
        </div>
      </a>

      <a href="frmproduto"
        class="block p-10 bg-stone-950 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out min-h-[320px]">
        <div class="flex flex-col items-center justify-center h-full">
          <img src="https://cdn-icons-png.flaticon.com/512/7033/7033070.png" alt="Ícone de Disco"
            class="h-20 w-20 mb-6 p-3 bg-stone-400 rounded-full">
          <h5 class="text-lg font-bold text-white">Cadastro de Discos</h5>
          <p class="text-sm text-stone-400 mt-3">Adicionar novo disco</p>
        </div>
      </a>

      <a href="usuarios"
        class="block p-10 bg-stone-950 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out min-h-[320px]">
        <div class="flex flex-col items-center justify-center h-full">
          <img src="https://cdn-icons-png.flaticon.com/512/74/74472.png" alt="Ícone de Lista de Usuários"
            class="h-20 w-20 mb-6 p-3 bg-stone-400 rounded-full">
          <h5 class="text-lg font-bold text-white">Lista de Usuários</h5>
          <p class="text-sm text-stone-400 mt-3">Visualizar todos os usuários</p>
        </div>
      </a>

      <a href="listaproduto"
        class="block p-10 bg-stone-950 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out min-h-[320px]">
        <div class="flex flex-col items-center justify-center h-full">
          <img src="https://images.vexels.com/media/users/3/151870/isolated/preview/8b1a89d3f271913146d4cd63f3920464-icone-de-traco-da-lista-de-verificacao-medica.png"
            alt="Ícone de Lista de Discos" class="h-20 w-20 mb-6 p-3 bg-stone-400 rounded-full">
          <h5 class="text-lg font-bold text-white">Lista de Discos</h5>
          <p class="text-sm text-stone-400 mt-3">Visualizar todos os discos</p>
        </div>
      </a>

      <a href="listacontato"
        class="block p-10 bg-stone-950 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out min-h-[320px]">
        <div class="flex flex-col items-center justify-center h-full">
          <img src="https://cdn-icons-png.flaticon.com/512/88/88271.png" alt="Ícone de Lista de Contatos"
            class="h-20 w-20 mb-6 p-3 bg-stone-400 rounded-full">
          <h5 class="text-lg font-bold text-white">Lista de Contatos</h5>
          <p class="text-sm text-stone-400 mt-3">Visualizar todos os contatos e seus feedbacks</p>
        </div>
      </a>

    </div>
  </div>
</section>

@endsection
