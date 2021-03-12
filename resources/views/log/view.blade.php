@extends('layouts.app')

@section('content')

<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Table Basic</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                    can use any example of below table for your table and it can be use with any type of bootstrap tables.
                </p>
            </div>
            <div class="table-responsive">
                <table id="example" class="display" >
                    <thead>
                        <tr>
                            <th>Objekt fra</th>
                            <th>Objekt til</th>
                            <th>Rom fra</th>
                            <th>Rom til</th>
                            <th>Lager fra</th>
                            <th>Lager til</th>
                            <th>Dato</th>
                        </tr>
                    </thead>
                    <tbody>

                    
                        @foreach ($loggView as $logg )
                            
                       
                        <tr>
                            <td>
                                <img src="../../../app-assets/images/icons/rarrow.png" class="mr-75" height="20" width="20" alt="Angular">
                                {{$logg->properties['old']['title'] ?? ''}}</td>
                            <td>
                                <img src="../../../app-assets/images/icons/garrow.png" class="mr-75" height="20" width="20" alt="Angular">
                                {{$logg->properties['attributes']['title'] ?? ''}}</td>
                            <td>
                                <img src="../../../app-assets/images/icons/rarrow.png" class="mr-75" height="20" width="20" alt="Angular">
                                {{$logg->properties['old']['antall_rom'] ?? ''}}</td>
                            <td>
                                <img src="../../../app-assets/images/icons/garrow.png" class="mr-75" height="20" width="20" alt="Angular">
                                {{$logg->properties['attributes']['antall_rom'] ?? ''}}</td>
                            <td>
                                <img src="../../../app-assets/images/icons/rarrow.png" class="mr-75" height="20" width="20" alt="Angular">
                                {{$logg->properties['old']['antall_lager'] ?? ''}}</td>
                            </td>
                            <td>
                                <img src="../../../app-assets/images/icons/garrow.png" class="mr-75" height="20" width="20" alt="Angular">
                                {{$logg->properties['attributes']['antall_lager'] ?? ''}}</td>
                            </td>
                            <td>{{$logg->created_at}}</td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Objekt fra</th>
                            <th>Objekt til</th>
                            <th>Rom fra</th>
                            <th>Rom til</th>
                            <th>Lager fra</th>
                            <th>Lager til</th>
                            <th>Dato</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection