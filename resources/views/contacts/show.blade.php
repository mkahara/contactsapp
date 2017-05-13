@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{ $contact->name }}</h4></div>
                    <div class="panel-body">

                        {{--first row--}}
                        <div class="row contact-first-row contact-center-items">
                        <div class="col-md-4">
                            <h5 class="contact-glyphicon-title">Phone</h5><span class="glyphicon glyphicon-phone contact-glyphicons" aria-hidden="true"></span><h4>{{ $contact->phone }}</h4>
                        </div>
                        <div class="col-md-4">
                            <h5 class="contact-glyphicon-title">Email</h5><span class="glyphicon glyphicon-envelope contact-glyphicons" aria-hidden="true"></span><h4>{{ $contact->email }}</h4>
                        </div>
                        <div class="col-md-4">
                            <h5 class="contact-glyphicon-title">Address</h5><span class="glyphicon glyphicon-map-marker contact-glyphicons" aria-hidden="true"></span><h4>{{ $contact->address }}</h4>
                        </div>
                        </div>
                        {{--end row--}}

                        {{--second row--}}
                        <div class="row contact-center-items">
                            <div class="col-md-4">
                                <h5 class="contact-glyphicon-title">Organization</h5><span class="glyphicon glyphicon-briefcase contact-glyphicons" aria-hidden="true"></span><h4>{{ $contact->organization }}</h4>
                            </div>
                            <div class="col-md-4">
                                <h5 class="contact-glyphicon-title">Age</h5><span class="glyphicon glyphicon-calendar contact-glyphicons" aria-hidden="true"></span><h4>{{ $age }}</h4>
                            </div>
                            <div class="col-md-4">
                                <span class="glyphicon glyphicon-circle-arrow-down export-to-vcard-glyphicon" aria-hidden="true"></span><h4><a href="restore/{{ $contact->id }}" class="btn btn-warning">Export to Vcard</a></h4>
                            </div>
                        </div>
                        {{--end row--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
