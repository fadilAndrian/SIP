<div>
	<!-- TOAST -->
  <div id="toast" class="px-4 py-1 fixed top-10 right-0">
  <div class="toast text-white pl-3 pr-6 py-4 border-0 rounded relative mb-4 bg-blue-500">
    <span class="text-xl inline-block mr-1 align-middle">
      <svg class="fill-current h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
    </span>
    <span class="inline-block align-middle mr-8">
      <b class="capitalize">Sukses!</b> {{ session('succes') }}
    </span>
    <button class="remove absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-4 outline-none focus:outline-none">
      <span>×</span>
    </button>
  </div>
  </div>
  <!-- /TOAST -->
</div>