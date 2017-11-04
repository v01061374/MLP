<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $product->title or ''}}" required>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ $product->description or ''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="col-md-4 control-label">{{ 'Photo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="photo" type="text" id="photo" value="{{ $product->photo or ''}}" >
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="col-md-4 control-label">{{ 'Category Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="category_id" type="number" id="category_id" value="{{ $product->category_id or ''}}" >
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('store_id') ? 'has-error' : ''}}">
    <label for="store_id" class="col-md-4 control-label">{{ 'Store Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="store_id" type="number" id="store_id" value="{{ $product->store_id or ''}}" required>
        {!! $errors->first('store_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('offPercent') ? 'has-error' : ''}}">
    <label for="offPercent" class="col-md-4 control-label">{{ 'Offpercent' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="offPercent" type="number" id="offPercent" value="{{ $product->offPercent or ''}}" >
        {!! $errors->first('offPercent', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inStock') ? 'has-error' : ''}}">
    <label for="inStock" class="col-md-4 control-label">{{ 'Instock' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="inStock" type="number" id="inStock" value="{{ $product->inStock or ''}}" required>
        {!! $errors->first('inStock', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
