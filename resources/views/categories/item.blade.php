<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add category</title>
</head>
<body>
    <form action="" method="post">
        <table border="1" style="margin: 20px auto">
            <tr>
                <th colspan="2">Add new category</th>
            </tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="Cate " /></td>
            </tr>
            <tr>
                <td>Image intro: </td>
                <td><input type="text" name="image_intro" value="Img " /></td>
            </tr>
            <tr>
                <td>Description: </td>
                <td><input type="text" name="description" value="Description" /></td>
            </tr>
            <tr>
                <td>Publish </td>
                <td>
                    <select name="publish">
                        <option value="1">On</option>
                        <option value="0">Off</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ordering: </td>
                <td><input type="number" name="ordering" value="1" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Add" name="add" />
                    <button><a href="/categories">Cancel</a></button>
                </td>
            </tr>
        </table>
        {{csrf_field()}}
    </form>
</body>
</html>