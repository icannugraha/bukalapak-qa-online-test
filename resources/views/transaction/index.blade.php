
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="author" content="Ismandra Eka Nugraha">
    <link rel="icon" href="https://s1.bukalapak.com/images/logo/ic_192x192_0_red_31052016.png">

    <title>{{ config('app.name') }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <h4 class="text-muted"><b>{{ config('app.name') }}</b></h4>
      </div>

      <div class="jumbotron">
        <h2>
          <strong>Transaction Successful!</strong>
        </h2>
        <br>
        <div class="panel panel-default">
          <div class="panel-body">
            <strong>Transaction ID:</strong> {{ $transaction->trx_id }}
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <strong>Seller:</strong> {{ $transaction->seller_name }} <br>
          <strong>Delivery Service:</strong> TIKI <br>
          <strong>Order Date:</strong> {{ $transaction->date_order }} <br>
          <strong>Address Shipment:</strong> KAMPUNG DATOK KERAMAT <br>
          <br>
          <p><a class="btn btn-default" href="{{ url('/') }}" role="button">Main Menu</a></p>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2017 {{ config('app.name') }}</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
