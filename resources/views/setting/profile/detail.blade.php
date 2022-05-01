@extends('setting.layout')

@section('content-child')
  <form id="setting-form" action="{{ route('setting.profile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card" id="settings-card">
      <div class="card-header">
        <h4>{{ $subtitle }}</h4>
      </div>
      <div class="card-body">
        <div class="form-group row align-items-center">
          <label for="name" class="form-control-label col-sm-3 text-md-right">Full Name</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old("name", auth()->user()->name) }}">
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="email" class="form-control-label col-sm-3 text-md-right">Email</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old("email", auth()->user()->email) }}">
            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="profile_picture" class="form-control-label col-sm-3 text-md-right">Profile Picture</label>
          <div class="col-sm-6 col-md-9">
            <div class="custom-file">
              <input type="file" name="profile_picture"
                class="custom-file-input @error('profile_picture') is-invalid @enderror" id="profile_picture"
                accept="image/*">
              <label class="custom-file-label">Choose File</label>
            </div>
            <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
            @error('profile_picture')
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
