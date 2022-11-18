@extends('admin.layouts.include')
@section('content')
    @toastr_css
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><!-- Home -->Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><!-- Dashboard -->Tableau de
                            bord</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CESU Tickets</h4>
                        <div class="float-lg-right">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Utilisatrice</th>
                                    <th>CESU Ticket Number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($check as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->users->firstName .' ' .$row->users->lastName }}</td>
                                        {{--                                                <td> <input type="color" value="{{$row->backColor}}" disabled></td>--}}
                                        <td>
                                            {{$row->number}}
                                        </td>
                                        <td>
                                            @if($row->status == 0)
                                                <a data-toggle="modal" data-target="#aAddDietMenus{{$row->id}}"><button class="btn btn-sm btn-primary">Accept</button></a>
                                                <a href="{{route('check-status', ['id' => $row->id, 'status' => '2'])}}"><button class="btn btn-sm btn-danger">Reject</button></a>
                                                <div class="d-flex">
                                                    <div class="modal fade" id="aAddDietMenus{{$row->id}}">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Add Amount To Charge The Demandeur Waller</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('admin.add.balance')}}" class="formsubmit" method="POST">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label>Amount</label>
                                                                            <input type="text" class="form-control" name="amount" placeholder="Amount">
                                                                        </div>
                                                                        <input type="hidden" name="id" value="{{$row->id}}">
                                                                        <input type="hidden" name="user_id" value="{{$row->user_id}}">
                                                                        <button class="btn btn-primary">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($row->status == 1)
                                                Accepted
                                            @elseif($row->status == 2)
                                                Rejected
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script src="{{asset('assets/dist/js/lightbox-plus-jquery.min.js')}}"></script>
            <script type="text/javascript">
                function reply_click(clicked_id) {
                    alert(clicked_id);
                }
            </script>
            @jquery
            @toastr_js
            @toastr_render
@endsection
