<nav class="navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand" href="{{url('/')}}">
		<img src="/logo_main.svg" alt="Site logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarToggle">
		<ul class="navbar-nav mr-auto">
			{{-- <li class="nav-item @if (Request::is('help')) active @endif">
				<a class="nav-link" href="{{url('help')}}">Help</a>
			</li> --}}
			<li class="nav-item @if (Request::is('guides*')) active @endif">
				<a class="nav-link" href="{{url('guides')}}">Guides</a>
			</li>
			<li class="nav-item @if (Request::is('jobs*')) active @endif">
				<a class="nav-link" href="{{url('jobs')}}">Jobs</a>
			</li>
			<li class="nav-item @if (Request::is('events*')) active @endif">
				<a class="nav-link" href="{{url('events')}}">Events</a>
			</li>
			<li class="nav-item @if (Request::is('books*')) active @endif">
				<a class="nav-link" href="{{url('books')}}">Books</a>
			</li>
			{{-- <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Collections
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="books">Books</a>
				</div>
			  </li> --}}
			{{-- <li class="nav-item @if (Request::is('news')) active @endif">
				<a class="nav-link" href="{{url('news')}}">News</a>
			</li> --}}
			{{-- <li class="nav-item @if (Request::is('case-studies')) active @endif">
				<a class="nav-link" href="{{url('case-studies')}}">Case Studies</a>
			</li> --}}
			{{-- <li class="nav-item @if (Request::is('shop')) active @endif">
				<a class="nav-link" href="{{url('shop')}}">Shop</a>
			</li> --}}
		</ul>
		<ul class="navbar-nav ml-auto">
			@guest

			@else
				<li class="nav-item">
					<a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
					<form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
						{{csrf_field()}}
					</form>
				</li>
			@endif
		</ul>
	</div>
</nav>
