
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>

     <body>
  
        <h1>เข้าสู่ระบบ</h1>
        <form method="post" action="/checklogin">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <label for="fname">Email:</label><br>
                <input type="text" name="Email" ><br>
            <label for="lname">Password:</label><br>
                <input type="password"  name="Password" ><br><br>
            <input type="submit" value="เข้าสู่ระบบ">
        </form> 
        <p>หรือ</p>
        <a href="{{url('/login/facebook')}}"><button>facebook</button></a>
    </body>
</html>
