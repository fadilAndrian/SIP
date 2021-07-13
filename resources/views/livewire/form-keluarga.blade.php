<div>

	<div class="md:grid md:grid-cols-2 md:gap-6">
	    <div class="mt-5 md:mt-0 md:col-span-2">
	      <form wire:submit.prevent="#" method="POST">
	        <div class="overflow-hidden sm:rounded-md">
	          <div class="px-4 py-5 bg-white sm:p-6">
	              
            	<div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4 grid gap-6">
	              	<input type="hidden" wire:model="family_id">
	              	<input type="hidden" wire:model="user_idx">
	                <div>
		                <label class="block text-sm font-medium text-gray-700">Nama Pasangan</label>
		                <input required type="text" wire:model="nama_pasangan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Nomor KTP (NIK)</label>
		                <input required type="text" wire:model="ktp_pasangan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
		                <input required type="text" wire:model="tgl_lahir_pasangan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
		                <input required type="text" wire:model="tmpt_lahir_pasangan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Pekerjaan</label>
		                <input required type="text" wire:model="pekerjaan_pasangan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
		                <input required type="text" wire:model="notlp_pasangan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                </div>

	                <div>
		                <label class="block text-sm font-medium text-gray-700">Alamat</label>
		                <textarea required type="text" wire:model="alamat_pasangan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full h-5/6 shadow-sm text-sm font-medium rounded-xl outline-none" style="resize: none;"></textarea>
	                </div>
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	              	<div class="grid gap-0">

	              	<!-- BAGIAN ANAK -->
	              	  <div x-data="{open: false}">
	              		@foreach($anak as $x)
	              		<div class="mb-6">
	              			<div class="flex">
								<label for="first-name" class="mr-auto block text-sm font-medium text-gray-700">Nama Anak {{ $loop->iteration }} </label>
								<a @click="open= !open" wire:click="editAnak({{$x->id}})" style="cursor: pointer;" class="button text-blue-800 hover:text-indigo-400 ml-auto mt-1 focus:text-gray-500">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
								</svg>
								</a>
	              			</div>
	              			<div class="flex">

	              			<input type="text" readonly value="{{$x->nama_anak}}" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	              			<!-- delete button -->
	              			<a wire:click="deleteAnak({{$x->id}})" onclick="confirm('Yakin untuk menghapus?') || event.stopImmediatePropagation()" style="cursor: pointer;" class="button text-red-500 hover:text-red-300 mx-auto mt-2 ml-3 h-6 w-6">
	              				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M18 12H6" />
								</svg>
	              			</a>
	              			</div>
		              	</div>
		              	@endforeach

					  	<!-- modal edit anak -->
						<div x-show="open" 
							 x-transition:enter="transition ease-out duration-300" 
							 x-transition:enter-start="transform opacity-0" 
							 x-transition:enter-end="transform opacity-100" 
							 x-transition:leave="transition ease-in duration-200" 
							 x-transition:leave-start="transform opacity-100" 
							 x-transition:leave-end="transform opacity-0"
						class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true
							 {{ $isEditAnak ? '' : 'hidden' }} ">
						  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

						    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

						    <!-- This element is to trick the browser into centering the modal contents. -->
						    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

						    <!--
						      Modal panel, show/hide based on modal state.

						      Entering: "ease-out duration-300"
						        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
						        To: "opacity-100 translate-y-0 sm:scale-100"
						      Leaving: "ease-in duration-200"
						        From: "opacity-100 translate-y-0 sm:scale-100"
						        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
						    -->
						    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
						      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
						        <div class="sm:flex sm:items-start">
						          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
						            <!-- Heroicon name: outline/exclamation -->
						            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
						            </svg>
						          </div>
						          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
						            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
						              Edit Nama Anak
						            </h3>
						            <div class="mt-5">
						              <input type="hidden" wire:model="children_id">
						  			  <input type="text"  wire:model="nama_anak" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
						            </div>
						          </div>
						        </div>
						      </div>
						      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
						        <button type="button" wire:click="storeAnak()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
						          Simpan
						        </button>
						        <button @click="open= !open" type="button" wire:click="closeEditAnak()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
						          Kembali
						        </button>
						      </div>
						    </div>
						  </div>
						</div>
					  	<!-- /modal edit anak -->

	              	  </div>

		              	<div class="block {{ $jmlAnak !=0 ? '' : 'hidden' }} {{ $isTambahAnak ? 'hidden' : '' }}">
						  	<!-- add button -->
						  	<div class="flex">
						  	<div class="mx-auto">
							<a wire:click="openTambahAnak()" style="cursor: pointer;" class="button text-blue-800 hover:text-indigo-400 mt-1 focus:text-gray-500 mr-2">
						  		<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
							</a>
						  	</div>
						  	</div>
					     </div>

					    <div class="{{ $jmlAnak != 0 ? 'hidden' : '' }}">
					    <form wire:submit.prevent="storeAnak()">
					      	
					      	<div>
								<label for="first-name" class="block text-sm font-medium text-gray-700">Nama Anak : </label>
								<input type="hidden" wire:model="user_idx">
								<input type="hidden" wire:model="children_id">
					  			<input type="text"  wire:model="nama_anak" id="first-name" autocomplete="given-name" class="mt-1 mb-3 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
					      	</div>

					      	<div class="flex">
					      	<!-- save -->
					      	<div class="{{ $jmlAnak != 0 ? 'ml-auto' : 'mx-auto' }}">
							<a wire:click="storeAnak()" style="cursor: pointer;" class="button text-blue-800 hover:text-indigo-400 mx-auto mt-1 focus:text-gray-500 mr-2">
					      		<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
							</a>
					      	</div>


							@if($jmlAnak!=0)
							<!-- cancel -->
							<div class="mr-auto ml-3">
					  		<a wire:click="closeTambahAnak()" style="cursor: pointer;" class="button text-red-800 hover:text-red-400 mr-auto mt-1 focus:text-gray-500">
					        	<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
					        </a>
							</div>
					        @endif
					    	</div>

					  	</form>
					    </div>

					    @if($isTambahAnak)
		              	<!-- form untuk tambah anak -->
		              	@include('livewire.form-anak')
		              	@endif

		      		</div>

	              </div>
	            </div>
	          </div>

	        </div>
	          <div class="px-4 py-3 text-right sm:px-6">
	            <button wire:click.prevent="storeKeluarga()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
	              Simpan
	            </button>
	          </div>
	      </form>
	    </div>
	  </div>

</div>