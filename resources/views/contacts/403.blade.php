@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="error-template">
                        <h1>Oops!</h1>
                        <h2><i class="fa fa-frown-o fa-3" aria-hidden="true"></i></h2>
                        <div class="error-details">
                            Sorry, Requested page not found!
                        </div>
                        <div class="error-actions">
                            <a href="{{url('/contact')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>Take Me Home </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection