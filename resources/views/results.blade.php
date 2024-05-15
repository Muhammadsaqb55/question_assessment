<!DOCTYPE html>
<html>
<head>
    <title>Questions</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             
                <center>
                <div style="background:blue;padding:20px 20px; width:190px;">
                     <h2>Result</h2>
                     <p style="color:white;">Correct Answer: <span>({{$correct_answer}})</span></p>
                     <p style="color:white;">Wrong Answer: <span>({{$wrong_answer}})</span></p>
                     <p style="color:white;">Skip Answer: <span>({{$skip_answer}})</span></p>
               </div> 
               </center>
              
            </div>
        </div>
    </div>
</div>

</body>
</html>