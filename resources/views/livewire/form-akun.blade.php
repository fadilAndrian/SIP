<div>
    <div class="hidden sm:block" aria-hidden="true">
	  <div class="ml-72 pl-5 py-5 mt-10 mr-10">
	  	<div class="text-gray-700 text-3xl mb-1 font-bold">
      		Akun Pegawai
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
		                <input required type="text" wire:model="nama" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('nama') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Email</label>
		                <input required type="text" wire:model="email" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
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
			                <input required type="password" wire:model="password" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
			                @error('password') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
		                </div>
	              		

		                <div>
			                <label class="block text-sm font-medium text-gray-700">Role</label>
			                <select required wire:model="role" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
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
				<button wire:click.prevent="storeAkun()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				  Simpan
				</button>
			</div>
	        </div>
	      </form>
	    </div>
	  </div>
	</div>
	<!-- /form akun -->
</div>
