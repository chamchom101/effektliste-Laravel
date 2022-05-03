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
                                                            <button type="submit" dataid="{{$fr->id}}" class="btn btn-gradient-primary">Send</button>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="{{$fr->id}}">
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