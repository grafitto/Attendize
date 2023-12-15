<section class="payment_gateway_options" id="gateway_{{$payment_gateway['id']}}">
  <h4>@lang("ManageAccount.mpesa_settings")</h4>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              {!! Form::label('consumerKey', trans("ManageAccount.mpesa_consumer_key"), array('class'=>'control-label ')) !!}
              {!! Form::text('mpesa[consumerKey]', $account->getGatewayConfigVal($payment_gateway['id'], 'consumerKey'),[ 'class'=>'form-control'])  !!}
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              {!! Form::label('consumerSecret', trans("ManageAccount.mpesa_consumer_secret"), array('class'=>'control-label ')) !!}
              {!! Form::text('mpesa[consumerSecret]', $account->getGatewayConfigVal($payment_gateway['id'], 'consumerSecret'),[ 'class'=>'form-control'])  !!}
          </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('shortCode', trans("ManageAccount.mpesa_shortcode"), array('class'=>'control-label ')) !!}
            {!! Form::text('mpesa[shortCode]', $account->getGatewayConfigVal($payment_gateway['id'], 'shortCode'),[ 'class'=>'form-control'])  !!}
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('password', trans("ManageAccount.mpesa_password"), array('class'=>'control-label ')) !!}
                {!! Form::text('mpesa[password]', $account->getGatewayConfigVal($payment_gateway['id'], 'password'),[ 'class'=>'form-control'])  !!}
            </div>
        </div>
    </div>
</section>
