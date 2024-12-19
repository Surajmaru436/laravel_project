{{Session::get('success')}}
<table border="1px">
    <thead>
        <tr>
            <th>s.no</th>
            <th>name</th>
            <th>description</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $info)
       
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td><a href="/category/{{ $info['id'] }}/edit"> {{ $info['name']}}</a></td>
            <td>{{ $info['description']}}</td>
            <td>
            <form action="/category/{{ $info['id']}}" method="post">
                @csrf
                @method('delete')
            <button onclick="return confirm('do you really want to delete this information?')">Delete</button> 
               
            </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>