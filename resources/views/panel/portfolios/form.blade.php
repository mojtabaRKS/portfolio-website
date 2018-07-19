<div class="row">
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $portfolio->name or old('name') }}">
            @if ($errors->has('name'))
                <span class="help-block">
                    <span>{{ $errors->first('name') }}</span>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('link') ? ' has-error' : '' }}">
            <label for="link" class="bmd-label-floating">Link</label>
            <input type="text" class="form-control" name="link" id="link"
                   value="{{ $portfolio->link or old('link') }}">
            @if ($errors->has('link'))
                <span class="help-block">
                    <span>{{ $errors->first('link') }}</span>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('link') ? ' has-error' : '' }}">
            <select class="select2 form-control" multiple name="attributes[]" title="attributes">
                @foreach($attributes as $attribute)
                    <option value="{{ $attribute->id }}"

                    >{{ $attribute->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('attributes'))
                <span class="help-block">
                    <span>{{ $errors->first('attributes') }}</span>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ $portfolio->description or old('description') }}</textarea>
    @if ($errors->has('description'))
        <span class="help-block">
                    <span>{{ $errors->first('description') }}</span>
                </span>
    @endif
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="text-white btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="filepath" value="
                    @if(isset($portfolio) && !empty($portfolio->file))
                {{ $portfolio->file->name }}
                @endif
                        ">
            </div>
        </div>
        <div class="col-md-3">
            <img id="holder" style="margin-top:15px;max-height:100px;"
                 src="
                    @if(isset($portfolio) && !empty($portfolio->file))
                 {{ asset($portfolio->file->name) }}
                 @endif
                         ">
        </div>
    </div>

</div>
