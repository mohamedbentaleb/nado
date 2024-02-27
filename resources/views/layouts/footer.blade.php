    <!-- Footer -->
    <footer class="site-footer footer-image" style="">
        <div class="container">
             <div class="footer-top">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer m-a0"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a></div>
                            <p class="m-t20 m-b40">
                                Nado.ma , la plateforme digitale de "AUTO ENCHÈRE" pour l’achat, la vente et la reprise des véhicules neufs et d’occasions.
                                Avec plus de 20 ans d’expertise dans le secteur de la vente et achat d’automobile. "AUTO ENCHÈRE" ne cesse de développer son activité, de diversifier son portefeuille et de conclure des partenariats de renom dans l’ambition de servir au mieux ses clients.
                            </p>
							<form action="script/mailchamp.php" method="post" class="form-subscribe dzSubscribe">
								<div class="dzSubscribeMsg"></div>
								<div class="input-group m-b15">
									<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter Your Email">
									<span class="input-group-btn">
										<button name="submit" value="Submit" type="submit" class="site-button btn-block">
											<i class="fa fa-envelope font-18"></i>
										</button>
									</span>
								</div>
							</form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget widget_services">
							<div class="contact-line">
								<div class="text-primary text-uppercase font-14 font-weight-500 m-b5"><i class="fa fa-phone m-r5"></i> TÉLÉPHONE FIX</div>
								<div class="contact-no font-weight-600">+212 808 631 836</div>
							</div>
                            <div class="contact-line">
								<div class="text-primary text-uppercase font-14 font-weight-500 m-b5"><i class="fa fa-phone m-r5"></i> TÉLÉPHONE PORTABLE</div>
								<div class="contact-no font-weight-600">+212 770 080 009</div>
							</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Account Information</h4>
							<ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom bg-secondry">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-left copyright-text"> © Copyright 2024. Tous droits réservés.</div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right social-item-link">
						<a href="https://web.facebook.com/profile.php?id=61552295353235" class="fb" target="_blank"><i class="fab fa-facebook-f"></i>. Facebook </a>
						<a href="ttps://twitter.com/NADO_AUTO" class="twt" target="_blank"><i class="fab fa-twitter"></i>. Tweeter </a>
                        <a href="https://www.youtube.com/@Nado-Auto" class="gplus" target="_blank"><i class="fab fa-youtube"></i>. Youtube</a>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
<!-- JavaScript  files ========================================= -->
<script  src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- jquery.min js -->
<script src="{{ asset('assets/js/wow.js') }}"></script>
<!-- wow.min js -->
<script  src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- bootstrap.min js -->
<script  src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<!-- Form js -->
<script  src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>
<!-- Form js -->
<script  src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<!-- magnific-popup js -->
<script  src="{{ asset('assets/js/waypoints-min.js') }}"></script>
<!-- waypoints js -->
<script  src="{{ asset('assets/js/counterup.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('assets/js/masonry-3.1.4.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('assets/js/masonry.filter.js') }}"></script>
<!-- masonry  -->
<script  src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<!-- OWL  Slider  -->
<script  src="{{ asset('assets/js/owl.linked.js') }}"></script>
<!-- OWL  Slider  -->
<script  src="{{ asset('assets/js/dz.carousel.js') }}"></script>
<!-- sortcode fuctions  -->
<script  src="{{ asset('assets/js/dz.ajax.js') }}"></script>
<script  src="{{ asset('assets/js/lite-embed.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/js/jquery.hoverdir.js') }}"></script>
<script  src="{{ asset('assets/js/custom.min.js') }}"></script>
<!-- custom fuctions  -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&callback=initMap"></script>
@yield('script')
