<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $category->title or ''}}" required>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="col-md-4 control-label">{{ 'Photo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="photo" type="text" id="photo" value="{{ $category->photo or ''}}" >
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('parent_id') ? 'has-error' : ''}}">
    <label for="parent_id" class="col-md-4 control-label">{{ 'Parent Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="parent_id" type="number" id="parent_id" value="{{ $category->parent_id or ''}}" >
        {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
