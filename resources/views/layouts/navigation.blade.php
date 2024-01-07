    <!-- header -->
    <header class="site-header header">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="dlab-topbar-left">
						<ul>
							<li><i class="far fa-envelope m-r5"></i> contact@nado.ma</li>
							<li><i class="fa fa-phone m-r5"></i> +212 808 631 836</li>
						</ul>
					</div>
					<div class="dlab-topbar-right topbar-social">
						<ul>
							<li><a href="https://web.facebook.com/profile.php?id=61552295353235" class="site-button-link facebook hover" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.tiktok.com/@nado.ma" class="site-button-link tiktok hover" target="_blank"><i class="fab fa-tiktok"></i></a></li>
							<li><a href="https://twitter.com/NADO_AUTO" class="site-button-link twitter hover" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/nado.ma_auto/" class="site-button-link instagram hover" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/company/nadoauto/" class="site-button-link linkedin hover" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="https://www.youtube.com/@Nado-Auto" class="site-button-link youtube hover" target="_blank"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" >
						<i class="flaticon-menu"></i>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">
                        <ul class="nav navbar-nav">
							<li> <a href="{{ route('index') }}">Home</a></li>
							<li> <a href="{{ route('Acheter.index') }}">Acheter</a></li>
							<li> <a href="{{ route('Vendre.index') }}">Vendre/Reprise</a></li>
							<li> <a href="{{ route('Contactez-nous.index') }}">Contactez-nous</a></li>
								</ul>
							</li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
