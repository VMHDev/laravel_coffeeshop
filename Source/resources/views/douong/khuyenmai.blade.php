<div class="col-md-9">
    @foreach ($khuyenmai as $ten)
    @endforeach
    <h2 class="main-heading2 w3-jumbo">

        {{$ten->TenCTKM}}

    </h2>
    <h3 class="main-heading3 w3-amber">

        {{$ten->NoiDung}}

    </h3>
    <!-- Product Filter Starts -->
    <div class="product-filter">

        <div class="row">
            <div class="col-md-2 text-right">
                <label class="control-label">Sort</label>
            </div>
            <div class="col-md-3 text-right">
                <select class="form-control">
                    <option value="default" selected="selected">Default</option>
                    <option value="NAZ">Name (A - Z)</option>
                    <option value="NZA">Name (Z - A)</option>
                </select>
            </div>
            
        </div>
    </div>
    <!-- Product Filter Ends -->
    <div class="row">
        @foreach ($khuyenmai as $du)
            <div class="col-md-4 col-sm-6">
                <div class="product-col list clearfix">
                    <div class="test w3-center">
                        <div class="grid">
                            <div class="show-image">
                                <a href="/details_km-{{ $du->IDDoUongKM }}-{{$du->IDCTKM}}"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
                            </div>
                            @include('timkiem.hover')
                        </div>
                    </div>
                    <div class="w3-margin-top">
                        <h4>{{$du->TenDoUong}}</h4>
                        <div class="w3-round-xlarge w3-padding-tiny w3-blue">
                            <span class="w3-large lineThrough">{{ $du->GiaTien }}</span>
                            <span class="w3-xxlarge">{{ $du->GiaKM }} vnđ</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
	{!! $khuyenmai->render() !!}
</div>