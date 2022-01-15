<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create client</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <main>
      <div class="py-5 text-center mb-5">        
        <h2>Create client</h2>
      </div>
  
      <div class="row g-5">
        <div class="col-md-7 col-lg-8 m-auto">
          
          {{-- Form --}}
          <form method="POST" action="{{route('client.store')}}" class="needs-validation" novalidate="">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="client_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="client_name" placeholder="" value="" required="" name="client_name">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="client_surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="client_surname" placeholder="" value="" required="" name="client_surname">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="client_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="client_username" placeholder="" value="" required="" name="client_username">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="client_company_id" class="form-label">Companie ID</label>
                <input type="number" class="form-control" id="client_company_id" placeholder="" value="" required="" name="client_company_id">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-12 mt-4">
                <p class="mb-2">Photo</p> 
                <div class="input-group mb-3">       
                  <input type="file" class="form-control" id="client_photo" name="client_photo">
                </div>
              </div>
            <hr class="my-4">
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">Add</button>
            @csrf
          </form>

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