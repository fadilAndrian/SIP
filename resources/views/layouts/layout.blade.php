<!DOCTYPE html>
<html>
<head>
	<title>SIPU</title>

	<meta charset="UTF-8" />
   	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
   	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

   	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   	<!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> -->
   	<script src="{{asset('js/app.js')}}" defer></script>
   	<!-- <script src="{{asset('js/jquery.js')}}" defer></script> -->

   	@livewireStyles

   	<style>
   		.sidebar {
   			box-shadow: 5px 0px 10px rgba(0,0,0,0.4);
   		}

   		.btt {
   			box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
   		}

   		#toast {
			animation: toast .3s forwards;
		}

		@keyframes toast {
			from{
				opacity: 0;
				transform: translate(100px);
			}

			to{
				transform: translateX(0);
				opacity: 1;
			}
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


	            <!-- Menu Data Pegawai -->
	            <div @click.away="open=false" x-data="{open: false}">
	            <li class="py-1 sm:py-2" @click="open=!open">
	              <div style="cursor: pointer;" :class="{'bg-blue-700 border-blue-400': open, '': !open}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">< <<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" /></svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Data Pegawai</span>
	                <span class="inline-flex justify-center items-center ml-auto origin-center">
	                	<svg :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
	                </span>
	              </div>
	              <ul x-show="open" 
	                  x-transition:enter="transition ease-out duration-100" 
	                  x-transition:enter-start="transform opacity-0 scale-95" 
	                  x-transition:enter-end="transform opacity-100 scale-100" 
	                  x-transition:leave="transition ease-in duration-75" 
	                  x-transition:leave-start="transform opacity-100 scale-100" 
	                  x-transition:leave-end="transform opacity-0 scale-95">
	              	<li>
	              		<a href="/create-pegawai" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Buat Data Pegawai</span>
	              		</a>
	              	</li>
	              	<li>
	              		<a href="/data-pegawai" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Lihat Data Pegawai</span>
	              		</a>
	              	</li>
	              </ul>
	            </li>
		        </div>


		        <!-- Menu Form Cuti -->
		        <div x-data="{open: false}" @click.away="open= false">
	            <li class="py-2 sm:py-1" @click="open=!open">
	              <div style="cursor: pointer;" :class="{'bg-blue-700 border-blue-400': open, '': !open}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
					    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.56964 32.6666V34.1666C8.56964 34.6269 8.94274 35 9.40297 35H23.327C27.0089 35 29.9936 32.0152 29.9936 28.3333V19.9285C29.9936 19.4683 29.6205 19.0952 29.1603 19.0952H22.4579V21.4285H27.6603V28.3333C27.6603 30.7265 25.7202 32.6666 23.327 32.6666H10.903L8.56964 32.6666Z" fill="white"/>
					    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 7.33333H13.6286C15.7505 7.33333 17.5162 8.85846 17.8893 10.8723C19.3594 12.0952 20.2952 13.9383 20.2952 16V30.3333V32.6667L17.9619 32.6667L17.9619 32.6667H9.66103C9.65933 32.6667 9.65763 32.6667 9.65593 32.6667H6.66666C4.27343 32.6667 2.33333 30.7266 2.33333 28.3333V11.6667C2.33333 9.27343 4.27343 7.33333 6.66667 7.33333ZM0 11.6667C0 7.98477 2.98477 5 6.66667 5H13.6286C17.3105 5 20.2953 7.98477 20.2953 11.6667V32.6667V35H17.9619H6.66666C2.98476 35 0 32.0152 0 28.3333V11.6667Z" fill="white"/>
					    <path d="M19.1308 10.6666V29.1465C19.1308 31.5363 20.9168 33.549 23.2897 33.8333V33.8333" stroke="white" stroke-width="2.33333"/>
					    <rect x="4.21503" y="13.3334" width="11.8112" height="2.33333" rx="0.833333" fill="white"/>
					    <rect x="4.21503" y="19" width="9.64857" height="2.33333" rx="0.833333" fill="#FEF202"/>
					    <rect x="4.21503" y="24.6666" width="5.82241" height="2.33333" rx="0.833333" fill="white"/>
					    <path d="M26.066 17.18C22.79 17.18 21.152 16.124 21.152 14.012V8.468C21.152 6.236 22.79 5.12 26.066 5.12C27.182 5.12 28.25 5.234 29.27 5.462V6.758C28.118 6.47 27.062 6.326 26.102 6.326C25.634 6.326 25.226 6.356 24.878 6.416C24.53 6.464 24.194 6.554 23.87 6.686C23.174 6.986 22.826 7.574 22.826 8.45V13.922C22.826 15.266 23.942 15.938 26.174 15.938C27.134 15.938 28.19 15.794 29.342 15.506V16.838C28.322 17.066 27.23 17.18 26.066 17.18Z" fill="#FEF202"/>
					  </svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Form Cuti</span>
	                <span class="inline-flex justify-center items-center ml-auto origin-center">
	                	<svg :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
	                </span>
	              </div>
	              <ul x-show="open" 
	                  x-transition:enter="transition ease-out duration-100" 
	                  x-transition:enter-start="transform opacity-0 scale-95" 
	                  x-transition:enter-end="transform opacity-100 scale-100" 
	                  x-transition:leave="transition ease-in duration-75" 
	                  x-transition:leave-start="transform opacity-100 scale-100" 
	                  x-transition:leave-end="transform opacity-0 scale-95">
	              	<li>
	              		<a href="/create-pegawai" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Pengajuan Cuti</span>
	              		</a>
	              	</li>
	              	<li>
	              		<a href="/data-pegawai" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Lihat Data Cuti</span>
	              		</a>
	              	</li>
	              </ul>
	            </li>
		        </div>


	            <!-- Menu Form Lembur -->
	            <div x-data="{open: false}" @click.away="open=false">
	            <li class="py-2 sm:py-1" @click="open=!open">
	              <div style="cursor: pointer;" :class="{'bg-blue-700 border-blue-400': open, '': !open}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
					    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.56964 32.6666V34.1666C8.56964 34.6269 8.94274 35 9.40297 35H23.327C27.0089 35 29.9936 32.0152 29.9936 28.3333V19.9285C29.9936 19.4683 29.6205 19.0952 29.1603 19.0952H22.4579V21.4285H27.6603V28.3333C27.6603 30.7265 25.7202 32.6666 23.327 32.6666H10.903L8.56964 32.6666Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 7.33333H13.6286C15.7505 7.33333 17.5162 8.85846 17.8893 10.8723C19.3594 12.0952 20.2952 13.9383 20.2952 16V30.3333V32.6667L17.9619 32.6667L17.9619 32.6667H9.66103C9.65933 32.6667 9.65763 32.6667 9.65593 32.6667H6.66666C4.27343 32.6667 2.33333 30.7266 2.33333 28.3333V11.6667C2.33333 9.27343 4.27343 7.33333 6.66667 7.33333ZM0 11.6667C0 7.98477 2.98477 5 6.66667 5H13.6286C17.3105 5 20.2953 7.98477 20.2953 11.6667V32.6667V35H17.9619H6.66666C2.98476 35 0 32.0152 0 28.3333V11.6667Z" fill="white"/>
						<path d="M19.1308 10.6666V29.1465C19.1308 31.5363 20.9168 33.549 23.2897 33.8333V33.8333" stroke="white" stroke-width="2.33333"/>
						<rect x="4.21503" y="13.3334" width="11.8112" height="2.33333" rx="0.833333" fill="white"/>
						<rect x="4.21503" y="19" width="9.64857" height="2.33333" rx="0.833333" fill="#FEF202"/>
						<rect x="4.21503" y="24.6666" width="5.82241" height="2.33333" rx="0.833333" fill="white"/>
						<path d="M21.512 5.318H23.258V15.776H29V17H21.512V5.318Z" fill="#FEF202"/>
					  </svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Form Lembur</span>
	                <span class="inline-flex justify-center items-center ml-auto origin-center">
	                	<svg :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
	                </span>
	              </div>
	              <ul x-show="open" 
	                  x-transition:enter="transition ease-out duration-100" 
	                  x-transition:enter-start="transform opacity-0 scale-95" 
	                  x-transition:enter-end="transform opacity-100 scale-100" 
	                  x-transition:leave="transition ease-in duration-75" 
	                  x-transition:leave-start="transform opacity-100 scale-100" 
	                  x-transition:leave-end="transform opacity-0 scale-95">
	              	<li>
	              		<a href="/create-pegawai" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Pengajuan Lembur</span>
	              		</a>
	              	</li>
	              	<li>
	              		<a href="/data-pegawai" class="relative flex flex-row items-center h-8 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	              			<span class="ml-11 text-sm tracking-wide truncate">Lihat Data Lembur</span>
	              		</a>
	              	</li>
	              </ul>
	            </li>
	            </div>


	            <!-- Menu Arsip -->
	            <li class="py-2 sm:py-1">
	              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
	                <span class="inline-flex justify-center items-center ml-4">
	                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" /></svg>
	                </span>
	                <span class="ml-2 text-sm tracking-wide truncate">Arsip</span>
	              </a>
	            </li>
	          </ul>
	        </div>
	      </div>
	      <!-- /sidebar -->

		  <!-- Header -->
		  <div class="w-full hidden sm:flex items-center justify-between h-14 text-gray-900 px-16">
		    <div class="ml-60 pl-1 font-light text-sm text-gray-500 flex">
		    	<div>
		    		<a class="hover:text-blue-900" href="/dashboard">Home</a>
		    	</div>
		    	<div class="ml-2 mt-0.5 {{'dashboard' == Request()->path() ? 'hidden' : ''}}">
		    		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
					</svg>
		    	</div>
		    	
		    	<!-- navigasi menu pada header -->
		    	<div class="ml-2">
		    		<a class="hover:text-blue-900" href="/data-pegawai">{{'data-pegawai' == Request()->path() ? 'Data Pegawai' : ''}}</a>
		    		<a class="hover:text-blue-900" href="/data-pegawai">{{'create-pegawai' == Request()->path() ? 'Data Pegawai' : ''}}</a>
		    	</div>

		    	<div class="ml-2 mt-0.5 
		    				{{'data-pegawai' == Request()->path() ? 'hidden' : ''}} 
		    				{{'dashboard' == Request()->path() ? 'hidden' : ''}}">
		    		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
					</svg>
		    	</div>

		    	<div class="ml-2">
		    		<a class="hover:text-blue-900 {{'create-pegawai' == Request()->path() ? '' : 'hidden'}}" href="/create-pegawai">{{'create-pegawai' == Request()->path() ? 'Olah Data Pegawai' : ''}}</a>
		    	</div>
		    	<!-- /navigasi menu pada header -->

		    </div>
		    <!-- logout -->
		    <div class="justify-between py-2 text-lg font-medium text-gray-800">
		    	<div @mouseleave="open = false" x-data="{open: false}">
			    	<a href="#" @mouseover="open = true" class="hover:text-blue-800 flex">
			    	<svg xmlns="http://www.w3.org/2000/svg" :class="{'opacity-0':open, 'transition-opacity opacity-100 duration-700':!open}" class="self-center mx-2 h-6 w-6  transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
					</svg>
					<div x-show="open"
						 x-transition:enter="transition ease-out duration-100" 
		                 x-transition:enter-start="transform opacity-0 scale-50" 
		                 x-transition:enter-end="transform opacity-100 scale-100" 
		                 x-transition:leave="transition ease-in duration-75" 
		                 x-transition:leave-start="transform opacity-100 scale-100" 
		                 x-transition:leave-end="transform opacity-0 scale-50">
						<p class="">Logout</p>
					</div>
					</a>
		    	</div>
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
		<div x-data="{open : false}" @mouseleave="open = false">
			<div @mouseover="open = true" :class="{'animate-pulse':open, '':!open}" class="bg-blue-700 h-6 w-6 rounded-full fixed right-5 bottom-5 text-white btt">
				<a href="#">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
						  <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
						</svg>
					</span>
				</a>
			</div>
		</div>

	</div>

	<script>
		$(document).ready(function() {
	      // saat tombol remove dklik control group akan dihapus 
	      $("body").on("click",".remove",function(){ 
	          $(this).parents(".toast").remove();
	      });
	    });
	</script>

	@livewireScripts
</body>
</html>