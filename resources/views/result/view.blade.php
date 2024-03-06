@extends('layout1.master')
    
    @section('content1')
    <div class="container-fluid">
        <div class="row">
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
                <h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Gross Sum</th>
                                <th>Vat</th>
                                <th>Tax</th>
                                <th>Calculated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $key => $result)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $result['grossSum']}}</td>
                                    <td>{{ $result['vatOperation']}}</td>
                                    <td>{{ $result['taxPercentage']}}</td>
                                    <td>{{ $result['netAmount']}}</td>
                                </tr>
                            @endforeach
                            <!-- More rows... -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    
    @endsection