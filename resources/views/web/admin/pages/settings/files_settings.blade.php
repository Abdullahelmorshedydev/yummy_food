@extends('web.admin.app')

@section('title', 'Files Settings')

@section('pageHeader', 'Files Settings')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Files Settings Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.settings.files.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="logo" class="custom-file-input" id="logo">
                                    <label class="custom-file-label" for="logo">Choose file</label>
                                </div>
                            </div>
                            @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="favicon">Favicon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="favicon" class="custom-file-input" id="favicon">
                                    <label class="custom-file-label" for="favicon">Choose file</label>
                                </div>
                            </div>
                            @error('favicon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="footer_banner">Footer Banner</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="footer_banner" class="custom-file-input" id="footer_banner">
                                    <label class="custom-file-label" for="footer_banner">Choose file</label>
                                </div>
                            </div>
                            @error('footer_banner')
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
