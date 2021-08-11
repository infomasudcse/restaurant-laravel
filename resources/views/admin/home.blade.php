@extends('dashboard')

@section('content')

<div class="card corona-gradient-card">
    <div class="card-body py-0 px-0 px-sm-3">
    <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-xl-12">
        <h3> Welcome {{ Auth::user()->name }} </h3>
        </div>
        
    </div>
    </div>
</div>
</div>
@endsection              