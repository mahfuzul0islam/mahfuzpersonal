@extends('admin.index')
@section('title')
    My Contact
@endsection
@section('main')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>



    <table id="myTable" class="bg-light rounded ">
        <thead>
            <tr>
                <th>s/n</th>
                <th>Name</th>
                <th>Topic</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $key => $message)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$message->first_name}}</td>
                    <td>{{$message->topic}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->message}}</td>
                    <td>
                        <a href="{{route('admin.delete.message',$message->id)}}" class="btn btn-danger" onclick="return deleteAction()">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // JavaScript to highlight rows on hover
        let rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            row.addEventListener("mouseover", () => {
                row.style.backgroundColor = "#e9e9e9";
            });

            row.addEventListener("mouseout", () => {
                row.style.backgroundColor = "";
            });
        });
    </script>
@endsection
