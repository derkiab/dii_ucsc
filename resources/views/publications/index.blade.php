<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Publicaciones') }}
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
                    <div id="app">
                        <home-component></home-component>
                    </div>

                    <x-add-button-publication class="mb-10">
                        {{ __('Añadir Publicación') }}
                    </x-add-button-publication>

                    <table id="publications-table" class="display">
                        <thead>
                            <tr>

                                <th>
                                    <div class="flex justify-center items-center">
                                        DOI
                                    </div>
                                </th>
                                <th>
                                    <div class="flex justify-center items-center">
                                        Título
                                    </div>
                                </th>
                                <th>
                                    <div class="flex justify-center items-center">
                                        Año
                                    </div>
                                </th>

                                <th>
                                    <div class="flex justify-center items-center">
                                        ISSN
                                    </div>
                                </th>
                                <th>
                                    <div class="flex justify-center items-center">
                                        EISSN
                                    </div>
                                </th>
                                <th>
                                    <div class="flex justify-center items-center">
                                        Journal
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
                            @foreach ($publications as $publication)
                                <tr>

                                    <td class="text-center">{{ $publication->doi }}</td>
                                    <td class="text-center">{{ $publication->titulo }}</td>
                                    <td class="text-center">{{ $publication->año }}</td>
                                    <td class="text-center">{{ $publication->issn}}</td>
                                    <td class="text-center">{{ $publication->eissn}}</td>
                                    <td class="text-center">{{ $publication->journal}}</td>

                                    <td class="text-center">
                                        <a href=""
                                            class="inline-flex items-center px-2.5 py-1.5 border border-blue-500 text-blue-500 rounded-md hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M2 5a1 1 0 011-1h2.586a1 1 0 01.707.293l8.586 8.586a1 1 0 01.248.367l2 4a1 1 0 01-.527 1.306l-4 2a1 1 0 01-1.306-.527l-8.586-8.586A1 1 0 013 8.586V6a1 1 0 011-1zm12.586 3L8 14.586 4.414 11H7a1 1 0 010 2h4a1 1 0 01.707-.293l2-2a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Editar
                                        </a>
                                        <form action="" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center px-2.5 py-1.5 border border-red-500 text-red-500 rounded-md hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 delete-user"
                                                data-id="">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5"
                                                    viewBox="0 0 20 20" fill="currentColor">
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
</x-app-layout>
