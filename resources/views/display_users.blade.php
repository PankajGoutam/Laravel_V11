<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
        /* General table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            max-width: 1200px;
            font-family: Arial, sans-serif;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
            transition: background-color 0.3s ease;
        }

        /* Header styling */
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Body row alternating colors */
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Hover effect for rows */
        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Styling for table cells */
        td {
            vertical-align: top;
            color: #333;
        }

        /* Additional styling for address and company columns */
        td:nth-child(5), td:nth-child(8) {
            color: #555;
            font-style: italic;
        }

        /* Make the table responsive */
        @media (max-width: 768px) {
            table {
                width: 100%;
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }

            /* Adjust header font size on smaller screens */
            th {
                font-size: 14px;
            }
        }

        /* Add a hover effect for clickable items like email and website */
        td a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        td a:hover {
            color: #388E3C;
        }
    </style>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                <td>
                    City: {{ $item->address->city }}<br>
                </td>
                <td>{{ $item->phone }}</td>
                <td><a href="http://{{ $item->website }}" target="_blank">{{ $item->website }}</a></td>
                <td>
                    Name: {{ $item->company->name }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
