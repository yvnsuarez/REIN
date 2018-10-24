<?php

namespace App\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\User;

class SearchController extends Controller
{
    public function search() {
        $q = Input::get('q');
        $user = User::where('FirstName', 'LIKE', '%'.$q.'%')->orWhere('LastName', 'LIKE', '%'.$q.'%');
        if (count($user) > 0) {
            return view('partners.result')->withDetails($user)->withQuery($q);
        } else {
            return view('partners.result')->withMeassage('No user found. Search again.');
        }
    }
}
