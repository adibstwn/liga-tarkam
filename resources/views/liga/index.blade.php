@extends('layouts.index')

@section('content')
    <br />
    <div class="d-flex justify-content-between">
        <p class="h2">Liga Tarkam Standings 22/23</p>
        @if (Auth::user()->role == '1')
            <div class="d-flex justify-content-between">
                <a class="btn btn-success mb-2" href="{{ url('admin/save-match') }}">Save Match</a>
                <a class="btn btn-success mb-2 ml-3" href="{{ url('admin/multiple-matches') }}">Save Multiple Match</a>
            </div>
        @endif
    </div>
    <table class="table-bordered table text-center">
        <tr>
            <th>No</th>
            <th>Name Club</th>
            <th>Match</th>
            <th>Win</th>
            <th>Draw</th>
            <th>Lose</th>
            <th>GM</th>
            <th>GK</th>
            <th>Point</th>
        </tr>
        @foreach ($data as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->qty_match }}</td>
                <td>{{ $value->win }}</td>
                <td>{{ $value->draw }}</td>
                <td>{{ $value->lose }}</td>
                <td>{{ $value->GM }}</td>
                <td>{{ $value->GK }}</td>
                <td>{{ $value->point }}</td>
            </tr>
        @endforeach
    </table>
@endsection
