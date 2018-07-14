<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name" class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $skill->name or old('name') }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="percent" class="bmd-label-floating">Percent</label>
            <input type="text" class="form-control" name="percent" id="percent" value="{{ $skill->percent or old('percent') }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" name="is_active" {{ (isset($skill) && $skill->is_active) ? 'checked' : '' }} type="checkbox">
                is Active ?
                <span class="form-check-sign">
              <span class="check"></span>
          </span>
            </label>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="5">
        {{ $skill->description or old('description') }}
    </textarea>
</div>
<div class="form-group">
    <label for="tools">Tools</label>
    <textarea class="form-control" name="tools" id="tools" cols="30" rows="5">
        {{ $skill->tools or old('tools') }}
    </textarea>
</div>
