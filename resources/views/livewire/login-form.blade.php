<div>
	<form wire:submit="login()">
		<div class="mx-auto block w-2/3 mt-10">
			<label class="block text-sm font-medium text-gray-700">Email</label>
			<input required type="text" wire:model="email" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-full outline-none">
		</div>
		<div class="mx-auto block w-2/3 mt-3">
			<label class="block text-sm font-medium text-gray-700">Password</label>
			<input required type="password" name="password" class="mt-1 border py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full shadow-sm text-sm font-medium rounded-full outline-none">
		</div>
		<div class="mx-auto w-2/3 mt-10">
			<button wire:click="login()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 w-full">
			  Masuk
			</button>
		</div>
		<div class="mx-auto w-2/3 mt-3">
			<button wire:click="forgot_pass()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-full text-black bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 w-full">
			  Lupa Password
			</button>
		</div>
	</form>
</div>