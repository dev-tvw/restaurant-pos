@foreach($types as $type)
<h6>{{$type->name}}</h6>
@foreach($type->extras as $extra)
<div class="form-check form-check-inline">
    <input class="form-check-input" {{in_array($extra->id, $extras_selected) ? 'checked' : ''}} type="checkbox" name="extras[]" id="{{$extra->id}}" value="{{$extra->id}}">
    <label class="form-check-label" for="{{$extra->id}}">{{$extra->name}} &nbsp;&nbsp;&nbsp;  IQD {{$extra->price}}</label>
</div>
@endforeach
@endforeach