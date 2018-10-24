<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ViewAssistantsController extends Controller
{
    //
    public function index() {
        $users = User::where('UserTypeID', '=', 3)->get(); //->where('UserTypeID', '=', 2)
        return view ('partnerCompany.Assistants', compact('users'));
    }
}
