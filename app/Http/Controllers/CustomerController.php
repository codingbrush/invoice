<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $customers = $this->customer->paginate(10);
        return view('customers.index')->with('customers',$customers);
    }

    public function show($id)
    {
        $customers = $this->customer->findOrFail($id);
        return view('customers.show')->with('customers',$customers);
    }
}
