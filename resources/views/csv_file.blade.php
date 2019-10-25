<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Import Export Data in CSV File</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
     <br />
     <h3 align="center">Laravel 5.8 - Import Export Data in CSV File</h3>
     <br />
     <div class="panel panel-default">
          <div class="panel-heading">
           <h3 class="panel-title">Laravel 5.8 - Import Export Data in CSV File</h3>
          </div>
          <div class="panel-body">
           <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".csv">
                  <br>
                  <button class="btn btn-success">Import User Data</button>
                  <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
           </form>
              <table class="table table-bordered table-striped">
 <thead>
  <tr>
   <th>Nomor Urut</th>
   <th>Tanggal</th>
   <th>Kode</th>
   <th>Keterangan</th>
   <th>No. Bukti</th>
   <th>Mutasi Debit</th>
   <th>Mutasi Kredit</th>
   <th>Saldo</th>
   <th>Kode Rekening</th>
  </tr>
 </thead>
 <tbody>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->nomor_urut }}</td>
   <td>{{ $row->tanggal }}</td>
   <td>{{ $row->kode }}</td>
   <td>{{ $row->keterangan }}</td>
   <td>{{ $row->no_bukti }}</td>
   <td>{{ $row->mutasi_debit }}</td>
   <td>{{ $row->mutasi_kredit }}</td>
   <td>{{ $row->saldo }}</td>
   <td>{{ $row->kode_rekening }}</td>
  </tr>
 @endforeach
 </tbody>
</table>

{!! $data->links() !!}
          </div>
      </div>
  </div>
 </body>
</html>
