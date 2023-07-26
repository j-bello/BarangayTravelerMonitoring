<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COVID-19 Traveler Monitoring Records</title>
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





            <strong>First Name:</strong>
            <input type="text" disabled name="name" value="{{ $monitoring->firstName }}" class="form-control" placeholder="Name">
            <strong>Last Name:</strong>
            <input type="text" disabled name="name" value="{{ $monitoring->lastName }}" class="form-control" placeholder="Name">





    <div class="text-center pdf-btn">

      </div>
</body>
</html>
