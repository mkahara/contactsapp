@extends ('layouts.dashboard')
@section('page_heading','Add Contact')

@section('section')
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
    <div class="col-lg-5">
        <form role="form" name="createcontact" id="createcontact" method="POST" action="store">
            <div class="form-group">
                <label>Contact Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="contact_name" id="contact_name"
                required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="contact_email" id="contact_email"
                required>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter phone no." name="contact_phone" id="contact_phone"
                required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter Address." name="contact_address" id="contact_address"
                required>
            </div>
    </div>
    <div class="col-lg-5 col-md-offset-1">
            <div class="form-group">
                <label>Organization</label>
                <input type="text" class="form-control" placeholder="Enter Organization" name="contact_organization" id="contact_organization" required>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" class="form-control" placeholder="Choose DOB" name="contact_dob" id="contact_dob" required>
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="contact_avatar" id="contact_avatar">
            </div>
            <div class="form-group">
                <p>&nbsp;</p>
                <input type="hidden" name="status" value="1" >
                <input type="hidden" name="_token" value="{{csrf_token()}}" >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary pull-right" name="addnewcontact" id="addnewcontact" value="Add Contact">
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@stop