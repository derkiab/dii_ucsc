<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Añadir Dependencia') }}
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
        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h5 class="font-sans text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Identificador: Codigo interno de la dependencia.
                               Nombre: Nombre de la dependencia.') }}
                    </h5>
                    <br>
                    <form method="POST" action="{{ route('dependencies.store') }}">
                        @csrf
                        <!-- Identificador -->
                        <div>
                            <x-input-label for="identificador" :value="__('Identificador')" />
                            <x-text-input id="identificador" class="block mt-1 w-full" type="text" name="identificador"
                                :value="old('identificador')" required autofocus autocomplete="identificador" />
                            <x-input-error :messages="$errors->get('identificador')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" required autofocus autocomplete="nombre" />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
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
