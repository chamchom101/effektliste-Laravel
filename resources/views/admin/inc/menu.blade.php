<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('welcome')}}"><span>
          <img src="../../../app-assets/images/logo/default.png" style="width: 40px; height: 40px" alt="" />
              </span>
            <h2 class="brand-text">{{$settingLogo->txt}}</h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
       
        
        <li class=" navigation-header"><span data-i18n="User Interface">General</span><i data-feather="more-horizontal"></i>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('register')}}"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Typography">Systemvalg</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('register')}}"><i data-feather="git-commit"></i><span class="menu-title text-truncate" data-i18n="Typography">Version</span></a>
        </li>
  
        
       
       
        
      </ul>
    </div>
  </div>