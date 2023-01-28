<x-app-layout>

    <div class="">
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-4">
                    <h2>Edit Product</h2>
                    <div class="card card-body">
                        <img src="/storage/images/{{ $product->image }}" alt="No image found">
                        @foreach ($errors->all() as $err)
                            <p class="text-danger text-center">{{ $err }}</p>
                        @endforeach
                        <form action="{{ route('update-products', $product) }}" method="POST" enctype="multipart/form-data">@csrf
                            <label for="">Product Name</label>
                            <input name="name" type="text" class="mb-2 form-control" placeholder="Product Name" value="{{$product->name}}">

                            <label for="">Price</label>
                            <input name="price" type="text" class="mb-2 form-control" placeholder="Price" value="{{ $product->price }}">

                            <label for="">Description</label>
                            <input name="description" type="text" class="mb-2 form-control" placeholder="Description" value="{{$product->description}}">

                            <label for="">Quantity</label>
                            <input name="quantity" type="text" class="mb-2 form-control" placeholder="Quantity" value="{{ $product->quantity }}">

                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <option value="{{ $product->category_id }}"> {{ $product->category->name }} </option>
                                @foreach ($categories as $category)
                                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>

                            <label for="">Image</label>
                            <input name="image" type="file" class="mb-2 form-control" placeholder="Image">

                            <button class="btn text-dark"
                                style="background-color: #7258db; margin-top: 20px">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
