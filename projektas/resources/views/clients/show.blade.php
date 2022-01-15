<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About client</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <main>
      <div class="py-5 text-center mb-5">        
        <h2>About client</h2>
      </div>      
      <div class="row g-5">
        <div class="col-md-7 col-lg-8 m-auto">
          <div class="list-group list-group-flush border-bottom scrollarea">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{$client->id}} {{$client->name}} {{$client->surname}}</strong>
                <small>{{$client->image_url}}</small>
              </div>
              <div class="col-10 mb-1 small">{{$client->username}} | {{$client->company_id}}</div>
          </div>
        </div>
      </div>
    </main>
  
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">©2022</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="{{route('client.index')}}">Clients</a></li>
        <li class="list-inline-item"><a href="{{route('companies.index')}}">Companies</a></li>
      </ul>
    </footer>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>