
@include('partials.meta')

	<!-- [ navigation menu ] start -->
	@include('partials.navbar')
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	@include('partials.header')
	<!-- [ Header ] end -->
    
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">
            @yield('content')
        </div>
    </div>
    <!-- [ Main Content ] end -->
    
@include('partials.footer')