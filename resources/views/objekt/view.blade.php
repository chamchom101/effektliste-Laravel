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
                            <th>Tillatt På Rom</th>
                            <th>Betjent</th>
                            <th>Dato</th>
                            <th>Mer</th>
                        </tr>
                    </thead>
                    
                        @foreach ($Objekter as $Objekt )

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
                                        <div class="font-weight-bolder"></div>
                                        {{$Objekt->name}}
                                    </div>
                                </div>
                            </td>
                            <td>
                                
                                    <span>{{$Objekt->max_rom}}</span>
                                
                            </td>
                            <td><span>{{$Objekt->betjent}}</span></td>

                            @if($Objekt->created_at->format('d-m-Y') == NULL)
                            <td>
                                <span>Ingen dato å vise</span>
                            </td>
                            @else
                            <td><span>{{$Objekt->created_at->format('d-m-Y') ?? ''}}</span></td>
                            @endif
                            <td> <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('objekt.edit', $Objekt->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                        <span>Edit</span>
                                    </a>
                                    <a class="dropdown-item" href="{{route('objekt.destroy', $Objekt->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                        <span>Delete</span>
                                    </a>
                                   
                                </div>
                            </div></td>
                            
                        </tr>
                                              
                    </tbody>
                    @endforeach
                    {{--END FOREACH--}}
                </table>
            </div>
        </div>
    </div>
</div>




@if(Route::is('objekt.view'))
@include('objekt.create')
@endif
@if(Route::is('objekt.edit'))
@include('objekt.edit')
@endif


@endsection