@extends('includes.includes')
@section('title')
Registrar un ticket de paquete
@endsection
@section('content')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px]">
      @if (session('success'))
      <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-medium">{{ session('success') }} </span>
        </div>
      </div>
      @endif

      <form action="{{ route('register-ticket') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="-mx-3 flex flex-wrap">
          <div class="w-full px-3">
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Descripción corta
              </label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Ej. Artículos de ropa"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                autocomplete="off"
              />
            </div>
          </div>
        </div>
        <div class="mb-5">
            <label
              for="weight"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Peso en kilogramos
            </label>
            <input
              type="number"
              step="0.01"
              name="weight"
              id="weight"
              placeholder="Peso"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              autocomplete="off"
            />
        </div>
        <div class="mb-5">
            <div class="max-w-2xl mx-auto">
                <label for="message" class="block mb-2 text-sm font-medium">Descripción de contenido</label>
                <textarea 
                  id="message" 
                  name="description" 
                  rows="4" 
                  class="block p-2.5 w-full font-medium rounded-lg border text-[#6B7280]" 
                  placeholder="Ej. 2 paquetes de camisas"
                  autocomplete="off"
                ></textarea>
            </div>
        </div>
  

        <div class="mb-5">
          <label
            for="origin"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Origen
          </label>
          <input
            type="text"
            name="origin"
            id="origin"
            placeholder="Ej. Mexicali"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            autocomplete="off"
          />
        </div>

        <div class="mb-5">
          <label
            for="destination"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Destino
          </label>
          <input
            type="text"
            name="destination"
            id="destination"
            placeholder="Ej. Tijuana"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            autocomplete="off"
          />
        </div>

        <p
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Fotos del paquete
        </p>

        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3 mb-5">
          <!-- Photo File Input -->
          <input type="file" class="hidden" name="photo_front" x-ref="photo" x-on:change="
                              photoName = $refs.photo.files[0].name;
                              const reader = new FileReader();
                              reader.onload = (e) => {
                                  photoPreview = e.target.result;
                              };
                              reader.readAsDataURL($refs.photo.files[0]);
            ">
                    
            <div class="text-center flex">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="https://knetic.org.uk/wp-content/uploads/2020/07/Photo-Placeholder-300x200.png" class="w-14 h-14 m-auto rounded-full shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-24 h-24 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                    </span>
                </div>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                    Foto del paquete (Frontal)
                </button>
            </div>
        </div>

        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3 mb-5">
          <!-- Photo File Input -->
          <input type="file" class="hidden" name="photo_side" x-ref="photo" x-on:change="
                              photoName = $refs.photo.files[0].name;
                              const reader = new FileReader();
                              reader.onload = (e) => {
                                  photoPreview = e.target.result;
                              };
                              reader.readAsDataURL($refs.photo.files[0]);
            ">
                    
            <div class="text-center flex">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="https://knetic.org.uk/wp-content/uploads/2020/07/Photo-Placeholder-300x200.png" class="w-14 h-14 m-auto rounded-full shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-24 h-24 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                    </span>
                </div>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                    Foto del paquete (Lateral)
                </button>
            </div>
        </div>

        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3 mb-5">
          <!-- Photo File Input -->
          <input type="file" class="hidden" name="photo_side_alt" x-ref="photo" x-on:change="
                              photoName = $refs.photo.files[0].name;
                              const reader = new FileReader();
                              reader.onload = (e) => {
                                  photoPreview = e.target.result;
                              };
                              reader.readAsDataURL($refs.photo.files[0]);
            ">
                    
            <div class="text-center flex">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="https://knetic.org.uk/wp-content/uploads/2020/07/Photo-Placeholder-300x200.png" class="w-14 h-14 m-auto rounded-full shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-24 h-24 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                    </span>
                </div>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                    Foto del paquete (Lateral)
                </button>
            </div>
        </div>

        
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3 mb-5">
          <!-- Photo File Input -->
          <input type="file" class="hidden" name="photo_back" x-ref="photo" x-on:change="
                              photoName = $refs.photo.files[0].name;
                              const reader = new FileReader();
                              reader.onload = (e) => {
                                  photoPreview = e.target.result;
                              };
                              reader.readAsDataURL($refs.photo.files[0]);
            ">
                    
            <div class="text-center flex">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="https://knetic.org.uk/wp-content/uploads/2020/07/Photo-Placeholder-300x200.png" class="w-14 h-14 m-auto rounded-full shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-24 h-24 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                    </span>
                </div>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                    Foto del paquete (Trasera)
                </button>
            </div>
        </div>

        <div class="mb-5">
          <label
            for="qr"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            QR
          </label>
          <input
            type="text"
            name="qr"
            id="qr"
            placeholder="Escanee el QR de rastreo"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            autocomplete="off"
          />
        </div>

        <div>
          <button
            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
          >
            Registrar
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
@endsection