<div>
    <style>
        div {
            max-width: 400px; /* Set a max width for the form */
            margin: 20px auto; /* Center the form horizontally */
            padding: 20px; /* Add some padding inside the div */
            border: 1px solid #ccc; /* Add a light border */
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            background-color: #f9f9f9; /* Light background color */
        }

        h1 {
            text-align: center; /* Center the heading */
            color: #333; /* Dark gray color for text */
        }

        label {
            display: block; /* Make labels block elements */
            margin: 10px 0 5px; /* Add space around labels */
            color: #555; /* Medium gray color for labels */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%; /* Full width input */
            padding: 10px; /* Padding inside inputs */
            margin-bottom: 15px; /* Space below inputs */
            border: 1px solid #ccc; /* Light border */
            border-radius: 4px; /* Rounded corners */
            box-sizing: border-box; /* Include padding in width */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            border: none; /* No border */
            padding: 10px 15px; /* Padding for the button */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            width: 100%; /* Full width button */
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Error styling */
        .error-message {
            color: red; /* Red text for errors */
            font-size: 0.9em; /* Slightly smaller text for errors */
            margin-top: -10px; /* Move error closer to input */
            margin-bottom: 10px; /* Add space below error */
            display: block; /* Ensure it's on its own line */
        }

        /* Optional: Highlight invalid input fields */
        input.is-invalid {
            border-color: red; /* Red border for invalid inputs */
        }
    </style>
    <!-- {{print_r($errors)}} -->
    <!-- @if($errors->any()){
        @foreach($errors->all() as $error)
        <div>
            {{$error}}
        </div>
     }
     @endforeach
     @endif -->
    <h1>Add New User</h1>
    <form action="addUser" method="post">
        @csrf  
        <label for="Name">Name:</label>
        <input type="text" placeholder="Enter Your Name" id="Name" name="name" value="{{old('name')}}" class="@error('name') is-invalid @enderror"><br>
        @error('name')
            <span class="error-message">{{ $message }}</span>
        @enderror

        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Enter Your Email" name="email" class="@error('email') is-invalid @enderror"><br>
        @error('email')
            <span class="error-message">{{ $message }}</span>
        @enderror

        <label for="pwd">Password:</label>
        <input type="password" id="pwd" placeholder="Type A Strong Password" name="password" class="@error('password') is-invalid @enderror"><br>
        @error('password')
            <span class="error-message">{{ $message }}</span>
        @enderror

        <input type="submit" value="Submit">
    </form>
</div>