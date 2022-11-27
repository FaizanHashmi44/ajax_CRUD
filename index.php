<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Ajax</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {  
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 40px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}
	#search{
		width: 55%;
		margin: 10px 235px;
	}
	#addEmp{
		width: 288px;
	}
</style>
</head>
  <body>
  <div class="container">
      <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-6">
                      <h2>Product <b>Table</b></h2>
                  </div>
                  <div class="col-sm-6">
					<input type="text" id="search" class="form-control" placeholder="Search something">
                      <a href="#addEmployeeModal" class="btn btn-success" id="addEmp" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>						
                  </div>
              </div>
          </div> 
          <table class="table table-striped table-hover"> 
          <thead>
          <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th>img</th>
              <th>Edit/Delete</th>
          </tr>
      </thead> 
      <tbody id="table_data">
     
      </tbody>
	  </table> 
	  <div class="clearfix">
				<ul class="pagination">
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
				</ul>
			</div>
		</div>
	
	</div>
      </div>


	<!-- Add new Employee  -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" id="submit_form" >
					<div class="modal-header">
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" id="title" name="title" required>
							<p id="msg"></p>
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" class="form-control" id="desc" name="desc" required>
							<p id="dess"></p>
						</div>
						<div class="form-group">
							<label>Price</label>
							<input type="number" class="form-control" id="price" name="price" required>
							<p id="pric"></p>
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" class="form-control file_input" id="image" name="image" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" name="submit" id="btn-save" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="image_preview"></div>


	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" id="edit_form">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
			    <input type="hidden" name="edit_value" id="edit_hide">
					<div class="form-group">
						<label>Title</label>
						<input type="text" class="form-control" name="title"  id="edit_title">
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control"  name="description" id="edit_description">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="number" class="form-control"  name="price"  id="edit_price">
					</div>
					<div class="form-group">
						<label>Image</label> <br>
						<img id="preview_image" width="200px" alt="No image found">
						<input type="hidden" id="hS_image" name="hid-image">
						<input type="file" class="form-control" name="image" id="edit_image">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" id="update_save_button" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" int	egrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
<script>
$(document).ready(function(){

	
	                                //**********Ajax Start***********//
//**********Load Function***********//
	function load_data(){ 
            $.ajax({
                url: "header.php",  
                type: "POST",
                success: function(data){
                    $('#table_data').html(data);
                }
        });
    }
    load_data();
//**********Insert Data***********//
	$('#submit_form').on('submit', function(e){
		e.preventDefault();
		var formdata = new FormData(this);
		$.ajax({
			url: "insert.php",
			type: "POST",
			data: formdata,
			contentType: false,                                                                         //we can use multipart/form-data
			processData: false,                                                                         //processdata tell us k ye data string ki form me nhi he
			success: function(data){
				console.log(data);
				load_data();
				var data2 = JSON.parse(data);
				console.log(data2)
				if(data2=="Successfully inserted"){
					toastr.success('Submitted', 'Your record has been Added', { timeOut: 3000 })
				}
				else{
					if(data2.title!=''){
					$('#msg').html(data2.title);
				}
				if(data2.description!=''){
					$('#dess').html(data2.description);
				}
				if(data2.price!=''){
					$('#pric').html(data2.price);
				}
				}
				}
			
		});
		this.reset();
	});
//**********Delete Data***********//
	$(document).on('click', '.delete_btn', function(){

        var productID = $(this).data('id');
		console.log(productID);
        var element = this;
        $.ajax({
            url: "delete.php",   
            type: "POST",
            data: {id: productID},
            success: function(data){
				console.log(data);
             $(element).closest("tr").remove();
            } 
        });
    });
	//**********Edit Data***********//
    $(document).on("click", ".edit_btn", function(){
     var producttId = $(this).data("eid");
	 $('#edit_hide').val(producttId);

	$.ajax({
		url: "edit.php",
		type: "POST",
		data: {id: producttId},
		success: function(data){
			console.log(data);
			var data1 = JSON.parse(data)
			$('#edit_title').val(data1.title);
			$('#edit_description').val(data1.description);
			$('#edit_price').val(data1.price);  
			$('#hS_image').val(data1.image);  
			$('#preview_image').attr('src', "images/"+data1.image);
		}
	});
	//
	//
    });
		//**********Update Data***********//
	$('#edit_form').on('submit', function(e){
	e.preventDefault(); 
	//var img_src = $('#preview_image').attr('src');
	// $('#hS_image').val(img_src);
	var editform = new FormData(this);  
	$.ajax({
		url: "update.php",
		type: "POST", 
		data: editform, 
		contentType: false,                                                                                //we can use multipart/form-data
		processData: false,
		success: function(data){
		console.log(data);
		load_data();
		}
	});
    });
		//**********Search Data***********//
		$('#search').on('keyup', function(){
			var search_value = $(this).val();

			$.ajax({
				url: "search.php",
				type: "POST",
				data: {searchID: search_value},
				success: function(data){
					$('#table_data').html(data);
				}
			});
		});

});
</script>
</body>
</html> 