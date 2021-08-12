
<div class="w-full h-full">

	<div class="hidden sm:block" aria-hidden="true">
	  <div class="ml-72 pl-5 py-5 mt-10 mr-10">
	  	<div class="text-gray-700 text-3xl mb-1 font-bold">
      		Formulir Penambahan Cuti dan Izin
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
      			Cuti Tahunan (CT) atau Cuti Besar (CB)
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
	                <label class="block text-sm font-medium text-gray-700">Tahun Periode Cuti Tahunan (CT)<span></label>
	                <input required type="text" wire:model="tahun_periode_CT" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tahun_periode_CT') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Jumlah hari Cuti yang diambil (CT)<span></label>
	                <input required type="text" wire:model="jumlah_cuti_CT" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('jumlah_cuti_CT') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Tahun Periode Cuti Besar (CB)<span></label>
	                <input required type="text" wire:model="tahun_periode_CB" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tahun_periode_CB') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Jumlah hari Cuti yang diambil (CB)<span></label>
	                <input required type="text" wire:model="jumlah_cuti_CB" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('jumlah_cuti_CB') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Sisa Jumlah Hari Sebelum Cuti Tahunan (CT)<span></label>
	                <input required type="text" wire:model="sisa_sebelum_CT" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('sisa_sebelum_CT') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Sisa Jumlah Hari Setelah Cuti Tahunan (CT)<span></label>
	                <input required type="text" wire:model="sisa_setelah_CT" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('sisa_setelah_CT') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Sisa Jumlah Hari Sebelum Cuti Besar (CB)<span></label>
	                <input required type="text" wire:model="sisa_sebelum_CB" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('sisa_sebelum_CB') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	              <div class="col-span-6 sm:col-span-1">
	              </div>
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Sisa Jumlah Hari Setelah Cuti Besar (CB)<span></label>
	                <input required type="text" wire:model="sisa_setelah_CB" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('sisa_setelah_CB') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label class="block text-sm font-medium text-gray-700">Tanggal Mulai Cuti<span></label>
	                <input required type="date" wire:model="tgl_mulai_cuti" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tgl_mulai_cuti') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Tanggal Akhir Cuti<span></label>
	                <input required type="date" wire:model="tgl_akhir_cuti" id="first-name" autocomplete="given-name" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-xl outline-none">
	                @error('tgl_akhir_cuti') 
					    <div class="text-sm font-medium text-red-500">{{ $message }}</div>
					@enderror
	              </div>
	            </div>

	            <div class="grid grid-cols-9 gap-6">
	              <div class="col-span-6 sm:col-span-4">
	                <label for="first-name" class="block text-sm font-medium text-gray-700">Tanggal Mulai Bekerja Kembali<span></label>
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
