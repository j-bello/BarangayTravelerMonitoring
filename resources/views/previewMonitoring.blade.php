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
            font-size: xx-small;
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


                        <th>Day 1</th>
                        <th>Day 2</th>
                        <th>Day 3</th>
                        <th>Day 4</th>
                        <th>Day 5</th>
                        <th>Day 6</th>
                        <th>Day 7</th>
                        <th>Day 8</th>
                        <th>Day 9</th>
                        <th>Day 10</th>
                        <th>Day 11</th>
                        <th>Day 12</th>
                        <th>Day 13</th>
                        <th>Day 14</th>

                        <th>Status</th>
                        <th>Result</th>

            </tr>
        </thead>
        <tbody>
            @foreach($monitorings as $monitoring)
            <tr>
                <td>{{ $monitoring->id }}</td>
                <td>{{ $monitoring->firstName }}</td>
                <td>{{ $monitoring->lastName }}</td>

                <td>{{ $monitoring->day_one }}</td>
                <td>{{ $monitoring->day_two }}</td>
                <td>{{ $monitoring->day_three }}</td>
                <td>{{ $monitoring->day_four }}</td>
                <td>{{ $monitoring->day_five }}</td>
                <td>{{ $monitoring->day_six }}</td>
                <td>{{ $monitoring->day_seven }}</td>
                <td>{{ $monitoring->day_eight }}</td>
                <td>{{ $monitoring->day_nine }}</td>
                <td>{{ $monitoring->day_ten }}</td>
                <td>{{ $monitoring->day_eleven }}</td>
                <td>{{ $monitoring->day_twelve }}</td>
                <td>{{ $monitoring->day_thirteen}}</td>
                <td>{{ $monitoring->day_fourteen }}</td>


                <td>{{ $monitoring->status }}</td>
                <td>{{ $monitoring->result }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="text-center pdf-btn">

      </div>
</body>
</html>
