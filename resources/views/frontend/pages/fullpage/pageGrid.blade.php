@extends('frontend.layout.template')

@section('body-content')
<div class="full-page-container" style="height: 549px;">

	<div class="full-page-sidebar">
		<div class="full-page-sidebar-inner" data-simplebar="init" style="height: 549px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
			<div class="sidebar-container">
				
				<!-- Location -->
				<div class="sidebar-widget">
					<h3>Location</h3>
					<div class="input-with-icon">
						<div id="autocomplete-container">
							<input id="autocomplete-input" type="text" placeholder="Location">
						</div>
						<i class="icon-material-outline-location-on"></i>
					</div>
				</div>

				
				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>Keywords</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="e.g. job title">
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list" style="height: auto;"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<div class="btn-group bootstrap-select show-tick default"><button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="All Categories"><span class="filter-option pull-left">All Categories</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Admin Support</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Customer Service</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Data Analytics</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Design &amp; Creative</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Legal</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Software Developing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">IT &amp; Networking</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Writing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Translation</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sales &amp; Marketing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker default" multiple="" data-selected-text-format="count" data-size="7" title="All Categories" tabindex="-98">
						<option>Admin Support</option>
						<option>Customer Service</option>
						<option>Data Analytics</option>
						<option>Design &amp; Creative</option>
						<option>Legal</option>
						<option>Software Developing</option>
						<option>IT &amp; Networking</option>
						<option>Writing</option>
						<option>Translation</option>
						<option>Sales &amp; Marketing</option>
					</select></div>
				</div>
				
				<!-- Job Types -->
				<div class="sidebar-widget">
					<h3>Job Type</h3>

					<div class="switches-list">
						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Freelance</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Full Time</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Part Time</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Internship</label>
						</div>
						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Temporary</label>
						</div>
					</div>

				</div>

				<!-- Salary -->
				<div class="sidebar-widget">
					<h3>Salary</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 100%;"></div><div class="slider-track-high" style="right: 0px; width: 0%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 50%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$1,500 - $15,000</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 0%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$NaN - $NaN</div></div><div class="tooltip tooltip-max top" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$NaN - $NaN</div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="1500" aria-valuemax="15000" aria-valuenow="1500" aria-valuetext="$NaN - $NaN" tabindex="0" style="left: 0%;"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="1500" aria-valuemax="15000" aria-valuenow="15000" aria-valuetext="$NaN - $NaN" tabindex="0" style="left: 100%;"></div></div><input class="range-slider" type="text" value="1500,15000" data-slider-currency="$" data-slider-min="1500" data-slider-max="15000" data-slider-step="100" data-slider-value="[1500,15000]" data-value="1500,15000" style="display: none;">
				</div>

				<!-- Tags -->
				<div class="sidebar-widget">
					<h3>Tags</h3>

					<div class="tags-container">
						<div class="tag">
							<input type="checkbox" id="tag1">
							<label for="tag1">front-end dev</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag2">
							<label for="tag2">angular</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag3">
							<label for="tag3">react</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag4">
							<label for="tag4">vue js</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag5">
							<label for="tag5">web apps</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag6">
							<label for="tag6">design</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag7">
							<label for="tag7">wordpress</label>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
			<!-- Sidebar Container / End -->

			<!-- Search Button -->
			<div class="sidebar-search-button-container">
				<button class="button ripple-effect">Search</button>
			</div>
			<!-- Search Button / End-->

		</div></div></div>
	</div>
	<!-- Full Page Sidebar / End -->
	
	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar="init" style="height: 549px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
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

			<div class="listings-container grid-layout margin-top-35">
				
				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-01.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Hexagon <span class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></span></h4>
							<h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>	

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Laxo</h4>
							<h3 class="job-listing-title">Competition Law Officer</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-02.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Coffee</h4>
							<h3 class="job-listing-title">Barista and Cashier</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>
				

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-03.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">King <span class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></span></h4>
							<h3 class="job-listing-title">Restaurant General Manager</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>


				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Skyist</h4>
							<h3 class="job-listing-title">International Marketing Coordinator</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Podous</h4>
							<h3 class="job-listing-title">Construction Labourers</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-04.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Mates</h4>
							<h3 class="job-listing-title">Administrative Assistant</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-06.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Trideo</h4>
							<h3 class="job-listing-title">Human Resources Consultant</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>
				
				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-06.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Trideo</h4>
							<h3 class="job-listing-title">International Marketing Specialist</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>
				
				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-02.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Coffee</h4>
							<h3 class="job-listing-title">Terrain Cafe Barista</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>
				
				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Kinte</h4>
							<h3 class="job-listing-title">Skilled Labourer</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Alilia</h4>
							<h3 class="job-listing-title">Healthcare Claims Advisor</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

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

			<!-- Footer -->
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Facebook">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Twitter">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Google Plus">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="LinkedIn">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div></div></div>
	<!-- Full Page Content / End -->

</div>
@endsection