<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
  <div class="container">
    <main>
      <div class="py-5 text-center mb-5">        
        <h2>Companies</h2>
      </div>
  
      <div class="row g-5">
        <div class="col-md-7 col-lg-8 m-auto">

          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Type</th>
              <th>Description</th>
              <th>Action</th>
            </tr>

            @foreach ($companies as $company)            
              <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->type}}</td>
                <td>{{$company->description}}</td>
                <td>
                  <div class="d-flex">
                    <a class="btn btn-secondary btn-sm me-2" href="{{route('companies.edit', [$company])}}">Edit</a>
                    <form method="post" action="{{route('companies.destroy', [$company])}}" >
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