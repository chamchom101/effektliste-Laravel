@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-8 col-md-7 d-felx p-2">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Multilingual</h4>
                </div>
                <table id="example" class="display" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>

                    
                        @foreach ($loggView as $logg )
                            
                       
                        <tr>
                            <td>{{$logg->properties['old']['title']}}</td>
                            <td>{{$logg->properties['attributes']['title']}}</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


@endsection