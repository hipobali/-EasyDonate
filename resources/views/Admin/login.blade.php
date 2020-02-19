@include('layout.admin.meta')

<div class="container h-100">
  <div class="d-flex justify-content-center h-100">
    <div class="user_card">
      <div class="d-flex justify-content-center">
        <div class="brand_logo_container">
          <img src="{{ url('dsh/images/admin-logo.png') }}" class="brand_logo" alt="Logo">
        </div>
      </div>
          @if(session()->has('message'))
              <small class="alert alert-danger" style="color:red;">
                  {{ session()->get('message') }}
              </small>
          @endif
      <div class="d-flex justify-content-center form_container">
        <form method="post" action="dashboard">
          {{csrf_field()}}
          <div class="input-group mb-3">
            <div class="col-md-12">
              @if ($errors->has('email'))
                  <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
              @endif
            </div>
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="email" name="email" class="form-control input_user" value="{{ old('email') }}" placeholder="Email">
          </div>
          <div class="input-group mb-2">
            <div class="col-md-12">
              @if ($errors->has('password'))
                  <small id="emailHelp" class="form-text text-danger">{{ $errors->first('password') }}</small>
              @endif
            </div>
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password">
          </div>
          {{-- <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customControlInline">
              <label class="custom-control-label" for="customControlInline">Remember me</label>
            </div>
          </div> --}}
          <div class="d-flex justify-content-center mt-4 login_container">
            <input type="submit" class="btn login_btn" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@include('layout.admin.footer')