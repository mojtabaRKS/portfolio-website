<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ route('skills') }}">
                    <i class="material-icons">fitness_center</i>
                    <p>Skills</p>
                </a>
            </li>
        </ul>
    </div>
</div>