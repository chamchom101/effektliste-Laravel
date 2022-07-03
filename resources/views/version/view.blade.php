@extends('layouts.app')

@section('content')
<div class="container-fluid">

<div class="row" id="table-striped">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Version 1.07</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    
                </p>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Endring</th>
                            <th>Status</th>
                            <th>Dato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getContent as $content)
                        <tr>
                            <td>
                                <img src="../../../app-assets/images/logo/default.png" class="mr-75" height="20" width="20" alt="Angular">
                                <span class="font-weight-bold">{{$content->content}}</span>
                            </td>
                            @if($content->icon === 1)
                            <td><span class="badge badge-pill badge-light-primary mr-1">Oppdatert</span></td>
                            @elseif ($content->icon === 2)
                            <td><span class="badge badge-pill badge-light-info mr-1">Utbedring</span></td>
                            @elseif ($content->icon === 3)
                            <td><span class="badge badge-pill badge-light-success mr-1">Nytt</span></td>
                            @elseif ($content->icon === 4)
                            <td><span class="badge badge-pill badge-light-danger mr-1">Fjernet</span></td>
                           @endif
                            <td><span class="badge badge-pill badge-light-primary mr-1">{{$content->dato}}</span></td>
                           
                        </tr>

                        @endforeach
                        
                  
                          
                           
                            
                           
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>



@endsection