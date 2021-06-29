@extends('layouts.main')

@section('title', 'Friend')

@section('content')

<style>
table {
border

-collapse: collapse;

}
table, th, td {
border: 1px solid black;
text
-align: center;

}
</style>
<table>
    <caption>My Best Friends</caption>
    <colgroup>
        <col style="width: 5em;"  />
    </colgroup>
    <thead>
        <tr>
        <th colspan="2">First Name</th>
        <th colspan="2">Last Name</th>
        <th colspan="2">Student ID</th>
        </tr>

</thead>
<tbody>
        <tr>
        <th colspan="2">Charisars</th>
        <th colspan="2">Thammason</th>
        <th colspan="2">622110151</th>
        </tr>
        <tr>
        <th colspan="2">Thanawin</th>
        <th colspan="2">Thongkiri</th>
        <th colspan="2">622110175</th>
        </tr>
        <tr>
        <th colspan="2">Sahatsawat</th>
        <th colspan="2">Pultajug</th>
        <th colspan="2">622110227</th>
        </tr>
</tbody>    
</table>


@endsection