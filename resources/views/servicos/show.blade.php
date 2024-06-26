<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Servicos') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <section class="author-details">
      <div class="author-content">
        <div class="author-meta">
          <span class="author-label">ID:</span>
          <span class="author-info">{{ $servico->id }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Nome:</span>
          <span class="author-info">{{ $servico->nome_servico }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">CPF:</span>
          <span class="author-info">{{ $servico->valor_unitario }}</span>
        </div>
        
      </div>
      <a href="{{ route('servicos.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>