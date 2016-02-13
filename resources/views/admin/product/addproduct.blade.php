@include('admin.common.header')
@include('admin.common.leftsidebar')
	{!! Html::style('admintheme/plugins/datatables/dataTables.bootstrap.css') !!}
	
     <!-- blueimp Gallery styles -->
	 {!! Html::style('imageupload/css/blueimp-gallery.min.css') !!}
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	 {!! Html::style('imageupload/css/jquery.fileupload.css') !!}
	 {!! Html::style('imageupload/css/jquery.fileupload-ui.css') !!}
	 <!-- Select2 -->
	  {!! Html::style('admintheme/plugins/select2/select2.min.css') !!}
	  <!-- iCheck for checkboxes and radio inputs -->
	  {!! Html::style('admintheme/plugins/iCheck/all.css') !!}
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<noscript> {!! Html::style('imageupload/css/jquery.fileupload-noscript.css') !!}</noscript>	
	<noscript>{!! Html::style('imageupload/css/jquery.fileupload-ui-noscript.css') !!}</noscript>

     
	 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Product
            <small>Add</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Product</li>
          </ol>
        </section>
		<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
			{!! Form::open(array('url' => '/product/store','method'=>'post','class'=>'form-horizontal','id'=>'fileupload', 'files'=>true)) !!}
				<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Enter Product Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        {!! Form::text('name', '',array('class'=>'form-control','placeholder'=>'Product Name','required'=>true)) !!}
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Category</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="category[]" multiple="multiple" data-placeholder="Select a Category" style="width:100%" >
						  @foreach($category as $cat)
							<option value="{!! $cat->id !!}">{!! $cat->name !!}</option>
						  @endforeach
						</select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Food Type</label>
                      <div class="col-sm-10">
						{!! Form::select('foodtype[]', array(
							'breakfast'=>'Breakfast',
							'lunch'=>'Lunch',
							'snacks'=>'Snacks & Fast Food',
							'dinner'=>'Dinner'), 
							null,['multiple' => true,'class'=>'form-control select2','placeholder'=>'Select Food Type']); !!}
                      </div>
                    </div>
                  </div><!-- /.box-body -->
					
					
			  
              </div>
			  <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Enter Other Product Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
                      <div class="col-sm-10">
                        {!! Form::text('price', '',array('class'=>'form-control','placeholder'=>'Price','required'=>true)) !!}
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Stock Status</label>
                      <div class="col-sm-10">
                        <label>
							<input type="radio" name="is_stock" value="1" class="minimal" checked>
							 In Stock
						</label>
						<label>
						  <input type="radio" name="is_stock" value="0" class="minimal">
						   Out Stock
						</label>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-10">
                        <label>
							<input type="radio" name="is_enable" value="1" class="minimal" checked>
							 Enable
						</label>
						<label>
						  <input type="radio" name="is_enable" value="0" class="minimal">
						   Disable
						</label>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
				 
              </div>
			  <div class="box box-info">
				<div class="box-header">
				  <h3 class="box-title">Quick Overview<small></small></h3>
				  <!-- tools box -->
				  
				</div><!-- /.box-header -->
				<div class="box-body pad">
				  
					<textarea id="editor1" name="short_description" rows="5" cols="80" placeholder="Short Description">
										
					</textarea>
				  
				</div>
			  </div><!-- /.box -->
			  <div class="box box-info">
				<div class="box-header">
				  <h3 class="box-title">Product Description<small></small></h3>
				  <!-- tools box -->
				
				</div><!-- /.box-header -->
				<div class="box-body pad">
				  
					<textarea id="editor2" name="full_description" rows="10" cols="80" placeholder="Full Description">
									
					</textarea>
				
				</div>
			  </div><!-- /.box -->
			  
			 
             <div class="box box-info">
				<div class="box-header with-border">
                  <h3 class="box-title">Upload Product Images</h3>
                </div><!-- /.box-header -->
				<div class="box-body">
					<!-- The file upload form used as target for the file upload widget -->
					
						<!-- Redirect browsers with JavaScript disabled to the origin page -->
						<noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
						<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
						<div class="row fileupload-buttonbar">
							<div class="col-lg-7">
								<!-- The fileinput-button span is used to style the file input field as button -->
								<span class="btn btn-success fileinput-button">
									<i class="glyphicon glyphicon-plus"></i>
									<span>Add files...</span>
									<input type="file" name="files[]" multiple>
								</span>
								<button type="submit" class="btn btn-primary start">
									<i class="glyphicon glyphicon-upload"></i>
									<span>Start upload</span>
								</button>
								<button type="reset" class="btn btn-warning cancel">
									<i class="glyphicon glyphicon-ban-circle"></i>
									<span>Cancel upload</span>
								</button>
								<button type="button" class="btn btn-danger delete">
									<i class="glyphicon glyphicon-trash"></i>
									<span>Delete</span>
								</button>
								<input type="checkbox" class="toggle">
								<!-- The global file processing state -->
								<span class="fileupload-process"></span>
							</div>
							<!-- The global progress state -->
							<div class="col-lg-5 fileupload-progress fade">
								<!-- The global progress bar -->
								<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar progress-bar-success" style="width:0%;"></div>
								</div>
								<!-- The extended global progress state -->
								<div class="progress-extended">&nbsp;</div>
							</div>
						</div>
						<!-- The table listing the files available for upload/download -->
						<table role="presentation" class="table table-striped">
							<thead>
								<tr>
									<th>Preview</th>
									<th>Name</th>
									<th>Size</th>
									<th>Action</th>
									<th>Base Image</th>
									<th>Small Image</th>
									<th>Thumbnail</th>
								</tr>
							</thead>
							<tbody class="files"></tbody>
						</table>
					
				</div>
				 <div class="box-footer">
					{!! Form::reset('Clear',array('class'=>'btn btn-default')) !!}
					{!! Form::submit('Add Product',array('class'=>'btn btn-info pull-right')) !!}
                  </div><!-- /.box-footer -->
			 </div>
			
			  <div class="box box-info">
				<div class="box-body">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Demo Notes</h3>
						</div>
						<div class="panel-body">
							<ul>
								<li>The maximum file size for uploads in this demo is <strong>999 KB</strong> </li>
								<li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed.</li>
								<li>Uploaded files will be deleted automatically after <strong>5 minutes or less</strong> (demo files are stored in memory).</li>
								
							</ul>
						</div>
					</div>

				<!-- The blueimp Gallery widget -->
				<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
					<div class="slides"></div>
					<h3 class="title"></h3>
					<a class="prev">‹</a>
					<a class="next">›</a>
					<a class="close">×</a>
					<a class="play-pause"></a>
					<ol class="indicator"></ol>
				</div>
				<!-- The template to display files available for upload -->
				<script id="template-upload" type="text/x-tmpl">
				{% for (var i=0, file; file=o.files[i]; i++) { %}
					<tr class="template-upload fade">
						<td>
							<span class="preview"></span>
						</td>
						<td>
							<p class="name">{%=file.name%}</p>
							<strong class="error text-danger"></strong>
						</td>
						<td>
							<p class="size">Processing...</p>
							<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
						</td>
						<td>
							{% if (!i && !o.options.autoUpload) { %}
								<button class="btn btn-primary start" disabled>
									<i class="glyphicon glyphicon-upload"></i>
									<span>Start</span>
								</button>
							{% } %}
							{% if (!i) { %}
								<button class="btn btn-warning cancel">
									<i class="glyphicon glyphicon-ban-circle"></i>
									<span>Cancel</span>
								</button>
							{% } %}
						</td>
					</tr>
				{% } %}
				</script>
				<!-- The template to display files available for download -->
				
				<script id="template-download" type="text/x-tmpl">
				
				{% for (var i=0, file; file=o.files[i]; i++) { %}
					<tr class="template-download fade">
						<td>
							<span class="preview">
								{% if (file.thumbnailUrl) { %}
									<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
								{% } %}
							</span>
						</td>
						<td>
							<p class="name">
								{% if (file.url) { %}
									<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
									<input type="hidden" name="image[]" value="{%=file.name%}"/>
								{% } else { %}
									<span>{%=file.name%}</span>
								{% } %}
							</p>
							{% if (file.error) { %}
								<div><span class="label label-danger">Error</span> {%=file.error%}</div>
							{% } %}
						</td>
						<td>
							<span class="size">{%=o.formatFileSize(file.size)%}</span>
						</td>
						<td>
							{% if (file.deleteUrl) { %}
								<button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
									<i class="glyphicon glyphicon-trash"></i>
									<span>Delete</span>
								</button>
								<input type="checkbox" name="delete" value="1" class="toggle">
								
							{% } else { %}
								<button class="btn btn-warning cancel">
									<i class="glyphicon glyphicon-ban-circle"></i>
									<span>Cancel</span>
								</button>
							{% } %}
						</td>
						<td>
							<input type="hidden" name="baseimage[]" value="0"/>
							<input type="radio" name="baseimage[]" value="1" class="toggle" >
						</td>
						<td>
							<input type="hidden" name="smallimage[]" value="0"/>
							<input type="radio" name="smallimage[]" value="1" class="toggle" >
						</td>
						<td>
							<input type="hidden" name="thumbimage[]" value="0"/>
							<input type="radio" name="thumbimage[]" value="1" class="toggle" >
						</td>
					</tr>
					
				{% } %}
				</script>
				</div>
				
			 </div>
            </div><!-- /.col -->
			
			 {!! Form::close() !!}
          </div><!-- /.row -->
		 
        </section><!-- /.content -->
        
		
      </div><!-- /.content-wrapper -->
     
