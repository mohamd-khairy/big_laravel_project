<?php

namespace Customers\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        return view(buildPrefixView('customers', 'frontend.index'));
    }

}
