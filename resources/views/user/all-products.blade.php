<x-app-layout>

    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Products</h3>
                        <div class="btn-group group-link btn-set-task w-sm-100">
                            <a href="product-grid.html" class="btn active d-inline-flex align-items-center"
                                aria-current="page"><i class="icofont-wall px-2 fs-5"></i>Grid View</a>
                            <a href="" class="btn d-inline-flex align-items-center"><i
                                    class="icofont-listing-box px-2 fs-5"></i> List View</a>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">

                <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-12">
                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-2 row-cols-xxl-4">
                        @foreach ($products as $product)
                            <div class="col-md-3">
                                <div class="card">


                                    <div class="product">

                                        <div class="product-image">
                                            <div class="product-item active">
                                                <img src="/storage/images/{{ $product->image }}" style="height: 344px" alt="product"
                                                    class="img-fluid w-100">
                                            </div>
                                            <a class="add-wishlist" href="#">
                                                <i class="bi bi-heart-fill text-danger"></i>
                                            </a>
                                        </div>
                                        <div class="product-content p-3">
                                            <span class="rating mb-2 d-block"><i class="text-warning">In Stock:</i>
                                                {{ $product->quantity }}</span>
                                            <a href="" class="fw-bold">{{ $product->name }} </a>
                                            <p class="text-muted">{{ $product->description }}</p>
                                            <span
                                                class="d-block fw-bold fs-5 text-secondary">${{ $product->price }}</span>
                                            <a href="{{ route('edit-products', $product) }}" class="btn btn-primary mt-3">Edit Product</a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <nav class="justify-content-end d-flex">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
        </div>
    </div>

</x-app-layout>
