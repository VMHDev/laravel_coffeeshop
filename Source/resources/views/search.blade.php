@extends('layouts.general')

@section('content')
    <div class="main-container container">
        <h3 class="main-heading text-center">
            TÌM KIẾM
        </h3>
        <!-- Nested Row Starts -->
        <div class="row">

            <!-- Primary Content Starts -->
            <div class="col-md-9">

            <!-- Product Filter Starts -->

                <!-- Breadcrumb Ends -->

                <!-- Main Heading Starts -->

                <div class="product-filter">
                    <div class="row">

                        <div class="col-md-2 col-sm-2 text-right">
                            <label class="control-label">Sort</label>
                        </div>
                        <div class="col-md-3 col-sm-3 text-right">
                            <select class="form-control">
                                <option value="default" selected="selected">Default</option>
                                <option value="NAZ">Name (A - Z)</option>
                                <option value="NZA">Name (Z - A)</option>
                            </select>
                        </div>
						
                    </div>
                </div>
                <!-- Product Filter Ends -->
                <h3>
                    Kết quả:
                </h3>
                <!-- Product List Display Starts -->
                @include('timkiem.timkiem_ketqua')
				{!! $douong->render() !!}
            </div>
            <!-- Primary Content Ends -->

            <!-- Sidebar Starts -->

            <!-- Nested Row Ends -->
            @include('loaidouong.menu_loai')
        </div>
    </div>
    <!-- Product # Ends -->
    <!-- Product List Display Ends -->
@endsection