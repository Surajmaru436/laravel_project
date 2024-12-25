<div>   
    <select name="{{$name}}" id="">
        @foreach($data as $val)
        <option  value="{{$val['id']}}">{{$val['name']}}</option>
        @endforeach
    </select>
        <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>