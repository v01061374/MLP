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
</div><div class="form-group {{ $errors->has('saturday') ? 'has-error' : ''}}">
    <label for="saturday" class="col-md-4 control-label">{{ 'Saturday' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ saturday }}" type="radio" value="1" {{ (isset($store) && 1 == $store->saturday) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ saturday }}" type="radio" value="0" @if (isset($store)) {{ (0 == $store->saturday) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('saturday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sunday') ? 'has-error' : ''}}">
    <label for="sunday" class="col-md-4 control-label">{{ 'Sunday' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ sunday }}" type="radio" value="1" {{ (isset($store) && 1 == $store->sunday) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ sunday }}" type="radio" value="0" @if (isset($store)) {{ (0 == $store->sunday) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('sunday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('monday') ? 'has-error' : ''}}">
    <label for="monday" class="col-md-4 control-label">{{ 'Monday' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ monday }}" type="radio" value="1" {{ (isset($store) && 1 == $store->monday) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ monday }}" type="radio" value="0" @if (isset($store)) {{ (0 == $store->monday) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('monday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tuesday') ? 'has-error' : ''}}">
    <label for="tuesday" class="col-md-4 control-label">{{ 'Tuesday' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ tuesday }}" type="radio" value="1" {{ (isset($store) && 1 == $store->tuesday) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ tuesday }}" type="radio" value="0" @if (isset($store)) {{ (0 == $store->tuesday) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('tuesday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('wednesday') ? 'has-error' : ''}}">
    <label for="wednesday" class="col-md-4 control-label">{{ 'Wednesday' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ wednesday }}" type="radio" value="1" {{ (isset($store) && 1 == $store->wednesday) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ wednesday }}" type="radio" value="0" @if (isset($store)) {{ (0 == $store->wednesday) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('wednesday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('thursday') ? 'has-error' : ''}}">
    <label for="thursday" class="col-md-4 control-label">{{ 'Thursday' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ thursday }}" type="radio" value="1" {{ (isset($store) && 1 == $store->thursday) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ thursday }}" type="radio" value="0" @if (isset($store)) {{ (0 == $store->thursday) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('thursday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('friday') ? 'has-error' : ''}}">
    <label for="friday" class="col-md-4 control-label">{{ 'Friday' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ friday }}" type="radio" value="1" {{ (isset($store) && 1 == $store->friday) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ friday }}" type="radio" value="0" @if (isset($store)) {{ (0 == $store->friday) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('friday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('openingHour') ? 'has-error' : ''}}">
    <label for="openingHour" class="col-md-4 control-label">{{ 'Openinghour' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="openingHour" type="number" id="openingHour" value="{{ $store->openingHour or ''}}" >
        {!! $errors->first('openingHour', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('closingHour') ? 'has-error' : ''}}">
    <label for="closingHour" class="col-md-4 control-label">{{ 'Closinghour' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="closingHour" type="number" id="closingHour" value="{{ $store->closingHour or ''}}" >
        {!! $errors->first('closingHour', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
