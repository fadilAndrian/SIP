
<div class="w-full h-full">
<div class="{{ $isShow == true ? 'hidden' : '' }}">
  <!-- tabel data pegawai -->
  <div class="hidden sm:block" aria-hidden="true">
    <div class="ml-72 px-5 py-5 mt-10 mr-10">
      <div class="text-gray-700 text-3xl mb-1 font-bold">
          Tabel Data Pegawai
        </div>
      <div class="border border-t border-gray-400"></div>
    </div>
  </div>

  <div class="ml-72 mr-10 px-5">
    <div class="md:grid md:grid-cols-2 md:gap-6">
      <div class="mt-5 md:mt-0 md:col-span-2">
        
      	<!-- search -->
    	<div class="bg-white shadow-none rounded-md my-1 w-1/3 ml-auto relative flex">
    		<input type="text" wire:model="search" class="mt-1 w-full py-2 px-3 border-2 border-gray-200 rounded-md hover:border-gray-300 focus:outline-none focus:border-gray-300 transition-colors text-sm font-medium" placeholder="Search...">
    		<span class="my-auto text-gray-400 absolute inset-y-3 right-3">
	    		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
				</svg>
    		</span>
    	</div>
    	<!-- /search -->

        <div class="bg-white shadow-md rounded my-2">
            <table class="w-full table-auto pr-5">
                <thead class="w-full">
                    <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 w-10 text-left">No</th>
                        <th class="py-3 px-6 w-64 text-left">Nama</th>
                        <th class="py-3 px-6 w-64 text-left">NIP</th>
                        <th class="py-3 px-6 w-10 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                  @foreach($user as $data)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center font-medium">
                                {{$loop->iteration}}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                {{$data->name}}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center">
                                {{ $data->nip}}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                              <!-- show -->
                                <div wire:click="show({{$data->id}})" style="cursor: pointer;" class="w-4 mx-1.5 transform hover:text-purple-500 hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>

                                <!-- edit -->
								<div wire:click="edit({{$data->id}})" style="cursor: pointer;" class="w-4 mx-1.5 transform hover:text-purple-500 hover:scale-150">
	                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
									</svg>
                                </div>

                                <!-- delete -->
                                <div wire:click="delete({{$data->id}})" onclick="confirm('Yakin untuk menghapus?') || event.stopImmediatePropagation()" style="cursor: pointer;" class="w-4 mx-1.5 transform hover:text-purple-500 hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- paginate -->
        <div class="my-2 overflow-x-auto sm:-mx-8 lg:mx-8">{{$user->links()}}</div>
        <!-- /paginate -->


      </div>
    </div>
  </div>
  <!-- /tabel data pegawai -->
</div>

  <!-- TOAST -->
  @if(session()->has('succes'))
  	@include('livewire.toast')
  @endif
  <!-- /TOAST -->
  

  <!-- show data pegawai -->
  @if($isShow)
  	@include('livewire.create-pegawai')
  @endif
  <!-- /show data pegawai -->


  <script>
    $(document).ready(function() {
        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click",".remove",function(){ 
            $(this).parents(".toast").remove();
        });
      });
  </script>


</div>
