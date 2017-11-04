<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="col-md-4 control-label">{{ 'Country' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="country" type="text" id="country" value="{{ $address->country or ''}}" required>
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="col-md-4 control-label">{{ 'City' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="city" type="text" id="city" value="{{ $address->city or ''}}" required>
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
    <label for="details" class="col-md-4 control-label">{{ 'Details' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="details" type="textarea" id="details" >{{ $address->details or ''}}</textarea>
        {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('customer_id') ? 'has-error' : ''}}">
    <label for="customer_id" class="col-md-4 control-label">{{ 'Customer Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="customer_id" type="number" id="customer_id" value="{{ $address->customer_id or ''}}" >
        {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
