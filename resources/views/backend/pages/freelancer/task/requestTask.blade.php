@extends('backend.layout.template')
@section('body-content')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Tasks</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Tasks</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-assignment"></i> My Requested Tasks</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								@foreach($taskRequests as $taskRequest)
								<li>
									<!-- Job Listing -->
									<div class="job-listing width-adjustment">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{$taskRequest->title}}</a> <span class="dashboard-status-button yellow">Expiring</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-access-time"></i> 23 hours left</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Task Details -->
									<!-- <ul class="dashboard-task-info">
										<li><strong>3</strong><span>Bids</span></li>
										<li><strong>$22</strong><span>Avg. Bid</span></li>
										<li><strong>$15 - $30</strong><span>Hourly Rate</span></li>
									</ul> -->

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="#small-dialog" class="button ripple-effect" ><i class="icon-material-outline-supervisor-account"></i> Approve Order </a>
										<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i> Download Document</a>
										<a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
										<a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
				@include('includes.dashboardFooter')
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->
@endsection