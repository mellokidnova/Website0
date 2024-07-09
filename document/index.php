<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h2>CRUD Application</h2>

    <div id="message"></div>

    <!-- Add User Form -->
    <h3>Add User</h3>
    <form id="addUserForm">
        <input type="text" id="name" placeholder="Name" required>
        <input type="email" id="email" placeholder="Email" required>
        <button type="submit">Add User</button>
    </form>

    <!-- Users Table -->
    <h3>Users</h3>
    <table id="usersTable" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="usersBody">
        </tbody>
    </table>

    <!-- Edit User Form (hidden initially) -->
    <div id="editUserForm" style="display: none;">
        <h3>Edit User</h3>
        <input type="hidden" id="editId">
        <input type="text" id="editName" placeholder="Name" required>
        <input type="email" id="editEmail" placeholder="Email" required>
        <button id="updateUserBtn">Update User</button>
        <button id="cancelEditBtn">Cancel</button>
    </div>

    <script>
        // Fetch users on page load
        $(document).ready(function () {
            fetchUsers();
        });

        // Function to fetch users from server
        function fetchUsers() {
            $.ajax({
                url: 'users.php',
                type: 'GET',
                success: function (response) {
                    var users = JSON.parse(response);
                    var usersTable = $('#usersBody');
                    usersTable.empty();

                    users.forEach(function (user) {
                        usersTable.append('<tr>\
                            <td>' + user.id + '</td>\
                            <td>' + user.name + '</td>\
                            <td>' + user.email + '</td>\
                            <td>\
                                <button class="editBtn" data-id="' + user.id + '">Edit</button>\
                                <button class="deleteBtn" data-id="' + user.id + '">Delete</button>\
                            </td>\
                        </tr>');
                    });
                }
            });
        }

        // Add User
        $('#addUserForm').submit(function (event) {
            event.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();

            $.ajax({
                url: 'users.php',
                type: 'POST',
                data: { name: name, email: email, add: true },
                success: function (response) {
                    $('#message').html(response);
                    fetchUsers();
                    $('#addUserForm')[0].reset();
                }
            });
        });

        // Edit User
        $(document).on('click', '.editBtn', function () {
            var userId = $(this).data('id');

            $.ajax({
                url: 'users.php',
                type: 'GET',
                data: { id: userId },
                success: function (response) {
                    var user = JSON.parse(response);
                    $('#editId').val(user.id);
                    $('#editName').val(user.name);
                    $('#editEmail').val(user.email);
                    $('#editUserForm').show();
                }
            });
        });

        // Update User
        $('#updateUserBtn').click(function () {
            var id = $('#editId').val();
            var name = $('#editName').val();
            var email = $('#editEmail').val();

            $.ajax({
                url: 'users.php',
                type: 'POST',
                data: { id: id, name: name, email: email, edit: true },
                success: function (response) {
                    $('#message').html(response);
                    fetchUsers();
                    $('#editUserForm').hide();
                }
            });
        });

        // Cancel Edit
        $('#cancelEditBtn').click(function () {
            $('#editUserForm').hide();
        });

        // Delete User
        $(document).on('click', '.deleteBtn', function () {
            var userId = $(this).data('id');

            if (confirm('Are you sure you want to delete this user?')) {
                $.ajax({
                    url: 'users.php',
                    type: 'POST',
                    data: { id: userId, delete: true },
                    success: function (response) {
                        $('#message').html(response);
                        fetchUsers();
                    }
                });
            }
        });
    </script>
</body>
</html>
