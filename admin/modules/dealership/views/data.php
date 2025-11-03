<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li>
		<li><a href="javascript:void(0)">Dealership</a></li>
	</ol>
</div>
<div class="col-sm-12 well">
	<div class="table_horizontal">
		<div class="row">
			<div class="col-12">
				<div class="input-group custom_addon">
					<div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;">
						<i class="fa fa-search"></i>
					</div>
					<input type="text" ng-model="search_text" placeholder="Search here...">
				</div>
			</div>
		</div>
	</div>
	<div class="table-data">
		<div class="table-responsive-custom">
			<table class="table table-hover">
				<thead>
					<tr class="active">
						<th>Sl No.</th>
						<th>Firm Name</th>
						<th>Propiertor Name/Partnership</th>
						<th>Address</th>
						<th>Pincode</th>
						<th>Phone No</th>
						<th>Pan No</th>
						<th>GST</th>
						<th style="width:85px">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10">
						<td>{{$index+1}}</td>
						<td>{{y.f_name}}</td>
						<td>{{y.p_name}}</td>
						<td>{{y.address}}</td>
						<td>{{y.pincode}}</td>
						<td>{{y.p_no}}</td>
						<td>{{y.pan}}</td>
						<td>{{y.gst}}</td>
						<td>
							<a href="javascript:void(0)" style="color:red" ng-click="delete_data(y.d_id)">
								<span class="fa fa-trash fa-2x"></span>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-sm-12">
		<dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)"
			template-url="app/pagination"></dir-pagination-controls>
	</div>
</div>

<style>
	.table-responsive-custom {
		width: 100%;
		overflow-x: auto;
		-webkit-overflow-scrolling: touch;
	}

	.table-responsive-custom table {
		min-width: 1000px;
	}
</style>