
  <!-- BEGIN: Head-->

  @include('inc.head')

  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
  @include('inc/header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('inc.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
  <div class="row match-height">

    @yield('content')

  </div>
     </div>


        </div>
      </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
@include('inc.customizer')

  <!-- Footer -->
 @include('inc.footer')