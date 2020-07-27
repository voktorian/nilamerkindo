@extends('/layout/main')

@section('title', 'CONTACT US | PT Nila Merkindo Utama')

@section('container')
    <div class="container-fluid" id="conContact">
        <h1>CONTACT US Today!</h1>
        <h5>We'd like to hear from you!</h5>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <div>Email &nbsp; &nbsp; :</div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <div>solution@nilamerkindo.co.id</div>
                        <div>relation@nilamerkindo.co.id</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div>Website :</div>
                </div>
                <div class="col-md-4">
                    <div>www.nilamerkindo.co.id</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div>Address :</div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <div>Harapan Baru Regency Blok G.7,</div>
                        <div>Bekasi 17133 West Java, Indonesia</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container box" id="conEmail">
        <h4>Or Feel free to send us your inquiries or concerns using the form below:</h4><br/>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
        <form method="post" action="{{url('sendemail/send')}}" id="formEmail">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" value="" id="btnName"/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="" id="btnEmail"/>
            </div>
            <div class="form-group">
                <label>Mobile Phone</label>
                <input type="tel" name="mobilephone" class="form-control" value="" id="btnMobilePhone"/>
            </div>
            <div class="form-group">
                <label>Company</label>
                <input type="text" name="company" class="form-control" value="" id="btnCompany"/>
            </div>
            <div class="form-group">
                <label>Comment</label>
                <textarea name="comment" class="form-control" id="btnComment"></textarea>
            </div>
            <div class="form-group">
                <span>Submit Your Message:</span>
                <input type="submit" name="send" class="btn btn-info" value="Send" />
                <input type="reset" name="reset" class="btn btn-danger" value="Reset" id="btnReset">
            </div>
        </form>
    </div>
@endsection