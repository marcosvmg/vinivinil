@extends('template')
@section('titulo', 'Login')
@section('conteudo')

<section class="flex flex-col items-center justify-center min-h-[80vh] px-6 py-16 text-stone-100">
  <div class="w-full max-w-xl bg-stone-950 rounded-md shadow-lg p-8 sm:p-10">

    <h1 class="text-3xl font-bold text-center text-yellow-300 mb-6">Login</h1>

    <form method="POST" action="/logar" class="space-y-6">
      @csrf

      <div>
        <label class="block text-sm font-medium text-stone-300 mb-1" for="email">E-mail</label>
        <input
          type="email"
          name="email"
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
          Entrar
        </button>
      </div>
    </form>

    <div class="mt-6 text-center">
      <p class="text-sm text-stone-400">
        Não tem uma conta?
        <a href="frmusuario" class="text-yellow-400 hover:underline">Cadastre-se aqui</a>
      </p>
    </div>

  </div>
</section>

@endsection
