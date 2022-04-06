<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">

	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	@livewireStyles
	<script src="{{ mix('js/app.js') }}" defer></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>

	<div class="loader fixed z-50 bg-white top-0 left-0 w-full h-full flex justify-center items-center">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>

	<div class="font-main">
		{{-- @include('layouts.topbar') --}}
		{{ $slot }}
		@include('layouts.footer')
		@include('layouts.whatsapp')
	</div>

</body>

@stack('modals')
@stack('scripts')
@livewireScripts


<script>
	function scrollToSection(section) {
      var app_url = "{{ config('app.url') }}";
      var url_active = window.location.href.replace(/\/+$/, '');
      
      if (url_active == app_url) {
        let element = document.getElementById(section);
        element.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
      } else {
        if (section == "home") {
          window.location.href = "/#home";
        }
        if (section == "educacion") {
          window.location.href = "/#educacion";
        }
        if (section == "trabajos") {
          window.location.href = "/#trabajos";
        }
        if (section == "nosotros") {
          window.location.href = "/#nosotros";
        }
				if (section == "servicios") {
          window.location.href = "/#servicios";
        }

				if (section == "contacto") {
          window.location.href = "/#contacto";
        }
      }
    }
</script>


</html>