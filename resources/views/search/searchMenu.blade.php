<div class="box-container">

    @foreach($data2 as $data2)
            <div class="box">
                <div class="image">
                    <img src="/ImageMenu/{{$data->image}}" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                    </div>
                    <h3>{{$data->title}}</h3>
                    <p> {{$data->description}}</p>
                    <span class="price">${{$data->price}}</span>

                    <input type="submit" class="btn" value="add to cart">
{{--                    <input type="number" name="quantity" value="1"  style="text-align: center; margin: 10px;border: 1px solid var(--bs-green);">--}}
                </div>
            </div>
        </form>
    @endforeach
</div>
