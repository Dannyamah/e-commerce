<x-app-layout>

    <div>
        <form action="{{ route('category.store') }}" method="POST">@csrf
            <div>
                <h3>Add Category</h3>
            </div>
            <div class="form-control text-center" style="width: 33%">
                <label for="" >Category Name</label> <br>
                <input name="name" type="text" class="form-control" style="border: none;width: 100%">
            </div>
            <button class="btn text-dark" style="background-color: #7258db; margin-top: 20px">Submit</button>
        </form>
    </div>

</x-app-layout>

{{--  --}}
