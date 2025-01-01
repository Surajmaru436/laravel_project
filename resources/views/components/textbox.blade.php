<div>   
    @dd($data)
    <select name="{{$name}}" id="">
        @foreach($data as $val)  // Assuming that $data is an array of associative arrays, with 'id' and 'name' keys.
        <option  value="{{$val['id']}}">{{$val['name']}}</option>
        @endforeach
    </select>
        <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>