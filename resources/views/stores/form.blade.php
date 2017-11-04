<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $store->title or ''}}" required>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-md-4 control-label">{{ 'Address' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="address" type="textarea" id="address" required>{{ $store->address or ''}}</textarea>
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
    <label for="lat" class="col-md-4 control-label">{{ 'Lat' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="lat" type="number" id="lat" value="{{ $store->lat or ''}}" required>
        {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
    <label for="lng" class="col-md-4 control-label">{{ 'Lng' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="lng" type="number" id="lng" value="{{ $store->lng or ''}}" required>
        {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('owner_id') ? 'has-error' : ''}}">
    <label for="owner_id" class="col-md-4 control-label">{{ 'Owner Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="owner_id" type="number" id="owner_id" value="{{ $store->owner_id or ''}}" required>
        {!! $errors->first('owner_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
