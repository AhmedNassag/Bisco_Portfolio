<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>{{ trans('main.Dashboard') }}</span></li>
				<li class="{{ Request::is('/home') ? 'active' : '' }}">
					<a href="{{ route('home') }}"><i data-feather="home"></i> <span>{{ trans('main.Dashboard') }}</span></a>
				</li>
				<li class="{{ Request::is('admin/user','admin/role') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="user-check"></i> <span>{{ trans('main.Users') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<li class="ml-1"><a class=" {{ Request::is('admin/user') ? 'active' : '' }}" href="{{ route('user.index') }}">{{ trans('main.Users') }}</a></li>
						<li class="ml-1"><a class=" {{ Request::is(['admin/role', 'admin/role/create', 'admin/role/*/edit', 'admin/role/*']) ? 'active' : '' }}" href="{{ route('role.index') }}">{{ trans('main.Roles') }}</a></li>
					</ul>
				</li>

				<!-- Home -->
				<li class="menu-title"><span>{{ trans('main.Home') }}</span></li>
				<li class="{{ Request::is('admin/slider','admin/slider-footer') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="copy"></i> <span>{{ trans('main.Sliders') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<li class="ml-1"><a class=" {{ Request::is('admin/slider') ? 'active' : '' }}" href="{{ route('slider.index') }}">{{ trans('main.Sliders') }}</a></li>
						<li class="ml-1"><a class=" {{ Request::is('admin/slider-footer') ? 'active' : '' }}" href="{{ route('slider-footer.index') }}">{{ trans('main.Slider Footers') }}</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('admin/who-we-are-side','admin/who-we-are-detail','admin/who-we-are-faq') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="copy"></i> <span>{{ trans('main.Who We Are') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<li class="ml-1"><a class=" {{ Request::is('admin/who-we-are-side') ? 'active' : '' }}" href="{{ route('who-we-are-side.index') }}">{{ trans('main.Who We Are Sides') }}</a></li>
						<li class="ml-1"><a class=" {{ Request::is('admin/who-we-are-detail') ? 'active' : '' }}" href="{{ route('who-we-are-detail.index') }}">{{ trans('main.Who We Are Details') }}</a></li>
						<li class="ml-1"><a class=" {{ Request::is('admin/who-we-are-faq') ? 'active' : '' }}" href="{{ route('who-we-are-faq.index') }}">{{ trans('main.Who We Are Faqs') }}</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('admin/service-detail','') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="copy"></i> <span>{{ trans('main.Our Services') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<li class="ml-1"><a class=" {{ Request::is('admin/service-detail') ? 'active' : '' }}" href="{{ route('service-detail.index') }}">{{ trans('main.Service Details') }}</a></li>
						<!-- <li class="ml-1"><a class=" {{ Request::is('admin/service-side') ? 'active' : '' }}" href="{{ route('who-we-are-side.index') }}">{{ trans('main.Who We Are Sides') }}</a></li> -->
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->