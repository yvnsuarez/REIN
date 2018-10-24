<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Complaints;

class ComplaintsController extends Controller
{
    public function index() {
        $complaints = Complaints::all(); //->where('UserTypeID', '=', 2)
        return view ('partnerCompany.Complaints', compact('complaints'));
    }
}
