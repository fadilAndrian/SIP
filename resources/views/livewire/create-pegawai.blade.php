
<div class="w-full h-full">

	@include('livewire.form-akun')

	@if($hasRegistered)
	<div class="hidden sm:block" aria-hidden="true">
	  <div class="ml-72 pl-5 py-5 mt-10 mr-10">
	  	<div class="text-gray-700 text-3xl mb-1 font-bold">
      		Data Diri
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
		                <label class="block text-sm font-medium text-gray-700">Nama Pegawai<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
		                <input readonly {{ $halamanShow ? 'readonly' : '' }} required type="text" wire:model="nama" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	              	</div>
	              	<div>
	              		<label class="block text-sm font-medium text-gray-700">Nomor Induk Pegawai (NIP)<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
		                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="nip" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('nip') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	              	</div>
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Alamat<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <textarea required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="alamat" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full h-5/6 shadow-sm text-sm font-medium rounded-xl outline-none" style="resize: none;"></textarea>
	                @error('alamat') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Nomor KTP (NIK)<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="nik" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('nik') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Nomor BPJS Kesehatan<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="bpjs_kes" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('bpjs_kes') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>
	            
	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Divisi<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="divisi" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('nama') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Nomor BPJS Ketenagakerjaan<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="bpjs_kerja" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('bpjs_kerja') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Jabatan<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="jabatan" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('nama') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Nomor Kartu Keluarga (KK)<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="kk" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('kk') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Status Pegawai<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="status_pegawai" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('status_pegawai') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Nomor NPWP<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="npwp" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('npwp') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Habis Masa Kontrak<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="masa_kontrak" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('masa_kontrak') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Tanggal Lahir<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="date" wire:model="tgl_lahir" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tgl_lahir') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Tempat Lahir<span class="{{ $halamanShow ? 'hidden' : '' }} text-red-700 font-bold">*</span></label>
	                <input required {{ $halamanShow ? 'readonly' : '' }} type="text" wire:model="tmpt_lahir" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tmpt_lahir') 
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
      			Keluarga
      			</div>
      		</div>
      	</div>      	
	    <div class="border border-t border-gray-400"></div>
	  </div>
	</div>


	<!-- data keluarga -->
	<div  class="ml-72 mb-20 mt-10 sm:mt-0 mr-10">

	  @include('livewire.form-keluarga')

	</div>
	<!-- /data keluarga -->
	@endif

	<!-- TOAST -->
  @if(session()->has('succes'))
  	@include('livewire.toast')
  @endif
  <!-- /TOAST -->


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
