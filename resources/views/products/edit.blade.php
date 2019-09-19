<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
<form method="post" action="">
    <table border="1" style="margin: 20px auto">
        <thead>
        <tr>
            <th colspan="2">
                Edit Product
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{{$product['name']}}"/></td>
        </tr>
        <tr>
            <td>Short description</td>
            <td><input type="text" name="short_description" value="{{$product['short_description']}}"/></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="description" value="{{$product['description']}}"/></td>
        </tr>

        <tr>
            <td>Hot product</td>
            <td><input type="number" name="hot_product" value="{{$product['hot_product']}}"/></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="number" name="price" value="{{$product['price']}}"/></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><input type="number" name="amount" value="{{$product['amount']}}"/></td>
        </tr>

        <tr>
            <td>Ordering</td>
            <td><input type="number" name="ordering" value="{{$product['ordering']}}"/></td>
        </tr>
        <tr>
            <td>Image intro</td>
            <td><input type="text" name="image_intro" value="{{$product['image_intro']}}"/></td>
        </tr>
        <tr>
            <td>Publish</td>
            <td>
                <select name="publish">
                    <option value="1" <?php echo $product['publish']==1?"selected":"" ?> >On</option>
                    <option value="0" <?php echo $product['publish']==0?"selected":"" ?> >Off</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select name="category_id">
                    @foreach($category as $cate)
                        <option value="{{$cate['id']}}" <?php echo $cate['id']==$product['category_id'] ? "selected":""?> >{{$cate['name']}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Update"/>
                <button><a href="/products">Cancel</a></button>
            </td>
        </tr>
        </tbody>
    </table>
    {{csrf_field()}}
</form>
</body>
</html>