@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @elseif(Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">My Trash Can</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>
                                        <a href="restore/{{ $contact->id }}" class="btn btn-info">Restore</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
                {{$contacts->links()}}
            </div>
        </div>
    </div>
@endsection
