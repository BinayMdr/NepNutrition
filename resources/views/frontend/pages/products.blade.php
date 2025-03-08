@extends('frontend.layout.master')
@section('content')

<section class="pageBanner position-relative d-flex align-items-center w-100 justify-content-center align-items-center overflow-hidden" id="pageBanner">
    <div class="image-wrapper position-absolute h-100 w-100">
        <img src="./assets/images/pageBannerImage.png" alt="page banner image" class="img-fluid object-fit-cover w-100 h-100">
    </div>
    <div class="content-wrapper text-center text-white position-relative z-2">
        <p class="mb-3 fs-5">Products</p>
        <h1 class="mb-3 display-4 fw-bold">Fuel Your Fitness Goal</h1>
        <h4 class="text-dusty-grey fw-normal fs-5">Professional nutrition solutions for every athlete</h4>
    </div>
</section>

<main>
    <section class="product-page detail my-5">
        <div class="wrapper">
            <div class="align-items-center d-flex flex-column flex-md-row gap-4 gap-md-0 justify-content-between py-3">
                <p class="mb-0 text-dusty-grey">
                    Showing 4 0f 100 Products
                </p>
                <select class="form-select npn-select" aria-label="Default select example">
                    <option selected>Latest</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="product-card position-relative overflow-hidden d-block">
    <div class="position-relative content-wrapper">
        <div class="img-wrapper text-center">
            <span class="stock text-white px-2">Out of Stock</span>
            <img src="./assets/images/productListing.png" alt="Product card" class="img-fluid">
        </div>
        <div class="info mt-2 d-flex justify-content-between align-items-center">
            <span class="mb-0 text-white fw-medium">Product Title</span>
            <span class="text-white fw-bold">344 PLN</span>
        </div>
    </div>
    <div class="hover-content text-center w-100">
        <a class="btn btn-burnt-yellow" href="./product-detail.html">View Product</a>
    </div>
</div>

                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="product-card position-relative overflow-hidden d-block">
    <div class="position-relative content-wrapper">
        <div class="img-wrapper text-center">
            <span class="stock text-white px-2">Out of Stock</span>
            <img src="./assets/images/productListing.png" alt="Product card" class="img-fluid">
        </div>
        <div class="info mt-2 d-flex justify-content-between align-items-center">
            <span class="mb-0 text-white fw-medium">Product Title</span>
            <span class="text-white fw-bold">344 PLN</span>
        </div>
    </div>
    <div class="hover-content text-center w-100">
        <a class="btn btn-burnt-yellow" href="./product-detail.html">View Product</a>
    </div>
</div>

                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="product-card position-relative overflow-hidden d-block">
    <div class="position-relative content-wrapper">
        <div class="img-wrapper text-center">
            <span class="stock text-white px-2">Out of Stock</span>
            <img src="./assets/images/productListing.png" alt="Product card" class="img-fluid">
        </div>
        <div class="info mt-2 d-flex justify-content-between align-items-center">
            <span class="mb-0 text-white fw-medium">Product Title</span>
            <span class="text-white fw-bold">344 PLN</span>
        </div>
    </div>
    <div class="hover-content text-center w-100">
        <a class="btn btn-burnt-yellow" href="./product-detail.html">View Product</a>
    </div>
</div>

                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="product-card position-relative overflow-hidden d-block">
    <div class="position-relative content-wrapper">
        <div class="img-wrapper text-center">
            <span class="stock text-white px-2">Out of Stock</span>
            <img src="./assets/images/productListing.png" alt="Product card" class="img-fluid">
        </div>
        <div class="info mt-2 d-flex justify-content-between align-items-center">
            <span class="mb-0 text-white fw-medium">Product Title</span>
            <span class="text-white fw-bold">344 PLN</span>
        </div>
    </div>
    <div class="hover-content text-center w-100">
        <a class="btn btn-burnt-yellow" href="./product-detail.html">View Product</a>
    </div>
</div>

                </div>
            </div>
            <div class="product-pagination mt-5">
                <nav aria-label="Product Pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="First">
                                <svg viewBox="0 0 16 16">
                                    <use href="./assets/images/icons.svg#icon-first"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <svg viewBox="0 0 16 16">
                                    <use href="./assets/images/icons.svg#icon-previous"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <svg viewBox="0 0 16 16">
                                    <use href="./assets/images/icons.svg#icon-next"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Last">
                                <svg viewBox="0 0 16 16">
                                    <use href="./assets/images/icons.svg#icon-last"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</main>
@endsection
