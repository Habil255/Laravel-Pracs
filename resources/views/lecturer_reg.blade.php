
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body>
    
     <form method ="POST"action = "{{ route('lecturer_info') }}">
      @csrf
     <div class="card col-md-6 " style="margin-top: 3%; margin-left: 20%;">
     <div class="card-header"> <h4><center>Lecturer Registration</center></h4></div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Phone Number</span>
                    <input type="text" name="phonenumber" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="email" name="email" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Area of Study</span>
                    <input type="text" name="area_of_study" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Year of Accomplishing Studies</span>
                    <input type="year" name="yr_of_acc" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date of Birth</span>
                    <input type="date" name="dob" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div style="margin-left: 60%;">
                      <input type="submit" value="Save" class="btn btn-success" />
                      </div>
            </div>
    </div>
     
    </form>
</body>
</html> 