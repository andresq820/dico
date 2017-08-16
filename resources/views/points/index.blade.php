@extends ('layouts.master')

@section('title')
Points
@endsection

@section('link')
    <link href="{{ URL::to('/template/points/point.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">
	<div class="row">

		<section class="content">
			<h1>Table Filter</h1>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="pagado">Empleados</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
							    <thead>
                                    <tr>
                                        <th>Select</th>
							            <th>image</th>
							            <th>Name</th>
							            <th>Idea</th>
							            <th>Question</th>
							            <th>Challenge</th>
							            <th>Approved</th>
                                        <th>Answer</th>       
                                        <th>Solution</th>       
                                        <th>Comment</th>
                                        <th>Like</th>
                                        <th>Total Points</th>       
                                    </tr>
							        
							    </thead>
								<tbody>
									<tr data-status="pagado" style="text-align:center;">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>

										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
											</div>
										</td>
										
										<td>Andres Quintero</td>
										
										<td>90</td>
										<td>50</td>
										<td>105</td>
										<td>30</td>
										<td>65</td>
										<td>80</td>
										<td>25</td>
										<td>10</td>
										<td>455</td>
									</tr>
									
									<tr data-status="pendiente" style="text-align:center;">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>

										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
											</div>
										</td>
										
										<td>Charles Smith</td>
										
										<td>20</td>
										<td>70</td>
										<td>10</td>
										<td>305</td>
										<td>90</td>
										<td>15</td>
										<td>10</td>
										<td>15</td>
										<td>535</td>
									</tr>
									
									<tr data-status="cancelado" style="text-align:center;">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>

										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
											</div>
										</td>
										
										<td>John Doe</td>
										
										<td>100</td>
										<td>75</td>
										<td>95</td>
										<td>45</td>
										<td>50</td>
										<td>30</td>
										<td>50</td>
										<td>25</td>
										<td>470</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</div>
</div>

@section('script')
    <script src="{{ URL::to('/template/points/point.js') }}"></script>
@endsection  

@endsection


