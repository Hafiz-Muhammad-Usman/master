@extends('admin/layout.layout')

@section('page_title','Post Listing')

@section('container')

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Post</h4>
			<h2><a href="/admin/post/add">Add Post</a></h2>
			<h2 class="success_sessi text-danger text-center">{{@session(msg)}}</h2>
		 </div>
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
					 <div class="col-sm-12">
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-light table-hover table-bordered table-striped" style="width:100%">
							  <thead class="table bg-dark text-white">
								 <tr>
									<th>ID</th>
									<th>Title</th>
									<th>Short Desc</th>
									<th>Long Desc</th>
									<th>Image</th>
									<th>Post Date</th>
									<th>Action</th>
								 </tr>
							  </thead>
							@foreach($result as $list)
								 <tr>
									<td>{{$list->id}}</td>
									<td>{{$list->title}}</td>
									<td>{{$list->short_desc}}</td>
									<td>{{$list->long_desc}}</td>
									<!-- <td>{{asset('storage/post/'.$list->image)}}</td> -->
									<!-- the above code is used to get path of the image -->
									<td><img src="{{asset('storage/post/'.$list->image)}}" style="width:150px"></td>
									<td>{{$list->post_date}}</td>
									
									<td>
										<a href="{{url('/post/edit/'.$list->id)}}" ><i class="fa fa-edit text-info">Edit</i></a> | <a href="{{url('/post/delete/'.$list->id)}}"><i class="fa fa-trash text-danger" aria-hidden="true"> Delete</i></a>
									</td>
								 </tr>
							@endforeach
							  </tbody>
						   </table>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
@endsection