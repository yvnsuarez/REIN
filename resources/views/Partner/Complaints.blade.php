@extends('layouts.PartnerCompany')

@section('content-header')
    <h1>
        Complaints
        <small>View Complaints</small>
    </h1>
@endsection

@section('content')
        <div class="flex-center position-ref full-height">
            {{-- ADD HERE: if logged in then this should be seen 
            <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    {{-- RETRIEVE ALL PARTNER COMPANIES --}}
                    {{-- KULANG NG AJAX --}}

                            <div class="card border-warning">
                                <div class="card-body">
                                    <table class="table">
                                        <tr class="text-center">
                                            <th>Complaint ID</th>
                                            <th>Transaction ID</th>
                                            <th>Complaint</th>
                                            <th>Date</th>
                                        <tr>
                                        @foreach($complaints as $complaint)
                                            <tr class="text-center">
                                                <td>{{$complaint->ComplaintsId}}</td>
                                                <td>{{$complaint->TransactionLogId}}</td>
                                                <td>{{$complaint->Complaint}}</td>
                                                <td>{{$complaint->DateSubmitted}}</td>
                                            </tr>
                                        @endforeach
                                        </table>
                                </div>
                    </div>
                </div>
                @endsection