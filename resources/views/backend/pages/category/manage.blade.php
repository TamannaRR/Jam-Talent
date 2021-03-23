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
						<li>Manage Category</li>
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
								<table class="table">
				                  <thead class="thead-dark">
				                    <tr>
				                      <th scope="col"># Si</th>
				                      <th scope="col">Category Name</th>
				                      <th scope="col">Category Icon</th>
				                      <th scope="col">Description</th>
				                      <th scope="col">
				                        Parent Category
				                      </th>
				                      <th scope="col">Featured or not</th>
				                      <th scope="col">Action</th>
				                    </tr>
				                  </thead>
				                  <tbody>
				                    @php
				                      $i = 1;
				                    @endphp
				                    @foreach($categories as $category)
				                    <tr>
				                      <th scope="row">{{$i}}</th>
				                      <td>{{$category->name}}</td>
				                      <td>{{$category->icon}}</td>
				                      <td>{{$category->desc}}</td>
				                      
				                   
				                      <td>
				                        @if($category->parent_id == 0)
				                        Primary Category
				                        @else
				                        {{$category->parent->name}}
				                        @endif
				                        
				                      </td>
				                      <td>
				                        @if($category->fetured == 0)
				                        No
				                        @else
				                        Yes
				                        @endif
				                        
				                      </td>
				                      <td>
				                        <div class="">
				                          <a href="{{ route('category.edit', $category->id) }}" class=" "><i class="fa fa-edit btn-primary btn"></i></a>
				                          <a href="" class="  " data-toggle="modal" data-target="#deleteCategory{{ $category->id }}"><i class="fa fa-trash-o btn-danger btn"></i></a>
				                          <!-- Modal Start -->
				                            <div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				                              <div class="modal-dialog">
				                                <div class="modal-content">
				                                  <div class="modal-header">
				                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                      <span aria-hidden="true">&times;</span>
				                                    </button>
				                                  </div>
				                                  <div class="modal-body">
				                                    <div class="action-btn">
				                                      <form action="{{ route('category.destroy', $category->id) }}" method="POST">
				                                        @csrf
				                                        <button type="submit" class="btn btn-danger">Delete</button>
				                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				                                      </form>
				                                      
				                                    </div>
				                                  </div>
				                                </div>
				                              </div>
				                            </div>
				                            <!-- Modal End -->

				                        </div>
				                      </td>
				                    </tr>
				                    @php
				                      $i++;
				                    @endphp
				                    @endforeach
				                  </tbody>
				                </table>
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