@include('admin.common.header')
@include('admin.common.leftsidebar')
	{!! Html::style('admintheme/plugins/datatables/dataTables.bootstrap.css') !!}
     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
            <small>Edit</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit User</li>
          </ol>
        </section>
		@if(Session::has('error'))
			<section class="content-header">	
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-ban"></i> Alert!</h4>
					Error in adding new user. Please try again later!

			  </div>
			</section>  
		@endif
		@if(Session::has('sucess'))
			{{Session::get('sucess')}}
		@endif
		<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
				<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit User Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('url' => '/user/update','method'=>'post','class'=>'form-horizontal')) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                      <div class="col-sm-10">
                        {!! Form::text('name', $user['name'],array('class'=>'form-control','placeholder'=>'User Name','required'=>true)) !!}
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
						{!! Form::email('email', $user['email'],array('class'=>'form-control','placeholder'=>'Email','required'=>true)) !!}
						{!! Form::hidden('id', $user['id']) !!}
                      </div>
                    </div>
                    <!--<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
						{!! Form::password('password', $attributes = ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password','required'=>true])!!}
						{!! Form::hidden('id', $user['id']) !!}
                      </div>
                    </div>-->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
					{!! Form::reset('Clear',array('class'=>'btn btn-default')) !!}
					{!! Form::submit('Update User',array('class'=>'btn btn-info pull-right')) !!}
                  </div><!-- /.box-footer -->
                {!! Form::close() !!}
              </div>
             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->
     
@include('admin.common.footer')
<!-- DataTables -->
{!! Html::script('admintheme/plugins/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('admintheme/plugins/datatables/dataTables.bootstrap.min.js') !!}

<script>
      $(function () {
        $("#example1").DataTable();
        
      });
    </script>