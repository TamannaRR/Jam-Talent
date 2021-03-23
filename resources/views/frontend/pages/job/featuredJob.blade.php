@extends('frontend.layout.template')

@section('body-content')

<div class="full-page-content-inner">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<div class="btn-group bootstrap-select hide-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Relevance"><span class="filter-option pull-left">Relevance</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Relevance</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Newest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Oldest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Random</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker hide-tick" tabindex="-98">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select></div>
				</div>
			</div>

			<div class="listings-container compact-list-layout margin-top-35 margin-bottom-25">
				@foreach($featuredJobs as $featuredJob)
				<!-- Job Listing -->
				<a href="{{route('job.show', $featuredJob->id)}}" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-01.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title">{{$featuredJob->job_title}}</h3>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<!-- <li><i class="icon-material-outline-business"></i> Hexagon <div class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></div></li> -->
									<li><i class="icon-material-outline-location-on"></i> {{$featuredJob->location}}</li>
									<li><i class="icon-material-outline-business-center"></i> Full Time</li>
									<!-- <li><i class="icon-material-outline-access-time"></i> 2 days ago</li> -->
								</ul>
							</div>
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>
				</a>	
				@endforeach

				
			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="pagination-container margin-top-20 margin-bottom-20">
				<nav class="pagination">
					<ul>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
						<li><a href="#" class="ripple-effect">1</a></li>
						<li><a href="#" class="ripple-effect current-page">2</a></li>
						<li><a href="#" class="ripple-effect">3</a></li>
						<li><a href="#" class="ripple-effect">4</a></li>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div>
			<!-- Pagination / End -->

			

		</div>
@endsection