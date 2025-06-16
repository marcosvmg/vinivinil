@extends('template')
@section('titulo', 'Lista de Contato')
@section('conteudo')

<div class="overflow-x-auto max-w-full px-6 py-8 bg-stone-900 rounded-md shadow-md">
  <table class="min-w-full border-collapse table-auto">
    <thead class="bg-stone-800 border-b border-yellow-500">
      <tr>
        <th class="text-left text-sm font-semibold text-yellow-300 px-6 py-3 border-r border-yellow-500">Nome</th>
        <th class="text-left text-sm font-semibold text-yellow-300 px-6 py-3 border-r border-yellow-500">Email</th>
        <th class="text-left text-sm font-semibold text-yellow-300 px-6 py-3 border-r border-yellow-500">Assunto</th>
        <th class="text-left text-sm font-semibold text-yellow-300 px-6 py-3 border-r border-yellow-500">Mensagem</th>
        <th class="text-center text-sm font-semibold text-yellow-300 px-6 py-3 border-r border-yellow-500">Ações</th>
        <th class="text-center text-sm font-semibold text-yellow-300 px-6 py-3">Responder</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cont as $c)
      <tr class="bg-stone-800 border-b border-stone-700 hover:bg-yellow-800 transition-colors duration-200">
        <td class="px-6 py-4 text-sm font-medium text-yellow-200 whitespace-normal max-w-xs break-words">{{ $c->nome }}</td>
        <td class="px-6 py-4 text-sm text-stone-300 whitespace-normal max-w-xs break-words">{{ $c->email }}</td>
        <td class="px-6 py-4 text-sm text-stone-300 whitespace-normal max-w-xs break-words">{{ $c->assunto }}</td>
        <td class="px-6 py-4 text-sm text-stone-300 whitespace-normal max-w-md break-words">{{ $c->mensagem }}</td>
        <td class="px-6 py-4 text-center whitespace-nowrap">
          <form action="/excluircontato/{{ $c->id }}" method="POST" onsubmit="return confirm('Confirma exclusão?');">
            @csrf
            @method('delete')
            <button
              type="submit"
              class="bg-red-700 hover:bg-red-800 text-white text-xs px-3 py-1 rounded transition focus:outline-none focus:ring-2 focus:ring-red-500"
            >
              Excluir
            </button>
          </form>
        </td>
        <td class="px-6 py-4 text-center whitespace-nowrap" x-data="{ open: false, mensagem: '' }">
          <button
            @click="open = !open"
            class="bg-yellow-500 hover:bg-yellow-600 text-stone-950 text-xs px-3 py-1 rounded transition focus:outline-none focus:ring-2 focus:ring-yellow-300"
          >
            Responder
          </button>
          <div
            x-show="open"
            x-transition
            class="mt-2 flex flex-col items-center space-y-2 max-w-xs mx-auto"
          >
            <textarea
              x-model="mensagem"
              rows="3"
              class="w-full px-2 py-1 text-xs border border-stone-700 bg-stone-900 rounded resize-none text-white focus:outline-none focus:ring-2 focus:ring-yellow-500"
              placeholder="Digite a resposta..."
            ></textarea>
            <button
              @click="
                if (mensagem.trim() !== '') {
                  alert('Mensagem enviada');
                  location.reload();
                } else {
                  alert('Digite uma mensagem antes de enviar');
                }
              "
              class="w-full bg-yellow-500 hover:bg-yellow-600 text-stone-950 text-xs py-1 rounded transition focus:outline-none focus:ring-2 focus:ring-yellow-300"
            >
              Enviar
            </button>
          </div>
        </td>
      </tr>
      @endforeach

      @if($cont->isEmpty())
        <tr>
          <td colspan="6" class="text-center py-6 text-stone-500 italic">Nenhum contato encontrado.</td>
        </tr>
      @endif
    </tbody>
  </table>
</div>

@endsection
