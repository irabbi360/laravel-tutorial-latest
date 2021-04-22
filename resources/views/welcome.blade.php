@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Laravel Multiple File Upload') }}</div>

                    <div class="card-body">
                        <!--                    error message-->
                        @if(count($errors) > 0)
                            <div class="alert alert-danger alert-block">
                                <strong>Sorry!</strong> There were more problems.
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif


                        <form action="{{ route('filesUpload') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group xpress control-group lst increment" >
                                <input type="file" name="filenames[]" class="myfrm form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button">Add</button>
                                </div>
                            </div>
                            <div class="clone d-none">
                                <div class="xpress control-group lst input-group" style="margin-top:10px">
                                    <input type="file" name="filenames[]" class="myfrm form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

<script>
    $(document).ready(function () {
        // increment upload
        $('.btn-success').click(function () {
            var htmlData = $('.clone').html();
            $('.increment').after(htmlData);
        });
        //remove input
        $('body').on('click', '.btn-danger', function () {
           $(this).parents('.xpress').remove();
        });

    })
</script>
@endsection






