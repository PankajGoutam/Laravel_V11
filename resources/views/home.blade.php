<<<<<<< HEAD
    <h1>Home Page</h1>
    <x-test-component msg="Successfull" class="success" />
    <x-test-component msg="Error Check" class="error"/>
    <x-test-component msg="Some Quick Info" class="info"/>
    <x-test-component msg="A Quick Warning" class="warning"/>

    <style>
        .success{
            background: lightgreen;
            color: green;
            padding: 7px 10px;
            border-radius: 10px;
            border: black solid 1px;
            display: inline-block;
            margin: 30px 20px;
        }

        .error{
            background: #ff000069;
            color: red;
            padding: 7px 10px;
            border-radius: 10px;
            border: black solid 1px;
            display: inline-block;
            margin: 30px 20px;
        }

        .info{
            background: #00c4ff69;
            color: blue;
            padding: 7px 10px;
            border-radius: 10px;
            border: black solid 1px;
            display: inline-block;
            margin: 30px 20px;
        }
        .warning{
            background: #efff005e;
            color: #ff5e00;
            padding: 7px 10px;
            border-radius: 10px;
            border: black solid 1px;
            display: inline-block;
            margin: 30px 20px;
        }
    </style>

=======
>>>>>>> e29d6a8df4e6929874930e6e4058c3573346000c
<h1>Home Page</h1>
<!-- To Check Current Page Url but it doesn't show params -->
<h3>{{URL::current()}} </h3>
{{url()->current()}}
<!-- 2nd Way To see Url with Params -->
<h3>{{URL::full()}}</h3>
{{url()->full()}}
<!-- current url -http://localhost:8000/user?name=anil
results :- with current() :- http://localhost:8000/user
with :- full() :- http://localhost:8000/user?name=anil
-->
<br>
<br>
<br>
<<<<<<< HEAD
<a href="/about">About Us</a>

   
=======
<a href="/about">About Us</a>
>>>>>>> e29d6a8df4e6929874930e6e4058c3573346000c
