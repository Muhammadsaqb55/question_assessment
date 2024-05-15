<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="login" method="post">
                @csrf
                <center>
                <div style="background:blue;padding:80px 20px; width:190px;">
                <input type="text" placeholder="Enter Your Name" id="name" name="name" required />
                <br>
                <br>            
                <button type=submit> Next </button>
               </div> 
               </center>
                </form>
                    
            </div>
        </div>
    </div>
</div>
</body>
</html>