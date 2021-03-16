@extends('layouts.app')

@section('content')

<div class="col-xl-9 col-md-8 col-12">
    <div class="card invoice-preview-card">
        <div class="card-body invoice-padding pb-0">
            <!-- Header starts -->
            <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                <div>
                    <div class="logo-wrapper">
                        <img src="../../../app-assets/images/logo/cover.png" style="width: 100px; height: 60px" alt="" />
                        <h3 class="text-primary invoice-logo">Effektliste</h3>
                    </div>
                    <p class="card-text mb-25">Navn: {{$Bruker->navn}}</p>
                    <p class="card-text mb-25">Hylle: {{$Bruker->hylle}}</p>
                    <p class="card-text mb-0">Betjent: {{$Bruker->betjent_navn}}</p>
                </div>
                <div class="mt-md-0 mt-2">
                    <h4 class="invoice-title">
                        Innsatt
                        <span class="invoice-number"># {{$Bruker->innsatt_nummer}}</span>
                    </h4>
                    <div class="invoice-date-wrapper">
                        <p class="invoice-date-title">Opprettet:</p>
                        <p class="invoice-date">{{$Bruker->created_at}}</p>
                    </div>
                    <div class="invoice-date-wrapper">
                        <p class="invoice-date-title">Oppdatert:</p>
                        <p class="invoice-date">{{$Bruker->updated_at}}</p>
                    </div>
                </div>
            </div>
            <!-- Header ends -->
        </div>

        <hr class="invoice-spacing">

        <!-- Address and Contact starts -->
        <div class="card-body invoice-padding pt-0">
            <div class="row invoice-spacing">
                <div class="col-xl-8 p-0">
                    <h6 class="mb-2"></h6>
                    <h6 class="mb-25"></h6>
                    <p class="card-text mb-25"></p>
                    <p class="card-text mb-25"></p>
                    <p class="card-text mb-25"></p>
                    <p class="card-text mb-0"></p>
                </div>
                <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                    <h6 class="mb-2"></h6>
                    <table>
                        <tbody>
                            <tr>
                                <td class="pr-1"></td>
                                <td><span class="font-weight-bold"></span></td>
                            </tr>
                            <tr>
                                <td class="pr-1"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pr-1"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pr-1"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pr-1"></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Address and Contact ends -->

        <!-- Invoice Description starts -->
        <div class="table-responsive">
            
                  
                
            
            <table class="table">
                <thead>
                    <tr>
                        <th class="py-1">Objekt og beskrivelse</th>
                        <th class="py-1">På rom</th>
                        <th class="py-1">På lager</th>
                        <th class="py-1">Kategori</th>
                    </tr>
                </thead>
                @foreach ($getBrukers as $getBruker )
                @foreach ($getBruker->felt->sortBy('kategori_id') as $felt )

                <tbody>
                    <tr>
                        <td class="py-1">
                            <p class="card-text font-weight-bold mb-25">{{$felt->title}}</p>
                            <p class="card-text text-nowrap">
                                {{$felt->info}}
                            </p>
                        </td>
                        <td class="py-1">
                            <span class="font-weight-bold">{{$felt->antall_rom}}</span>
                        </td>
                        <td class="py-1">
                            <span class="font-weight-bold">{{$felt->antall_lager}}</span>
                        </td>
                        <td class="py-1">
                            <span class="font-weight-bold">{{$felt->kategori->titel ?? ''}}</span>
                        </td>
                    </tr>
                    @endforeach
               @endforeach
                </tbody>
            </table>
            
                
        </div>

        <div class="card-body invoice-padding pb-0">
            <div class="row invoice-sales-total-wrapper">
                <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                    <p class="card-text mb-0">
                        <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                    <div class="invoice-total-wrapper">
                        <div class="invoice-total-item">
                            <p class="invoice-total-title"></p>
                            <p class="invoice-total-amount"></p>
                    </div>
                        <div class="invoice-total-item">
                            <p class="invoice-total-title"></p>
                            <p class="invoice-total-amount"></p>
                        </div>
                        <div class="invoice-total-item">
                            <p class="invoice-total-title"></p>
                            <p class="invoice-total-amount"></p>
                        </div>
                        <hr class="my-50">
                        <div class="invoice-total-item">
                            <p class="invoice-total-title"></p>
                            <p class="invoice-total-amount"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice Description ends -->

        <hr class="invoice-spacing">

        <!-- Invoice Note starts -->
        <div class="card-body invoice-padding pt-0">
            <div class="row">
                <div class="col-12">
                    <span class="font-weight-bold">Note:</span>
                    <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                        projects. Thank You!</span>
                </div>
            </div>
        </div>
        <!-- Invoice Note ends -->
    </div>
</div>



<div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
    <div class="card">
        <div class="card-body">
            <button class="btn btn-primary btn-block mb-75 waves-effect waves-float waves-light" data-toggle="modal" data-target="#send-invoice-sidebar">
                Send Invoice
            </button>
            <button class="btn btn-outline-secondary btn-block btn-download-invoice mb-75 waves-effect">Download</button>
            <a class="btn btn-outline-secondary btn-block mb-75 waves-effect" href="{{route('dokument.print', $Bruker->id)}}" target="_blank">
                Print
            </a>
            <a class="btn btn-outline-secondary btn-block mb-75 waves-effect" href="./app-invoice-edit.html"> Edit </a>
            <button class="btn btn-success btn-block waves-effect waves-float waves-light" data-toggle="modal" data-target="#add-payment-sidebar">
                Add Payment
            </button>
        </div>
    </div>
</div>
@endsection