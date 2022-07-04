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

<h1>Laporan Distribusi Zakat Fitrah Mustahik</h1>

<table id="customers">

    <tr>
        <th>Number</th>
        <th>Kategori Mustahik</th>
        <th>Hak Beras</th>
        <th>Jumlah KK</th>
        <th>Total Beras</th>

    </tr>
    <tr>
        <td>1</td>
        <td> Fisabilillah (Ustad)  </td>
        <td>{{$hustad}} Kg</td>
        <td>{{$kustad}}</td>
        <td>{{$bustad}} Kg</td>
    </tr>
    <tr>
        <td>2</td>
        <td> Fisabilillah (Santri) </td>
        <td>{{$hsantri}} Kg</td>
        <td>{{$ksantri}}</td>
        <td>{{$bsantri}} Kg</td>
    </tr>
    <tr>
        <td>3</td>
        <td> Ibnu Sabil </td>
        <td>{{$hibnusabil}} Kg</td>
        <td>{{$kibnusabil}}</td>
        <td>{{$bibnusabil}} Kg</td>
    </tr>
    <tr>
        <td>4</td>
        <td> Mualaf </td>
        <td>{{$hmualaf}} Kg</td>
        <td>{{$kmualaf}}</td>
        <td>{{$bmualaf}} Kg</td>
    </tr>

</table>

</body>
</html>
