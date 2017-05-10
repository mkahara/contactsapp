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
                    <div class="panel-heading">My Contacts</div>

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
                                    <td>{{ link_to_route('contact.show',$contact->name,[$contact->id]) }}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['contact.destroy',$contact->id],'method'=>'DELETE')) !!}
                                        {{ link_to_route('contact.show','Open',[$contact->id],['class'=>'btn btn-info']) }}
                                            |
                                        {{ link_to_route('contact.edit','Edit',[$contact->id],['class'=>'btn btn-primary']) }}
                                            |
                                            {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>

                {{ link_to_route('contact.create','Add new contact',null,['class'=>'btn btn-success']) }}

            </div>
        </div>
    </div>
@endsection
