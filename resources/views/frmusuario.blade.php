@extends('template')
@section('titulo', 'Cadastrar')
@section('conteudo')

<section class="flex flex-col items-center justify-center min-h-[80vh] px-6 py-16 text-stone-100">
  <div class="w-full max-w-xl bg-stone-950 rounded-md shadow-lg p-8 sm:p-10">

    <h1 class="text-3xl font-bold text-center text-yellow-300 mb-6">Cadastrar Novo Usuário</h1>

    <form method="POST" action="/addusuario" class="space-y-6">
      @csrf

      <div>
        <label class="block text-sm font-medium text-stone-300 mb-1" for="nome">Nome</label>
        <input
          type="text"
          name="nome"
          id="nome"
          autocomplete="username"
          required
          class="w-full px-4 py-3 rounded-lg bg-stone-800 border border-stone-700 text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
          placeholder="Digite seu nome"
        />
      </div>

      <div>
        <label class="block text-sm font-medium text-stone-300 mb-1" for="email">E-mail</label>
        <input
          type="email"
          name="email"
          id="email"
          autocomplete="email"
          required
          class="w-full px-4 py-3 rounded-lg bg-stone-800 border border-stone-700 text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
          placeholder="Digite seu e-mail"
        />
      </div>

      <div>
        <label class="block text-sm font-medium text-stone-300 mb-1" for="senha">Senha</label>
        <input
          type="password"
          name="senha"
          id="senha"
          autocomplete="current-password"
          required
          class="w-full px-4 py-3 rounded-lg bg-stone-800 border border-stone-700 text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
          placeholder="Digite sua senha"
        />
      </div>

      <div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-yellow-500 hover:bg-yellow-600 transition-colors duration-300 text-stone-950 font-medium rounded-xl focus:outline-none focus:ring-2 focus:ring-yellow-500"
        >
          Cadastrar
        </button>
      </div>
    </form>
  </div>
</section>

@endsection
