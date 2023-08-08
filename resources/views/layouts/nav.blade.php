<!-- Sidebar  -->
<nav id="sidebar" class="bg-dark">
    <div class="sidebar_blog_1">
    <div class="sidebar-header bg-warning">
        <div class="logo_section">
            <a href="dashboard.php"><img class="logo_icon img-responsive" src="{{ asset('AD') }}/images/logo/cbc.jpg" alt="#" /></a>
        </div>
    </div>
    <div class="sidebar_user_info bg-dark">
        <div class="icon_setting"></div>
        <div class="user_profle_side">
            @if(Auth::user()->photo)
            <div class="user_img"><img class="img-responsive" src="{{asset('images')}}/{{ Auth::user()->photo }}" alt="#" /></div>
            @endif
            <div class="user_info">
                <h6>{{ Auth::user()->name }}</h6>
                <p><span class="online_animation text-warning"></span> Online</p>
            </div>
        </div>
    </div>
    </div>
    <div class="sidebar_blog_2">
    <h4 class="bg-warning">MENU</h4>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{route('home')}}" aria-expanded="false" ><i class="fa fa-dashboard text-warning"></i> <span>Dashboard</span></a>
        </li>
        <li>
            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-home text-warning"></i> <span>Association</span></a>
            <ul class="collapse list-unstyled" id="element">
                <li><a href="{{ route('associations.index') }}">> <span>Description de l'Association</span></a></li>
                <li><a href="{{ route('associations.create') }}">> <span>Membre du Bureau</span></a></li>
            </ul>
        </li>
        <li>
            <a href="#adh" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users text-warning"></i> <span>Adherents</span></a>
            <ul class="collapse list-unstyled" id="adh">
                <li><a href="/adherants">> <span>Adherents</span></a></li>
                <li><a href="/cotisations">> <span>Cotisations</span></a></li>
                <li><a href="/sections">> <span>Sections</span></a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-calendar text-warning"></i> <span>Prestation</span></a></li>

        <li>
            <a href="#org" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone text-warning"></i> <span>Organiser</span></a>
            <ul class="collapse list-unstyled" id="org">
                <li><a href="Activites.php">> <span>Activites</span></a></li>
            </ul>
        </li>

        <li>
            <a href="#cpt" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group text-warning"></i> <span>Comptabilites</span></a>
            <ul class="collapse list-unstyled" id="cpt">
                <li><a href="text.php">> <span>Activites</span></a></li>
                <li><a href="text.php">> <span>Activites</span></a></li>
            </ul>
        </li>
        <li><a href="settings.php"><i class="fa fa-user text-warning"></i> <span>Utilisateurs</span></a></li>
    </ul>
    </div>
</nav>
<!-- end sidebar -->
