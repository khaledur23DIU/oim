			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							@if (Auth::check())
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="{{asset('assets/backend/img/dp.jpg')}}" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									
									<div class="pull-left info">
										<p> {{ Auth::user()->name }}</p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>

								</div>
							</li>
							@endif
							<li class="nav-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
								<a href="{{ route('dashboard') }}" class="nav-link nav-toggle "> <i class="material-icons">dashboard</i>
									<span class="title">{{__('Dashboard')}}</span>
								</a>
							</li>
							<li class="nav-item {{ Request::routeIs('oim.faculty.*') ? 'active': '' }}">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Faculties</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item {{ Request::routeIs('oim.student.index') ? 'active': '' }}">
										<a href="{{ route('oim.faculty.index') }}" class="nav-link "> <span class="title">All
												Faculty</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.student.create') ? 'active': '' }}">
										<a href="{{ route('oim.faculty.create') }}" class="nav-link "> <span class="title">Add
												Faculty</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.student.about') ? 'active': '' }}">
										<a href="{{ route('oim.faculty.about') }}" class="nav-link "> <span class="title">About
												Faculty</span>
										</a>
									</li>

								</ul>
							</li>
							<li class="nav-item {{ Request::routeIs('oim.student.*') ? 'active': '' }}">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item {{ Request::routeIs('oim.student.index') ? 'active' : '' }}">
										<a href="{{ route('oim.student.index') }}" class="nav-link "> <span class="title">All
												Students</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.student.create') ? 'active' : '' }}">
										<a href="{{ route('oim.student.create') }}" class="nav-link "> <span class="title">Add
												Student</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.student.about') ? 'active' : '' }}">
										<a href="{{ route('oim.student.about') }}" class="nav-link "> <span class="title">About
												Student</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item {{ Request::routeIs('oim.batch.*') ? 'active': '' }}">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Batches</span><span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item {{ Request::routeIs('oim.batch.index') ? 'active' : '' }}">
										<a href="{{ route('oim.batch.index') }}" class="nav-link "> <span class="title">All
												Batches</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.batch.create') ? 'active' : '' }}">
										<a href="{{ route('oim.batch.create') }}" class="nav-link "> <span class="title">Add
												Batch</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item {{ Request::routeIs('oim.course.*') ? 'active': '' }}">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Courses</span><span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item {{ Request::routeIs('oim.course.index') ? 'active' : '' }}">
										<a href="{{ route('oim.course.index') }}" class="nav-link "> <span class="title">All
												Courses</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.course.create') ? 'active' : '' }}">
										<a href="{{ route('oim.course.create') }}" class="nav-link "> <span class="title">Add
												Course</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.course.about') ? 'active' : '' }}">
										<a href="{{ route('oim.course.about') }}" class="nav-link "> <span class="title">About
												Course</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item {{ Request::routeIs('oim.offered-course.*') ? 'active': '' }}">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">event</i>
									<span class="title">Offered Courses</span><span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item {{ Request::routeIs('oim.offered-course.index') ? 'active' : '' }}">
										<a href="{{ route('oim.offered-course.index') }}" class="nav-link "> <span class="title">All
												Offered-courses</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.offered-course.create') ? 'active' : '' }}">
										<a href="{{ route('oim.offered-course.create') }}" class="nav-link "> <span class="title">Add
												Offered-course</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.offered-course.create') ? 'active' : '' }}">
										<a href="{{ route('oim.offered-course.create') }}" class="nav-link "> <span class="title">Import
												Offered-courses</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item {{ Request::routeIs('oim.notice.*') ? 'active': '' }}">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">dvr</i>
									<span class="title">Notice</span><span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item {{ Request::routeIs('oim.notice.index') ? 'active' : '' }}">
										<a href="{{ route('oim.notice.index') }}" class="nav-link "> <span class="title">All
												Notice</span>
										</a>
									</li>
									<li class="nav-item {{ Request::routeIs('oim.notice.create') ? 'active' : '' }}">
										<a href="{{ route('oim.notice.create') }}" class="nav-link "> <span class="title">Add
												Notice</span>
										</a>
									</li>
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
			</div>