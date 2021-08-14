
<div class="w-full h-full">

	<div class="hidden sm:block" aria-hidden="true">
	  <div class="ml-72 pl-5 py-5 mt-10 mr-10">
	  	<div class="flex">
		  	
		  	<div class="text-gray-700 text-3xl mb-1 font-bold">
	      		Formulir Penambahan Cuti dan Izin
	      	</div>
	      	
	      	<div class="ml-auto self-center">
		      	<!-- back button -->
		  		<a @click="menu= true, izin= false" style="cursor: pointer;">
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
	      <form wire:submit.prevent="" method="POST">
	        <div class="sm:rounded-md sm:overflow-hidden">
	          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4 grid gap-6">
	              	<input type="hidden" wire:model="cuti_id">
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
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Alamat Selama Cuti<span></label>
	                <textarea required type="text" wire:model="alamat" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full h-5/6 shadow-sm text-sm font-medium rounded-xl outline-none" style="resize: none;"></textarea>
	                @error('alamat') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Nomor Induk Pegawai (NIP)<span></label>
	                <input required type="text" wire:model="nip" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('nip') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Divisi<span></label>
	                <input required type="text" wire:model="divisi" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('divisi') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>
	            
	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Nomor Handphone<span></label>
	                <input required type="text" wire:model="no_hp" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('no_hp') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Jabatan<span></label>
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
      			Izin Tidak Masuk Kerja & Meninggalkan Kantor
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
	              <div class="col-span-6 sm:col-span-4 block">
	                <label class="block text-sm font-medium text-gray-700">Jenis Izin<span></label>
	                	<div class="flex my-2 items-center">
	                		<input id="pernikahan_karyawan" name="jenis_izin" value="Pernikahan Karyawan" type="radio" wire:model="jenis_izin"><label for="pernikahan_karyawan" class="ml-8 text-md font-medium text-gray-600">Pernikahan Karyawan</label>
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="pernikahan_anak" name="jenis_izin" value="Pernikahan Anak" type="radio" wire:model="jenis_izin"><label for="pernikahan_anak" class="ml-8 text-md font-medium text-gray-600">Pernikahan Anak</label>
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="kematian" name="jenis_izin" value="Kematian " type="radio" wire:model="jenis_izin"><label for="kematian" class="ml-8 text-md font-medium text-gray-600">Kematian</label><input type="text" wire:model="ket_kematian" class="mt-1 border-b border-gray-300 my-auto px-1 mx-1 focus:border-none block w-1/3 text-md border-gray-300 text-gray-600 font-medium outline-none">
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="musibah" name="jenis_izin" value="Musibah " type="radio" wire:model="jenis_izin"><label for="musibah" class="ml-8 text-md font-medium text-gray-600">Musibah</label><input type="text" wire:model="ket_musibah" class="mt-1 border-b border-gray-300 my-auto px-1 mx-1 focus:border-none block w-1/3 text-md border-gray-300 text-gray-600 font-medium outline-none">
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="istri_melahirkan" name="jenis_izin" value="Istri Melahirkan" type="radio" wire:model="jenis_izin"><label for="istri_melahirkan" class="ml-8 text-md font-medium text-gray-600">Istri Melahirkan</label>
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="khitanan" name="jenis_izin" value="Anak Khitanan" type="radio" wire:model="jenis_izin"><label for="khitanan" class="ml-8 text-md font-medium text-gray-600">Anak Khitanan</label>
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="haji" name="jenis_izin" value="Ibadah Haji" type="radio" wire:model="jenis_izin"><label for="haji" class="ml-8 text-md font-medium text-gray-600">Ibadah Haji</label>
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="umroh" name="jenis_izin" value="Ibadah Umroh" type="radio" wire:model="jenis_izin"><label for="umroh" class="ml-8 text-md font-medium text-gray-600">Ibadah Umroh</label>
	                	</div>
	                	<div class="flex my-2 items-center">
	                		<input id="lainnya" name="jenis_izin" value="Lainnya" type="radio" wire:model="jenis_izin"><label for="lainnya" class="ml-8 text-md font-medium text-gray-600">Lainnya</label>
	                	</div>
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="grid col-span-6 sm:col-span-4 gap-6">
	              	<div>
		                <label for="first-name" class="block text-sm font-medium text-gray-700">Tanggal Mulai Izin<span></label>
		                <input required type="date" wire:model="tgl_mulai_izin" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('tgl_mulai_izin') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	              	</div>

	              	<div class="gap-6">
		                <label for="first-name" class="block text-sm font-medium text-gray-700">Tanggal Berakhirnya Izin<span></label>
		                <input required type="date" wire:model="tgl_akhir_izin" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('tgl_mulai_izin') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	              	</div>

		            <div class="gap-6">
		                <label for="first-name" class="block text-sm font-medium text-gray-700">Jumlah Hari Izin<span></label>
		                <input required type="number" wire:model="jumlah_izin" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('jumlah_izin') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	              	</div>

	              	<div class="gap-6">
		                <label for="first-name" class="block text-sm font-medium text-gray-700">Tanggal Mulai Bekerja Kembali<span></label>
		                <input required type="date" wire:model="tgl_mulai_kerja" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
		                @error('tgl_mulai_kerja') 
						    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
						@enderror
	              	</div>

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
