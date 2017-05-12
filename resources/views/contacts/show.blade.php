@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">



                <div class="panel panel-default">
                    <div class="panel-heading">{{ $contact->name }}</div>

                    <div class="panel-body">

                        {{ $contact->phone }}
                        {{--{{ $age }}--}}
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
