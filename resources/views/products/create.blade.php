<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carica Nuovo Prodotto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Nome Prodotto')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required
                                autofocus />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="category" :value="__('Categoria')" />
                            <x-text-input id="category" class="block mt-1 w-full" type="text" name="category"
                                required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Prezzo (vetrina)')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Descrizione')" />
                            <textarea id="description"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                name="description"></textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Salva Prodotto') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>