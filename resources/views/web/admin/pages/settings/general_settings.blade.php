@extends('web.admin.app')

@section('title', 'General Settings')

@section('pageHeader', 'General Settings')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">General Settings Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.settings.general.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>General Settings</h3>
                        <div class="form-group">
                            <label for="site_name">Site Name</label>
                            <input type="text" value="{{ old('site_name', settings()->get('site_name')) }}"
                                name="site_name" class="form-control" id="site_name">
                            @error('site_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" value="{{ old('phone', settings()->get('phone')) }}" name="phone"
                                class="form-control" id="phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="{{ old('email', settings()->get('email')) }}" name="email"
                                class="form-control" id="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" value="{{ old('location', settings()->get('location')) }}" name="location"
                                class="form-control" id="location">
                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>About Us & Opening Hours</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="opening_hours_1">Openings Hours 1</label>
                                    <input type="text"
                                        value="{{ old('opening_hours_1', settings()->get('opening_hours_1')) }}"
                                        name="opening_hours_1" class="form-control" id="opening_hours_1">
                                    @error('opening_hours_1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="opening_hours_3">Openings Hours 3</label>
                                    <input type="text"
                                        value="{{ old('opening_hours_3', settings()->get('opening_hours_3')) }}"
                                        name="opening_hours_3" class="form-control" id="opening_hours_3">
                                    @error('opening_hours_3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="opening_hours_2">Openings Hours 2</label>
                                    <input type="text"
                                        value="{{ old('opening_hours_2', settings()->get('opening_hours_2')) }}"
                                        name="opening_hours_2" class="form-control" id="opening_hours_2">
                                    @error('opening_hours_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="opening_hours_4">Openings Hours 4</label>
                                    <input type="text"
                                        value="{{ old('opening_hours_4', settings()->get('opening_hours_4')) }}"
                                        name="opening_hours_4" class="form-control" id="opening_hours_4">
                                    @error('opening_hours_4')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_us">About Us</label>
                                    <textarea class="form-control" name="about_us" id="about_us"rows="5">
                                        {{ old('about_us', settings()->get('about_us')) }}
                                    </textarea>
                                    @error('about_us')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Contact Information</h3>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" value="{{ old('address', settings()->get('address')) }}" name="address"
                                class="form-control" id="address">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact_phone">Contact Phone</label>
                            <input type="text" value="{{ old('contact_phone', settings()->get('contact_phone')) }}"
                                name="contact_phone" class="form-control" id="contact_phone">
                            @error('contact_phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact_email">Contact Email</label>
                            <input type="email" value="{{ old('contact_email', settings()->get('contact_email')) }}"
                                name="contact_email" class="form-control" id="contact_email">
                            @error('contact_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
