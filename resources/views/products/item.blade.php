<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
<form method="post" action="">
    <table border="1" style="margin: 20px auto">
        <thead>
        <tr>
            <th colspan="2">
                Add new Product
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Name</td>
            <td><input autofocus type="text" name="name" value="Product 1"/></td>
        </tr>
        <tr>
            <td>Short description</td>
            <td><input type="text" name="short_description" value="Short 1"/></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="description" value="Description 1"/></td>
        </tr>

        <tr>
            <td>Hot product</td>
            <td><input type="number" name="hot_product" value="1"/></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="number" name="price" value="1"/></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><input type="number" name="amount" value="1"/></td>
        </tr>
        <tr>
            <td>Ordering</td>
            <td><input type="number" name="ordering" value="1"/></td>
        </tr>
        <tr>
            <td>Image intro</td>
            <td><input type="text" name="image_intro" value="Img 1"/></td>
        </tr>
        <tr>
            <td>Publish</td>
            <td>
                <select name="publish">
                    <option value="1">On</option>
                    <option value="0">Off</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select name="category_id">
                    @foreach($category as $cate)
                        <option value="{{$cate['id']}}">{{$cate['name']}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Add"/>
                <button><a href="/products">Cancel</a></button>
            </td>
        </tr>
        </tbody>
    </table>
    {{csrf_field()}}
</form>
</body>
</html>