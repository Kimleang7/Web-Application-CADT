<table>
    <tr>
        <td>Image</td>
        <td>Icon</td>
        <td>Title</td>
        <td>Price</td>
        <td>Description</td>
        <td>Remove</td>
        <td>Update</td>
    </tr>

    @foreach($data2 as $data2)
        <tr>
            <td style="padding: 10px 10px;"><img width="200px" height="170px" src="/ImageMenu/{{$data->image}}"></td>
            <td >{{$data->icon}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><a style="color: #dc3545; text-align: center;" href="{{url('/deleteMenu',$data->id)}}">Remove</a></td>
            <td><a style="color: #2563eb" href="{{url('/updateView',$data->id)}}">Update</a></td>
        </tr>
    @endforeach
</table>
