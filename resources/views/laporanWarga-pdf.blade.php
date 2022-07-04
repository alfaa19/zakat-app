<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>

<h1>Laporan Distribusi Zakat Fitrah Warga</h1>

<table id="customers">

    <tr>
        <th>No</th>
        <th>Kategori Mustahik</th>
        <th>Hak Beras</th>
        <th>Jumlah KK</th>
        <th>Total Beras</th>

    </tr>
    <tr>
        <td>1</td>
        <td> Fakir I </td>
        <td>{{$hfakir1}} Kg</td>
        <td>{{$kfakir1}}</td>
        <td>{{$bfakir1}} Kg</td>
    </tr>
    <tr>
        <td>2</td>
        <td> Fakir II </td>
        <td>{{$hfakir2}} Kg</td>
        <td>{{$kfakir2}}</td>
        <td>{{$bfakir2}} Kg</td>
    </tr>
    <tr>
        <td>3</td>
        <td> Miskin I </td>
        <td>{{$hmiskin1}} Kg</td>
        <td>{{$kmiskin1}}</td>
        <td>{{$bmiskin1}} Kg</td>
    </tr>
    <tr>
        <td>4</td>
        <td> Miskin II </td>
        <td>{{$hmiskin2}} Kg</td>
        <td>{{$kmiskin2}}</td>
        <td>{{$bmiskin2}} Kg</td>
    </tr>
    <tr>
        <td>5</td>
        <td> Mampu </td>
        <td>{{$hmampu}} Kg</td>
        <td>{{$kmampu}}</td>
        <td>{{$bmampu}} Kg</td>
    </tr>

</table>

</body>
</html>
