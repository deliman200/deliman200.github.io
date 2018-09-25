@extends('template.dashboard')

@section('title')
	<title> Home | {{ config('app.name') }}</title>
@endsection

@section('styles')
	<link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scheduler.min.css') }}" rel="stylesheet">
@endsection

@section('content')
	
	<div class="row pt-3" style="clear:both;">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="branchSelect1">Branch</label>
							    <select class="form-control" id="branchSelect1">
							      <option>Cebu</option>
							      <option>Dumaguete</option>
							      <option>Mactan</option>
							      <option>Bohol</option>
							      <option>Bacolod</option>
							    </select>
							  </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
							    <label for="transSelect1">Transmission</label>
							    <select class="form-control" id="transSelect1">
							      <option>All</option>
							      <option>Automatic</option>
							      <option>Manual</option>
							    </select>
							  </div>
						  </div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="rent-info row">
						<div class="col-md-4">
							<div class="card text-white bg-primary">
							  <div class="card-body">
							    <span>1000</span>
							    <small>Total Available Cars</small>
							  </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card text-white bg-secondary">
							  <div class="card-body">
							    <span>1000</span>
							    <small>Total Customers</small>
							  </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card text-white bg-success">
							  <div class="card-body">
							    <span>1000</span>
							    <small>Total Sales</small>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mt-5 mb-5">

					<ul class="nav nav-tabs mb-3" id="myTabHome" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="reserved-tab" data-toggle="tab" href="#reserved" role="tab" aria-controls="reserved" aria-selected="false">Today's Reservation</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="rentals-tab" data-toggle="tab" href="#rentals" role="tab" aria-controls="rentals" aria-selected="false">Upcoming Rentals</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="false">Pending Arrivals</a>
					  </li>
					</ul>

					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
						  	<div class="input-group col-md-6 pl-0 pb-3">
						      <input class="form-control py-2" type="search" value="search..." id="example-search-input">
						      <span class="input-group-append">
						        <button class="btn btn-outline-secondary" type="button">
						            <i class="fa fa-search"></i>
						        </button>
						      </span>
							</div>
							<div class="calendar" class="mt-3"></div>
						</div>
						<div class="tab-pane fade" id="reserved" role="tabpanel" aria-labelledby="reserved-tab"> 
						  	<div class="input-group col-md-6 pl-0 pb-3">
						      <input class="form-control py-2" type="search" value="search..." id="example-search-input">
						      <span class="input-group-append">
						        <button class="btn btn-outline-secondary" type="button">
						            <i class="fa fa-search"></i>
						        </button>
						      </span>
							</div>
							<div class="calendarReserve" class="mt-3"></div>
						</div>
						<div class="tab-pane fade" id="rentals" role="tabpanel" aria-labelledby="rentals-tab"> 
						  	<div class="input-group col-md-6 pl-0 pb-3">
						      <input class="form-control py-2" type="search" value="search..." id="example-search-input">
						      <span class="input-group-append">
						        <button class="btn btn-outline-secondary" type="button">
						            <i class="fa fa-search"></i>
						        </button>
						      </span>
							</div>
							<div class="calendarRentals" class="mt-3"></div>
						</div>
						<div class="tab-pane fade" id="arrival" role="tabpanel" aria-labelledby="arrival-tab"> 
						  	<div class="input-group col-md-6 pl-0 pb-3">
						      <input class="form-control py-2" type="search" value="search..." id="example-search-input">
						      <span class="input-group-append">
						        <button class="btn btn-outline-secondary" type="button">
						            <i class="fa fa-search"></i>
						        </button>
						      </span>
							</div>
							<div class="calendarArrivals" class="mt-3"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection

