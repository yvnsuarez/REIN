<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebPartnerController extends Controller
{
    public function index() {
        //Partner/Guest Home(Index) View
        return view('partnerCompany.Home');
    }

   
    public function requests() {
        //Partner/Guest Logged-in Home(Index) View -- List of Request
        return view('partnerCompany.Requests');
    }


    public function approveRequest() {
        //Approval of Request View
        return view('partnerCompany.ApproveRequest');
    }


    public function assignRequest() {
        //Assignment of Request View 
        return view('partnerCompany.AssignRequest');
    }


    public function assistants() {
        //List of Assistants View 
        return view('partnerCompany.Assistants');
    }


    public function assistantProfile() {
        //Profile of Assistant View 
        return view('partnerCompany.ViewAssistant');
    }


    public function addAssistant() {
        //Add/Register an Assitant View 
        return view('partnerCompany.AddAssistant');
    }
    
    
    public function updateAssistant () {
        //Suspend/Update account of an Assistant View
        return view('partnerCompany.UpdateAssistant');
    }


    public function logs () {
        //Suspend/Update account of an Assistant View
        return view('partnerCompany.TransactionLogs');
    }


    public function complaints() {
        //List of Complaints View 
        return view('partnerCompany.Complaints');
    }


    public function viewComplaint() {
        //Complaint View
        return view('partnerCompany.ViewComplaint');
    }


    public function feedback () {
        //List of Complaints View 
        return view('partnerCompany.Feedbacks');
    }


    public function viewFeedback() {
        //Complaint View
        return view('partnerCompany.viewFeedback');
    }

}
