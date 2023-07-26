<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelers</title>
    <style>
        #emp{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #emp td, #emp th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #emp tr:nth-child(even){
            background-color: aquamarine;
        }
        #emp th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ddd;
        }
        .pdf-btn{
        margin-top:30px;
        text-align: center;

    }
    .btn-primary{
            color: black;
            background-color: white;
            border-color: aquamarine;
            }
            .btn-primary:hover{
            color:white;
            background-color: aquamarine;
            border-color: white;
            }
    </style>
</head>
<body>
    <table id = "emp">
        <thead>
            <tr>
                <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Arrival Date</th>
                        <th>Release Date</th>
                        <th>Address</th>
                        <th>Sex</th>
                        <th>Age</th>
                        <th>Date of Birth</th>
                        <th>Contact No.</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($travelers as $traveler)
        <tr>
            <td>{{ $traveler->id }}</td>
            <td>{{ $traveler->firstName }}</td>
            <td>{{ $traveler->lastName }}</td>
            <td>{{ $traveler->arrival_date }}</td>
            <td>{{ $traveler->release_date }}</td>
            <td>{{ $traveler->address }}</td>
            <td>{{ $traveler->sex }}</td>
            <td>{{ $traveler->age }}</td>
            <td>{{ $traveler->date_of_birth }}</td>
            <td>{{ $traveler->contactNo }}</td>


        </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center pdf-btn">
        
      </div>
</body>
</html>
<style>