@section('scripts')
	
	<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('js/scheduler.min.js') }}"></script>
	<script type="text/javascript">

		$('.calendar').fullCalendar({
		    defaultView: 'timelineMonth',
		    header: {
		      left: 'prev,next',
		      center: 'title',
		      right: 'timelineDay,timelineWeek,timelineMonth'
		    },
		    resourceLabelText: 'Vehicle',
		    resources: [
						  { id: "1",title: "Toyota Hi Ace Grandia - MT"},
						  { id: "2",title: "Toyota Wigo - ATe"},
						  { id: "3",title: "Toyota Vios - AT"},
						  { id: "4",title: "Toyota Innova - AT"},
						  { id: "5",title: "Toyota Vios - AT" },
						  { id: "6",title: "Toyota Innova - MT" },
						  { id: "7",title: "Mitsubishi L300 - MT" },
						  { id: "8",title: "Toyota Altis - AT" },
						  { id: "9",title: "Toyota Wigo - MT" },
						  { id: "10",title: "Toyota Vios - MT" },
					   ],
		    events: [
		    			{ id: '1', resourceId: '1', start:'2018-09-2', end:'2018-09-21', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '2', resourceId: '2', start:'2018-09-3', end:'2018-09-20', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '3', resourceId: '3', start:'2018-09-4', end:'2018-09-19', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '4', resourceId: '4', start:'2018-09-5', end:'2018-09-18', title: 'Daaaaaaaah ! pinaghiraman mo ako tang ina ka PAK U', color:'#4c5567' },
					    { id: '5', resourceId: '5', start:'2018-09-6', end:'2018-09-17', title: 'Pak you ka, tang ina', color:'#4c5567' },
					    { id: '6', resourceId: '6', start:'2018-09-7', end:'2018-09-16', title: 'Yawaaa ka ! last nlng ka', color:'#4c5567' },
					    { id: '7', resourceId: '7', start:'2018-09-8', end:'2018-09-15', title: 'Gana uie nimal', color:'#4c5567' },
					    { id: '8', resourceId: '8', start:'2018-09-9', end:'2018-09-14', title: 'Piskot', color:'#4c5567' },
					    { id: '9', resourceId: '9', start:'2018-09-10', end:'2018-09-13', title: 'Two', color:'#4c5567' },
					    { id: '10', resourceId: '10', start:'2018-09-11', end:'2018-09-11', title: 'One', color:'#4c5567' }
		    		]
		});

		$('.calendarReserve').fullCalendar({
		    defaultView: 'timelineMonth',
		    header: {
		      left: 'prev,next',
		      center: 'title',
		      right: 'timelineDay,timelineWeek,timelineMonth'
		    },
		    resourceLabelText: 'Vehicle',
		    resources: [
						  { id: "1",title: "Toyota Hi Ace Grandia - MT"},
						  { id: "2",title: "Toyota Wigo - ATe"},
						  { id: "3",title: "Toyota Vios - AT"},
						  { id: "4",title: "Toyota Innova - AT"},
						  { id: "5",title: "Toyota Vios - AT" },
						  { id: "6",title: "Toyota Innova - MT" },
						  { id: "7",title: "Mitsubishi L300 - MT" },
						  { id: "8",title: "Toyota Altis - AT" },
						  { id: "9",title: "Toyota Wigo - MT" },
						  { id: "10",title: "Toyota Vios - MT" },
					   ],
		    events: [
		    			{ id: '1', resourceId: '1', start:'2018-09-2', end:'2018-09-21', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '2', resourceId: '2', start:'2018-09-3', end:'2018-09-20', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '3', resourceId: '3', start:'2018-09-4', end:'2018-09-19', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '4', resourceId: '4', start:'2018-09-5', end:'2018-09-18', title: 'Daaaaaaaah ! pinaghiraman mo ako tang ina ka PAK U', color:'#4c5567' },
					    { id: '5', resourceId: '5', start:'2018-09-6', end:'2018-09-17', title: 'Pak you ka, tang ina', color:'#4c5567' },
					    { id: '6', resourceId: '6', start:'2018-09-7', end:'2018-09-16', title: 'Yawaaa ka ! last nlng ka', color:'#4c5567' },
					    { id: '7', resourceId: '7', start:'2018-09-8', end:'2018-09-15', title: 'Gana uie nimal', color:'#4c5567' },
					    { id: '8', resourceId: '8', start:'2018-09-9', end:'2018-09-14', title: 'Piskot', color:'#4c5567' },
					    { id: '9', resourceId: '9', start:'2018-09-10', end:'2018-09-13', title: 'Two', color:'#4c5567' },
					    { id: '10', resourceId: '10', start:'2018-09-11', end:'2018-09-11', title: 'One', color:'#4c5567' }
		    		]
		});

		$('.calendarRentals').fullCalendar({
		    defaultView: 'timelineMonth',
		    header: {
		      left: 'prev,next',
		      center: 'title',
		      right: 'timelineDay,timelineWeek,timelineMonth'
		    },
		    resourceLabelText: 'Vehicle',
		    resources: [
						  { id: "1",title: "Toyota Hi Ace Grandia - MT"},
						  { id: "2",title: "Toyota Wigo - ATe"},
						  { id: "3",title: "Toyota Vios - AT"},
						  { id: "4",title: "Toyota Innova - AT"},
						  { id: "5",title: "Toyota Vios - AT" },
						  { id: "6",title: "Toyota Innova - MT" },
						  { id: "7",title: "Mitsubishi L300 - MT" },
						  { id: "8",title: "Toyota Altis - AT" },
						  { id: "9",title: "Toyota Wigo - MT" },
						  { id: "10",title: "Toyota Vios - MT" },
					   ],
		    events: [
		    			{ id: '1', resourceId: '1', start:'2018-09-2', end:'2018-09-21', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '2', resourceId: '2', start:'2018-09-3', end:'2018-09-20', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '3', resourceId: '3', start:'2018-09-4', end:'2018-09-19', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '4', resourceId: '4', start:'2018-09-5', end:'2018-09-18', title: 'Daaaaaaaah ! pinaghiraman mo ako tang ina ka PAK U', color:'#4c5567' },
					    { id: '5', resourceId: '5', start:'2018-09-6', end:'2018-09-17', title: 'Pak you ka, tang ina', color:'#4c5567' },
					    { id: '6', resourceId: '6', start:'2018-09-7', end:'2018-09-16', title: 'Yawaaa ka ! last nlng ka', color:'#4c5567' },
					    { id: '7', resourceId: '7', start:'2018-09-8', end:'2018-09-15', title: 'Gana uie nimal', color:'#4c5567' },
					    { id: '8', resourceId: '8', start:'2018-09-9', end:'2018-09-14', title: 'Piskot', color:'#4c5567' },
					    { id: '9', resourceId: '9', start:'2018-09-10', end:'2018-09-13', title: 'Two', color:'#4c5567' },
					    { id: '10', resourceId: '10', start:'2018-09-11', end:'2018-09-11', title: 'One', color:'#4c5567' }
		    		]
		});

		$('.calendarArrivals').fullCalendar({
		    defaultView: 'timelineMonth',
		    header: {
		      left: 'prev,next',
		      center: 'title',
		      right: 'timelineDay,timelineWeek,timelineMonth'
		    },
		    resourceLabelText: 'Vehicle',
		    resources: [
						  { id: "1",title: "Toyota Hi Ace Grandia - MT"},
						  { id: "2",title: "Toyota Wigo - ATe"},
						  { id: "3",title: "Toyota Vios - AT"},
						  { id: "4",title: "Toyota Innova - AT"},
						  { id: "5",title: "Toyota Vios - AT" },
						  { id: "6",title: "Toyota Innova - MT" },
						  { id: "7",title: "Mitsubishi L300 - MT" },
						  { id: "8",title: "Toyota Altis - AT" },
						  { id: "9",title: "Toyota Wigo - MT" },
						  { id: "10",title: "Toyota Vios - MT" },
					   ],
		    events: [
		    			{ id: '1', resourceId: '1', start:'2018-09-2', end:'2018-09-21', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '2', resourceId: '2', start:'2018-09-3', end:'2018-09-20', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '3', resourceId: '3', start:'2018-09-4', end:'2018-09-19', title: 'Ikaw Na Bahala Paangay ana Master', color:'#4c5567' },
					    { id: '4', resourceId: '4', start:'2018-09-5', end:'2018-09-18', title: 'Daaaaaaaah ! pinaghiraman mo ako tang ina ka PAK U', color:'#4c5567' },
					    { id: '5', resourceId: '5', start:'2018-09-6', end:'2018-09-17', title: 'Pak you ka, tang ina', color:'#4c5567' },
					    { id: '6', resourceId: '6', start:'2018-09-7', end:'2018-09-16', title: 'Yawaaa ka ! last nlng ka', color:'#4c5567' },
					    { id: '7', resourceId: '7', start:'2018-09-8', end:'2018-09-15', title: 'Gana uie nimal', color:'#4c5567' },
					    { id: '8', resourceId: '8', start:'2018-09-9', end:'2018-09-14', title: 'Piskot', color:'#4c5567' },
					    { id: '9', resourceId: '9', start:'2018-09-10', end:'2018-09-13', title: 'Two', color:'#4c5567' },
					    { id: '10', resourceId: '10', start:'2018-09-11', end:'2018-09-11', title: 'One', color:'#4c5567' }
		    		]
		});

	</script>
@endsection
