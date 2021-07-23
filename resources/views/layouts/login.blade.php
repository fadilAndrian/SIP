<!DOCTYPE html>
<html>
<head>
	<title>SIPU</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{asset('js/app.js')}}" defer></script>

</head>
<body>
	<div class="h-full w-full flex">
		<div class="h-screen w-5/12 bg-red-300 overflow-hidden">
			<img class="w-full" src="img/bg-login.png">
		</div>
		<div class="mx-auto block">
			<img src="img/logo-unisia.png" class="mx-auto mt-10">
			<p class="text-3xl font-bold text-blue-800 mt-10">SISTEM INFORMASI PEGAWAI UNISIA</p>
			@yield('content')
			<div class="absolute bottom-5 mx-auto text-center w-5/12">
				<p class="text-xs font-light text-gray-600">
					copyright © 2021 bank syariah unisia insan indonesia
				</p>
			</div>
		</div>
	</div>
</body>
</html>