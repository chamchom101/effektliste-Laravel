@extends('layouts.app')

@section('content')


<section id="multiple-column-form">

    
    <form action="/register/{{$editBruker->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PUT')

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
                    <h4 class="card-title">Rediger bruker</h4>
                </div>
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="innsatt_nummer">Innsatt nummer</label>
                                    <input type="text" id="innsatt_nummer" class="form-control" placeholder="Innsatt nummer" value="{{$editBruker->innsatt_nummer}}" name="innsatt_nummer">
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
                                <input type="text" id="navn" class="form-control" placeholder="Navn" name="navn" value="{{$editBruker->navn}}">
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
                                    <input type="text" id="hylle" class="form-control" placeholder="Hylle" name="hylle" value="{{$editBruker->hylle}}">

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
                                    <input type="text" id="signatur" class="form-control" name="signatur" placeholder="Signatur" value="{{$editBruker->betjent_navn}}">

                                    @error('signatur')
                                 <div class="text-danger">

                               {{$message}}

                         </div>
                               @enderror
                                </div>
                            </div>

                            

                            <div class="user-avatar-section">
                        <div class="d-flex justify-content-start mb-2 ml-1">
                        @if($editBruker->image === null)
                    
                    <img class="img-fluid rounded" src="{{asset('public/images/unknown.png')}}" height="104" width="104" alt="User avatar">
                    @else
                            <img class="img-fluid rounded" src="{{asset('/storage/images/' . $editBruker->image)}}" height="104" width="104" alt="User avatar">
                            @endif                            <div class="d-flex flex-column ml-1">
                                <div class="user-info mb-1">
                                    <h4 class="mb-0"></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="credit-card">Last opp bildet</label>
                                <input type="file" class="form-control-file" value="" name="image" id="exampleFormControlFile1">
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Send</button>
                                
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