@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row match-height">
        <!-- Medal Card -->
        <div class="col-xl-4 col-md-6 col-12">
            <div class="card card-congratulation-medal">
                <div class="card-body">
                    <h5>Version</h5>
                    <p class="card-text font-small-3">23.04.2022</p>
                    <h3 class="mb-75 mt-2 pt-50">
                        <a href="javascript:void(0);">1.03</a>
                    </h3>
                    <button type="button" onclick="location.href='{{route('version.view')}}'" class="btn btn-primary waves-effect waves-float waves-light">Les Mer..</button>
                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic">
                </div>
            </div>
        </div>
        <!--/ Medal Card -->

        <!-- Statistics Card -->
        <div class="col-xl-8 col-md-6 col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Statistikk</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 mr-25 mb-0"></p>
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">

                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="media">
                                <div class="avatar bg-light-info mr-2">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{$enkeltBruker}}</h4>
                                    <p class="card-text font-small-3 mb-0">Brukere</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="media">
                                <div class="avatar bg-light-danger mr-2">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{$brukerUt}}</h4>
                                    <p class="card-text font-small-3 mb-0">Inaktiv</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="media">
                                <div class="avatar bg-light-primary mr-2">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{$countObjekter}}</h4>
                                    <p class="card-text font-small-3 mb-0">Objekter</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="media">
                                <div class="avatar bg-light-success mr-2">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag font-medium-5"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{$countKategori}}</h4>
                                    <p class="card-text font-small-3 mb-0">Kategorier</p>
                                </div>
                            </div>
                        </div>
                       
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics Card -->
    </div>



    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    <div class="alert-body">
                    
                        <strong>Info:</strong> * Informasjon om oppdateringer og endringer.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.</br>
                        <strong>Oppdatering: V.1.03</strong></br>
                        <strong>Info:</strong> Ved feil, kontkat meg på hassan.cherry@kriminalomsorg.no
                    </div>
                </div>
            </div>
        </div>

    </div>


<!-- START TABLE -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Oversikt over innsatte</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        INFO:  @if (session('status'))
                        
                        <div class="row">
                            <div class="col-12">
                       <div class="alert alert-success" id="type-success" role="alert">
                          <h4 class="alert-heading">Godkjent</h4>
                          <div class="alert-body">
                              {{ session('status') }}
                          </div>
                      </div>
                  </div>
                </div>
                      @endif
                    </p>
                </div>
                <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
                        <thead>
                        
                            <tr>
                            <th>Navn</th>
                                <th>Logg</th>
                                <th>Print</th>
                                <th>Mer</th>
                            </tr>
                           
                        </thead>
                        
                        <tbody>
                       
                        @if($brukers->count())
                            @foreach ($brukers as $bruker ) 

                            <tr>
                                <td>
                                <img src="../../../app-assets/images/logo/default.png" class="mr-75" height="20" wdth="20" alt="Angular">
                                    <span class="font-weight-bold"></span>
                                    <a href="{{route('profile', $bruker->id)}}">{{$bruker->innsatt_nummer}} {{$bruker->navn}}</a>
                                </td>

                                <td>
                                <div class="avatar-content">
                                    <a href="{{route('log.view', $bruker->id)}}">
                                    <img src="../../../app-assets/images/icons/loggicon.png" alt="Toolbar svg">
                                    </a>
                                </div>

                                </td>
                                <td>
                                <div class="avatar-group">
                                        <a href="/dokument/{{$bruker->id}}">Print</a>
                                    </div>
                                </td>
                                
                                
                                <td>

                                <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="/register/{{$bruker->id}}/edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Rediger</span>
                                            </a>

                                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal{{$bruker->id}}" href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                <span>Slett</span>
                                            </a>

                                             
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
														<div class="modal fade" id="exampleModal{{$bruker->id}}" data-backdrop="false">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4>Slett bruker {{$bruker->navn}}</h4>
																	</div>
																	<div class="modal-body">
                                                                    <h5>Er du sikker på at du ønsker å Slette {{$bruker->navn}}</h5>
                                                                    </div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Steng</button>
                                                                        <a href="{{route('register.destroy', $bruker->id)}}" class="btn btn-outline-danger ml-1 waves-effect">Slett</a>
																	</div>
																</div>
															</div>
														</div>
                            @endforeach
                            @else
                            <p>Finner ingen data</p>
                            @endif
                           
                            
                        </tfoot>
                    </table>
                    <div class="row">
                        <div class="col-12 mt-3 pb-3 pl-2">

                    {{$brukers->links()}}
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TABLE-->

</div>
@endsection