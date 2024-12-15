<table border="1px">
    <thead>
        <tr>
            <th>s.no</th>
            <th>name</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $info)
       
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td><a href="/category/{{ $info['id']}}/edit"> {{ $info['name']}}</a></td>
            <td>{{ $info['description']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>