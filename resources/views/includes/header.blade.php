		<!-- Site Header -->
		<div class="site-header">
			<!-- Header Top -->
			<div class="header-top">
				<div class="wrapper">
					<div class="header-contact">
						<ul>
							<li><a href="tel:2349018936865">+234-(0)-901-893-6865</a></li>
							<li><a href="https://facebook.com/camp.link.3" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.instagram.com/camplink103/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="header-lang">
						<ul>
							<li class=""><a href="javascript:;" onclick="translateLanguage('English')">EN</a></li>
							<li><a href="javascript:;" onclick="translateLanguage('French')">FR</a></li>
							<li><a href="javascript:;" onclick="translateLanguage('Spanish')">SP</a></li>
							<li style="display: none;" id="google_translate_element"></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Header Top End -->
			<!-- Header Bottom -->
			<div class="header-bottom">
				<div class="wrapper">
					<div class="header-logo">
						<a href="{{ route('home.index') }}"><img src="{{ asset('img\logo.png') }}" alt="The Grandium Hotel"></a>
					</div>
					<div class="header-nav">
						<ul class="nav-left">
							<li><a href="{{ route('about.index') }}">ABOUT US</a></li>
							<li><a href="{{ route('rooms.index') }}">ROOMS</a></li>
							<li><a href="{{ route('services.index') }}">SERVICES</a></li>
						</ul>
						<ul class="nav-right">
							<li><a href="{{ route('gallery.index') }}">GALLERY</a></li>
							<li><a href="#">RESERVATION</a></li>
							<li><a href="{{ route('contact.create') }}">CONTACT</a></li>
						</ul>
					</div>
					<div class="header-toggle">
						<i class="fa fa-bars"></i>
					</div>
				</div>
			</div>
			<!-- Header Bottom End -->
		</div>
		<!-- Site Header End -->
