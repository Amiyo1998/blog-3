@extends('backend.layouts.master')

@section('title')
	{{$title}}
@endsection

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="col-md-9 heading_title">
			{{__("All Information View")}}
		 </div>
		 <div class="col-md-3 text-right">
			 <a href="{{ route('posts.create')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Information</a>
		</div>
		<div class="clearfix"></div>
	</div>
  <div class="panel-body">
	  <table class="table table-responsive table-striped table-hover table_cus">
			  <thead class="table_head">
				<tr>
					<th>Id</th>
					<th>Title</th>
					<th>Body</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody> 
				@foreach ($posts as $key => $post)
				<tr>
					<td>{{++$key}}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->body}}</td>
					<td>
						<a type="button" href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary" style="margin-top: 10px;">{{__('Edit')}}</a>
						{{-- <a href="{{ route('posts.edit', $post->id)}}"><i class="fa fa-pencil-square fa-lg"></i></a> --}}
						<form action="{{ route('posts.destroy', $post->id)}}" method="POST" style="display: inline-block;">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">{{__('Delete')}}</button>
							{{-- <button style="background-color:#5782a7; color:#fff"  onclick="return confirm('Are you sure to delete?');"><i class="fa fa-trash fa-lg"></i></button> --}}
						</form>	
					</td>
				</tr>
				@endforeach                                 
			</tbody>
	  </table>
  </div>
  <div class="panel-footer">
	<div class="col-md-4">
		<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
		<a href="#" class="btn btn-sm btn-primary">PDF</a>
		<a href="#" class="btn btn-sm btn-danger">SVG</a>
		<a href="#" class="btn btn-sm btn-success">PRINT</a>
	</div>
	<div class="col-md-4">
	</div>
	<div class="col-md-4 text-right">
		{{-- {{ $posts->links() }} --}}
		{{-- <nav aria-label="Page navigation">
		  <ul class="pagination pagina_cus">
			<li>
			  <a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			  </a>
			</li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li>
			  <a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			  </a>
			</li>
		  </ul>
		</nav> --}}
	</div>
	<div class="clearfix"></div>
  </div>
</div>
@endsection
