@extends('layouts.app')

@section('content')
<form action="/profile/{{$editObjekt->id}}" method="post">
@csrf
@method('PUT')
<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Oppdater Objekt {{$editObjekt->title}}</h4>
                </div>
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Objekt</label>
                                    <input type="text" value="{{$editObjekt->title}}" id="first-name-column" class="form-control" placeholder="" name="objekt">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Info</label>
                                    <input type="text" value="{{$editObjekt->info}}" id="last-name-column" class="form-control" placeholder="" name="info">
                                </div>
                            </div>
                            <input type="hidden" value="{{$editObjekt->bruker_id}}" name="bruker_id">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <label for="credit-card">Kategori</label>
                                <select class="form-control" name="kategori" id="basicSelect">
                                    
                                    <option value="{{$editObjekt->kategori_id}}">{{$headerObjekt->titel}}</option>

                                    @foreach ($katObjekt as $kat)
                                    
                                    <option value="{{$kat->id}}">{{$kat->titel}}</option>
                                        
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">Antall på rom</label>
                                <div class="input-group input-group-lg bootstrap-touchspin">
                                    <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="rom" value="{{$editObjekt->antall_rom}}"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">Antall på lager</label>
                                <div class="input-group input-group-lg bootstrap-touchspin">
                                    <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="lager" value="{{$editObjekt->antall_lager}}"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">Last opp bildet</label>
                                <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
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
