<div>

	<form wire:submit.prevent="storeAnak()">
      	
      	<div>
			<label for="first-name" class="block text-sm font-medium text-gray-700">Nama Anak : </label>
			<input type="hidden" wire:model="user_idx">
			<input type="hidden" wire:model="children_id">
  			<input type="text"  wire:model="nama_anak" id="first-name" autocomplete="given-name" class="mt-1 mb-3 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
      	</div>

      	<div class="flex">
      	<!-- save -->
      	<div class="ml-auto">
		<a wire:click="storeAnak()" style="cursor: pointer;" class="button text-blue-800 hover:text-indigo-400 mx-auto mt-1 focus:text-gray-500 mr-2">
      		<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
		</a>
      	</div>

		<!-- cancel -->
		<div class="mr-auto ml-3">
  		<a wire:click="closeTambahAnak()" style="cursor: pointer;" class="button text-red-800 hover:text-red-400 mr-auto mt-1 focus:text-gray-500">
        	<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
        </a>
		</div>
    	</div>


  	</form>

</div>