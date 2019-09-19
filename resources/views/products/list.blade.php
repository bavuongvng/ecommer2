<?php
//        echo "<pre>";
//        echo $products;
//        echo "</pre>";
//        die();
?>

<table border="1" style="margin: 20px auto">
    <tr>
        <th colspan="11">List products</th>
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
        <th><button><a href="/product">Add</a></button></th>
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
            <td><?php echo $product->publish==1?"On":"Off"?></td>
            <td>
                <button><a href="/product/{{$product->id}}">Edit</a></button>
                <button><a href="/product/delete/{{$product->id}}">Delete</a></button>
                <button>Add to card</button>
            </td>
        </tr>
    @endforeach
</table>
