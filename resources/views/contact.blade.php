@extends('layouts.default')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title', 'contact.blade.php')

@section('content')
<table>
    <tr>
        <th>id</th>
        <th>お名前</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
    </tr>
    @foreach ($items as $item)
    <tr>
    <td>
        {{$item->id}}
    </td>
    <td>
        {{$item->fullname}}
    </td>
    <td>
        {{$item->email}}
    </td>
    <td>
        {{$item->opinion}}
    </td>
    </tr>
    @endforeach
</table>
@endsection
