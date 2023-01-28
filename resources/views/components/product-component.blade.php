<div>
    <div class="col-xl-3 col-md-4 col-sm-6 grid-item grid-sizer cat-two">
        <div class="sp--product--item mb-50">
            <div class="sp--product--thumb">
                <span class="batch">-20 %</span>
                <a href="cart.html" class="wishlist"><i class="flaticon-heart-shape-outline"></i></a>
                <a href="{{route('product-details', $product->id)}}"><img style="height: 343.16px" src="/storage/images/{{ $product->image }}"
                        alt=""></a>
            </div>
            <div class="sp--product--content">
                <h6 class="title"><a href="">{{$product->name}}</a></h6>
                <p>{{ $product->category->name }}</p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">${{$product->price}}/kg</div>
            </div>
        </div>
    </div>
</div>
