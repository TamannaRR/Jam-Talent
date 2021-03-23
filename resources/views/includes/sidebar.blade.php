<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				@if( Route::has('login'))
		            @auth
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="{{route('user.dashbord')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{route('admin.message')}}"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<!-- addmin sidebar start --->
							@if( Auth::user()->user_type_id == 2 )
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Users</a>
								<ul>
									<li><a href="{{route('freelancer.all')}}">Freelancers </a></li>
									<li><a href="{{route('employer.all')}}">Employers</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Categorys</a>
								<ul>
									<li><a href="{{route('category.manage')}}">Manage Categories </a></li>
									<li><a href="{{route('category.create')}}">Create Category</a></li>
								</ul>	
							</li>
							@endif
							<!-- addmin sidebar end --->
							<li><a href="{{route('admin.bookmark')}}"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="{{route('admin.review')}}"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									@if( Auth::user()->user_type_id == 1 )
									<li><a href="{{route('applied.job.manage')}}">Applied Job</a></li>
									<li><a href="{{route('job.manage')}}">Job<span class="nav-tag">3</span></a></li>
									@elseif(Auth::user()->user_type_id == 2)


									@elseif(Auth::user()->user_type_id == 3)
									<li><a href="{{route('job.post')}}">Post a Job</a></li>
									<li><a href="{{route('job.manage')}}">Manage Jobs <span class="nav-tag">3</span></a></li>
									@endif

								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
								<ul>
									@if( Auth::user()->user_type_id == 1 )
									<li><a href="{{route('request.task.manage')}}">Custom Offer </a></li>
									@elseif(Auth::user()->user_type_id == 2)


									@elseif(Auth::user()->user_type_id == 3)
									<li><a href="">Manage Tasks <span class="nav-tag">2</span></a></li>
									<li><a href="">Manage Bidders</a></li>
									<li><a href="">My Active Bids <span class="nav-tag">4</span></a></li>
									<li><a href="{{route('task.post')}}">Post a Task</a></li>
									@else
									@endif
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							@if( Auth::user()->user_type_id == 1 )
							<li><a href="{{route('freelancer.edit')}}"><i class="icon-matesrial-outline-settings"></i> Settings</a></li>
							@elseif(Auth::user()->user_type_id == 2)
							<li><a href="{{route('admin.edit')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
							@elseif(Auth::user()->user_type_id == 3)
							<li><a href="{{route('employer.edit')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
							@endif
							<li>
								
								<form method="POST" action="{{ route('logout') }}">
						          @csrf

						          <a href="{{ route('logout') }}" class="icon-material-outline-power-settings-new"
						              onclick="event.preventDefault();
						              this.closest('form').submit();">
						              Log out
						              
						          </a>
						        </form>
							</li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->
					@endif

		        @endif
			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->