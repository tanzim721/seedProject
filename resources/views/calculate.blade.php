@extends('layout1.master')
    

@section('content1')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h1 class="mt-5">VAT Calculator</h1>
            <form method="post" action="{{ route('store') }}">
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
        </div>
    </div>
    
</div>
@endsection


