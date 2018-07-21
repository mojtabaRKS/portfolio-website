<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('assets/panel/img/sidebar-1.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{ route('index') }}" target="_blank" class="simple-text logo-normal">
            Mojtaba Rakhisi
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ (!str_contains(request()->path() , ['skills' , 'portfolios' , 'attributes'])) ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            @if(request()->user()->hasRole('admin'))
                <li class="nav-item {{ (str_contains(request()->path() , 'skills')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('skills.index') }}">
                        <i class="material-icons">fitness_center</i>
                        <p>Skills</p>
                    </a>
                </li>
                <li class="nav-item {{ (str_contains(request()->path() , 'portfolios')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('portfolios.index') }}">
                        <i class="material-icons">assignment_ind</i>
                        <p>Portfolios</p>
                    </a>
                </li>
                <li class="nav-item {{ (str_contains(request()->path() , 'attributes')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('attributes.index') }}">
                        <i class="material-icons">extension</i>
                        <p>Attributes</p>
                    </a>
                </li>
            @endif

            @if(request()->user()->hasRole('user'))
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="material-icons">fitness_center</i>
                        <p>Skills</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="material-icons">assignment_ind</i>
                        <p>Portfolios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="material-icons">extension</i>
                        <p>Attributes</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>