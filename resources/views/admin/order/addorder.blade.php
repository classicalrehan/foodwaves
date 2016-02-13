@include('admin.common.header')
@include('admin.common.leftsidebar')
     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Page
            <small>Add</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Page</li>
          </ol>
        </section>
		@if(Session::has('error'))
			<section class="content-header">	
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-ban"></i> Alert!</h4>
					Error in adding new page. Please try again later!

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
                  <h3 class="box-title">Enter Page Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('url' => '/page/store','method'=>'post','class'=>'form-horizontal')) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                      <div class="col-sm-10">
                        {!! Form::text('title', '',array('class'=>'form-control','placeholder'=>'Page Title','required'=>true)) !!}
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-10">
						<textarea id="editor1" name="description" rows="5" cols="80" placeholder="Short Description">
										
					</textarea>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
					{!! Form::reset('Clear',array('class'=>'btn btn-default')) !!}
					{!! Form::submit('Add Page',array('class'=>'btn btn-info pull-right')) !!}
                  </div><!-- /.box-footer -->
                {!! Form::close() !!}
              </div>
             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->
     
@include('admin.common.footer')
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
 <script>
  $(function () {
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace('editor1');
	CKEDITOR.replace('editor2');
	//bootstrap WYSIHTML5 - text editor
	
  });
</script>