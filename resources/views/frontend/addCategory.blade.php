@extends('frontend/template')
@section('main_content')

    <div id="content" class="content">
        <div class="container-fluid">
            <main>
                <!-- start content -->
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <a href="{{ route('category') }}" class="btn btn-success mx-3 btn-sm">
                                            Back
                                        </a>
                                    </div>
                                    <form action="{{ route('categories.store') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <h4>Save Category</h4>
                                            <input id="id" name="id" placeholder="Category ID"
                                                class="form-control" type="text" />
                                            <br />
                                            <input id="name" name="name"  placeholder="Category Name"
                                                class="form-control" type="text" />
                                            <br />
                                            <button type="submit" class="btn w-100 btn-success">Save Change</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content -->
            </main>
        </div>
    </div>

@endsection