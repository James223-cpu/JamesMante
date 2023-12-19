<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> National Aeronautics and Space Administration Program</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-image: url('https://www.tripsavvy.com/thmb/TCsmO1_jNE6JScoq4buhipd5kx0=/3741x2499/filters:fill(auto,1)/us-space-history-apollo-1152683403-d27ff1ecee084f1f9ee753f3cc1928d2.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .buttons {
        background-color: rgba(192, 192, 192, 0.822);
        color: #ffffff;
        padding: 15px;
        }   

    ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        /* margin-top: 25px; */
    }

    li {
        margin-right: 15px;
        font-size: 20px;
    }

    a {
        text-decoration: none;
        color: black;
        padding: 12px;
        border-radius: 8px;
        transition: background-color 0.1s ease;
    }


    a:hover, a.active {
        background-color:blue;
    }

    .container {
        /* background-color: rgba(0, 0, 255, 0.651); */
        padding: 30px;
        /* margin: 2% 6%; */
        /* border-radius: 10px; */
        /* border-style: inset; */
        /* box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); */
    }
    .name { 
        padding-left: 580px;    
    }
    img {   
        height: 100px;
        /* margin-right: 170px; */
    }
    h1 {
        color: white;
        text-align: center;
    }
    label {
        color: black;
        text-align: center;
    }
    .row {
        justify-content: center;
    }
    .logo {
        text-align: center;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
    }
    .table-striped>tbody>tr:nth-child(odd)>td, 
    .table-striped>tbody>tr:nth-child(odd)>th {
    background-color: blue; // Choose your own color here
    }
    #h1modal {
        color: black;
    }
    form {
        background-color: rgba(0, 0, 255, 0.651);
        padding: 10px;
        border-radius: 10px;
    }
</style>    
</head>
<body>

  
    <div class="buttons">
        <div class="logo">
            <img src="https://cdn.wallpapersafari.com/72/34/ECT6hw.png" alt="logo">
        </div>  

        <h1 class="title" >NASA Astronaut Candidate Program</h1>
        
        <ul>
            
            {{-- <li><a href="{{ url('/home') }}"    class="{{ Request::is('home') ? 'active' : '' }}">Power Strength Gym</a></li> --}}
            <li><a href="{{ url('/user')}}" class="{{ Request::is('user') ? 'active' : '' }}"> Students</a></li>
            <li><a href="{{ url('/about')}}" class="{{ Request::is('about') ? 'active' : '' }}">Astronaut Instructors </a></li>
            <li><a href="{{ url('/course')}}" class="{{ Request::is('course') ? 'active' : '' }}"> Programs </a></li>

        </ul>   
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
