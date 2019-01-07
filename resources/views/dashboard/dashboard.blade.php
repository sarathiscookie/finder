@extends('dashboard.layouts.app')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Keyword Search</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Keyword Search
            </div>

            <div class="card-body">

                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Keyword">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Country">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Language">
                        </div>

                        <div class="col">
                            <button type="button" class="btn btn-primary">Primary</button>
                        </div>
                    </div>
                </form>

            </div>

            <div class="card-footer">
                <small class="text-muted">Search Result: None</small>
            </div>
        </div>



    </main>
@endsection
