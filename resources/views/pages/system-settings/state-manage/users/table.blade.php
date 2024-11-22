<table class="w-full text-nowrap">
    <thead>
        <tr>
            <th class="text bg-orange-400 text-white py-1 rounded-l-md" scope="col">#</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Full Name</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Role</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Username</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Password</th>
            <th class="text bg-orange-400 text-white py-1 rounded-r-md" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Your data will be inserted here -->
        @foreach($users as $user)
            <tr>
                <td class="px-5 text-center">{{ $user->id }}</td>
                <td class="px-5 text-center">{{ $user->name }}</td>
                <td class="px-5 text-center">{{ $user->role }}</td>
                <td class="px-5 text-center">{{ $user->username }}</td>
                <td class="px-5 text-center">{{ $user->password }}</td>
                <td>
                    <button class="bg-orange-500 text-white hover:bg-orange-600 py-1 px-2 rounded-md">Edit</button>
                    <button class="bg-red-500 text-white hover:bg-red-600 py-1 px-2 rounded-md ml-2">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
