<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\result;
use Hash;
use Mail;
use Str;
use Auth;  

class CalculatedController extends Controller
{
    public function calculateVAT(){
        $data['allData'] = result::all();
        return view('calculate', $data);
    }
    public function store(Request $request){
        $grossSum = $request->input('gross_sum');
        $vatOperation = $request->input('vat_operation');
        $taxPercentage = $request->input('tax_percentage');

        $details = [];

        if ($vatOperation == 'exclude') {
            $vatAmount = $grossSum * ($taxPercentage / 100);
            $netAmount = $grossSum - $vatAmount;
        } else {
            $netAmount = $grossSum / (1 + ($taxPercentage / 100));
            $vatAmount = $grossSum - $netAmount;
        }
        $details[] = [
            'grossSum' => $grossSum,
            'vatOperation' => $vatOperation,
            'taxPercentage' => $taxPercentage,
            'netAmount' => $netAmount
        ];
        return view('result.view', compact('details'));
    }
}
