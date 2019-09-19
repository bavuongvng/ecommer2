<table border="1" style="margin: 20px auto">
    <tr>
        <th colspan="9">List products</th>
    </tr>
    <tr>
        <th>Title</th>
        <th>Short description</th>
        <th>Description</th>
        <th>Publish</th>
        <th>Hot product</th>
        <th>Category id</th>
        <th>Ordering</th>
        <th>Image intro</th>
        <th><button><a href="/product">Add</a></button></th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product['title']}}</td>
            <td>{{$product['short_description']}}</td>
            <td>{{$product['description']}}</td>
            <td>{{$product['publish']}}</td>
            <td>{{$product['hot_product']}}</td>
            <td>{{$product['category_id']}}</td>
            <td>{{$product['ordering']}}</td>
            <td>{{$product['image_intro']}}</td>
            <td>
                <button><a href="/product/{{$product['id']}}">Edit</a></button>
                <button><a href="/product/delete/{{$product['id']}}">Delete</a></button>
            </td>
        </tr>
    @endforeach
</table>
