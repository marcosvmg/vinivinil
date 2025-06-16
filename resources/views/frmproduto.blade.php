@extends('template')
@section('titulo', 'Cadastro de Disco')
@section('conteudo')

<section class="flex flex-col items-center justify-center min-h-[80vh] px-6 py-16 text-stone-100">
  <div class="w-full max-w-xl bg-stone-950 rounded-md shadow-lg p-8 sm:p-10">

    <h1 class="text-3xl font-bold text-center text-yellow-300 mb-6">Cadastrar Disco</h1>

    <form action="/addproduto" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf

      <div>
        <label for="nome" class="block text-sm font-medium text-stone-300 mb-1">Nome do Disco</label>
        <input
          type="text"
          id="nome"
          name="nome"
          required
          class="w-full px-4 py-3 rounded-lg bg-stone-800 border border-stone-700 text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
          placeholder="Digite o nome do disco"
        />
      </div>

      <div>
        <label for="preco" class="block text-sm font-medium text-stone-300 mb-1">Preço</label>
        <input
          type="number"
          id="preco"
          name="preco"
          required
          step="0.01"
          min="0"
          class="w-full px-4 py-3 rounded-lg bg-stone-800 border border-stone-700 text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
          placeholder="Digite o preço"
        />
      </div>

      <div>
        <label for="quantidade" class="block text-sm font-medium text-stone-300 mb-1">Quantidade</label>
        <input
          type="number"
          id="quantidade"
          name="quantidade"
          required
          min="0"
          class="w-full px-4 py-3 rounded-lg bg-stone-800 border border-stone-700 text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
          placeholder="Digite a quantidade"
        />
      </div>

      <div>
        <label for="imagem" class="block text-sm font-medium text-stone-300 mb-1">Imagem</label>
        <input
          type="file"
          id="imagem"
          name="imagem"
          accept="image/*"
          class="w-full px-4 py-2 rounded-lg bg-stone-800 border border-stone-700 text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
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
