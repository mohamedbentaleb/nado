@extends('layouts.app')

@section('title', 'Contact | Nado.ma')

@section('content')
<!-- inner page banner -->
        <div class="dlab-bnr-inrs overlay-black-middles" style="height: 100px;width:100%;text-align:center;background:#f5f6f6;">
            <div class="container">
                <div class="dlab-bnr-inr-entrys">
                    <h1 class="text-primary">Car Details</h1>
				</div>
            </div>
        </div>
        <!-- inner page banner END -->


        <div class="section-full bg-white p-t30">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-md-8">
						<div class="m-b30">
							<h3 class="h3 m-t0">Hyundai EON LPG Magna Plus </h3>
							<ul class="used-car-dl-info">
								<li><i class="fa fa-map-marker"></i> UK London</li>
								<li><i class="fa fa-calendar"></i> Updated on Nov 11</li>
								<li><i class="fa fa-eye"></i> 14 Views</li>
							</ul>
						</div>
                        <div class="row">
                            <div class="col-md-3">
                                <lite-youtube videoid="lRQ5cCE6SjA" style="width: 238px;height: 433px;"></lite-youtube>
                            </div>
                            <div class="col-md-9">
                                <div class="owl-fade-one owl-carousel owl-btn-center-lr">
                                    <div class="item">
                                        <div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/thum1.jpg')}}" alt=""> </div>
                                    </div>
                                    <div class="item">
                                        <div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/thum2.jpg')}}" alt=""> </div>
                                    </div>
                                    <div class="item">
                                        <div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/thum3.jpg')}}" alt=""> </div>
                                    </div>
                                    <div class="item">
                                        <div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/thum4.jpg')}}" alt=""> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <lite-youtube videoid="TPlfIcutDys" style="width: 238px;height:135px"></lite-youtube>
                            </div>
                            <div class="col-md-9">
                                Discription:
                                Voir la voiture en vidéo et le bon prix sur notre CHAINE YOUTUBE NADO AUTO BMW 2020 Série 1 Sport 118d à Casablanca En Excellent état 1ér main Le véhicule a été évalué et expertisé totalement et ne fait objet d’aucun accident ou opposition Il n’y a aucun coût pour l’acheteur Veuillez nous contacter pour plus d’informations Voir la voiture en vidéo et le bon prix sur notre chaine youtube NADO AUTO
                            </div>
                        </div>
						<div class="clearfix m-t30">
							<ul class="nav theme-tabs m-b10">
								<li class="active">
									<a data-toggle="tab" aria-controls="economy"  href="#economy">
										<i class="fa fa-usd"></i>
										Economy
									</a>
								</li>
								<li>
									<a data-toggle="tab" aria-controls="presentation" href="#presentation">
										<i class="fa fa-tachometer"></i>
										presentation
									</a>
								</li>
								<li>
									<a data-toggle="tab" aria-controls="features" href="#features">
										<i class="fa fa-star"></i>
										Features
									</a>
								</li>
								<li>
									<a data-toggle="tab" aria-controls="safety" href="#safety">
										<i class="fa fa-automobile"></i>
										Safety
									</a>
								</li>
							</ul>
							<div class="dlab-tabs">
								<div class="tab-content">
									<div id="economy"  class="tab-pane active clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Mileage</div>
													<div class="rightview">17.20 kmpl</div>
												</li>
												<li>
													<div class="leftview">Service Cost</div>
													<div class="rightview">-</div>
												</li>
												<li>
													<div class="leftview">Fuel Type</div>
													<div class="rightview">Diesel</div>
												</li>
												<li>
													<div class="leftview">Fuel Tank</div>
													<div class="rightview">58 Litres</div>
												</li>

												<li>
													<div class="leftview">Mileage</div>
													<div class="rightview">17.20 kmpl</div>
												</li>
												<li>
													<div class="leftview">Over Drive</div>
													<div class="rightview">4 Motion</div>
												</li>
												<li>
													<div class="leftview">Steering Type</div>
													<div class="rightview">Electric</div>
												</li>
												<li>
													<div class="leftview">Turning Radius</div>
													<div class="rightview">5.75meters</div>
												</li>
												<li>
													<div class="leftview">Alloy Wheel Size</div>
													<div class="rightview">18 Inch</div>
												</li>
												<li>
													<div class="leftview">No Of Doors</div>
													<div class="rightview">5</div>
												</li>
											  </ul>
										</div>
									</div>
									<div id="presentation"  class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Engine</div>
													<div class="rightview">1989 cc </div>
												</li>
												<li>
													<div class="leftview">BHP</div>
													<div class="rightview">188</div>
												</li>
												<li>
													<div class="leftview">No. of Cylinders</div>
													<div class="rightview">4</div>
												</li>
												<li>
													<div class="leftview">No. of Gears</div>
													<div class="rightview">Spped 7</div>
												</li>
											  </ul>
										</div>
									</div>
									<div id="features"  class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Cruise Control</div>
													<div class="rightview">Yes</div>
												</li>
												<li>
													<div class="leftview">Sun roof</div>
													<div class="rightview">No </div>
												</li>
												<li>
													<div class="leftview">Seating Capacity</div>
													<div class="rightview">4</div>
												</li>
												<li>
													<div class="leftview">Boot Space</div>
													<div class="rightview">480 litres</div>
												</li>
											  </ul>
										</div>
									</div>
									<div id="safety"  class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Parking Sensor</div>
													<div class="rightview">Yes </div>
												</li>
												<li>
													<div class="leftview">Airbags</div>
													<div class="rightview">Yes</div>
												</li>
											  </ul>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="modal-body clearfix">
										<div class="pull-letf max-width-300"></div>
										<div class="lead-form">
											<form>
                                                <p class="m-t0 m-b5">Please enter your contact details to get seller details.</p>
                                                <div class="form-group">
                                                    <input value="" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <input value="" class="form-control" placeholder="Mobile Number">
                                                </div>
                                                <div class="text-left">
                                                    <div class="search-content">
                                                        <input id="send-details1" type="checkbox">
                                                        <label for="send-details1" class="search-content-area">Send details on email </label>
                                                    </div>
                                                </div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- Side bar END -->
					<div class="col-md-4">
						<div class="car-dl-info m-b30">
							<div class="price">
								<h2 class="m-t0 m-b5" style="color:#1c4f9d !important"><b>280 000 Dh</b></h2>
								<span>Hyundai EON LPG Magna Plus</span>
							</div>
							<form>
								<p class="m-t0 m-b5">Please enter your contact details to get seller details.</p>
								<div class="form-group">
									<input value="" class="form-control" placeholder="Offre">
								</div>
								<div class="form-group">
									<input value="" class="form-control" placeholder="Mobile Number">
								</div>
								<div class="clearfix p-tb10">
									<button type="button" class="btn-primary site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">View On Road Price </button>
								</div>
							</form>
                            <div class="clearfix p-tb10">
                                <button type="button" class="btn-primary site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">0770080009 </button>
                            </div>
                            <div class="clearfix p-tb10">
                                <button type="button" class="btn-primary site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">Finance </button>
                            </div>
						</div>
						<div class="used-car-features clearfix m-b30">
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5>2019</h5>
								<span>Model</span>
							</div>
							<div class="car-features">
								<i class="flaticon-dashboard"></i>
								<h5>6,900 km</h5>
								<span>Driven</span>
							</div>
							<div class="car-features">
								<i class="flaticon-gas-station"></i>
								<h5>Diesel</h5>
								<span>Fuel</span>
							</div>
							<div class="car-features">
								<i class="flaticon-mechanic"></i>
								<h5>Individual</h5>
								<span>Seller</span>
							</div>
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5>Automatic</h5>
								<span>Transmission</span>
							</div>
							<div class="car-features">
								<i class="flaticon-car-key"></i>
								<h5>First</h5>
								<span>Owner</span>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
		<div class="section-full bg-white  p-t40 p-b70">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-head">
							<h3 class="h4 text-uppercase">For your quick look</h3>

						</div>
						<div class="clearfix owl-carousel owl-btn-style-2 quick-look">
							<div class="item">
								<div class="dlab-feed-list">
									<div class="dlab-media">
										<a href="new-car-search-result-column.html"><img src="{{ asset('assets/images/our-work/work/pic1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-info">
										<h4 class="dlab-title"><a href="new-car-search-result-column.html">Hyundai santa fe sport </a></h4>
										<div class="dlab-separator bg-black"></div>
										<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
									</div>
									<div class="icon-box-btn text-center">
										<ul class="clearfix">
											<li>2019</li>
											<li>Manual</li>
											<li>210 hp </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="dlab-feed-list">
									<div class="dlab-media">
										<a href="new-car-search-result-column.html"><img src="{{ asset('assets/images/our-work/work/pic2.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-info">
										<h4 class="dlab-title"><a href="new-car-search-result-column.html">Hyundai santa fe sport </a></h4>
										<div class="dlab-separator bg-black"></div>
										<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
									</div>
									<div class="icon-box-btn text-center">
										<ul class="clearfix">
											<li>2019</li>
											<li>Manual</li>
											<li>210 hp </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="dlab-feed-list">
									<div class="dlab-media">
										<a href="new-car-search-result-column.html"><img src="{{ asset('assets/images/our-work/work/pic3.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-info">
										<h4 class="dlab-title"><a href="new-car-search-result-column.html">Hyundai santa fe sport </a></h4>
										<div class="dlab-separator bg-black"></div>
										<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
									</div>
									<div class="icon-box-btn text-center">
										<ul class="clearfix">
											<li>2019</li>
											<li>Manual</li>
											<li>210 hp </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="dlab-feed-list">
									<div class="dlab-media">
										<a href="new-car-search-result-column.html"><img src="{{ asset('assets/images/our-work/work/pic4.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-info">
										<h4 class="dlab-title"><a href="new-car-search-result-column.html">Hyundai santa fe sport </a></h4>
										<div class="dlab-separator bg-black"></div>
										<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
									</div>
									<div class="icon-box-btn text-center">
										<ul class="clearfix">
											<li>2019</li>
											<li>Manual</li>
											<li>210 hp </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
        @endsection
