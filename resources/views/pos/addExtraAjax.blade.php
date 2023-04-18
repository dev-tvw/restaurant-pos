@foreach($types as $type)
<h6>{{$type->name}}</h6>
@foreach($type->extras as $extra)
<div class="d-flex">
        <div class="row">
                <div class="col-lg-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" {{in_array($extra->id, $extras_selected) ? 'checked' : ''}} type="checkbox" name="extras[{{$extra->id}}][extra]" id="{{$extra->id}}" value="{{$extra->id}}">
                        <label class="form-check-label" for="{{$extra->id}}">{{$extra->name}}(IQD {{$extra->price}})</label>
                    </div>
               </div>
               <br>
            <div class="col-lg-6">
                    <div class="quantity pl-5">
                        <input class="form-control" value="{{in_array($extra->id, $extras_selected) ? $extra_array[$extra->id] : '1'}}" placeholder="Quantity" type="number" min="1" name="extras[{{$extra->id}}][quantity]" />
                    </div>
            </div>
    </div>
</div>
@endforeach
@endforeach
