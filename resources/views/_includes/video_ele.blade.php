<div class="row">
	<ul class="portfolio-list sort-destination" data-sort-id="portfolio">
	@foreach($data as $key=>$value)
		<li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands">
			<div class="portfolio-item  thumbnail">
				<img src="http://img.youtube.com/vi/{{ $value->videos_url }}/0.jpg">
				<!-- <h4>{{ $value->videos_title }}</h4> -->
			</div>
		</li>
	@endforeach
	</ul>
</div>


