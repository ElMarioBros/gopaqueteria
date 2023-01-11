@extends('includes.includes')
@section('content')
<div class="h-screen w-screen flex bg-gray-200">
	<!-- container -->

	<aside
		class="flex flex-col items-center bg-white text-gray-700 shadow h-full">
		<!-- Side Nav Bar-->

		<div class="h-16 flex items-center w-full">
			<!-- Logo Section -->
			<a class="h-12 w-12 mx-auto" href="/">
				<img
					class="h-12 w-12 mx-auto"
					src="https://www.adaptivewfs.com/wp-content/uploads/2020/07/logo-placeholder-image-1.png"
					alt="svelte logo" />
			</a>
		</div>

		<ul>
			<!-- Items Section -->
			<li class="hover:bg-gray-100">
				<a
					href="{{ route('admin-tickets') }}"
					class="h-16 px-6 flex flex justify-center items-center w-full
					focus:text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ticket" 
                        width="24" 
                        height="24" 
                        viewBox="0 0 24 24" 
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="15" y1="5" x2="15" y2="7" />
                        <line x1="15" y1="11" x2="15" y2="13" />
                        <line x1="15" y1="17" x2="15" y2="19" />
                        <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                    </svg>
				</a>
			</li>

			<li class="hover:bg-gray-100">
				<a
					href="{{ route('admin-users') }}"
					class="h-16 px-6 flex flex justify-center items-center w-full
					focus:text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="9" cy="7" r="4" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
				</a>
			</li>

			<li class="hover:bg-gray-100">
				<a
					href="{{ route('search') }}"
                    target="_blank"
					class="h-16 px-6 flex flex justify-center items-center w-full
					focus:text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
				</a>
			</li>


		</ul>

		<div class="mt-auto h-16 flex items-center w-full">
			<!-- Action Section -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="#" onclick="this.closest('form').submit()" class="
                inline-block px-6 py-2.5 rounded shadow-md hover:bg-gray-100 hover:shadow-lg m-6
                " role="menuitem">
                    <svg
                        class="h-5 w-5 text-red-700"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                </a>
            </form>
		</div>
	</aside>
    @yield('admin-content')
</div>
@endsection