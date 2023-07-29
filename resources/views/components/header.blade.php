<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('images/logo.png') }}" alt="User Avatar">
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="{{ route('profile.edit') }}"><i class="fa fa- user"></i>My Profile</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        this.closest('form').submit();"><i
                                class="fa fa-power -off"></i>Logout</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header><!-- /header -->
<!-- Header-->
