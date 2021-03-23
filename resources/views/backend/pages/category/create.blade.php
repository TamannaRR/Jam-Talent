@extends('backend.layout.template')
@section('body-content')
<div class="dashboard-content-container" data-simplebar="init" style="height: 549px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 275px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 549px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Category</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Create Category</li>
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
							<h3><i class="icon-material-outline-supervisor-account"></i>Category</h3>
							<div class="content">
								<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
				                    @csrf
				                    <div class="form-group">
				                      <label>Category Name</label>
				                      <input type="text" name="name" class="form-control" required="required" autocomplete="off">
				                    </div>
				                    <div class="form-group">
				                      <label>Font Awesome Icon Ex(fa fa-xxx)</label>
				                      <input type="text" name="icon" class="form-control" required="required" autocomplete="off">
				                    </div>
				                    <div class="form-group">
				                      <label>Description</label>
				                      <textarea class="form-control" rows="5" name="desc"></textarea>
				                    </div>
				                    <div class="form-group">
				                      <label>Parent Category</label>
				                      <select class="form-control" name="parent_id">
				                        <option value="0">Primary</option>
				                        @foreach($primary_category as $category)
				                        <option value="{{$category->id}}">{{$category->name}}</option>
				                        @endforeach
				                      </select>
				                    </div>
				                    <div class="form-group">
				                      <label>Fetured</label>
				                      <select class="form-control" name="fetured">
				                        <option value="1">Yes</option>
				                        <option value="0">No</option>
				                      </select>
				                    </div>

				                    <div class="form-group">
				                      <input type="submit" name="addCategory" class="btn btn-primary btn-block" value="Add New Category">
				                    </div>


				                </form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			@include('includes.dashboardFooter')
			<!-- Footer / End -->

		</div>
	</div></div></div>
@endsection