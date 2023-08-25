<header>

  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">
      <li id='logo'><a href="{{ route('index') }}">RGHWEB</a>
    </div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">

      <!-- USING CHECKBOX HACK -->
      <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>

      <!-- NAVIGATION MENUS -->
      <div class="menu">
        <li><a href="{{ route('about') }}">Inicio</a></li>
        <li><a href="{{ route('showProjects') }}">Proyectos</a></li>
        <!--Example dropdown
        </li>
            <li class="services">
              <a href="/">Services</a>

                DROPDOWN MENU 
              <ul class="dropdown">
                <li><a href="/">Dropdown 1 </a></li>
                <li><a href="/">Dropdown 2</a></li>
                <li><a href="/">Dropdown 2</a></li>
                <li><a href="/">Dropdown 3</a></li>
                <li><a href="/">Dropdown 4</a></li>
              </ul>

            </li>-->
        <li><a href="{{ route('about') }}">Sobre Mi</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
      </div>
    </ul>
  </nav>

</header>