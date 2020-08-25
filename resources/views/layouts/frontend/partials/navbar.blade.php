	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="{{asset('assets/frontend/img/logo.png')}}" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="courses.html">Courses</a></li>
						<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li class="menu-has-children"><a href="">{{Auth::user()->name}}</a>
							<ul>
								<li><a href="blog-home.html">{{__('Profile')}}</a></li>
								<li>
									<a href="{{route('logout')}}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>