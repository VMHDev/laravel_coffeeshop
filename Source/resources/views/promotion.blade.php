@extends('layouts.general')

@section('content')
    <div class="main-container container">
        <h3 class="main-heading text-center">
            KHUYẾN MÃI
        </h3>
        <!-- Nested Row Starts -->
        <div class="row">

            <!-- Primary Content Starts -->
            @include('douong.khuyenmai')
    <!-- Primary Content Ends -->

    <!-- Sidebar Starts -->

    <!-- Nested Row Ends -->
    @include('loaidouong.menu_loai')
    </div>
    </div>
    <!-- Product # Ends -->
    <!-- Product List Display Ends -->
@endsection