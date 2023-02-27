@foreach($types as $type)
<h6>{{$type->name}}</h6>
@foreach($type->extras as $extra)
<div class="d-flex">
    <div class="form-check form-check-inline">
        <input class="form-check-input" {{in_array($extra->id, $extras_selected) ? 'checked' : ''}} type="checkbox" name="extras[{{$extra->id}}][extra]" id="{{$extra->id}}" value="{{$extra->id}}">
        <label class="form-check-label" for="{{$extra->id}}">{{$extra->name}}(IQD {{$extra->price}})</label>
    </div>
    <div class="quantity pl-5">
        <input value="{{in_array($extra->id, $extras_selected) ? $extra_array[$extra->id] : ''}}" placeholder="Quantity" type="number" min="1" name="extras[{{$extra->id}}][quantity]" />
    </div>
</div>
@endforeach
@endforeach