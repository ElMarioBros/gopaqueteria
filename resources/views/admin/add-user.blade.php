@extends('includes.admin-navbar')
@section('admin-content')

<div class="max-w-2xl mx-auto w-96">
    
    @if (session('success'))
    <div class="mt-8 flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
      <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
      <div>
          <span class="font-medium">{{ session('success') }} </span>
      </div>
    </div>
    @endif
    <form action="{{ route('add-user') }}" class="mt-6" method="POST">
        @csrf
        <div class="mb-6 mt-6">
            <label for="name" class="block mb-2 text-sm font-medium">Nombre</label>
            <input type="text" id="name" class="border border-gray-500 text-gray-900 text-sm rounded-lg block w-full p-2.5" name="name" placeholder="Ej. Juan Sánchez" required>
        </div>
        <div class="mb-6">
            <label for="username" class="block mb-2 text-sm font-medium">Usuario</label>
            <input type="text" id="username" class="border border-gray-500 text-gray-900 text-sm rounded-lg block w-full p-2.5" name="username" placeholder="Ej. jsanchez" required>
        </div>
        <div class="mb-6">
            <label for="belongs_to_company" class="block mb-2 text-sm font-medium">Compañia</label>
            <select class="border border-gray-500 text-gray-900 text-sm rounded-lg block w-full p-2.5" name="belongs_to_company" id="belongs_to_company" required>
                <option value="go">Go</option>
            </select>
        </div>

        <div class="mb-6">
            <label for="type" class="block mb-2 text-sm font-medium">Tipo de usuario</label>

            <div class="flex items-center mb-4">
                <input type="radio" name="type" id="type" value="paquetero" required>
                <label for="country-option-3" class="text-sm font-medium text-gray-900 ml-2 block">
                Paquetero
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input type="radio" name="type" id="type" value="admin" required>
                <label for="country-option-4" class="text-sm font-medium text-gray-900 ml-2 block">
                Administrador
                </label>
            </div>
        </div>

        <button class="mb-2 focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-orange-500 hover:bg-orange-600 focus:outline-none rounded">
            <span class="text-sm font-medium leading-none text-white">Agregar usuario</span>
        </button>
    </form>
</div>


@endsection