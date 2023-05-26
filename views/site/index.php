<?php

/** @var yii\web\View $this */

$this->title = 'Solaris Finance';
?>

<div class="row">
				<div class="col-xxl-9 col-lg-12 be-1">
					<div class="row p-30 bg-f7fafe">
						<h3 class="pb-10">
							<span class="fs-30 fw-600">My Portfolio</span>
							<span class="float-end"><a class="btn btn-xs btn-dark-light" href="#">+ Add More</a></span>
						</h3>	
						<div class="col-xl-3 col-lg-3 col-sm-6 col-6">
							<div class="widget-flat">
								<div class="card-body">
									<p class="text-danger">-25.5% <i class="fa fa-caret-down fs-18"></i></p>
									<div id="spark1" class="apex-charts mb-3"></div>
									<h3 class="mt-2 mb-1 fw-500">1,540.30</h3>
									<p class="text-muted fw-500 mt-0" title="Revenue">LTC Balance</p>
								</div>
							</div>
						</div> <!-- end col-->
						<div class="col-xl-3 col-lg-3 col-sm-6 col-6">
							<div class="widget-flat">
								<div class="card-body">
									<p class="text-success">+30.2% <i class="fa fa-caret-up fs-18"></i></p>
									<div id="spark2" class="apex-charts mb-3"></div>
									<h3 class="mt-2 mb-1 fw-500">1,425.35</h3>
									<p class="text-muted fw-500 mt-0" title="Revenue">ETH Balance</p>
								</div>
							</div>
						</div> <!-- end col-->
						<div class="col-xl-3 col-lg-3 col-sm-6 col-6">
							<div class="widget-flat">
								<div class="card-body">
									<p class="text-success">+10.5% <i class="fa fa-caret-up fs-18"></i></p>
									<div id="spark3" class="apex-charts mb-3"></div>
									<h3 class="mt-2 mb-1 fw-500">5.25896</h3>
									<p class="text-muted fw-500 mt-0" title="Revenue">BTC Balance</p>
								</div>
							</div>
						</div> <!-- end col-->
						<div class="col-xl-3 col-lg-3 col-sm-6 col-6">
							<div class="widget-flat">
								<div class="card-body">
									<p class="text-danger">-15.9% <i class="fa fa-caret-down fs-18"></i></p>
									<div id="spark4" class="apex-charts mb-3"></div>
									<h3 class="mt-2 mb-1 fw-500">$59,200.00</h3>
									<p class="text-muted fw-500 mt-0" title="Revenue">Portfolio Worth in USD</p>
								</div>
							</div>
						</div> <!-- end col-->
					</div>

					<div class="row ">	
						<div class="box rounded-0 mb-0">
							<div class="row box-body px-30 bt-1">
								<h3 class="pb-10">
									<span class="fs-30 fw-600">Swaps & Summaries</span>
								</h3>
								<div class="col-xl-4">
									<div class="bg-faded mb-30 rounded swap_box">
										<div class="box-header no-border ">
											<h4 class="box-title mb-0">Recent swaps <small class="subtitle"><i class="mdi mdi-forum"></i> In last 30 days</small></h4>
											<ul class="box-controls pull-right">
											  <li class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											  </li>
											</ul>
										</div>
										<div class="box-header no-border pt-0">
											<div class=" d-flex align-items-center justify-content-between">
												<div class="col-xl-7 col-sm-5 favorite-box">
													<p class="mb-0"><small class="subtitle mb-0">Favorite Contacts</small></p>
													<div class="d-flex">
														<img src="theme/images/avatar/avatar-10.png" width="32" height="32" class="bg-light rounded-circle" alt="Avatar">
														<img src="theme/images/avatar/avatar-8.png" width="32" height="32" class=" bg-light rounded-circle" alt="Avatar" style="margin-left: -15px;">
														<img src="theme/images/avatar/avatar-9.png" width="32" height="32" class="bg-light rounded-circle" alt="Avatar" style="margin-left: -15px;">
													</div>
												</div>
												<div class="col-xl-3 col-lg-3">
													<p class="mb-0"><small class="subtitle mb-0">Completed</small></p>
													<h3 class="fw-500 mt-0">40</h3>
												</div>
												<div class="col-xl-3 col-lg-3 favorite-box2">
													<p class="mb-0"><small class="subtitle mb-0">Cancelled</small></p>
													<h3 class="fw-500 mt-0">15</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="bg-faded rounded mt-10">
										<div class="box-body">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<div class="h-50 w-50 rounded text-center" style="background: #fd7e14;">
														<p class="mb-0 fs-30 w-50 fw-600 l-h-50 text-white"><i class="cc BTC-alt m-0 " title="BTC"></i></p>
													</div>
													<div class="d-flex flex-column font-weight-500 mx-10">
														<a  class="text-dark mb-1  fs-17">Completed Swap</a>
														<span class="text-fade">Yesterday 10:40PM</span>
													</div>
												</div>
												<div>
													<div class="d-flex flex-column font-weight-500">
														<p class="text-fade text-end hover-primary mb-20"><i class="cc ERC fs-22 me-2" title="ERC"></i>Steller</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="bg-faded rounded mt-30 border-dash">
										<div class="box-body">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center mx-30 mx-sm-15">
													<div class="rounded text-center">
														<p class="mb-0"><i class="cc BTC m-0" title="BTC"></i></p>
													</div>
													<div class="d-flex flex-column">
														<p class="mb-0 text-info"><i class="cc ERC-alt m-0" title="ERC"></i></p>
													</div>
												</div>
												<div>
													<div class="d-flex flex-column fw-500 mx-30">
														<p class="text-fade text-end mb-0">Start new swap </p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="activ_box_button mt-30 " style="width: 100%;">
										<button class="btn btn-outline-secondary bg-2500B6 text-white" style="width: 100%;"><i class="ti-plus me-10"></i> Start A Swap</button>
									</div>
								</div><!-- end col-->
								<div class="col-xl-8">
									<div class="box-body pt-0">
										<h3>
											<span class="fw-600">Portfolio Status</span>
										</h3>
										<div id="apexcharts-column"></div>
										<h3>
											<span class="fw-600">Account Summary</span>
										</h3>
										<div class="row d-flex align-items-center justify-content-between">
												<div class="col-sm-4 d-flex align-items-center">
													<div id="booked-revenue-chart"></div>
													<div class="d-flex flex-column font-weight-500 mx-10">
														<span class="text-fade">Incoming</span>
														<h3>$20.5k</h3>
													</div>
												</div>
												<div class="col-sm-4 d-flex align-items-center">
													<div id="booked-revenue-chart2"></div>
													<div class="d-flex flex-column font-weight-500 mx-10">
														<span class="text-fade">Outgoing</span>
														<h3>$15.9k</h3>
													</div>
												</div>
												<div class="col-sm-4 d-flex align-items-center">
													<div id="booked-revenue-chart3"></div>
													<div class="d-flex flex-column font-weight-500 mx-10">
														<span class="text-fade">Savings</span>
														<h3>$10.5k</h3>
													</div>
												</div>
										</div>
									</div>
								</div><!-- end col-->
							</div>
						</div>
					</div>
				</div>

				<div class="col-xxl-3 col-12 p-0">
					<div class=" box side-box rounded-0 mb-0">
						<div class="row">
							<div class="col-xxl-12 col-lg-6">
								<div class="box-header no-border">
								  <h3 class="box-title mb-0 fw-500">Your Card</h3>
								  <span class="box-controls pull-right text-fade fs-20"><i class="si-plus si"></i></span>
								</div>
								<!-- /.box-body -->
								<div class="box-body pt-10">				  
									<!-- Place somewhere in the <body> of your page -->
									<div class="flexslider">
										<div class="flex-viewport" style="overflow: hidden; position: relative;">
											<ul class="slides">
												<li class="clone" aria-hidden="true" style=" margin-right: 0px; float: left; display: block;">
											  	<div class="box bg-danger box-inverse">
														<div class="box-body">
															<h1><i class="fa fa-cc-amex"></i></h1>
															<h3>**** **** **** 9578</h3>
															<h3>8523</h3>
															<span class="pull-right">Exp date: 12/22</span>
															<span class="font-500">William Doe</span>
														</div>
													</div>
												</li>
												<li style=" margin-right: 0px; float: left; display: block;" class="" data-thumb-alt="">
											  	<div class="box bg-warning box-inverse">
														<div class="box-body">
															<h1><i class="fa fa-cc-discover"></i></h1>
															<h3>**** **** **** 5124</h3>
															<h3>7539</h3>
															<span class="pull-right">Exp date: 12/22</span>
															<span class="font-500">Jayden Doe</span>
														</div>
													</div>
												</li>
										  	<li style="margin-right: 2px; float: left; display: block;" class="clone" aria-hidden="true">
											  	<div class="box bg-info box-inverse">
														<div class="box-body">
															<h1><i class="fa fa-cc-mastercard"></i></h1>
															<h3>**** **** **** 4125</h3>
															<h3>1589</h3>
															<span class="pull-right">Exp date: 12/22</span>
															<span class="font-500">Ethan Doe</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xxl-12 col-lg-6">
								<div class="box-header no-border">
									<h3 class="box-title mb-0 fw-500">Recent Payments</h3>
										<ul class="box-controls pull-right">
											<li class="dropdown">
													<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
													<div class="dropdown-menu dropdown-menu-end">
													  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														<a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														<a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												  </div>
										  </li>
								    </ul>
								</div>
								<div class="box-body pull-up">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<div class="h-50 w-50 text-center">
												<img src="theme/images/avatar/avatar-10.png"  class="bg-light rounded-circle" alt="Avatar">
											</div>
											<div class="d-flex flex-column font-weight-500 mx-10">
												<a href="#" class="text-dark hover-primary mb-1  fs-17">Robert Fox</a>
												<span class="text-fade">2 Minutes Ago</span>
											</div>
										</div>
										<div>
											<div class="d-flex flex-column font-weight-500">
												<a href="#" class="text-info fw-500 text-end hover-primary mb-1 fs-16">+$50.00</a>
												<span class="text-fade text-end"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="box-body pull-up">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<div class="h-50 w-50  text-center">
												<img src="theme/images/avatar/avatar-8.png"  class="bg-light rounded-circle" alt="Avatar">
											</div>
											<div class="d-flex flex-column font-weight-500 mx-10">
												<a href="#" class="text-dark hover-primary mb-1  fs-17">Netflix</a>
												<span class="text-fade">35 Minutes Ago</span>
											</div>
										</div>
										<div>
											<div class="d-flex flex-column font-weight-500">
												<a href="#" class="text-dark fw-500 text-danger hover-primary mb-1 fs-16">-$50.00</a>
												<span class="text-fade text-end"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="box-body pull-up">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<div class="h-50 w-50 text-center">
												<img src="theme/images/avatar/avatar-7.png" class="bg-light rounded-circle" alt="Avatar">
											</div>
											<div class="d-flex flex-column font-weight-500 mx-10">
												<a href="#" class="text-dark hover-primary mb-1  fs-17">Warren</a>
												<span class="text-fade">45 Minutes Ago</span>
											</div>
										</div>
										<div>
											<div class="d-flex flex-column font-weight-500">
												<a href="#" class="text-dark text-info fw-500 hover-primary mb-1 fs-16">+$50.00</a>
												<span class="text-fade text-end"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="col-xxl-12 col-lg-12">
								<div class="box-body" style="align-self: center;">
									<div id="apexcharts-pie" style="max-height: 420px;"></div>
								</div>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-xl-12">
					<div class="box rounded-0">
						<div class="box-body pb-lg-0 ">
							<div class="row">
								<h3 class="mb-0 text-fade">NAV</h3>
								<div class="col-lg-4 col-12">
									<div>
										<h1 class="mb-0 fw-600">$169<small>.1100</small></h1>
										<p class="mb-0 text-fade">as on 29 sep 2021 , 9:00pm</p>
									</div>
								</div>
								<div class="col-lg-8 col-12">
									<div class="row">
										<div class="col-lg-4">
											<div>
												<h2 class="mb-0 text-danger">$-0.1200<small>(-0.07%)</small></h2>
												<p class="mb-0 text-fade">Last Cahnge</p>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<h2 class="mb-0 text-success">+37<small>.98%</small></h2>
												<p class="mb-0 text-fade">3Y CAGR Return</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-30">
								<div class="col-lg-12 col-12">
									<div id="timeseries-chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>