<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @page {
            margin: 10px;
            padding: 0px;
        }
        p, h1 {
            margin: 0px;
            padding: 0px;
        }
        .page-break {
            page-break-after: always;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            padding: 0 45px;
        }
        th {
            background-color: #dddddd;
            border: 1px solid #000;
            text-align: center;
        }
        td {
            border: 1px solid #000;
            text-align: center;
        }
        .td-left {
            text-align: left !important;
            padding-left: 2px;
        }
        hr {
            margin: 5px 5px;
        }
        .column {
            float: left;
            width: 50%;
        }

/* Clear floats after the columns */
        .container:after {
            content: "";
            display: table;
            clear: both;
            margin: 0px 5px;
        }
        .logo {
            width: 100px;
            height: 100px;
            padding: 0px 10px;
            margin-top: 15px;
        }
        .logo-container {
            padding: 0;
        }
        .hr-currency {
            margin: 0 !important;
        }
    </style>
</head>
<body>
@foreach ($enrollees as $enrollee)
<div class="container">
    <div class="column logo-container">
        <img src="https://i.imgur.com/0lXdCjU.jpeg" class="logo">
        <img src="https://i.imgur.com/moh0QKH.jpg" class="logo">
        <img src="https://i.imgur.com/NbCvADc.jpg" class="logo">
    </div>
    <div class="column">
        <p style="font-weight:bold">Republic of the Philippines</p>
        <p>Department of Interior and Local Government</p>
        <p style="font-weight:bold; color:blue">PHILIPPINE COUNCILORS LEAGUE</p>
        <p style="font-weight:bold; font-size:1.5em"">PCL LEGISLATIVE ACADEMY</p>
        <p>PCL Center & Hostel: Coastal Road, Barangay Daneil Fajardo, Las Piñas City</p>
    </div>
</div>
    <hr style= "border: 3px solid red">
    <hr style= "border: 3px solid blue" >
    <p>{{$enrollee}}</p>
    <div class="container" style="margin: 10px 0 0 90px; ">
        <div class="column">
            <p style="margin-bottom: 40px;">Prepared By:</p>
            <p style="font-weight: bold">JAMES LOUIE P. BALDOZA, MPA</p>
            <p style="margin-left: 20px;">Program/Accounting Coordinator</p>
        </div>
        <div class="column" style="margin-left: 30px;">
            <p style="margin-bottom: 40px;">Noted By:</p>
            <p style="font-weight: bold">DR HELARIO T. CAMINERO</p>
            <p style="margin-left: 45px;">Executive Director</p>
        </div>
    </div>

    @if(!$loop->last)
        <div class="page-break"></div>
    @endif
@endforeach
</body>
</html>
