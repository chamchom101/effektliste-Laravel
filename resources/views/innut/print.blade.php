@include('inc.head')
<body class="vertical-layout blank-page navbar-floating footer-static pace-done menu-hide vertical-overlay-menu" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
    <div class="pace-progress-inner"></div>
  </div>
  <div class="pace-activity"></div></div>
      <!-- BEGIN: Content-->
      <div class="app-content content ">
          <div class="content-overlay"></div>
          <div class="header-navbar-shadow"></div>
          <div class="content-wrapper">
              <div class="content-header row">
              </div>
              <div class="content-body">
                  <div class="invoice-print p-3">
                      <div class="d-flex justify-content-between flex-md-row flex-column pb-2">
                          <div>
                              <div class="d-flex mb-1">
                                <img src="../../../app-assets/images/logo/default.png" style="width: 100px; height: 80px" alt="" />
                                  <h3 class="text-primary font-weight-bold ml-1 mt-2">{{$settingLogo->txt}}</h3>
                              </div>
                              <p class="mb-25">Østfold friomsorgskontor</p>
                              <p class="mb-25">Avdeling fengsel</p>
                              <p class="mb-0">Ravneberget 30 17?? </p>
                          </div>
                          <div class="mt-md-0 mt-2">
                              <h4 class="font-weight-bold text-right mb-1">INNSATT NUMMER# {{$fremstillingPrint->innsatt_nummer}}</h4>
                              <div class="invoice-date-wrapper mb-50">
                                  <span class="invoice-date-title">Opprettet:</span>
                                  <span class="font-weight-bold"> {{ date('d-m-Y')}}</span>
                              </div>
                              <div class="invoice-date-wrapper">
                                  <span class="invoice-date-title">Klokken:</span>
                                  <span class="font-weight-bold">{{date('H:i')}}</span>
                              </div>
                          </div>
                      </div>
  
                      <hr class="my-2">
  
                      <div class="row pb-2">
                          <div class="col-sm-6">
                              <h6 class="mb-1">Tilhørende til:</h6>
                              <p class="mb-25">Navn: <strong>{{$fremstillingPrint->navn}}</strong></p>
                              <p class="mb-25">Hylle: <strong>{{$fremstillingPrint->hylle}}</strong></p>
                              <p class="mb-25">Dato: <strong>{{date('d-m-Y')}}</strong></p>
                              <p class="mb-25">Betjent:______________________</p>
                              <p class="mb-25">Signatur:_____________________</p>
                            
                          </div>
                          NOTE
                      </div>
  
                      <div class="table-responsive mt-2">
                          <table class="table m-0">
                              <thead>
                                  <tr>
                                    <th class="py-1">Objekt og beskrivelse</th>
                                    <th class="py-1">På rom</th>
                                    <th class="py-1">På lager</th>
                                    <th class="py-1">Kategori</th>
                                    <th class="py-1">Redigert</th>
                                  </tr>
                              </thead>
                             @foreach ($printValues->sortByDesc('updated_at') as $print)
                                
                                     
                                 
                             
                              <tbody>
                                  <tr>
                                      <td class="py-1 pl-4">
                                          <p class="font-weight-semibold mb-25">{{$print->title}}</p>
                                          <p class="text-muted text-nowrap">
                                            {{$print->info}}
                                          </p>
                                      </td>
                                      <td class="py-1">
                                          <strong>{{$print->antall_rom}}</strong>
                                      </td>
                                      <td class="py-1">
                                          <strong>{{$print->antall_lager}}</strong>
                                      </td>
                                      <td class="py-1">
                                          <strong>{{$print->kategori->titel}}</strong>
                                      </td>
                                      <td><strong>{{$print->updated_at->format('d/m/Y')}}</strong></td>
                                  </tr>
                                  @endforeach
                                  
                              </tbody>
                          </table>
                      </div>
  
                      <div class="row invoice-sales-total-wrapper mt-3">
                          <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                              <p class="card-text mb-0">
                                  <span class="font-weight-bold">Opprettet av:</span> {{$fremstillingPrint->betjent_navn}}<span class="ml-75"></span>
                              </p>
                          </div>
                         
                      </div>
  
                      <hr class="my-2">
  
                      <div class="row">
                          <div class="col-12">
                              <span class="font-weight-bold">Note:</span>
                              <span></span>
                          </div>
                      </div>
                  </div>
  
              </div>
          </div>
      </div>
      <!-- END: Content-->
@include('inc.footer')
