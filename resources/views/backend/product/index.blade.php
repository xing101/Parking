@extends('backend.layouts.master')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Product Management </h5>

            <div class="card-body">
                <a href="#" class="btn btn-primary " style="max-width: 400px ;margin-bottom: 20px;min-width: 200px;"
                    data-toggle="modal" data-target="#exampleModal">Create</a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Product</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="card">
                                            <h5 class="card-header">Creaet Product</h5>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Name</label>
                                                        <input id="inputText3" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Price</label>
                                                        <input id="inputText3" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Decription</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                <a href="#" class="btn btn-primary">Save changes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a href="#" class="btn btn-primary " style="max-width: 200px ;"
                                        data-toggle="modal" data-target="#      exampleModal">Edit</a>
                                    <a href="#" class="btn  btn-danger " style="max-width: 200px ;"
                                        data-toggle="modal" data-target="#exampleModal">Delete</a>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
