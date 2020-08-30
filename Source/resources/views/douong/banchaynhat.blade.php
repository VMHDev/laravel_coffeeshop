<div class="product-col side-product no-box-shadow">
    @foreach ($banchaynhat as $du)

        <div class="image w3-round-xxlarge">
            <div class="test w3-center">
                <div class="grid">
                    <div class="show-image">
						@if (Auth::guest())
							<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-0"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
						@else
							<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-{{ Auth::user()->id }}"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
						@endif
					</div>
                    @include('timkiem.hover')
                </div>
            </div>
            <div class="w3-margin-top">
                <h4>
					@if (Auth::guest())
						<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-0">{{$du->TenDoUong}}</a>
					@else
						<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-{{ Auth::user()->id }}">{{$du->TenDoUong}}</a>
					@endif
                </h4>
                <div class="w3-badge w3-blue">
                    <span class="w3-large">{{$du->GiaTien}} vnđ</span>
                </div>
            </div>
        </div>
    @endforeach
</div>