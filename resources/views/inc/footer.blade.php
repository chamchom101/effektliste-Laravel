<div class="customizer-footer px-2">
    <p class="font-weight-bold">Footer Type</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-static" name="footerType" class="custom-control-input" checked />
        <label class="custom-control-label" for="footer-type-static">Static</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- End: Customizer-->


    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">Alle rettigheter reservert &#169; Hassan Cherry<a class="ml-25" href="" target="_blank"></a><span class="d-none d-sm-inline-block"></span></span><span class="float-md-right d-none d-md-block"><i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


   


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset ('app-assets/vendors/js/vendors.min.js')}}"></script>

    

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset ('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset ('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset ('app-assets/js/scripts/extensions/ext-component-toastr.js')}}"></script>
    <script src="{{asset ('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset ('app-assets/js/scripts/forms/form-number-input.js')}}"></script>
    <script src="{{asset ('app-assets/vendors/js/jquery/jquery-ui.js')}}"></script>
    <script src="{{asset ('app-assets/vendors/js/jquery/jquery.min.js')}}"></script>

    
    {{-- <script src="{{asset ('app-assets/vendors/js/jquery/jquery-3.6.0.min.js')}}"></script> --}}


    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset ('app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset ('app-assets/js/core/app.min.js')}}"></script>
    <script src="{{asset ('app-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset ('app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
    <script src="{{asset ('app-assets/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset ('app-assets/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset ('app-assets/DataTables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset ('app-assets/DataTables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('app-assets/js/lightbox.js')}}"></script>

    <!-- END: Page JS-->
    
    @include('sweetalert::alert')

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })

$(document).ready(function() {
    $('#example').DataTable( {
      
    buttons: [
        {
            extend: 'print',
            text: 'Print current page',
            autoPrint: false
        }
    ]
} );

} );


$("#myModal").modal("show");
$("#myModal").css("z-index", "1500");

    </script>


  </body>

  <!-- END: Body-->
</html>