@include('admin.common.footer')
{!! Html::script('imageupload/js/vendor/jquery.ui.widget.js') !!}
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<!-- The Templates plugin is included to render the upload/download listings -->
{!! Html::script('imageupload/js/tmpl.min.js') !!}
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
{!! Html::script('imageupload/js/load-image.all.min.js') !!}
<!-- blueimp Gallery script -->
{!! Html::script('imageupload/js/jquery.blueimp-gallery.min.js') !!}
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
{!! Html::script('imageupload/js/jquery.iframe-transport.js') !!}
<!-- The basic File Upload plugin -->
{!! Html::script('imageupload/js/jquery.fileupload.js') !!}
<!-- The File Upload processing plugin -->
{!! Html::script('imageupload/js/jquery.fileupload-process.js') !!}
<!-- The File Upload image preview & resize plugin -->
{!! Html::script('imageupload/js/jquery.fileupload-image.js') !!}
<!-- The File Upload validation plugin -->
{!! Html::script('imageupload/js/jquery.fileupload-validate.js') !!}
<!-- The File Upload user interface plugin -->
{!! Html::script('imageupload/js/jquery.fileupload-ui.js') !!}
<!-- The main application script -->
{!! Html::script('imageupload/js/main.js') !!}
<!-- Select2 -->
{!! Html::script('admintheme/plugins/select2/select2.full.min.js') !!}
<!-- iCheck 1.0.1 -->
{!! Html::script('admintheme/plugins/iCheck/icheck.min.js') !!}

<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
{!! Html::script('imageupload/js/cors/jquery.xdr-transport.js') !!}
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
 <script>
  $(function () {
	  $(".select2").select2();
	  
	  //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace('editor1');
	CKEDITOR.replace('editor2');
	//bootstrap WYSIHTML5 - text editor
	
  });
</script>