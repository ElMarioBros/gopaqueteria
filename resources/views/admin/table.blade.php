@extends('includes.admin-navbar')
@section('admin-content')


<main class="flex items-center justify-center flex-1 px-4 py-8">

    <div class="flex flex-col">
        
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-scroll overflow-x-hidden">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700 block h-96">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Flotillero
                                </th>
                                <th scope="col" class="hidden md:table-cell py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Flotilla
                                </th>
                                <th scope="col" class="hidden md:table-cell py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Registro
                                </th>
                                <th scope="col" class="hidden md:table-cell py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Expectativa
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white truncate hover:text-clip active:text-clip" style="max-width: 15em">sibuvuvsd</td>
                                    <td class="hidden md:table-cell py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">neoinreoin</td>
                                    <td class="hidden md:table-cell py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">loreda</td>
                                    <td class="hidden md:table-cell py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">lorem</td>
                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">

                                    </td>
                                </tr>                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    


</main>


@endsection