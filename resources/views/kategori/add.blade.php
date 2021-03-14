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