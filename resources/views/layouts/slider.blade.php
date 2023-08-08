<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="full">
          <button type="button" id="sidebarCollapse" class="sidebar_toggle bg-warning"><i class="fa fa-bars"></i></button>
          <div class="logo_section">
             <a href="index.html"><img class="img-responsive" src="{{ asset('AD') }}/images/logo/cbc.jpg" alt="#" /></a>
          </div>
          <div class="right_topbar">
             <div class="icon_info">
                <ul>
                   <li><a href="#"><i class="fa fa-bell-o"></i><span class="bg-warning badge">2</span></a></li>
                   <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                   <li><a href="#"><i class="fa fa-envelope-o"></i><span class="bg-warning badge">3</span></a></li>
                </ul>
                <ul class="user_profile_dd">
                   <li class="bg-warning">
                      <a class="dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::user()->photo)
                        <img class="img-responsive rounded-circle" src="{{asset('images')}}/{{ Auth::user()->photo }}" alt="#" />
                        @endif
                        <span class="name_user">{{ Auth::user()->name }}</span></a>
                      <div class="dropdown-menu">
                         <a class="dropdown-item disabled" href="#">My Profile</a>
                         {{-- <a class="dropdown-item" href="settings.html">Settings</a>
                         <a class="dropdown-item" href="help.html">Help</a> --}}
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </nav>
 </div>
