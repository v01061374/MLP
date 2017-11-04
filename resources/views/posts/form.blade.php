<div class="form-group {{ $errors->has('firstName') ? 'has-error' : ''}}">
    <label for="firstName" class="col-md-4 control-label">{{ 'Firstname' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="firstName" type="text" id="firstName" value="{{ $post->firstName or ''}}" required>
        {!! $errors->first('firstName', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lastName') ? 'has-error' : ''}}">
    <label for="lastName" class="col-md-4 control-label">{{ 'Lastname' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="lastName" type="text" id="lastName" value="{{ $post->lastName or ''}}" required>
        {!! $errors->first('lastName', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $post->email or ''}}" required>
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-md-4 control-label">{{ 'Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ $post->phone or ''}}" required>
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address_id') ? 'has-error' : ''}}">
    <label for="address_id" class="col-md-4 control-label">{{ 'Address Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="address_id" type="number" id="address_id" value="{{ $post->address_id or ''}}" required>
        {!! $errors->first('address_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
