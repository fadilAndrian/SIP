
<div class="w-full h-full">

	<div class="hidden sm:block" aria-hidden="true">
	  <div class="ml-72 pl-5 py-5 mt-10 mr-10">
	  	<div class="flex">
		  	
		  	<div class="text-gray-700 text-3xl mb-1 font-bold">
	      		Formulir Penambahan Cuti dan Izin
	      	</div>
	      	
	      	<div class="ml-auto self-center">
		      	<!-- back button -->
		  		<a @click="menu= true, bersalin= false" style="cursor: pointer;">
		  		<div class="flex text-gray-700 self-center">
		      		<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 transform hover:text-gray-600 hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
					</svg>
		  		</div>
		  		</a>
		  		<!-- /back button -->
	      	</div>

	  	</div>
	    <div class="border border-t border-gray-400"></div>
	  </div>
	</div>

	<!-- data diri -->
	<div class="ml-72 mr-10">
	  <div class="md:grid md:grid-cols-2 md:gap-6">
	    <div class="mt-5 md:mt-0 md:col-span-2">
	      <form wire:submit.prevent="strorePegawai()" method="POST">
	        <div class="sm:rounded-md sm:overflow-hidden">
	          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4 grid gap-6">
	              	<input type="hidden" wire:model="profile_id">
	              	<input type="hidden" wire:model="user_idx">
	              	<div>
		                <label class="block text-sm font-medium text-gray-700">Nama Pegawai</label>
		                <input readonly required type="text" wire:model="nama" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	              	</div>
	              	<div>
	              		<label class="block text-sm font-medium text-gray-700">Tanggal Masuk Kerja</label>
		                <input required type="date" wire:model="tgl_masuk" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('tgl_masuk') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	              	</div>
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Alamat</label>
	                <textarea required type="text" wire:model="alamat" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full h-5/6 shadow-sm text-sm font-medium rounded-xl outline-none" style="resize: none;"></textarea>
	                @error('alamat') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Nomor Induk Pegawai (NIP)</label>
	                <input required type="text" wire:model="nip" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('nip') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Divisi</label>
	                <input required type="text" wire:model="divisi" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('divisi') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>
	            
	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Nomor Handphone</label>
	                <input required type="text" wire:model="no_hp" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('no_hp') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Jabatan</label>
	                <input required type="text" wire:model="jabatan" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('jabatan') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	          </div>
	        </div>
	      </form>
	    </div>
	  </div>
	</div>
	<!-- /data diri -->

	<div class="hidden sm:block" aria-hidden="true">
	  <div class="ml-72 pl-5 py-5 mt-10 mr-10">
	  	<div class="text-gray-700 text-3xl mb-1 font-bold">
      		<div class="flex">
      			<div class="mr-auto">
      			Cuti Bersalin
      			</div>
      		</div>
      	</div>      	
	    <div class="border border-t border-gray-400"></div>
	  </div>
	</div>
	
	<!-- data diri -->
	<div class="ml-72 mr-10 mb-16">
	  <div class="md:grid md:grid-cols-2 md:gap-6">
	    <div class="mt-5 md:mt-0 md:col-span-2">
	      <form wire:submit.prevent="strorePegawai()" method="POST">
	        <div class="sm:rounded-md sm:overflow-hidden">
	          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Jenis Cuti</label>
	                @include('livewire.radio-cuti-bersalin')
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Anak ke -</label>
	                <input required type="number" wire:model="anak" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('anak') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Tanggal Mulai Cuti</label>
	                <input required type="date" wire:model="tgl_mulai_cuti" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tgl_mulai_cuti') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Tanggal Perkiraan Persalinan</label>
	                <input required type="date" wire:model="tgl_persalinan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tgl_persalinan') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Tanggal Akhir Cuti</label>
	                <input required type="date" wire:model="tgl_akhir_cuti" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tgl_akhir_cuti') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Tanggal Mulai Bekerja Kembali</label>
	                <input required type="date" wire:model="tgl_mulai_kerja" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tgl_mulai_kerja') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	          </div>
	        </div>
	      </form>
	    </div>
	  </div>

		<div class="px-4 py-3 text-right sm:px-6">
			<button wire:click.prevent="" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				Simpan
			</button>
		</div>

	</div>
	<!-- /data diri -->

	<script>

		// tambah anak		
		// saat tombol add-more ditekan, maka akan memunculkan div dengan class copy
	  //   $(document).ready(function() {
	  //     $(".add-more").click(function(){ 
			// var html = $(".copy").html();
			// $(".after-add-more").after(html);
	  //     });

	  //     $(".add-more").click(function(){
	  //     	let tambah = true;
	  //     	var anak = [];
	  //     })
	  //   // saat tombol remove dklik control group akan dihapus 
			// $(".remove").click(function(){
			// 	$(".anak").parents().remove()
			// })

			// $("body").on("click",".remove",function(){ 
			//   $(this).parents(".anak").remove();
			// });
	  //   });

	    // end tambah anak

	</script>


</div>
