@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Loggen tilhører {{$getName->navn}}</h4>
                </div>
                <div class="card-body">
                    <ul class="timeline">
                        @foreach ($getData as $data)

                        @if($data->name == 'Opprettet')

                        <li class="timeline-item">
                            <span class="timeline-point timeline-point-indicator"></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                    <h6>Opprettet</h6>
                                    <span class="timeline-event-time">{{$data->created_at->format('d-m-Y')}}</span>
                                </div>
                                <p><b>{{$data->new}}</b> lagt til effektliste</p>
                               
                            </div>
                        </li>

                        @elseif($data->name == 'Redigertrom')
                        <li class="timeline-item">
                            <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                    <h6>Redigert</h6>
                                    <span class="timeline-event-time">{{$data->created_at->format('d-m-Y')}}</span>
                                </div>
                                <p><b>{{$data->txt}}</b> endret fra <b>{{$data->old}}</b> til <b>{{$data->new}}</b></p>
                               
                            </div>
                        </li>

                        @elseif($data->name == 'Slettet')
                        <li class="timeline-item">
                            <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                    <h6>Slettet</h6>
                                    <span class="timeline-event-time">{{$data->created_at->format('d-m-Y')}}</span>
                                </div>
                                <p><b>{{$data->new}}</b> er slettet fra effektliste</p>
                               
                            </div>
                        </li>
                        @elseif($data->name == 'info')
                        <li class="timeline-item">
                            <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                    <h6>Beskrivelse endring</h6>
                                    <span class="timeline-event-time">{{$data->created_at->format('d-m-Y')}}</span>
                                </div>
                                <p>Beskrivelse for <b>{{$data->txt}}</b> er endret fra <b>{{$data->old}}</b> til <b>{{$data->new}}</b></p>
                               
                            </div>
                        </li>
                        @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    
</div>

@endsection