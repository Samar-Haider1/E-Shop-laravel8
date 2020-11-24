<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 15px">
    <a class="navbar-brand" href="#">E-Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Orders</a>
            </li>

        </ul>
        <form action="/search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-4 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-2" style="margin-right: 10px" type="submit">Search</button>
        </form>
        <a class="btn btn-outline-success" href="#">Cart({{$total}})</a>
{{--        <button class="btn btn-outline-success " action="/add_to_cart" type="text">Cart({{$total}})</button>--}}
    </div>
</nav>
