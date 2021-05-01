<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Page Title</title>
</head>
<body>

<P>Place you verify email</P>


<a href="{{url('/updatecustomer')}}/{{base64_encode($Email)}}"><button>verify email</button></a>
<p>Thank you</p>




</body>
</html>