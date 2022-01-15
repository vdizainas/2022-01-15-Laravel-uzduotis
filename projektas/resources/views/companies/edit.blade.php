<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Company data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <main>
      <div class="py-5 text-center mb-5">        
        <h2>Create Company data</h2>
      </div>
      <p>{{$company->name}}</p>
      <div class="row g-5">
        <div class="col-md-7 col-lg-8 m-auto">
          
          {{-- Form --}}
       
          <form method="post" action="{{route('companies.update', [$company])}}" class="needs-validation" novalidate="">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="company_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="company_name" placeholder="" value="{{$company->name}}" required="" name="company_name">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="company_type" class="form-label">Type</label>
                <input type="text" class="form-control" id="company_type" placeholder="" value="{{$company->type}}" required="" name="company_type">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              <div class="col-sm-12">
                <label for="company_description" class="form-label">Description</label>                
                <input type="text" class="form-control" id="company_description" name="company_description" value="{{$company->description}}">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

            <hr class="my-4">
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">Submint</button>
            @csrf
          </form>

        </div>
      </div>
    </main>
  
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">©2022</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="">Clients</a></li>
        <li class="list-inline-item"><a href="#">Companies</a></li>
      </ul>
    </footer>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>