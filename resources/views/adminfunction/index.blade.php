@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Manage Admin</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Admin</strong>
                                {{ link_to_route('adminfunction.create', 'Register an Admin', null, ['class'=>'fa fa-user-plus btn btn-outline-secondary btn-sm pull-right'])}}
                            </div>
                            <div class="card-body">
                            <?php $i = 1; ?>
                            @if(count($users) > 0)
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th class="serial">No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$i++ }}</td>
                                            <td>{{$user->FirstName}} {{$user->LastName}}</td>
                                            <td>{{$user->Email}}</td>
                                            <td>{{$user->Status}}</td>
                                            <td>
                                                    <div class="links">
                                                            <a href="/admin/adminfunction/{{$user->id}}"class="btn btn-outline-secondary btn-sm fa fa-info" data-toggle="tooltip" title="View Assistant">
                                                            </a>
                                                            <a href="/admin/adminfunction/{{$user->id}}/edit" class="btn btn-outline-secondary btn-sm fa fa-edit" data-toggle="tooltip" title="Edit Assistant">
                                                            </a>
                                                    </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th class="serial">No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                </table>
                              @endif
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

@endsection
