
<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="{{ asset('backend/img/favicon.ico') }}">
		<title>RP START - Admin Dashboard</title>
		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-classic flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					<!-- Side Nav start-->
				@include('backend.layouts.partials.sidebar')
					<!-- Side Nav end-->

					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full">
						@include('backend.layouts.partials.header')
						<!-- Popup start-->
						@include('backend.layouts.partials.modals')
						<!-- Popup end-->
						<div class="h-full flex flex-auto flex-col justify-between">
							<!-- Content start -->
							<main class="h-full">
								@yield('admin_dashboard')
							</main>
							<!-- Content end -->
							@include('backend.layouts.partials.footer')
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Core Vendors JS -->
		<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
		<!-- Other Vendors JS -->
		<!-- Other Vendors JS -->
        <script src="{{ asset('backend/vendors/apexcharts/apexcharts.js') }}"></script>

		<!-- Page js -->
        <script src="{{ asset('backend/js/pages/sales-dashboard.js') }}"></script>
		<!-- Core JS -->
		<script src="{{ asset('backend/js/app.min.js') }}"></script>
	</body>
</html>