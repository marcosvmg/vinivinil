@extends('template')
@section('titulo', 'Lista de Discos')
@section('conteudo')

<div class="container mx-auto px-2 sm:px-6 py-2 sm:py-4">
  <div class="mb-2 sm:mb-4 text-right">
    <a href="/frmproduto"
       class="bg-yellow-500 hover:bg-yellow-600 text-stone-950 font-bold py-2 px-4 rounded transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-yellow-300">
      Adicionar Disco
    </a>
  </div>
</div>

<div class="flex flex-col">
  <div class="overflow-x-auto">
    <div class="py-2 inline-block min-w-full px-1 sm:px-6 lg:px-8">
      <div class="overflow-hidden rounded-lg shadow-md bg-stone-900">
        <table class="min-w-full table-auto border-collapse text-xs sm:text-sm">
          <thead class="bg-stone-800 border-b border-yellow-500">
            <tr>
              <th class="text-sm font-semibold text-yellow-300 px-6 py-3 text-left">#</th>
              <th class="text-sm font-semibold text-yellow-300 px-6 py-3 text-left">Nome do Disco</th>
              <th class="text-sm font-semibold text-yellow-300 px-6 py-3 text-left">Preço</th>
              <th class="text-sm font-semibold text-yellow-300 px-6 py-3 text-left">Quantidade</th>
              <th class="text-sm font-semibold text-yellow-300 px-6 py-3 text-left">Imagem</th>
              <th class="text-sm font-semibold text-yellow-300 px-6 py-3 text-left">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($prod as $p)
              <tr class="bg-stone-800 border-b border-stone-700 hover:bg-yellow-800 transition-colors duration-150">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-yellow-200">{{ $p->id }}</td>
                <td class="text-sm text-stone-300 font-light px-6 py-4 whitespace-nowrap">{{ $p->nome }}</td>
                <td class="text-sm text-stone-300 font-light px-6 py-4 whitespace-nowrap">R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                <td class="text-sm text-stone-300 font-light px-6 py-4 whitespace-nowrap">{{ $p->quantidade }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  @if($p->imagem)
                    <img src="{{ asset('storage/' . $p->imagem) }}" alt="Imagem de {{ $p->nome }}" class="w-16 h-16 object-cover rounded-md" />
                  @else
                    <span class="text-stone-500 italic text-sm">Sem Imagem</span>
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                  <a href="/frmeditproduto/{{$p->id}}"
                     class="bg-yellow-500 hover:bg-yellow-600 text-stone-950 font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-yellow-300">
                    Editar
                  </a>

                  <form action="/excluirproduto/{{$p->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                      class="bg-yellow-500 hover:bg-yellow-600 text-stone-950 font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-yellow-300">
                      Excluir
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach

            @if($prod->isEmpty())
              <tr>
                <td colspan="6" class="text-center py-6 text-gray-500 italic">Nenhum disco encontrado.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
