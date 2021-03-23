@extends('backend.layout.template')
@section('body-content')
<div class="dashboard-content-container" data-simplebar="init" style="height: 549px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 191px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 549px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Job</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Post a Job</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<form method="POST" action="{{route('job.store')}}" enctype="multipart/form-data">
						
						@csrf
						<div class="dashboard-box margin-top-0">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
							</div>
							
							<div class="content with-padding padding-bottom-10">
								<div class="row">

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Job Title</h5>
											<input type="text" class="with-border" name="job_title">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Job Type</h5>
											<select class="selectpicker with-border" data-size="7" title="Select Job Type" name="job_type">
												@foreach($jobTypes as $jobType)
												<option value="{{$jobType->name}}">{{$jobType->name}}
												</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Job Category</h5>
											<select class="selectpicker with-border" data-size="7" title="Select Category" name="job_category">
												@foreach($categories as $category)
												<option value="{{$category->name}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Location</h5>
											<div class="input-with-icon">
												<div id="autocomplete-container">
													<input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address" name="location">
												</div>
												<i class="icon-material-outline-location-on"></i>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Salary</h5>
											<div class="row">
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input class="with-border" type="text" placeholder="Min" name="min_salary">
														<i class="currency">USD</i>
													</div>
												</div>
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input class="with-border" type="text" placeholder="Max" name="max_salary">
														<i class="currency">USD</i>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Tags <span>(optional)</span>  <i class="help-icon" data-tippy-placement="right" data-tippy="" data-original-title="Maximum of 10 tags"></i></h5>
											<div class="keywords-container">
												<div class="keyword-input-container">
													<input type="text" class="keyword-input with-border" placeholder="e.g. job title, responsibilites">
													<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
												</div>
												<div class="keywords-list" style="height: auto;"><!-- keywords go here --></div>
												<div class="clearfix"></div>
											</div>

										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Job Description</h5>
											<textarea cols="30" rows="5" class="with-border" name="description"></textarea>
											<div class="uploadButton margin-top-30">
												<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple="">
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-xl-12">
						<input type="submit" name=""class="button ripple-effect big margin-top-30" value="Post a Job">
						<!-- <a href="#" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</a> -->
					</div>
				</form>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			@include('includes.dashboardFooter')
			<!-- Footer / End -->

		</div>
	</div></div></div>
@endsection