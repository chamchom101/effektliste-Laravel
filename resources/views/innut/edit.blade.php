@extends('layouts.app')

@section('content')
<form action="/fremstilling/{{$InnUtEdit->id}}" method="post">
@csrf

<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Endre</h4>
                </div>
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Objekt</label>
                                    <input type="text" value="{{$InnUtEdit->title}}" id="first-name-column" readonly="readonly" class="form-control" placeholder="" name="objekt">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Info</label>
                                    <input type="text" value="" id="last-name-column" class="form-control" placeholder="" name="info">
                                </div>
                            </div>
                            <input type="hidden" value="{{$InnUtEdit->id}}" name="felt_id">
                            <input type="hidden" value="{{$InnUtEdit->bruker_id}}" name="bruker_id">
                           
                            
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">Antall på rom</label>
                                <div class="input-group input-group-lg bootstrap-touchspin">
                                    <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="rom" value="0"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span> <span>Av: <strong>{{$InnUtEdit->antall_rom}}</strong></span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">Antall på lager</label>
                                <div class="input-group input-group-lg bootstrap-touchspin">
                                    <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="lager" value="0"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span> <span>Av: <strong>{{$InnUtEdit->antall_lager}}</strong></span>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Send</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</form>
</section>

@endsection
