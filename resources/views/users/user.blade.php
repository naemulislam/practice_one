<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Users List</h1>
        <table class="min-w-full bg-white border rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr class="text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Phone</th>
                    <th class="py-3 px-6 text-center">Role</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">John Doe</td>
                    <td class="py-3 px-6 text-left">john@example.com</td>
                    <td class="py-3 px-6 text-left">0175215586555</td>
                    <td class="py-3 px-6 text-center">Admin</td>
                    <td class="py-3 px-6 text-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
