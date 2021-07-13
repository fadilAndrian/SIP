
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
        

        <div class="bg-white shadow-md rounded my-6">
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
                                {{ $data->profile->nip}}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                              <!-- show -->
                                <div wire:click="show({{$data->id}})" style="cursor: pointer;" class="w-4 mx-1.5 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <!-- delete -->
                                <div wire:click="delete({{$data->id}})" onclick="confirm('Yakin untuk menghapus?') || event.stopImmediatePropagation()" style="cursor: pointer;" class="w-4 mx-1.5 transform hover:text-purple-500 hover:scale-110">
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
