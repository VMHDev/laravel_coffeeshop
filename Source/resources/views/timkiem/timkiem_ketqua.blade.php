<div class="row">
@foreach($douong as $du)
    <!-- Product # Starts -->

        <div class="col-xs-12 w3-border-bottom">
            <div class="quickview col-xs-12 col-sm-7 col-md-9">
                @if (Auth::guest())
					<h4><a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-0">{{$du->TenDoUong}}</a></h4>
				@else
					<h4><a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-{{ Auth::user()->id }}">{{$du->TenDoUong}}</a></h4>
				@endif
                <div class="w3-badge w3-blue">
                    <span class="w3-large">{{$du->GiaTien}} vnđ</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-3 product-col list clearfix">
                <div class="test w3-center">
                    <div class="list">
                        <div class="show-image">
							@if (Auth::guest())
								<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-0-"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
							@else
								<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-{{ Auth::user()->id }}"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
							@endif
						</div>
                        @include('timkiem.hover')
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>