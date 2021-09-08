<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
    
</head>
<body>
    {{-- <div class="card col-md-6" style="margin-top: 3%; margin-left: 20%;">
        <div class="card-header">
            Search For student
        </div>
        <div class="card-body">
            <div class="form-group">
                <input class="typeahead form-control" name="search" type="text" placeholder="Search...">
                
            </div>
        </div>
    </div>
     --}}
     <form action = "{{route('student')}}">
       
     <div class="card col-md-6" style="margin-top: 3%; margin-left: 20%;">
        <div class="card-header">
            Search For student
        </div>
        <div class="input-group mb-3" style="padding-top: 2%; padding-left: 2%; padding-right: 2%;">
            <input type="text" class="typeahead form-control" name="search" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </div>
    </div>
     </form>

    
    @foreach ($students as $student)
    <div class="card col-md-6 " style="margin-top: 3%; margin-left: 20%;">
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" value="{{$student->name}}" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Course</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" value="{{$student->course}}" aria-describedby="inputGroup-sizing-default">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Year of Registration</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" value="{{$student->yr_of_reg}}" aria-describedby="inputGroup-sizing-default">
                  </div>
                   
                    
            </div>
    </div>
        
    @endforeach
{{-- @else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif --}}
     {{-- @foreach($students as $student)
       <h2> {{$student->id}}</h2>
    @endforeach --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script type="text/javascript">
    url="{{route('complete')}}";
    $('input.typeahead').typeahead({
        source:function(value,process){
            return $.get(url,{value:value}, function(data){
                return process(data);
            });
        } 
        });
    // var path = "{{ route('complete') }}";
    // $('input.typeahead').typeahead({
    //     source:  function (query, process) {
    //     return $.get(path,{ query:query}, function (data) {
    //             return process(data);
    //         });
    //     }
    // });
</script>
</html>