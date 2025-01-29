<div class="new-header-area-wrapper">
	<div class=" new-style-1 new-header-bg" {!! $image !!}>
		<div class="container custom-container-1410">
			<div class="row">
				<div class="col-lg-6">
					<div class="header-inner style-01" data-min-height="800">
						<h3 class="main-title">
							{!! html_entity_decode($title) !!}
						</h3>
						<p class="info">{{ $description }}</p>
						<div class="btn-wrapper">
							<a href="{{ $url }}" class="default-btn color-orange-02">{{ $btn_text }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>