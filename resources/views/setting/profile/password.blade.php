@extends('setting.layout')

@section('content-child')
  <form id="setting-form" action="{{ route('setting.password.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card" id="settings-card">
      <div class="card-header">
        <h4>{{ $subtitle }}</h4>
      </div>
      <div class="card-body">
        <div class="form-group row align-items-center">
          <label for="current_password" class="form-control-label col-sm-3 text-md-right">Current Password</label>
          <div class="col-sm-6 col-md-9">
            <input type="password" name="current_password"
              class="form-control @error('current_password') is-invalid @enderror" id="current_password">
            @error('current_password')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="password" class="form-control-label col-sm-3 text-md-right">New Password</label>
          <div class="col-sm-6 col-md-9">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
              id="password">
            @error('password')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="password_confirmation" class="form-control-label col-sm-3 text-md-right">Confirm Password</label>
          <div class="col-sm-6 col-md-9">
            <input type="password" name="password_confirmation"
              class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
            @error('password_confirmation')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div>
      <div class="card-footer bg-whitesmoke text-md-right">
        <button class="btn btn-primary" type="submit">Save Changes</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
      </div>
    </div>
  </form>
@endsection
