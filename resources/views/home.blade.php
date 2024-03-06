@extends('layouts.app')

@section('content')
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
                <h1 class="mt-5">VAT Calculator</h1>
                <form method="post" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="gross_sum" class="form-label">Gross Sum</label>
                        <input type="number" class="form-control" id="gross_sum" name="gross_sum" required>
                    </div>
                    <div class="mb-3">
                        <label for="vat_operation" class="form-label">VAT Calculation Operation</label>
                        <select class="form-select" id="vat_operation" name="vat_operation">
                            <option value="include">Include VAT</option>
                            <option value="exclude">Exclude VAT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tax_percentage" class="form-label">Tax Percentage (%)</label>
                        <input type="number" class="form-control" id="tax_percentage" name="tax_percentage" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
                    
            </main>
        </div>
    </div>
@endsection
