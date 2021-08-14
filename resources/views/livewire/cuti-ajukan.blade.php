<div class="w-full h-full">
	<div x-data="{besar: false, bersalin: false, izin: false, menu: true}">
		<div class="h-full w-full"
			 x-show="menu"
			 x-transition:enter="transition ease-out duration-300" 
			 x-transition:enter-start="transform opacity-0" 
			 x-transition:enter-end="transform opacity-100" 
			 x-transition:leave="transition ease-in duration-200" 
			 x-transition:leave-start="transform opacity-100" 
			 x-transition:leave-end="transform opacity-0">
			<div class="ml-72 mr-10 pl-5 h-auto w-auto">
				<div class="h-full w-full mt-24">
					<div class="w-full flex mb-16">
		    			<div class="mx-auto text-4xl text-gray-700 font-semibold self-center">Pilih Jenis Cuti</div>
					</div>
					<div class="w-full block mb-20 items-center">
						<div class="my-5 flex">
							<button @click="besar= !besar, menu= !menu" class="mx-auto bg-blue-800 hover:bg-blue-600 px-10 pt-2 pb-3 text-md text-white w-3/4 rounded-full">Cuti Tahunan (CT) atau Cuti Besar (CB)</button>
						</div>
						<div class="my-5 flex">
							<button @click="bersalin= !bersalin, menu= !menu" class="mx-auto bg-blue-800 hover:bg-blue-600 px-10 pt-2 pb-3 text-md text-white w-3/4 rounded-full">Cuti Bersalin</button>
						</div>
						<div class="my-5 flex">
							<button @click="izin= !izin, menu= !menu" class="mx-auto bg-blue-800 hover:bg-blue-600 px-10 pt-2 pb-3 text-md text-white w-3/4 rounded-full">Izin Tidak Masuk Kerja & Meninggalkan Kantor</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div x-show="besar"
			 x-transition:enter="transition ease-out duration-300" 
			 x-transition:enter-start="transform opacity-0" 
			 x-transition:enter-end="transform opacity-100" 
			 x-transition:leave="transition ease-in duration-200" 
			 x-transition:leave-start="transform opacity-100" 
			 x-transition:leave-end="transform opacity-0">
			@include('livewire.cuti-besar')
		</div>
		<div x-show="bersalin" 
			 x-transition:enter="transition ease-out duration-300" 
			 x-transition:enter-start="transform opacity-0" 
			 x-transition:enter-end="transform opacity-100" 
			 x-transition:leave="transition ease-in duration-200" 
			 x-transition:leave-start="transform opacity-100" 
			 x-transition:leave-end="transform opacity-0">
			@include('livewire.cuti-bersalin')
		</div>
		<div x-show="izin"
			 x-transition:enter="transition ease-out duration-300" 
			 x-transition:enter-start="transform opacity-0" 
			 x-transition:enter-end="transform opacity-100" 
			 x-transition:leave="transition ease-in duration-200" 
			 x-transition:leave-start="transform opacity-100" 
			 x-transition:leave-end="transform opacity-0">
			@include('livewire.cuti-izin-kerja')
		</div>
	</div>
</div>
