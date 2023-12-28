<!-- [ Mobile header ] start -->
<div class="pc-mob-header pc-header">
	<div class="pcm-logo">
		<img style="max-height: 50px" src="{{$setting->logo}}" alt="{{ $setting->tittleWeb}}" class="logo logo-lg">
		{{-- <img src="/admin/assets/images/logo.svg" alt="" class="logo logo-lg"> --}}
	</div>
	<div class="pcm-toolbar">
		<a href="#!" class="pc-head-link" id="mobile-collapse">
			<div class="hamburger hamburger--arrowturn">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<a href="#!" class="pc-head-link" id="headerdrp-collapse">
			<i data-feather="align-right"></i>
		</a>
		<a href="#!" class="pc-head-link" id="header-collapse">
			<i data-feather="more-vertical"></i>
		</a>
	</div>
</div>
<!-- [ Mobile header ] End -->

<!-- [ navigation menu ] start -->
<nav class="pc-sidebar ">
	<div class="navbar-wrapper">
		<div class="m-header">
				<a href="index.html" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img style="max-height: 50px" src="{{$setting->logo}}" alt="{{ $setting->tittleWeb}}" class="logo logo-lg">
					<img src="{{$setting->logo}}" alt="" class="logo logo-sm">
				</a>
			</div>
		<div class="navbar-content">
			<ul class="pc-navbar">
				<li class="pc-item pc-caption">
					<label>Navigation</label>
				</li>
				<li class="pc-item">
					<a href="{{route('dashboard')}}" class="pc-link "><span class="pc-micon"><i data-feather="home"></i></span><span class="pc-mtext capitalize">{{__('dashboard')}}</span></a>
				</li>
				<li class="pc-item">
					<a href="{{route('category.index')}}" class="pc-link "><span class="pc-micon"><i data-feather="command"></i></span><span class="pc-mtext capitalize">{{__('category')}}</span></a>
				</li>
				<li class="pc-item">
					<a href="{{route('post.index')}}" class="pc-link "><span class="pc-micon"><i data-feather="file-text"></i></span><span class="pc-mtext capitalize">{{__('post')}}</span></a>
				</li>
				<li class="pc-item">
					<a href="{{route('organizer.index')}}" class="pc-link "><span class="pc-micon"><i data-feather="aperture"></i></span><span class="pc-mtext capitalize">{{__('organizer')}}</span></a>
				</li>
				<li class="pc-item">
					<a href="{{route('tour.index')}}" class="pc-link "><span class="pc-micon"><i data-feather="map"></i></span><span class="pc-mtext capitalize">{{__('tour')}}</span></a>
				</li>
				<li class="pc-item">
					<a href="{{route('galery.index')}}" class="pc-link "><span class="pc-micon"><i data-feather="film"></i></span><span class="pc-mtext capitalize">{{__('galery')}}</span></a>
				</li>
				<li class="pc-item">
					<a href="{{route('setting.index')}}" class="pc-link "><span class="pc-micon"><i data-feather="settings"></i></span><span class="pc-mtext capitalize">{{__('setting')}}</span></a>
				</li>
				<li class="pc-item pc-caption">
					<label>Elements</label>
					<span>UI Components</span>
				</li>
				<li class="pc-item pc-hasmenu">
					<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">business_center</i></span><span class="pc-mtext">Basic</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					<ul class="pc-submenu">
						<li class="pc-item"><a class="pc-link" href="bc_alert.html">Alert</a></li>
						<li class="pc-item"><a class="pc-link" href="bc_button.html">Button</a></li>
					</ul>
				</li>
				<li class="pc-item">
					<a href="icon-feather.html" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">history_edu</i></span><span class="pc-mtext">Icons</span></a>
				</li>
				<li class="pc-item pc-caption">
					<label>Forms</label>
				</li>
				<li class="pc-item pc-hasmenu">
					<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">edit</i></span><span class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					<ul class="pc-submenu">
						<li class="pc-item"><a class="pc-link" href="form_elements.html">Form Basic</a></li>
						<li class="pc-item"><a class="pc-link" href="form2_input_group.html">Input Groups</a></li>
						<li class="pc-item"><a class="pc-link" href="form2_checkbox.html">Checkbox</a></li>
						<li class="pc-item"><a class="pc-link" href="form2_radio.html">Radio</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- [ navigation menu ] end -->