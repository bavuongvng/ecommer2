<form action="" method="post">
    <table border="1" style="margin: 20px auto">
        <thead>
        <tr>
            <th colspan="2" class="text-center card-header">Customer Info</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="p-2">Full name</td>
            <td><input type="text" name="full_name" class="form-control" value="{{$user['full_name']}}"/></td>
        </tr>
        <tr>
            <td class="p-2">Phone number</td>
            <td><input type="text" name="phone_number" class="form-control" value="{{$user['phone_number']}}"/></td>
        </tr>
        <tr>
            <td class="p-2">Country</td>
            <td><input type="text" name="country" class="form-control" value="{{$user['country']}}"/></td>
        </tr>
        <tr>
            <td class="p-2">City</td>
            <td><input type="text" name="city" class="form-control" value="{{$user['city']}}"/></td>
        </tr>
        <tr>
            <td class="p-2">Street</td>
            <td><input type="text" name="street" class="form-control" value="{{$user['street']}}"/></td>
        </tr>
        <tr>
            <td>
            </td>
            <td >
                <div  class="p-1 float-left w-50">
                    <button type="submit" class="btn-success btn w-100">Continue</button>
                </div>
               <div  class="p-1 float-left w-50">
                   <a href="/cart">
                       <button type="button" class="btn btn-danger w-100">Back</button>
                   </a>
               </div>
            </td>
        </tr>
        </tbody>
    </table>
    {{csrf_field()}}
</form>