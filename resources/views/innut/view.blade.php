@extends('layouts.app')

@section('content')

<div class="container-fluid">
<section id="accordion-with-border">
    
    <div class="row" id="basic-table">
        <div class="col-12">
            <div id="accordionWrapa50" role="tablist" aria-multiselectable="false">
                <div class="card collapse-icon">
                    <div class="card-header">
                        <h4 class="card-title">Oversikt over hvilke effekter innsatte har satt med ut av fengselet.</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <code>INFO:</code> Det gjelder fremstilling, permisjoner, osv.
                            
                        </p>
                        <div class="collapse-border" id="accordionExample0">
                            @foreach ($InnUtFremstilling as $FremstillingData)
                               
                                   
                               
                                
                           
                            <div class="card">
                                <div class="card-header collapsed" id="heading200" data-toggle="collapse" role="button" data-target="#collapse200" aria-expanded="false" aria-controls="collapse200">
                                    <span class="lead collapse-title"> {{$FremstillingData->navn}}</span>
                                </div>
                                @foreach ($FremstillingData->fremstilling as $fr )
                                <div id="collapse200" class="collapse" aria-labelledby="heading200" data-parent="#accordionExample0" style="">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                            
      
                                               
                                                <tbody>

                                                    
                                                    <form action="/fremstilling/{{$fr->id}}/tilbake" method="post">
                                                        @csrf

														<input type="hidden" value="{{$fr->felt_id}}" name="felt_id">
														<input type="hidden" value="{{$fr->id}}" name="frem_id">
														<input type="hidden" value="{{$fr->bruker_id}}" name="bruker_id">
                                                   
                                                    <tr>
                                                        <td>
                                                            <img src="../../../app-assets/images/logo/Default.png" class="mr-75" height="20" width="20" alt="Angular">
                                                            <span class="font-weight-bold">{{$fr->name}}</span>
                                                        </td>
                                                        <td>
                                                            <div class="input-group input-group-lg bootstrap-touchspin">
                                                                <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="rom" value="{{$fr->rom}}"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span> <span>Rom<strong></strong></span>
                                                            </div>
                                                            
                                                        </td>

                                                        <td>
                                                            <div class="input-group input-group-lg bootstrap-touchspin">
                                                                <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"></span><input type="number" class="touchspin form-control" name="lager" value="{{$fr->lager}}"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"></span> <span>Lager<strong></strong></span>
                                                            </div>
                                                            
                                                        </td>
                                                        <td>
                                                           
                                                            <!-- Button trigger modal -->
														<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$fr->id}}">
															INFO
														</button>
														<!-- Modal -->
														<div class="modal fade" id="exampleModal{{$fr->id}}" data-backdrop="false">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4>Informasjon</h4>
																	</div>
																	<div class="modal-body">{{$fr->info}}</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Steng</button>
																	</div>
																</div>
															</div>
														</div>
  
  
                                                            
                                                        </td>
                                                        <td>
                                                            <button type="submit" dataid="{{$fr->id}}" class="btn btn-gradient-primary">Tilbake</button>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-primary">
                                                                <a href="fremstilling/print/{{$fr->bruker_id}}" target="_blank">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather printer mr-25"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                                                    <span>Skriv ut</span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                 
                                                   
                                                   
                                                </tbody>
                                            </form>
                                               
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
								@endforeach
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
</div>

      

@endsection