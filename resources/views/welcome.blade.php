@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Effektos</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Hjem</a>
                            </li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square mr-1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar mr-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span class="align-middle">Calendar</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    <div class="alert-body">
                    
                        <strong>Info:</strong> * Informasjon om oppdateringer og endringer.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.</br>

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
                                <img src="../../../app-assets/images/icons/angular.svg" class="mr-75" height="20" wdth="20" alt="Angular">
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

</div><!-- END WARPER-->

@endsection