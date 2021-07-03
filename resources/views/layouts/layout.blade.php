<!DOCTYPE html>
<html>
<head>
	<title>SIPU</title>

	<meta charset="UTF-8" />
   	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
   	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

   	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
   	<!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> -->
   	<script src="{{asset('js/app.js')}}" defer></script>

   	@livewireStyles

   	<style>
   		.sidebar {
   			box-shadow: 5px 0px 10px rgba(0,0,0,0.4);
   		}
   	</style>

</head>
<body>
	
	<div class="h-screen w-full relative">
		<!-- navbar -->

		<div class="flex">
		  <!-- Sidebar -->
		  <div class="fixed flex flex-col left-0 top-0 w-14 hover:w-64 sm:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
	        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
	          <ul class="flex flex-col py-4 space-y-1">
	          	<li class="sm:mx-auto sm:text-center pt-8 pb-24 sm:pt-4 sm:pb-10 text-blue-100">
	              <div class="h-11 sm:h-auto">
	              	<svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 sm:h-32 sm:w-32 mx-auto" viewBox="0 0 20 20" fill="currentColor">
					  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
					</svg>
	              </div>
	              <div class="hidden sm:block text-lg font-bold">
	              	Indra Swadana
	              </div>
	              <div class="hidden sm:block text-sm">
	              	Kadiv Umum dan SDM
	              </div>
	            </li>

	            <div @click.away="open=false" x-data="{open: false}">
	            <li class="py-1 sm:py-2" @click="open=!open">
	              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">< <<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" /></svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Data Pegawai</span>
	                <span class="inline-flex justify-center items-center ml-20 origin-center">
	                	<svg :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
	                </span>
	              </a>
	              <ul x-show="open" 
	                  x-transition:enter="transition ease-out duration-100" 
	                  x-transition:enter-start="transform opacity-0 scale-95" 
	                  x-transition:enter-end="transform opacity-100 scale-100" 
	                  x-transition:leave="transition ease-in duration-75" 
	                  x-transition:leave-start="transform opacity-100 scale-100" 
	                  x-transition:leave-end="transform opacity-0 scale-95">
	              	<li>
	              		<a href="#" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Buat Data</span>
	              		</a>
	              	</li>
	              	<li>
	              		<a href="#" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Lihat Data</span>
	              		</a>
	              	</li>
	              </ul>
	            </li>
		        </div>

	            <li class="py-2 sm:py-1">
	              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Form Cuti</span>
	                <span class="hidden sm:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
	              </a>
	            </li>
	            <li class="py-2 sm:py-1">
	              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Form Lembur</span>
	              </a>
	            </li>
	            <li class="py-2 sm:py-1">
	              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" /></svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Arsip</span>
	                <span class="hidden sm:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
	              </a>
	            </li>
	          </ul>
	        </div>
	      </div>
	      <!-- /sidebar -->

		  <!-- Header -->
		  <div class="w-full hidden sm:flex items-center justify-between h-14 text-gray-900 px-16">
		    <div>
		    	BRAND
		    </div>
		    <!-- logout -->
		    <div class="justify-between py-2 text-xl font-medium">
		    	<a href="#" class="hover:text-blue-800 flex">
		    	<svg xmlns="http://www.w3.org/2000/svg" class="self-center mx-2 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
				</svg>
				<p class="">Logout</p>
				</a>
		    </div>
		    <!-- /logout -->
		  </div>
		  <!-- ./Header -->
		</div>
		<!-- /navbar -->



		<!-- content -->
		<div class="content flex mt-5 h-full w-auto">
			@yield('content')
		</div>
		<!-- /content -->

	</div>
	@livewireScripts
</body>
</html>