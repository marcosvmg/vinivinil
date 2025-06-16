@extends('template')
@section('titulo', 'Discos')
@section('conteudo')

<section class="max-w-6xl mx-auto px-2 sm:px-6 py-6 sm:py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-10">

  @foreach($prod as $p)
  <article class="bg-stone-950 rounded-3xl shadow-lg flex flex-col min-h-[50vh] overflow-hidden">
    <div class="p-2 flex justify-center items-center">
      <img src="{{ asset('storage/' . $p->imagem) }}" alt="Imagem de {{ $p->nome }}" class="object-cover rounded-md w-full max-w-xs h-40 sm:h-48 mx-auto" />
    </div>
    <div class="px-2 sm:px-4 py-4 text-center mt-auto">
      <h3 class="text-lg sm:text-xl font-semibold text-yellow-300 mb-1">{{$p->nome}}</h3>
      <p class="text-yellow-100 font-medium text-base sm:text-lg">R${{$p->preco}}</p>
      <p class="text-yellow-100 font-medium text-base sm:text-lg">{{$p->quantidade}} Disponíveis</p>
    </div>
  </article>
  @endforeach
</section>

@endsection
