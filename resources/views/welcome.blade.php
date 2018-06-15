<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 >Line Message</h2>

  
  
  
    
      {!! Form::open(['route' => 'line.input']) !!}
      <div class="row">
          <div class="col-md-9">
          {{ Form::text('message', null, ['class'=>'form-control','placeholder' => 'Input message here']) }}
          </div>
          <div class="col-md-3">
          {{ Form::submit('sent',['class'=>'btn-lg btn-primary']) }}
          </div>
      </div>
      {!! Form::close() !!}
<br>
      {!! Form::open(['route' => 'line.crypto']) !!}
      <div class="row">
          <div class="col-md-9">
          {{ Form::select('symbol', ['BTC'=>'Bitcoin', 'ETH'=>'Ethereum', 'BCC'=>'Bitcoin Cash'],null, ['class'=>'form-control','placeholder' => 'Select coin']) }}
          </div>
          <div class="col-md-3">
          {{ Form::submit('sent',['class'=>'btn-lg btn-primary']) }}
          </div>
      </div>
      {!! Form::close() !!}

  
</div>

</body>
</html>
