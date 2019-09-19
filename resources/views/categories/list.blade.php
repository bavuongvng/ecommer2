<h1>List categories</h1>
<table border="1" style="margin: 20px auto;">
    <tr>
        <th colspan="6">List categories</th>
    </tr>
    <tr>
        <th>Title</th>
        <th>Image intro</th>
        <th>Description</th>
        <th>Publish</th>
        <th>Ordering</th>
        <th><button><a href="/category">Add</a></button></th>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{$category['title']}}</td>
            <td>{{$category['image_intro']}}</td>
            <td>{{$category['description']}}</td>
            <td>{{$category['publish']}}</td>
            <td>{{$category['ordering']}}</td>
            <td>
                <button><a href="/category/{{$category['id']}}">Edit</a></button>
                <button><a href="/category/delete/{{$category['id']}}">Delete</a></button>
            </td>
        </tr>
    @endforeach
</table>
