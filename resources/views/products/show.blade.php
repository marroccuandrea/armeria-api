<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dettagli Prodotto: ') . $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Pulsanti di Azione --}}
                    <div class="flex justify-between mb-6 border-b pb-4">
                        <a href="{{ route('products.index') }}"
                            class="text-indigo-600 hover:text-indigo-900 font-semibold">&larr; Torna all'elenco</a>
                        <a href="{{ route('products.edit', $product) }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                            Modifica
                        </a>
                    </div>

                    {{-- Dettagli del Prodotto --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-2xl font-bold mb-4">{{ $product->name }}</h3>

                            <!-- <p class="mb-4 text-gray-700">
                                ID: {{ $product->id }}
                            </p> -->

                            {{-- Tabella Dettagli Tecnici --}}
                            <dl class="divide-y divide-gray-100">
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Categoria</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ $product->category }}
                                    </dd>
                                </div>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Calibro</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ $product->caliber ?? 'N/A' }}
                                    </dd>
                                </div>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Prezzo Vetrina</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">€
                                        {{ number_format($product->price, 2, ',', '.') }}
                                    </dd>
                                </div>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Disponibile</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        @if ($product->is_available)
                                            <span class="text-green-600 font-bold">Sì</span>
                                        @else
                                            <span class="text-red-600 font-bold">No</span>
                                        @endif
                                    </dd>
                                </div>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Ultimo Aggiornamento</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ $product->updated_at->format('d/m/Y H:i') }}
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        {{-- Descrizione (occupa la seconda colonna su desktop) --}}
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Descrizione</h4>
                            <p class="text-gray-700 whitespace-pre-line">
                                {{ $product->description }}
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>