@extends ('partials.master')


@section ('content')
	<div class="blog-header"> 
        <h1 class="blog-title">Pls Fill this to create your blog</h1>
        <p class="lead blog-description">We believe life should be easy</p>
      </div>
    </div>
<div class="col-sm-8 blog-main">
	<form method="POST" action="/posts">

			{{ csrf_field() }}

		<div class="form-group">
		    <label for="title">Blog Title</label>
		    <input type="text" class="form-control" name="title">

		  	<div class="form-group">
		 	   	<label for="body">Blog Post</label>
		    	<textarea type="text" class="form-control" name="body"></textarea>
			</div>
		</div>
		  <button type="submit" class="btn btn-primary">Post Blog</button>
	</form>
</div>

@include ('partials.errors')


@endsection