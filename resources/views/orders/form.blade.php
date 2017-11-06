<div class="form-group {{ $errors->has('cart_id') ? 'has-error' : ''}}">
    <label for="cart_id" class="col-md-4 control-label">{{ 'Cart Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cart_id" type="number" id="cart_id" value="{{ $order->cart_id or ''}}" required>
        {!! $errors->first('cart_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('addressDetails') ? 'has-error' : ''}}">
    <label for="addressDetails" class="col-md-4 control-label">{{ 'Addressdetails' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="addressDetails" type="textarea" id="addressDetails" required>{{ $order->addressDetails or ''}}</textarea>
        {!! $errors->first('addressDetails', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('postalCode') ? 'has-error' : ''}}">
    <label for="postalCode" class="col-md-4 control-label">{{ 'Postalcode' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="postalCode" type="textarea" id="postalCode" required>{{ $order->postalCode or ''}}</textarea>
        {!! $errors->first('postalCode', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('totalPrice') ? 'has-error' : ''}}">
    <label for="totalPrice" class="col-md-4 control-label">{{ 'Totalprice' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="totalPrice" type="number" id="totalPrice" value="{{ $order->totalPrice or ''}}" required>
        {!! $errors->first('totalPrice', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('shippingMethod_id') ? 'has-error' : ''}}">
    <label for="shippingMethod_id" class="col-md-4 control-label">{{ 'Shippingmethod Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="shippingMethod_id" type="number" id="shippingMethod_id" value="{{ $order->shippingMethod_id or ''}}" required>
        {!! $errors->first('shippingMethod_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('isPaid') ? 'has-error' : ''}}">
    <label for="isPaid" class="col-md-4 control-label">{{ 'Ispaid' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ isPaid }}" type="radio" value="1" {{ (isset($order) && 1 == $order->isPaid) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ isPaid }}" type="radio" value="0" @if (isset($order)) {{ (0 == $order->isPaid) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('isPaid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('isSent') ? 'has-error' : ''}}">
    <label for="isSent" class="col-md-4 control-label">{{ 'Issent' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ isSent }}" type="radio" value="1" {{ (isset($order) && 1 == $order->isSent) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ isSent }}" type="radio" value="0" @if (isset($order)) {{ (0 == $order->isSent) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('isSent', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('isDelivered') ? 'has-error' : ''}}">
    <label for="isDelivered" class="col-md-4 control-label">{{ 'Isdelivered' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ isDelivered }}" type="radio" value="1" {{ (isset($order) && 1 == $order->isDelivered) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ isDelivered }}" type="radio" value="0" @if (isset($order)) {{ (0 == $order->isDelivered) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('isDelivered', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
