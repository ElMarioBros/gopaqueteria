@extends('includes.admin-navbar')
@section('admin-content')


<main class="flex items-center justify-center flex-1 px-4 py-8">

    <div class="flex flex-col">
        <div class="block mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 inline icon icon-tabler icon-tabler-users" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="9" cy="7" r="4" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
            <p class="inline text-2xl font-bold">Usuarios</p>
            <a href="{{ route('add-user-view') }}" class="float-right mb-2 focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-orange-500 hover:bg-orange-600 focus:outline-none rounded">
                <span class="text-sm font-medium leading-none text-white">Agregar usuario</span>
            </a>
        </div>

        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-scroll overflow-x-hidden">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700 block h-96">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Nombre
                                </th>
                                <th scope="col" class="hidden md:table-cell py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Usuario
                                </th>
                                <th scope="col" class="hidden md:table-cell py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Tipo
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Contraseña
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach ($users as $user)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white truncate hover:text-clip active:text-clip" style="max-width: 15em">{{ $user->name }}</td>
                                <td class="hidden md:table-cell py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->username }}</td>
                                <td class="hidden md:table-cell py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $user->type }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">{{ $user->temp_password }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    


</main>


@endsection