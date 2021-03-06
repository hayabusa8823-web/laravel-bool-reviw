@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/top.css')}}">
@endsection

@section('content')

<div class="row justify-content-center container">
	
	@foreach($reviews as $review)
	
	<div class="col-md-4">
		<div class="card mb50">
			<div class="card-body">
				
				@if(!empty($review->image))
								
				<div class="image-wrapper"><img class="book-image" src="{{asset('storage/images/'.$review->image)}}"></img></div>
				
				@else
				
				<div class="image-wrapper"><img class="book-image" src="{{asset('images/dummy.png')}}"></img></div>
				
				@endif
				
				<h3 class="h3 book-title">{{$review->title}}</h3>
				<p class="description">
					{{$review->body}}
				</p>
				<a href="{{route('show',['id'=>$review->id])}}" class="btn btn-secondary detail-btn">詳細を読む</a>
			</div>
		</div>			
	</div>
	@endforeach
</div>

{{$reviews->links()}}

@endsection
