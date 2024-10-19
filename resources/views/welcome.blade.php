<h1>Welcome To Laravel 11 Tutorial</h1>
<a href="/about">About Us</a>
<!-- Alternate Way -->
 <br><br><br>
 <a href="{{URL::to('about')}}">About Page</a>
 <br><br><br>
 <a href="{{URL::to('home')}}">Home Page</a>
 <!-- With Param -->
 <br><br><br>
 <a href="{{URL::to('about',['aayan'])}}">About Aayan</a>

//Named Routes
<a href="{{route('name')}}">Click Me</a>
<br>
<br>
<a href="/show">Show Me</a>
<br>
<br>
<a href="{{ route('user', ['name' => 'aayan']) }}">User</a>
<<<<<<< HEAD
//End Of Named Routes
=======
//End Of Named Routes
>>>>>>> e29d6a8df4e6929874930e6e4058c3573346000c
