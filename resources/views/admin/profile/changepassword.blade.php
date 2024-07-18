@extends('admin.layout.base')
@section('body')

    <section class="content">
      	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                         {!! Form::open(['route'=>'admin.changepassword.update','method'=>'put']) !!}
                                <div class="form-group">
                                    {!! Form::label('current_password', 'Old Password', ['class'=>'control-label']) !!}
                                    {!! Form::password('current_password', ['class'=>'form-control']) !!}
                                    @if($errors->has('current_password'))<p class="text-danger">{{ $errors->first('current_password') }}</p>@endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('new_password', 'New Password', ['class'=>'control-label']) !!}
                                    {!! Form::password('new_password', ['class'=>'form-control']) !!}
                                    @if($errors->has('new_password'))<p class="text-danger">{{ $errors->first('new_password') }}</p>@endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('new_password_confirmation', 'New Password Confirm', ['class'=>'control-label']) !!}
                                    {!! Form::password('new_password_confirmation', ['class'=>'form-control']) !!}
                                    @if($errors->has('new_password_confirmation'))<p class="text-danger">{{ $errors->first('new_password_confirmation') }}</p>@endif
                                </div>
                                <div class="form-group">
                                   <button class="btn btn-primary" type="submit">Change Password</button>
                                </div>
                            {!! Form::close() !!}
                    </div>
                </div>  
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection

@push('scripts')
 <script type="text/javascript">
function confirm_delete() {
  return confirm('are you sure?');
}
</script>

@endpush