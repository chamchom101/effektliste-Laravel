@extends('layouts.app')

@section('content')


<section id="multiple-column-form">

    
    <form action="{{route('register', $id)}}" method="post">
    @csrf

@if (session('status'))

         <div class="alert alert-success" id="type-success" role="alert">
            <h4 class="alert-heading">Godkjent</h4>
            <div class="alert-body">
                {{ session('status') }}
            </div>
        </div>
        @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Regestrer en ny bruker</h4>
                </div>
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="innsatt_nummer">Innsatt nummer</label>
                                    <input type="text" id="innsatt_nummer" class="form-control @error('innsatt_nummer') border border-danger @enderror" placeholder="Innsatt nummer" value="{{ old('innsatt_nummer')}}" name="innsatt_nummer">
                                    @error('innsatt_nummer')
                                 <div class="text-danger">

                               {{$message}}

                         </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="navn">Navn</label>
                                <input type="text" id="navn" class="form-control @error('navn') border border-danger @enderror " placeholder="Navn" name="navn" value="{{ old('navn')}}">
                                @error('navn')
                                 <div class="text-danger">

                               {{$message}}

                         </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="hylle">Hylle</label>
                                    <input type="text" id="hylle" class="form-control @error('hylle') border border-danger @enderror " placeholder="Hylle" name="hylle" value="{{ old('hylle')}}">

                                    @error('hylle')
                                 <div class="text-danger">

                               {{$message}}

                         </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="signatur">Signatur</label>
                                    <input type="text" id="signatur" class="form-control @error('signatur') border border-danger @enderror " name="signatur" placeholder="Signatur" value="{{ old('signatur')}}">

                                    @error('signatur')
                                 <div class="text-danger">

                               {{$message}}

                         </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Send</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
</section>


@endsection