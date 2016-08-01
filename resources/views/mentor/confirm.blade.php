<div class="container">
 	<div class="row">

 		<div class="col-sm-8 col-md-8 col-lg-8">
		 	<h2>Make sure all the contents below are correct.</h2>
			<h4>Title:{{ Input::get('title') }}</h4>
			<h4>Category:{{ Input::get('category') }}</h4>
			<h4>Price:{{ Input::get('price') }}</h4>
			<h4>Detail:{{ Input::get('detail') }}</h4>
		</div>
		<form method="post" action>

			<input type="hidden" name="title" value="{{ Request::get('title') }}">
			<input type="hidden" name="category" value="{{ Request::get('category') }}">
			<input type="hidden" name="price" value="{{ Request::get('price') }}">
			<input type="hidden" name="detail" value="{{ Request::get('detail') }}">

			<div class="col-sm-8 col-md-8 col-lg-8 events-pad">
				<a href="">Rewrite</a>
					<button class="btn btn-cebroad" onclick="location.href=''" name="submit" type="submit">Submit</button>
			</div>
		</form>

	</div>
</div>