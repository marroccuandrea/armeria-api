<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica Prodotto: ') . $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Il form punta alla rotta 'products.update' e usa l'ID del prodotto --}}
                    <form method="POST" action="{{ route('products.update', $product) }}">
                        @csrf
                        @method('PUT') {{-- Indica a Laravel che la richiesta è di tipo UPDATE --}}

                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Nome Prodotto')" />
                            {{-- IMPORTANTE: Pre-popoliamo il campo con i dati correnti --}}
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                value="{{ old('name', $product->name) }}" required autofocus />
                            {{-- old() serve a mantenere il valore se la validazione fallisce --}}
                        </div>

                        <div class="mt-4">
                            <x-input-label for="category" :value="__('Categoria')" />
                            <x-text-input id="category" class="block mt-1 w-full" type="text" name="category"
                                value="{{ old('category', $product->category) }}" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Prezzo (vetrina)')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price"
                                value="{{ old('price', $product->price) }}" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Descrizione')" />
                            <textarea id="description"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                name="description">{{ old('description', $product->description) }}</textarea>
                        </div>
                        <div class="mt-4">
                            <x-input-label for="is_available" :value="__('Disponibile')" />
                            <select id="is_available" class="block mt-1 w-full" name="is_available">
                                <option value="1" {{ old('is_available', $product->is_available) ? 'selected' : '' }}>
                                    Sì
                                </option>
                                <option value="0" {{ old('is_available', $product->is_available) ? '' : 'selected' }}>
                                    No
                                </option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Salva Modifiche') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>