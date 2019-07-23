{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{url('/')}}"><i class="glyphicon glyphicon-home"></i>
                    Stuff</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Role
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{url('/role-user')}}"><i class="glyphicon glyphicon-home"></i>
                            Users</a></li>
                </ul>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{route('role.index')}}"><i class="glyphicon glyphicon-home"></i>
                            Roles</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->