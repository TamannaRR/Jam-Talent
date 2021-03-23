@extends('backend.layout.template')
@section('body-content')
<div class="dashboard-content-container" data-simplebar="init" style="height: 549px;">
	<div class="simplebar-track vertical" style="visibility: visible;">
		<div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 344px;">
			
		</div>
	</div>
	<div class="simplebar-track horizontal" style="visibility: visible;">
		<div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;">
			
		</div>
	</div>
	<div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;">
		<div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 549px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Jobs</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Jobs</li>
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
							<h3><i class="icon-material-outline-business-center"></i> My Job Listings</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								@foreach($jobs as $job)
								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Logo -->
<!-- 											<a href="#" class="job-listing-company-logo">
												<img src="images/company-logo-05.png" alt="">
											</a> -->

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">Frontend React Developer</a> <span class="dashboard-status-button green">Pending Approval</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 10 July, 2019</li>
														<li><i class="icon-material-outline-date-range"></i> Expiring on 10 August, 2019</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="{{route('candidate.manage',$job->id)}}" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">0</span></a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Edit"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			@include('includes.dashboardFooter')

		</div>
	</div>
</div>
</div>
@endsection