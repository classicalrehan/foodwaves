@include('admin.common.header')
@include('admin.common.leftsidebar')
	{!! Html::style('admintheme/plugins/datatables/dataTables.bootstrap.css') !!}
     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Order
            <small>List</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Order List</li>
          </ol>
        </section>
		@if(Session::has('error'))
			<section class="content-header">	
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-ban"></i> Alert!</h4>
					Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
			  </div>
			</section>  
		@endif
		@if(Session::has('sucess'))
			
			<section class="content-header">
				<div class="callout callout-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>	<i class="icon fa fa-check"></i> Sucess!</h4>
					{{Session::get('sucess')}}
				</div>	
			</section>
		@endif
		<section class="content-header" id="clientDeleteResponse" style="display:none;">
				<div class="callout callout-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check"></i> Sucess!</h4>
					Page deleted successfully!
				</div>	
			</section>
		<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
				
				  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Item</th>
                          <th>Status</th>
                          <th>Popularity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="{!! url('/order/show')!!}">OR9842</a></td>
                          <td>Call of Duty IV</td>
                          <td><span class="label label-success">Shipped</span></td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="{!! url('/order/show')!!}">OR1848</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class="label label-warning">Pending</span></td>
                          <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href="{!! url('/order/show')!!}">OR7429</a></td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="label label-danger">Delivered</span></td>
                          <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="{!! url('/order/show')!!}">OR7429</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class="label label-info">Processing</span></td>
                          <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="{!! url('/order/show')!!}">OR1848</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class="label label-warning">Pending</span></td>
                          <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href="{!! url('/order/show')!!}">OR7429</a></td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="label label-danger">Delivered</span></td>
                          <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="{!! url('/order/show')!!}">OR9842</a></td>
                          <td>Call of Duty IV</td>
                          <td><span class="label label-success">Shipped</span></td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                      </tbody>
					  <tfoot>
                        <tr>
                          <th>Order ID</th>
                          <th>Item</th>
                          <th>Status</th>
                          <th>Popularity</th>
                        </tr>
                      </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->
 <!-- Modal -->
  <div class="modal fade modal-primary" id="clientDeleteModel" role="dialog">
    <div class="modal-dialog">
	<form method="post">	
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure you want to delete this item?</h4>
		  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		  <input type="hidden" id="id"/>
        </div>
        <div class="modal-body">
          <p>Are you absolutely sure you want to delete. There is no undo for this page?</p>
        </div>
        <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-primary" id="deleteCategory">Yes</button>
        </div>
      </div>
     </form> 
    </div>
  </div>   
@include('admin.common.footer')
<!-- DataTables -->
{!! Html::script('admintheme/plugins/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('admintheme/plugins/datatables/dataTables.bootstrap.min.js') !!}

<script>
      $(function () {
        $("#example1").DataTable();
        $('#clientDeleteModel').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  $("#id").val(id);
		  var modal = $(this)
		  //modal.find('.modal-title').text('New message to ' + recipient)
		  //modal.find('.modal-body input').val(recipient)
		})
		$("#deleteCategory").click(function(){
			var id = $("#id").val();
			$token=$('input[name=_token]').val();
			 var route = "{{ url('page/destroy') }}";
			$.ajax({
			  url: route,
			  type: "post",
			  data: {'id':id, '_token': $('input[name=_token]').val()},
			  success: function(data){
				$("#"+id).remove();  
				$("#clientDeleteResponse").show();
			  }
			});  

			$('#clientDeleteModel').modal('hide');
		})
      });
    </script>