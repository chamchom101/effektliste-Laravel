<section id="input-mask-wrapper">
    <form action="{{route('profile', $profiles->id)}}" enctype="multipart/form-data" method="post">
        @csrf
    <div class="row collapse" id="HentData" >
      
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ny effektobjekt</h4>
                </div>
                <div class="card-body">
                     <!---->

                

                        <!---->
                    <div class="row">

                       


                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="mytitle">Objekt</label>


                            

                            <!--<input type="text" list="obj" id="mytitle" name="title" class="form-control credit-card-mask @error('title') border border-danger @enderror" placeholder="Genser, bukser, sokker"  onChange="update()"/>-->
                            <select id="obj" name="title" class="form-control credit-card-mask @error('title') border border-danger @enderror" placeholder="Genser, bukser, sokker"  onChange="update()">
                                
                                    
                                @foreach ($objekters as $objekt )
                                    
                                
                                <option id="{{$objekt->max_rom}}" value="{{$objekt->max_rom}}">{{$objekt->name}}</option>
                                
                                

                                    @endforeach
                                
                            </select>
                            @error('title')
                            <div class="text-danger">

                          {{$message}}

                    </div>
                          @enderror
                        </div>
                        
                        <input type="hidden" name="maxCreate" value="" id="demo">
                        
                        <input type="hidden" name="maxCreate2" value="" id="demo2">
                        
                        
                 

                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="credit-card">Litt info om objektet</label>
                            <input type="text" name="info" class="form-control credit-card-mask" placeholder="" id="credit-card">
                        </div>

                              

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <label for="credit-card">Kategori</label>
                            <select class="form-control" name="kategori" id="basicSelect">
                                @foreach ($kategoris as $kategori )

                                <option value="{{$kategori->id}}">{{$kategori->titel}}</option>
                                    
                                @endforeach
                                
                            </select>
                        </div>
                        <input type="hidden" value="{{$profiles->id}}" name="bruker_id"> 
                        
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="rom">Antall på rom</label>
                            <div class="input-group input-group-lg bootstrap-touchspin">
                                @foreach ($obj as $objekter)
                                <input type="hidden" name="objekt_id" value="{{$objekter->id}}">
                                @endforeach
                                <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="rom" value="0"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="lager">Antall på lager</label>
                            <div class="input-group input-group-lg bootstrap-touchspin">
                                <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="lager" value="0"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="lager">Ikke tillatt</label>
                            <div class="custom-control custom-control-danger custom-checkbox">
                                <input type="checkbox" name="tillatt" class="custom-control-input" value="1" id="colorCheck5">
                                <label class="custom-control-label" for="colorCheck5">Skal Ikke på rom</label>
                            </div>
                            </div>
                             
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="lager">Pin</label>
                                <div class="custom-control custom-control-danger custom-checkbox">
                                    <input type="checkbox" name="viktig" class="custom-control-input" value="1" id="colorCheck6">
                                    <label class="custom-control-label" for="colorCheck6">Viktig</label>
                                </div>
                                </div>

                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="image">Last opp bildet</label>
                            
                            <input type="file" class="form-control-file" value="test" name="image" id="exampleFormControlFile1">
                            
                        </div>

                       

                        <button type="submit" class="btn btn-relief-primary mt-2">Send</button>
                        
                        
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>