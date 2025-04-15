<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index() {

        $investors = Investor::orderBy('last_name')->paginate(10);

        return inertia('Investor/Index', compact('investors'));
    }

    public function showCreateForm(){
        return inertia('Investor/Create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'investment_type' => 'required|in:micro,sponsor,benefactor',
        ]);


        Investor::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'phone' => $validated['phone'], // this is key
            'address' => $validated['address'],
            'investment_type' => $validated['investment_type'],
        ]);


        return redirect()->route('investor.index');

    }
}
