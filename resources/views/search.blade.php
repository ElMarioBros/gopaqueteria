@extends('includes.includes')

@section('content')

<div class="bg-white shadow-2xl rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 mt-16 md:m-16">

  <form action="{{ route('ticket-find') }}" method="POST">
    @csrf
    <div class="m-3 md:flex mb-6">
      <div class="md:w-full px-3 md:flex">
          <label class="uppercase tracking-wide text-grey-darker text-s font-bold" for="grid-password">
            Número de rastreo
          </label>
          <input name="id" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Escanee aquí el código QR" autofocus autocomplete="off">
          <input type="submit" class=" ml-1 hover:shadow-form rounded-md bg-[#6A64F1] px-8 text-center text-base font-semibold text-white outline-none" value="Rastrear">
        </div>
      </div>
    </form>

  </div>

@endsection
