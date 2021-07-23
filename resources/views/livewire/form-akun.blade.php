<div>
    <div class="hidden sm:block" aria-hidden="true">
	  <div class="ml-72 pl-5 py-5 mt-10 mr-10">
	  	<div class="flex">
	  	<div class="text-gray-700 text-3xl mb-1 font-bold">
      		Akun Pegawai
      	</div>
      	<div class="ml-auto flex">

      		@if(!$halamanCreate)
      		<div x-data="{open: false}" @mouseleave="open= false">
			<!-- back button -->
      		<a @mouseover="open= true" style="cursor: pointer;" wire:click="isNotShow()">
      		<div class="flex text-gray-700 self-center">
	      		<svg xmlns="http://www.w3.org/2000/svg" :class="{'opacity-0':open, 'transition-opacity opacity-100 duration-700':!open}" class="h-8 w-8 mr-3 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
				</svg>
				<p x-show="open"
				 x-transition:enter="transition ease-out duration-100" 
                 x-transition:enter-start="transform opacity-0 scale-50" 
                 x-transition:enter-end="transform opacity-100 scale-100" 
                 x-transition:leave="transition ease-in duration-75" 
                 x-transition:leave-start="transform opacity-100 scale-80" 
                 x-transition:leave-end="transform opacity-0 scale-0"
				class="ml-1">Kembali</p>
      		</div>
      		</a>
      		<!-- /back button -->
      		</div>
      		@endif
      	</div>
	  	</div>
	    <div class="border border-t border-gray-400"></div>
	  </div>
	</div>


	<!-- form akun -->
	<div class="ml-72 mb-20 mt-10 sm:mt-0 mr-10">
	  <div class="md:grid md:grid-cols-2 md:gap-6">
	    <div class="mt-5 md:mt-0 md:col-span-2">
	      <form wire:submit.prevent="storeAkun()" method="POST">
	        <div class="overflow-hidden sm:rounded-md">
	          <div class="px-4 py-5 bg-white sm:p-6">
	              
            	<div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4 grid gap-6">
	              	<input type="hidden" wire:model="user_id">
	              	<input type="hidden" wire:model="user_idx">
	                <div>
		                <label class="block text-sm font-medium text-gray-700">Nama Pegawai</label>
		                <input required {{ $halamanShow ? 'readonly' : '' }} autofocus type="text" wire:model="nama" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('nama') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Email</label>
		                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="email" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('email') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	                </div>

	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	              	<div class="grid gap-6">

	              		<div>
			                <label class="block text-sm font-medium text-gray-700">Password</label>
			                <div class="flex">
			                
			                <input required readonly type="text" wire:model="password" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium {{ $halamanShow ? 'rounded-xl' : 'rounded-l-xl' }} outline-none">
			                
			                <!-- generate pass button -->
			                @if($halamanShow!=true)
			                <button wire:click="generatePass()" class="text-sm font-medium border bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white py-2 px-3 rounded-r-xl self-center mt-1">
			                	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
								</svg>
			                </button>
			                @endif
			                <!-- /generate pass button -->

							</div>
			                @error('password') 
						    	<div class="text-sm font-medium text-red-500">{{ $message }}</div>
							@enderror
		                </div>
	              		

		                <div>
			                <label class="block text-sm font-medium text-gray-700">Role</label>
			                <select required {{ $halamanShow ? 'disabled' : '' }} wire:model="role" autocomplete="given-name" class="appearance-none mt-1 border py-2 px-3 border-gray-300 bg-white focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
			                	<option hidden="" value="">Pilih Role</option>
			                	<option value="Direksi">Direksi</option>
			                	<option value="Sekretaris">Sekretaris</option>
			                	<option value="HRD">HRD</option>
			                	<option value="Pegawai">Pegawai</option>
			                </select>
			                @error('role') 
							    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
							@enderror
		                </div>


	              	</div>
	              </div>
	            </div>
	          </div>
			<div class="px-4 py-3 text-right sm:px-6">
	          @if(!$halamanShow)
				<button wire:click.prevent="storeAkun()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				  Simpan
				</button>
			  @endif
			</div>
	        </div>
	      </form>
	    </div>
	  </div>
	</div>
	<!-- /form akun -->
</div>
