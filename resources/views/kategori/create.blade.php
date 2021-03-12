@extends('layouts.app')

@section('content')



<div class="col-lg-8 col-12">
    <div class="card card-company-table">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Navn</th>
                            <th>Opprettet av</th>
                            <th>Dato</th>
                            <th>Mer</th>
                        </tr>
                    </thead>
                    @foreach ($VisKategoris as $kategori )
                        
                    
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded">
                                        <div class="avatar-content">
                                            <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bolder">{{$kategori->titel}}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                
                                    <span>{{$kategori->betjent}}</span>
                                
                            </td>
                            <td>
                                <span>{{$kategori->created_at->format('d-m-Y')}}</span>
                            </td>
                            <td> <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                        <span>Edit</span>
                                    </a>
                                    <a class="dropdown-item" href="/profile/delete/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                        <span>Delete</span>
                                    </a>
                                   
                                </div>
                            </div></td>
                            
                        </tr>
                                              
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-4 col-md-6 col-12">
    <div class="card card-developer-meetup">
        <div class="meetup-img-wrapper rounded-top text-center">
            <img src="../../../app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170">
        </div>
        <div class="card-body">
            <div class="meetup-header d-flex align-items-center">
                <div class="meetup-day">
                    <h6 class="mb-0">THU</h6>
                    <h3 class="mb-0">24</h3>
                </div>
                <div class="my-auto">
                    <h4 class="card-title mb-25">Kategori</h4>
                    <p class="card-text mb-0">Lag riktig kategori til riktig objekt</p>
                </div>
            </div>
            @if (session('status'))

         <div class="alert alert-success" id="type-success" role="alert">
            <h4 class="alert-heading">Godkjent</h4>
            <div class="alert-body">
                {{ session('status') }}
            </div>
        </div>
        @endif
            <form method="post" action="{{asset('kategori')}}">
                @csrf
            <div class="media">
                <div class="avatar bg-light-primary rounded mr-1">
                    
                </div>
                <div class="media-body">
                    
                        <div class="form-group">
                            <label for="basicInput">Kategori</label>
                            <input type="text" class="form-control @error('kategori') border border-danger @enderror" name="kategori" id="basicInput">
                            @error('kategori')
                            <div class="text-danger">

                          {{$message}}

                    </div>
                          @enderror
                        
                    </div>
                </div>
            </div>
            <div class="media mt-2">
                <div class="avatar bg-light-primary rounded mr-1">
                    
                </div>
                <div class="media-body">
                    
                    <div class="form-group">
                        <label for="basicInput">Betjent</label>
                        <input type="text" class="form-control @error('betjent') border border-danger @enderror" id="basicInput" name="betjent">
                        @error('betjent')
                        <div class="text-danger">

                      {{$message}}

                </div>
                      @enderror
                    
                </div>
            </div>
            </div>

            <div class="media">

                <button type="submit" class="btn btn-gradient-primary ml-1">Send</button>
            </div>
            <form>
        </div>
    </div>
</div>

@endsection