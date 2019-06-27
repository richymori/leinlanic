<div class="form-group">
    <label for="{{$name ?? $label ?? ''}}">
        {{$label  ?? 'New text input $label here'}}
    </label>
    <input type="text" name="{{$name  ?? $label ?? ''}}" id="{{$name  ?? $label ?? ''}}" class="form-control" placeholder="{{$placeholder ?? 'Escriba'}}">
</div>