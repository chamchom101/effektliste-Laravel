@extends('layouts.admin')

@section('content')



<div class="container-fluid">
    <section id="input-sizing">
        <div class="row">
           
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Systemvalg</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p class="card-text mb-2">
                                
                                </p>
                                

                                <div class="form-group">
                                    <label for="defaultInput">Titel</label>
                                    <input id="defaultInput" name="titel" value="{{$settingTitel->txt}}" class="form-control" type="text" placeholder="Titel">
                                </div>

                                <div class="form-group">
                                    <label for="defaultInput">Logo</label>
                                    <input id="defaultInput" name="logo" value="{{$settingLogo->txt}}" class="form-control" type="text" placeholder="Logo">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection