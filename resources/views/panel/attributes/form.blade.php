<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $attribute->name or old('name') }}">
            @if ($errors->has('name'))
                <span class="help-block">
                    <span>{{ $errors->first('name') }}</span>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="bmd-label-floating" for="icon">Icon</label>
            <input  class="form-control" type="text" name="icon" id="icon" value="{{ $attribute->icon or old('icon') }}">
            @if ($errors->has('icon'))
                <span class="help-block">
                    <span>{{ $errors->first('icon') }}</span>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ $attribute->description or old('description') }}</textarea>
    @if ($errors->has('description'))
        <span class="help-block">
                    <span>{{ $errors->first('description') }}</span>
                </span>
    @endif
</div>

