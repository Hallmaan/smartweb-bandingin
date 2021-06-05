<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="#">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">BD</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Route::is('dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{route('dashboard')}}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
      <li class="{{ Route::is('guest_book') ? 'active' : '' }}"><a class="nav-link" href="{{route('guest_book')}}"><i class="fa fa-address-book"></i> <span>Guest book</span></a></li>
      @if (Auth::check())
      <li class="{{ Route::is('history') ? 'active' : '' }}"><a class="nav-link" href="{{route('history', ['user_id' => Auth::user()->id])}}"><i class="fa fa-window-restore"></i> <span>History</span></a></li>
      <li class="{{ Route::is('profile') ? 'active' : '' }}"><a class="nav-link" href="{{route('profile', ['user_id' => Auth::user()->id])}}"><i class="fa fa-user-circle"></i> <span>Profile Account</span></a></li>
      @else
      <li class="{{ Route::is('history') ? 'active' : '' }}"><a class="nav-link" href="{{route('login')}}"><i class="fa fa-window-restore"></i> <span>History</span></a></li>
      <li class="{{ Route::is('profile') ? 'active' : '' }}"><a class="nav-link" href="{{route('login')}}"><i class="fa fa-user-circle"></i> <span>Profile Account</span></a></li>
      @endif
    </ul>
    
    <div class="hero bg-primary text-white mt-5">
        <div class="hero-inner h-100">
          <h2>IKLAN HERE</h2>
        </div>
    </div>
</aside>
