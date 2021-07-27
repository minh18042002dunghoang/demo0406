<label for="{{$name}}" class= "{{$labelClass ?? 'col-sm-2 col-form-label p-0'}}">{{$label}}</label>
<div class="{{$textClass ?? 'col-sm-4 d-inline'}}">
    <input type="{{$type ?? 'date'}}" name="{{$name}}" id="{{$name}}" class="form-control d-inline w-25" value={{ old($name) }}>
</div>
{!!showErrors($errors, $name)!!}