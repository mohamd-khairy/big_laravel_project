<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\Backend\storeRequest;

class CustomerController extends Controller
{
    public function index(storeRequest $request)
    {
        return view(buildPrefixView('customers','Backend.index'));
    }

}
