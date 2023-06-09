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
                    <h5 class="mt-8 font-sans text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Añadir Publicación') }}
                    </h5>
                    <br>
                    <form method="POST" action="{{ route('publications.store') }}">
                        @csrf
                        <!-- DOI -->
                        <div class="flex flex-wrap mx-auto sm:px-6 lg:px-8">
                            <!-- DOI -->
                            <div class="w-full sm:w-1/3 pr-2">
                                <x-input-label for="doi" :value="__('DOI')" />
                                <x-text-input id="doi" class="mt-1 w-11/12" type="text" name="doi"
                                    :value="old('doi')" required autofocus autocomplete="doi" />
                                <x-input-error :messages="$errors->get('doi')" class="mt-2" />
                            </div>

                            <!-- Title -->
                            <div class="w-full sm:w-1/3 pl-2">
                                <x-input-label for="titulo" :value="__('Título')" />
                                <x-text-input id="titulo" class="mt-1 w-11/12" type="text" name="titulo"
                                    :value="old('titulo')" required autocomplete="titulo" />
                                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                            </div>
                            <!-- Año -->
                            <div class="w-full sm:w-1/3 pl-2">
                                <x-input-label for="año" :value="__('Año')" />

                                <x-text-input id="año" class="mt-1 w-4/12" type="text" name="año"
                                    :value="old('año')" required autocomplete="año" />
                                <x-input-error :messages="$errors->get('año')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-4 flex flex-wrap mx-auto sm:px-6 lg:px-8">
                            <!-- ISSN -->
                            <div class="w-full sm:w-1/3 pr-2">
                                <x-input-label for="issn" :value="__('ISSN')" />
                                <x-text-input id="issn" class="mt-1 w-11/12" type="text" name="issn"
                                    :value="old('issn')" required autocomplete="issn" />
                                <x-input-error :messages="$errors->get('issn')" class="mt-2" />
                            </div>
                            <!-- ESSN -->
                            <div class="w-full sm:w-1/3 pl-2">
                                <x-input-label for="eissn" :value="__('EISSN')" />
                                <x-text-input id="eissn" class="mt-1 w-11/12" type="text" name="eissn"
                                    :value="old('eissn')" required autocomplete="eissn" />
                                <x-input-error :messages="$errors->get('eissn')" class="mt-2" />
                            </div>
                            <!-- Journal -->
                            <div class="w-full sm:w-1/3 pl-2">
                                <x-input-label for="journal" :value="__('Journal')" />
                                <x-text-input id="journal" class="mt-1 w-11/12" type="text" name="journal"
                                    :value="old('journal')" required autocomplete="journal" />
                                <x-input-error :messages="$errors->get('journal')" class="mt-2" />
                            </div>
                        </div>

                        <h5 class="mb-10 mt-20 font-sans text-lg text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Autores') }}
                        </h5>
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="w-full sm:w-1/3 pl-2">
                                <label class="mt-20" for="tipo_autor">Tipo de autor</label>
                                <select id="tipo_autor" name="tipo_autor" class="w-8/12" data-te-select-init>
                                    <option value="">Seleccionar tipo de autor</option>
                                    <option value="academic">Académico</option>
                                    <option value="administrative">Administrativo</option>
                                    <option value="pre_student">Estudiante de pregrado</option>
                                    <option value="post_student">Estudiante de postgrado</option>
                                    <option value="researcher">Investigador</option>
                                    <option value="part_time">Part Time</option>
                                </select>
                            </div>

                            <div
                                class="block mt-8 rounded-lg bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] w-8/12 dark:bg-neutral-700">
                                <div
                                    class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                                    Academicos
                                </div>
                                <div class="p-3">
                                    
                                    <div class="overflow-x-auto">
                                        <table id="academics-table2" class="display table-auto w-full">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="flex justify-center items-center">
                                                            Rut
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex justify-center items-center">
                                                            Nombre
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex justify-center items-center">
                                                            Acciones
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($academics as $academic)
                                                    <tr>
                                                        <td class="text-center">{{ $academic->rut }}</td>
                                                        <td class="text-center">{{ $academic->nombre }}</td>
                                                        <td class="text-center">
                                                            <a href=""
                                                                class="inline-flex items-center px-2.5 py-1.5 border border-blue-500 text-blue-500 rounded-md hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-4 w-4 mr-1.5" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2 5a1 1 0 011-1h2.586a1 1 0 01.707.293l8.586 8.586a1 1 0 01.248.367l2 4a1 1 0 01-.527 1.306l-4 2a1 1 0 01-1.306-.527l-8.586-8.586A1 1 0 013 8.586V6a1 1 0 011-1zm12.586 3L8 14.586 4.414 11H7a1 1 0 010 2h4a1 1 0 01.707-.293l2-2a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                                Permisos
                                                            </a>
                                                            <form action="" method="POST" class="inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="inline-flex items-center px-2.5 py-1.5 border border-red-500 text-red-500 rounded-md hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 delete-user"
                                                                    data-id="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-4 w-4 mr-1.5" viewBox="0 0 20 20"
                                                                        fill="currentColor">
                                                                        <path fill-rule="evenodd"
                                                                            d="M5 4a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V5a1 1 0 00-1-1H5zm5 12a1 1 0 100-2 1 1 0 000 2zm3-8V7a1 1 0 00-2 0v1H9V7a1 1 0 00-2 0v1H6a1 1 0 000 2h1v1a1 1 0 102 0V9h1a1 1 0 100-2H9V6a1 1 0 00-1-1H7V4a1 1 0 00-2 0v1H4a1 1 0 100 2h1v1H4a1 1 0 000 2h1v1a1 1 0 102 0V9h1a1 1 0 100-2H9zm1-1v8a1 1 0 01-1 1H6a1 1 0 01-1-1V9a1 1 0 011-1h4a1 1 0 011 1zm1-3a3 3 0 11-6 0 3 3 0 016 0z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                    Eliminar
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                
                            </div>




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
