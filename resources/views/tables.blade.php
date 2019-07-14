<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>STMC</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							&nbsp;&nbsp;&nbsp;School Timetable Management System
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">


						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/download.jpg" height="38" width="38" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome </small>
									STMC
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				

				<ul class="nav nav-list">

				<img class="nav-user-photo" src="assets/images/avatars/download.jpg" height="150" width="188" alt="Jason's Photo" />

					<li class="">
						<a href="index">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>


					
					<li class="">
						<a href="relief">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Relief Table </span>
						</a>

						<b class="arrow"></b>
					</li>

					


					<li class="">
							<a href="attendance">
								<i class="menu-icon fa fa-check-square-o"></i>
								Attendance
							</a>
							<b class="arrow"></b>
					</li>
							
					<li class="">
							<a href="tables">
								<i class="menu-icon fa fa-book"></i>
								TimeTable
							</a>

							<b class="arrow"></b>
					</li>

					<li class="">
						<a href="teachers">
							<i class="menu-icon fa fa-users"></i>
							Teachers
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="subjects">
							<i class="menu-icon fa fa-book"></i>
								Subjects
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="teaches">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							Teaches
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="period">
							<i class="menu-icon fa fa-bar-chart-o"></i>
							Period
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="groupSub">
							<i class="menu-icon fa fa-caret-right"></i>
							Group Subject
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="group">
							<i class="menu-icon fa fa-caret-right"></i>
							Group
						</a>
						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="grade">
							<i class="menu-icon fa fa-eye"></i>
							Grade
						</a>
						<b class="arrow"></b>
					</li>
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
						<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index">Home</a>
							</li>

							<li class="active">Timetable</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Timetable
						
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<form method = "post" action = "{{route('sign')}}">
								{{csrf_field()}}
								@if ($errors->any())
									<div class="alert alert-danger">
											<ul>
													@foreach ($errors->all() as $error)
															<li>{{ $error }}</li>
													@endforeach
											</ul>
									</div>
								@endif
								<div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Please fill the following form fields</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													<div class="col-xs-12 col-sm-7">
														<div class="form-group">
															<label for="form-field-select-3">Day</label>

															<div>
																<select class="chosen-select form-control" name="day" data-placeholder="Choose a day...">
																	<option value="" disabled selected>Select day</option>
																	<option value="mon">mon</option>
																	<option value="tue">tue</option>
																	<option value="wed">wed</option>
																	<option value="thu">thu</option>
																	<option value="fri">fri</option>
																	<option value="sat">sat</option>
																	<option value="sun">sun</option>
																</select>
																<label for="grade" class="col-form-label">Class</label>
															
															<select class="chosen-select form-control" id="grade" name="grade" >
																<option value="" disabled selected>Select grade</option>
																@foreach ($grades as $grade ) 
																{
																	<option value="{{ $grade->Grade_code }}">{{ $grade->Grade_code }}</option>
																}
																@endforeach
															</select>
													</div>

													<label for="form-field-select-3 form-control">Period</label>

														<div>
															<select class="chosen-select form-control" name="period" id ="period" data-placeholder="Choose a period...">
																<option value="" disabled selected>Select period</option>
																@foreach ($periods as $period ) 
																	{
																		<option value="{{ $period->period }}">{{ $period->period }}</option>
																	}
																	@endforeach
															</select>
														</div>
													

													<label for="form-field-username">Subject ID</label>

														<div>
															<select name="sub_id" class="chosen-select form-control" id="sub_id" data-placeholder="sub_id" value="" />
																<option value="" disabled selected>Select subject</option>
																		@foreach ($subjects as $subject ) 
																			{
																				<option value="{{ $subject->sub_code }}">{{ $subject->sub_code }}</option>
																			}
																			@endforeach
															</select>
														</div>
														</div>

														</div>

													
													<label for="form-field-username">Teacher ID</label>
														<div>
															<select name="teacher_id" class="chosen-select form-control" id="teacher_id" data-placeholder="TAEXXX" value=""  >
																<option value="" disabled selected>Select teacher</option>
																	@foreach ($teachers as $teacher ) 
																		{
																			<option value="{{ $teacher->teacher_id }}">{{ $teacher->teacher_id }}</option>
																		}
																		@endforeach
															</select>
														</div>
												
												</div>
											</div>

											<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
						
												<input type="submit" class="btn btn-sm btn-primary">
											</div>
										</div>
									</div>
								</div>
								</form>

								

								<div class="row">
									<div class="col-xs-10">
										
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Results for "Timetable"
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Day</th>
														<th>Class</th>
														<th>Period</th>
														<th>Teacher ID</th>
														<th>Subject ID</th>
														<th></th>
													</tr>
												</thead>

												<tbody>
													@foreach($timetables as $timetable)
													
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" name = "{{$timetable -> id}}" />
																<span class="lbl"></span>
															</label>
														</td>
														<td>{{$timetable -> day}}</td>
														<td>{{$timetable -> grade}}</td>
														<td>{{$timetable -> period}}</td>
														<td>{{$timetable -> teacher_id}}</td>
														<td>{{$timetable -> sub_id}}</td>
										
														<td align = 'center'>
															<div class="hidden-sm hidden-xs action-buttons">
																 
																 <a role="button"  data-toggle="modal" data-target="#modal_update" data-id="{{$timetable -> id}}" data-day="{{$timetable -> day}}"  data-sub_id="{{$timetable -> sub_id}}" data-teacher_id="{{$timetable -> teacher_id}}" data-period="{{$timetable -> period}}" data-grade="{{$timetable -> grade}}"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
																
																 <a class = "red" role="button"  data-toggle="modal" data-target="#delete" data-id="{{$timetable -> id}}"><i class="ace-icon fa fa-trash-o bigger-120 "></i></i></a>
																
															</div>
														</td> 
													</tr>
													@endforeach

													
												</tbody>
											</table>
											
											<a href="#modal-form" role="button" class="btn btn-success btn-sm" data-toggle="modal">Add</a>
											<button type="submit" class="btn btn-danger btn-sm">Delete</button>
											
										</div>
									</div>
								</div>


								<form method = "post" action = "{{route('update')}}">

								{{csrf_field()}}
								{{ method_field('POST') }}

								@if ($errors->any())
									<div class="alert alert-danger">
											<ul>
													@foreach ($errors->all() as $error)
															<li>{{ $error }}</li>
													@endforeach
											</ul>
									</div>
								@endif
									<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="modelUpdate" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modelUpdate">New message</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form>
														<div class="form-group">
															<label for="day" class="col-form-label">Day</label>
															
															<select class="chosen-select form-control" id="day" name="day" >
																	<option value=""></option>
																	<option value="MON">MON</option>
																	<option value="TUE">TUE</option>
																	<option value="WED">WED</option>
																	<option value="THU">THU</option>
																	<option value="FRI">FRI</option>
																	<option value="SAT">SAT</option>
																	<option value="SUN">SUN</option>
															</select>
														

														
															<label for="grade" class="col-form-label">Class</label>
															
																<select class="chosen-select form-control" id="grade" name="grade" >
																	<option value="" disabled selected>Select grade</option>
																	@foreach ($grades as $grade ) 
																	{
																		<option value="{{ $grade->Grade_code }}">{{ $grade->Grade_code }}</option>
																	}
																	@endforeach
																</select>
														</div>

														<label for="form-field-select-3 form-control">Period</label>

															<div>
																<select class="chosen-select form-control" name="period" id ="period" data-placeholder="Choose a period...">
																	<option value="" disabled selected>Select period</option>
																	@foreach ($periods as $period ) 
																		{
																			<option value="{{ $period->period }}">{{ $period->period }}</option>
																		}
																		@endforeach
																</select>
															</div>
														


														<label for="form-field-username">Subject ID</label>

															<div>
																<select name="sub_id" id="sub_id" class="form-control input-lg dynamic" data-dependent="teacher_id">
																<option value="fake" disabled selected>Select Subject...</option>
																<option value="same">Same Subject</option>
																@foreach($subjects as $subject)
																	<option value="{{$subject->sub_code}}">{{$subject->sub_code}}</option>
																@endforeach
																</select>
															</div>

														
														<label for="form-field-username">Teacher ID</label>
															<div>
																<select name="teacher_id" class="chosen-select form-control" id="teacher_id" data-placeholder="TAEXXX" value="" >
																	<option value="" disabled selected>Select teacher</option>
																		@foreach ($teachers as $teacher ) 
																			{
																				<option value="{{ $teacher->teacher_id }}">{{ $teacher->teacher_id }}</option>
																			}
																			@endforeach
																</select>
															</div>
													
														
															<div>
																<input type="hidden" name="id"  value="" id= "id"/>
															</div>
														
													</form>
												</div>
												<!-- <div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Update</button>
												</div> -->
												<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
						
												<input type="submit" class="btn btn-sm btn-primary">
												</div>
											</div>
										</div>
									</div>
								
								</form>


								


								<form method = "post" action = "{{route('destroy')}}" >
									{{csrf_field()}}
									{{ method_field('POST') }}
									<div class = "center" >
										<div class = "container" >
											<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="modalDelete">Are you sure ?</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															</button>
														</div>
														<div class="modal-body">
															<form>
																<div>
																	<input type="hidden" name="id"  value="" id= "id"/>
																</div>
															
																<button class="btn btn-sm" data-dismiss="modal">
																<i class="ace-icon fa fa-times"></i>
																No, Cancel
																</button>
																&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
																<input type="submit" value = "Yes, Delete" class="btn btn-sm btn-primary">		
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

								

	
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		
	
				
				
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
	
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});



				$(document).ready(function(){

				$('.dynamic').click(function(){
				if($(this).val() != '')
				{
				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data('dependent');
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url:"{{ route('relief.fetch') }}",
					method:"POST",
					data:{select:select, value:value, _token:_token, dependent:dependent},
					success:function(result)
					{
					$('#'+dependent).html(result);
					}

				})
				}
				})
				});


				$('#modal_update').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
				var day = button.data('day') // Extract info from data-* attributes
				var sub_id = button.data('sub_id') // Extract info from data-* attributes
				var teacher_id = button.data('teacher_id') // Extract info from data-* attributes
				var period = button.data('period') // Extract info from data-* attributes
				var grade = button.data('grade') // Extract info from data-* attributes
				var id = button.data('id') // Extract info from data-* attributes
			
				var modal = $(this)
			
				modal.find('.modal-body #day').val(day)
				modal.find('.modal-body #grade').val(grade)
				modal.find('.modal-body #sub_id').val('fake')
				modal.find('.modal-body #teacher_id').val(teacher_id)
				modal.find('.modal-body #period').val(period)
				modal.find('.modal-body #id').val(id)
			});

			$('#delete').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
			
				var id = button.data('id') // Extract info from data-* attributes
			
				var modal = $(this)

				modal.find('.modal-body #id').val(id)
			});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
