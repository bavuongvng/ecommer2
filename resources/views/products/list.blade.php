<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" style="margin: 20px auto">
    <tr>
        <th colspan="10" class="text-center">List products</th>
        <th>
            <a href="{{ url('/cart') }}">
                <button type="button" class="btn btn-info container-fluid" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
            </a>
        </th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Short description</th>
        <th>Description</th>
        <th>Hot product</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Category id</th>
        <th>Ordering</th>
        <th>Image intro</th>
        <th>Publish</th>
        <th>
            <a href="/product"><button class="container-fluid">Add</button></a>
        </th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->short_description}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->hot_product}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->amount}}</td>
            <td>{{$product->name_cate}}</td>
            <td>{{$product->ordering}}</td>
            <td>{{$product->image_intro}}</td>
            <td><?php echo $product->publish == 1 ? "On" : "Off"?></td>
            <td>
                <a href="/product/{{$product->id}}"><button>Edit</button></a>
                <a href="/product/delete/{{$product->id}}"><button>Delete</button></a>
                <a href="/product/add-cart/{{$product->id}}"><button>Add to card</button></a>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>