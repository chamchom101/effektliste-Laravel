@extends('layouts.app')

@section('content')

<div class="col-xl-12 col-lg-8 col-md-7">
    <div class="card user-card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
   

                    <div class="user-avatar-section">
                        <div class="d-flex justify-content-start"> 
                        @if($profiles->image === null)
                    
                    <img class="img-fluid rounded" src="{{asset('public/images/unknown.png')}}" height="104" width="104" alt="User avatar">
                    @else
                            <img class="img-fluid rounded" src="{{asset('/storage/images/' . $profiles->image)}}" height="104" width="104" alt="User avatar">
                            @endif
                            <div class="d-flex flex-column ml-1">
                                <div class="user-info mb-1">
                                    <h4 class="mb-0">{{$profiles->navn}}</h4>
                                    @if ($profiles->is_active == 0)
                                    <div class="badge badge-pill badge-light-success mt-1">Aktiv</div>
                                    @else
                                    <div class="badge badge-pill badge-light-danger mt-1">Ikke aktiv</div>
                                    @endif
                                </div>
                                <div class="d-flex flex-wrap">
                                    <a href="/register/{{$profiles->id}}/edit" class="btn btn-primary waves-effect waves-float waves-light">Rediger</a>
                                    <button class="btn btn-outline-danger ml-1 waves-effect" data-toggle="modal" data-target="#exampleModal{{$profiles->id}}">Slett</button>
                                </div>
                            </div>
                        </div>
                    </div>

                                                       <!-- Modal -->
														<div class="modal fade" id="exampleModal{{$profiles->id}}" data-backdrop="false">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4>Slett bruker {{$profiles->navn}}</h4>
																	</div>
																	<div class="modal-body">
                                                                    <h5>Er du sikker på at du ønsker å Slette {{$profiles->navn}}</h5>
                                                                    </div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Steng</button>
                                                                        <a href="{{route('register.destroy', $profiles->id)}}" class="btn btn-outline-danger ml-1 waves-effect">Slett</a>
																	</div>
																</div>
															</div>
														</div>

                    @if (session('status'))

                <div class="alert alert-danger mr-2" id="type-danger" role="alert">
                   <h4 class="alert-heading">FEIL!!!!</h4>
                   <div class="alert-body">
                       {!!session('status')!!}
                   </div>
               </div>
               @endif
                    
                    <div class="d-flex align-items-center user-total-numbers pt-2">
                        <div class="d-flex align-items-center mr-2">
                            <div class="color-box bg-light-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </div>
                            <div class="ml-1">
                                <h5 class="mb-0">Hylle</h5>
                                <small>{{$profiles->hylle}}</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="color-box bg-light-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            </div>
                            <div class="ml-1">
                                <h5 class="mb-0">Dato</h5>
                                <small>{{$profiles->created_at}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                    <div class="user-info-wrapper">
                        <div class="d-flex flex-wrap">
                            <div class="user-info-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="card-text user-info-title font-weight-bold mb-0 mr-1">Innsatt #:</span>
                            </div>
                            <p class="card-text mb-0">{{$profiles->innsatt_nummer}}</p>
                        </div>
                        <div class="d-flex flex-wrap my-50">
                            <div class="user-info-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check mr-1"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span class="card-text user-info-title font-weight-bold mb-0 mr-1">Status:</span>
                            </div>
                                    @if ($profiles->is_active == 0)
                                    <p class="badge badge-pill badge-light-success">Aktiv</p>
                                    @else
                                    <p class="badge badge-pill badge-light-danger">Ikke aktiv</p>
                                    @endif
                        </div>
                        <div class="d-flex flex-wrap my-50">
                            <div class="user-info-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star mr-1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <span class="card-text user-info-title font-weight-bold mb-0 mr-1">Opprettet:</span>
                            </div>
                            <p class="card-text mb-0">{{$profiles->created_at}}</p>
                        </div>
                        <div class="d-flex flex-wrap my-50">
                            <div class="user-info-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag mr-1"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                                <span class="card-text user-info-title font-weight-bold mb-0 mr-1">Oppdatert:</span>
                            </div>
                            <p class="card-text mb-0">{{$profiles->updated_at}}</p>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="user-info-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone mr-1"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span class="card-text user-info-title font-weight-bold mb-0 mr-1">Betjent</span>
                            </div>
                            <p class="card-text mb-0">{{$profiles->betjent_navn}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button class="btn btn-primary mb-2" type="button" data-toggle="collapse" data-target="#HentData" aria-expanded="true" aria-controls="HentData">Legg til
</button>


 


@include('bruker.create')






    
        <div class="card col-12 d-flex flex-column justify-content-between pt-5">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Oversikt over effektene</h4>
                </div>
                @if (session('status'))

                <div class="alert alert-danger mr-2" id="type-danger" role="alert">
                   <h4 class="alert-heading">Ikke Godkjent</h4>
                   <div class="alert-body">
                       {!!session('status')!!}
                   </div>
               </div>
               @endif
               @if (session('st'))

                <div class="alert alert-danger mr-2" id="type-danger" role="alert">
                   <h4 class="alert-heading">Ikke Godkjent</h4>
                   <div class="alert-body">
                       {!!session('st')!!}
                   </div>
               </div>
               @endif
                <div class="card-datatable">


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Punkt</th>
                                    <th>Antall</th>
                                    <th>Status</th>
                                    <th>Bilde</th>
                                    <th>Mer..</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tests as $test)
                            @foreach ($test->felt->sortBy('kategori_id') as $felt )
                            @if($felt->pin == 1)
                                <tr>
                                    <td>
                                        <img src="../../../app-assets/images/logo/default.png" class="mr-75" height="20" width="20" alt="Angular">
                                        <span class="font-weight-bold">{{$felt->title}}</span>
                                    </td>
                                    <td>{{$felt->antall_lager}}</td>
                                    <td><span class="badge badge-pill badge-light-danger mr-1">Viktig</span></td>
                                    <td>

                                        @if($felt->image === null)
                    <img src="{{asset('public/images/unknown.png')}}" class="rounded mr-1" height="30" alt="Googleee Chrome">
                    @else
                    
                    <a href="{{asset('/storage/images/' . $felt->image)}}" data-lightbox="roadtrip" class="rounded mr-1" height="30">
                        <img src="{{asset('/storage/images/' . $felt->image)}}" class="rounded mr-1" height="30" width="30" alt="Google Chrome">
                    </a>
                    @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('bruker.edit', $felt->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item" href="/profile/delete/{{$felt->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Punkt</th>
                                <th>Rom</th>
                                <th>Lager</th>
                                <th>Kategori</th>
                                <th>Notat</th>
                                <th>Bilde</th>
                                <th>Mer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Route::is('profile.felt.1'))
                            <span>NUMMER:{{$profiles->id}}</span>
                            @endif
                            @foreach ($tests as $test)
                            @foreach ($test->felt->sortBy('kategori_id') as $felt )
                                  
                             @if ($felt->max_rom < $felt->antall_rom )
                            <tr style="background-color: #ffcccc">
                                <td>
                                    @if($felt->tillatt == 1)
                                    <img src="../../../app-assets/images/icons/feil.png" class="mr-75" height="20" width="20" alt="Angular">
                    <span class="font-weight-bold text-danger">{{$felt->title}}</span>
                                    @else 
                                    <img src="../../../app-assets/images/icons/star.svg" class="mr-75" height="20" width="20" alt="Angular">
                    <span class="font-weight-bold">{{$felt->title}}</span>
                                   @endif
                                </td>
                                
                                <td>
                                    {{$felt->antall_rom}} / {{$felt->max_rom}}
                                </td>

                                <td>{{$felt->antall_lager}}</td>
                                <td>{{$felt->kategori->titel ?? ''}}</td>



                                @if($felt->info === null) 
                                <td> <button type="button" class="btn btn-outline-primary waves-effect manual" data-toggle="popover" data-trigger="manual" data-placement="top" data-container="body" data-original-title="{{$felt->title}}" data-content="{{$felt->info}}">
                                    Info
                                </button> </td>
                                @else

                                <td> <button type="button" class="btn btn-outline-success waves-effect manual" data-toggle="popover" data-trigger="manual" data-placement="top" data-container="body" data-original-title="{{$felt->title}}" data-content="{{$felt->info}}">
                                    Info
                                </button> </td>
                                @endif



                                <td>
                                    @if($felt->image === null)
                    <img src="{{asset('public/images/unknown.png')}}" class="rounded mr-1" height="30" alt="Googleee Chrome">
                    @else
                    
                    <a href="{{asset('/storage/images/' . $felt->image)}}" data-lightbox="roadtrip" class="rounded mr-1" height="30">
                        <img src="{{asset('/storage/images/' . $felt->image)}}" class="rounded mr-1" height="30" width="30" alt="Google Chrome">
                    </a>
                    @endif
                                </td>
                                <td>

                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('bruker.edit', $felt->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Endre</span>
                                            </a>
                                            <a class="dropdown-item" href="/profile/delete/{{$felt->id}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                <span>Slett</span>
                                            </a>
                                            <a class="dropdown-item" href="/fremstilling/{{$felt->id}}/edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                <span>Ut</span>
                                            </a>
                                            <a class="dropdown-item" href="/dokument/{{$test->id}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
                                                <span>Vis</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @else

                            <tr>
                                <td>
                                    @if($felt->tillatt == 1)
                                    <img src="../../../app-assets/images/icons/feil.png" class="mr-75" height="20" width="20" alt="Angular">
                    <span class="font-weight-bold text-danger">{{$felt->title}}</span>
                                    @else 
                                    <img src="../../../app-assets/images/icons/star.svg" class="mr-75" height="20" width="20" alt="Angular">
                    <span class="font-weight-bold">{{$felt->title}}</span>
                                   @endif
                                </td>
                                
                                <td>
                                    {{$felt->antall_rom}} / {{$felt->max_rom}}
                                </td>

                                <td>{{$felt->antall_lager}}</td>
                                <td>{{$felt->kategori->titel ?? ''}}</td>
                                @if($felt->info === null) 
                                <td> <button type="button" class="btn btn-outline-primary waves-effect manual" data-toggle="popover" data-trigger="manual" data-placement="top" data-container="body" data-original-title="{{$felt->title}}" data-content="{{$felt->info}}">
                                    Info
                                </button> </td>
                                @else

                                <td> <button type="button" class="btn btn-outline-success waves-effect manual" data-toggle="popover" data-trigger="manual" data-placement="top" data-container="body" data-original-title="{{$felt->title}}" data-content="{{$felt->info}}">
                                    Info
                                </button> </td>
                                @endif

                                <td>
                                    @if($felt->image === null)
                    <img src="{{asset('public/images/unknown.png')}}" class="rounded mr-1" height="30" alt="Googleee Chrome">
                    @else
                    
                    <a href="{{asset('/storage/images/' . $felt->image)}}" data-lightbox="roadtrip" class="rounded mr-1" height="30">
                        <img src="{{asset('/storage/images/' . $felt->image)}}" class="rounded mr-1" height="30" width="30" alt="Google Chrome">
                    </a>
                    @endif
                                </td>
                                <td>

                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('bruker.edit', $felt->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Endre</span>
                                            </a>
                                            <a class="dropdown-item" href="/profile/delete/{{$felt->id}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                <span>Slett</span>
                                            </a>
                                            <a class="dropdown-item" href="/fremstilling/{{$felt->id}}/edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                <span>Ut</span>
                                            </a>
                                            <a class="dropdown-item" href="/dokument/{{$test->id}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
                                                <span>Vis</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @endif


                        
                            @endforeach
                            @endforeach
                           
                            
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        @foreach ($users as $user)
        <a>{{$user->id}}</a> 
        @endforeach

        
    


@endsection
