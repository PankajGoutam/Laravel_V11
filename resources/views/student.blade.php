<style>
    .user-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.user-table th, .user-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.user-table th {
    background-color: #4CAF50;
    color: white;
}

.user-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.user-table tr:hover {
    background-color: #ddd;
}
</style>

<h1>Student Table</h1>
<div class="container">
    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->city }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
