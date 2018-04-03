@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Car</div>

                <div class="panel-body">
                   <form method="post" action="{{ action('CarController@store') }}">
                        <div class="form-group">
                         <input class="form-control" type="text" name="make" placeholder="Vyrobce">
                        </div>

                        <div class="form-group">
                         <input class="form-control" type="text" name="model" placeholder="Model">
                        </div>

                        <div class="form-group">
                         <input class="form-control" type="date" name="produced_on" placeholder="Vyrobeno">
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-primary" value="Add">
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection