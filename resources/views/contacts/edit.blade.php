@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Contact </div>

                    <div class="panel-body">

                        {!! Form::model($contact,array('route'=>['contact.update',$contact->id],'method'=>'PUT')) !!}
                        <div class="col-md-5">
                            <div class="form-group">
                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email','Email Address') !!}
                                {!! Form::text('email',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone','Phone Number') !!}
                                {!! Form::text('phone',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address','Address') !!}
                                {!! Form::text('address',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-offset-1">
                            <div class="form-group">
                                {!! Form::label('organization','Organization') !!}
                                {!! Form::text('organization',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('dob','Date of Birth') !!}
                                {!! Form::date('dob',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('avatar','Photo') !!}
                                {!! Form::file('avatar',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <p>&nbsp;</p>
                                {!! Form::hidden('user_id',null,['class'=>'form-control']) !!}
                                <input type="hidden" name="_token" value="{{csrf_token()}}" >
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                            </form>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>

                @if($errors->any())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@endsection
