<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
  <div class="container">
    <main>
      <div class="py-5 text-center mb-5">        
        <h2>Clients</h2>
      </div>
  
      <div class="row g-5">
        <div class="col-md-7 col-lg-8 m-auto">

          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Usrename</th>
              <th>Company ID</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>

            @foreach ($clients as $client)            
              <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->surname}}</td>
                <td>{{$client->username}}</td>
                <td>{{$client->company_id}}</td>
                <td>{{$client->image_url}}</td>
                <td>
                  <div class="d-flex">
                    <a class="btn btn-secondary btn-sm me-2" href="{{route('client.edit', [$client])}}">Edit</a>
                    <form method="post" action="{{route('client.destroy', [$client])}}" >
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      @csrf
                    </form>             
                  </div>     
                </td>               
              </tr>    
            @endforeach

          </table>

        </div>
      </div>
    </main>
  </div>
  
</body>
</html>