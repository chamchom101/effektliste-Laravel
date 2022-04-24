@extends('layouts.app')

@section('content')


<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Print ut</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    
                </p>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Navn</th>
                            <th>Verdi</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @foreach ($ShowBrukers as $Bruker )
                    <form action="/dokument/print/bruker/{{$Bruker->id}}" method="post">
                        @csrf
                    <tbody>
                        <tr>
                            <td>
                                <img src="../../../app-assets/images/icons/angular.svg" class="mr-75" height="20" width="20" alt="Angular">
                                <span class="font-weight-bold">{{$Bruker->navn}}</span>
                            </td>
                            <td>
                                <div class="input-group input-group-lg bootstrap-touchspin">
                                    <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="rom" value="0"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span>
                                </div>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-gradient-primary">Print</button>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            <span>Edit</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                       
                       
                    </tbody>
                </form>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
    
    

@endsection