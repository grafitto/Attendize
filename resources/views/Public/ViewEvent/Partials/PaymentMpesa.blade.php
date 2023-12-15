<form class="online_payment" action="<?php echo route('postCreateOrder', ['event_id' => $event->id]); ?>" method="post" id="mpeesa-payment-form">
  <div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            {!! Form::label("order_phone_number", trans('Public_ViewEvent.mpesa_phone_number')) !!}
            {!! Form::text("order_phone_number", null, ['required' => 'required', 'class' => 'form-control', 'placeholder' => 'e.g +254xxxxxxxxx']) !!}
        </div>
    </div>
  </div>

  {!! Form::token() !!}

  <input class="btn btn-lg btn-success card-submit" style="width:100%;" type="submit" value="@lang("Public_ViewEvent.request_mpesa_payment")">

</form>
