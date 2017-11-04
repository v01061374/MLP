<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="col-md-4 control-label">{{ 'Photo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="photo" type="text" id="photo" value="{{ $photo->photo or ''}}" required>
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="col-md-4 control-label">{{ 'Product Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="product_id" type="number" id="product_id" value="{{ $photo->product_id or ''}}" required>
        {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
