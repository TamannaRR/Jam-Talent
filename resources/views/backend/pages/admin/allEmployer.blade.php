@extends('backend.layout.template')
@section('body-content')
<div class="dashboard-content-container" data-simplebar="init" style="height: 549px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 448px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 549px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Users</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>All Freelancer</li>
					</ul>
				</nav>
			</div>
	<!--==============all user table start================ -->
	<div  class="col-12 col-xl-12 col-md-12">

		<div class="section-headline margin-bottom-30">
			<h4>All Users</h4>
		</div>
		<table class="basic-table table-responsive">

			<tbody><tr>
				

				<th># Si</th>
				<th>tagLine</th>
				<th>Verified</th>
				<th>Action</th>

				
			</tr>
			@php
                $i = 1;
            @endphp
			@foreach($employers as $employer)
			<tr>
				<td data-label="Column 1"><a href="{{route('single.employer.profile',$employer->id)}}">{{$i}}</a></td>
				<td data-label="Column 2">{{$employer->sort_description}}</td>
				<td data-label="Column 3">
					@if($employer->verified == 1)
						Yes
					@else
						NO
					@endif
				</td>
				<td data-label="Column 3">
					@if($employer->verified == 1)
					
							<form method="POST" action="{{route('freelancer.enActive',$employer->id)}}"enctype="multipart/form-data">
							@csrf
							<button class="btn btn-primary ripple-effect icon-feather-user-check" type="submit">	
							</form>			

					@elseif($employer->verified == 0)

						<a href="#small-dialog" class=" popup-with-zoom-anim btn btn-danger"><i class="icon-feather-user-x"></i></a>
						
						@endif
					</td>
				<td>
					
				</td>



			</tr>
			@php
                $i++;
            @endphp
			@endforeach
			
		</tbody>
	</table>
</div>
<!-- ==================all user table end================== -->


			
			<!-- Footer -->
			@include('includes.dashboardFooter')
			<!-- Footer / End -->

		</div>
	</div>
</div>
</div>
<!-- En-valid Popup
================================================== -->
							
@endsection