@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Laravel Resize Image Before Upload') }}</div>

                <div class="card-body">

                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    <img src="images/{{ Session::get('image') }}">
                    @endif


                    <form action="{{ route('imageUploadResize')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=row>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
