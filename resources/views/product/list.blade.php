<style>
    th , td{
        border: 1px solid;
        text-align: left;
        padding: 8px;
    }
    button{
        background: #1c7430;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<div class="col-12">
    <div class="row">
        <div class="col-12"><h2>Danh Sách sản phẩm</h2></div>

        <a href="{{route('product.store')}}" class="btn btn-success mb-2">ADD</a>
        <form  action="{{route('product.search')}}" class="form-inline my-2 my-lg-0" method="post">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search" name="search">
            <button class="btn btn-info" type="submit">Search</button>
        </form>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone_number</th>
                <th>email</th>
                <th>address</th>
                <th>manage</th>
                <th>status_id</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->phone_number }}</td>
                    <td>{{ $product->email }}</td>
                    <td>{{ $product->address }}</td>
                    <td>{{ $product->manage}}</td>
                    <td>{{ $product->status_id}}</td>
                    <td><a href="" class="btn btn-outline-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">DELETE</a>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
