@extends('layouts.app')

@section('content')

<section class="basic-timeline">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Logg</h4>
                                </div>
                                <div class="card-body">
                                    
                                    
                                    @foreach ($loggView as $logg )
                                    @if($logg->description == 'created')
                                    <ul class="timeline">
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                    <div class="badge badge-primary mb-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star mr-25"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        <span>Opprettet</span>
                                                    </div>
                                                    
                                                    <span class="timeline-event-time">12 min ago</span>
                                                </div>
                                                <p>{{$logg->created_at->format('d-m-Y')}}: Objekt  <strong>{{ $logg->properties['attributes']['title'] ?? ''}}</strong> Opprettet av (NAVN)</p>
                                                <p>sssss</p>
                                                <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.</p>
                                                
                                            </div>
                                        </li>
                            
                                    </ul>
                                    @elseif($logg->description == 'updated')
                                    <ul class="timeline">
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                    <div class="badge badge-success mb-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star mr-25"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        <span>Redigert</span>
                                                    </div>
                                                    
                                                    <span class="timeline-event-time">12 min ago</span>
                                                </div>
                                                <p><strong>{{$logg->created_at->format('d-m-Y')}}:</strong> Objekt endret fra <strong>{{ $logg->properties['old']['title'] ?? 'Ingen endring'}}</strong> til <strong>{{$logg->properties['attributes']['title'] ?? 'Ingen endring'}}</strong> </p>
                                                <p>Antall på rommet endret fra <strong>{{$logg->properties['old']['antall_rom'] ?? 'Ingen endring'}}</strong> til <strong>{{$logg->properties['attributes']['antall_rom'] ?? 'Ingen endring'}}</strong> </p>
                                                <p>Antall på lageret endret fra <strong>{{$logg->properties['old']['antall_lager'] ?? 'Ingen endring'}}</strong> til <strong>{{$logg->properties['attributes']['antall_lager'] ?? 'Ingen endring'}}</strong></p>
                                                <p>Notat endret fra <strong>{{$logg->properties['old']['info'] ?? 'Ingen endring'}}</strong> til <strong>{{$logg->properties['attributes']['info'] ?? 'Ingen endring'}}</strong></p>
                                                <p>Ingen data</p>
                                                <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.</p>
                                                
                                                
                                            </div>
                                        </li>
                            
                                    </ul>
                                    @elseif($logg->description == 'deleted')

                                    <ul class="timeline">
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                    <div class="badge badge-danger mb-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star mr-25"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        <span>Slettet</span>
                                                    </div>
                                                    
                                                    <span class="timeline-event-time">12 min ago</span>
                                                </div>
                                                <p>{{$logg->created_at->format('d-m-Y')}}: Objekt <strong>{{ $logg->properties['attributes']['title'] ?? ''}}</strong> slettet av (NAVN)</p>
                                                <p>sssss</p>
                                                
                                            </div>
                                        </li>
                            
                                    </ul>

                                    @endif
                                    @endforeach
                                
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>

@endsection