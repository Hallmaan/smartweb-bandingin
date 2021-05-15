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
      @if (Auth::check())
      <li class="{{ Route::is('history') ? 'active' : '' }}"><a class="nav-link" href="{{route('history', ['user_id' => Auth::user()->id])}}"><i class="fa fa-window-restore"></i> <span>History</span></a></li>
      @else
      <li class="{{ Route::is('history') ? 'active' : '' }}"><a class="nav-link" href="{{route('login')}}"><i class="fa fa-window-restore"></i> <span>History</span></a></li>
      @endif
      <li class="{{ Route::is('profile') ? 'active' : '' }}"><a class="nav-link" href="#"><i class="fa fa-user-circle"></i> <span>Profile Account</span></a></li>
    </ul>
</aside>
