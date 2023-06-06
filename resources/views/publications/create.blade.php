<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Añadir Publicación') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Exito',
                text: '{{ session('
                success ') }}',
                timer: 3000
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('
                error ') }}'
            });
        </script>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h5 class="font-sans text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('') }}
                    </h5>
                    <br>
                    <form method="POST" action="{{ route('publications.store') }}">
                        @csrf
                        <!-- DOI -->
                        <div>
                            <x-input-label for="doi" :value="__('DOI')" />
                            <x-text-input id="doi" class="mt-1 max-w-sm inline" type="text" name="doi"
                                :value="old('doi')" required autofocus autocomplete="doi" />
                            <x-input-error :messages="$errors->get('doi')" class="mt-2" />
                        </div>

                        <!-- Titulo -->
                        <div class="mt-4">
                            <x-input-label for="titulo" :value="__('Título')" />
                            <x-text-input id="titulo" class="inline-block mt-1 max-w-md" type="text" name="titulo"
                                :value="old('titulo')" required autocomplete="titulo" />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                        </div>

                        <!-- Año -->
                        <div class="mt-4">
                            <x-input-label for="año" :value="__('Año')" />
                            <x-text-input id="año" class="block mt-1 w-full" type="text" name="año"
                                :value="old('año')" required autocomplete="año" />
                            <x-input-error :messages="$errors->get('año')" class="mt-2" />
                        </div>
                        <!-- ISSN -->
                        <div class="mt-4">
                            <x-input-label for="issn" :value="__('ISSN')" />
                            <x-text-input id="issn" class="block mt-1 w-full" type="text" name="issn"
                                :value="old('issn')" required autocomplete="issn" />
                            <x-input-error :messages="$errors->get('issn')" class="mt-2" />
                        </div>
                        <!-- ESSN -->
                        <div class="mt-4">
                            <x-input-label for="eissn" :value="__('EISSN')" />
                            <x-text-input id="eissn" class="block mt-1 w-full" type="text" name="eissn"
                                :value="old('eissn')" required autocomplete="eissn" />
                            <x-input-error :messages="$errors->get('eissn')" class="mt-2" />
                        </div>
                        <!-- Journal -->
                        <div class="mt-4">
                            <x-input-label for="journal" :value="__('Journal')" />
                            <x-text-input id="journal" class="block mt-1 w-full" type="text" name="journal"
                                :value="old('journal')" required autocomplete="journal" />
                            <x-input-error :messages="$errors->get('journal')" class="mt-2" />
                        </div>

                        

                        <div class="flex items-center justify-end mt-4">


                            <x-primary-button class="ml-4">
                                {{ __('Añadir') }}
                            </x-primary-button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

</x-app-layout>
