
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
    
     <form method ="POST"action = "{{ route('courses_info') }}">
      @csrf
     <div class="card col-md-6 " style="margin-top: 3%; margin-left: 20%;">
     <div class="card-header"> <h4><center>Courses Registration</center></h4></div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Course Name</span>
                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Department</span>
                    <input type="text" name="phonenumber" class="form-control" aria-label="Sizing example input" value="" aria-describedby="inputGroup-sizing-default">
                  </div>
                  
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lecturer Name</span>
                    <input type="text" class="typeahead form-control" autocomplete="off" name="lecturer_name" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
<script type="text/javascript">
  url="{{route('search.lecturer')}}";
  $('input.typeahead').typeahead({
      source:function(value,process){
          return $.get(url,{value:value}, function(data){
              return process(data);
          });
      } 
      });
  
</script>
</html> 