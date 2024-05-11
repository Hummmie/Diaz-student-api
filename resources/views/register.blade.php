<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <!-- Include any CSS files or stylesheets -->
</head>
<body>
    <div class="container">
        <h1>User Registration Form</h1>

        <!-- Form starts here -->
        <form method="POST" action="{{ route('submit-form') }}">
    @csrf

            @csrf
            <!-- Other form fields -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

    <!-- Other form fields -->
    <button type="submit">Submit</button>
</form>
        <!-- Form ends here -->
    </div>
    <!-- Include any JavaScript files or scripts -->
</body>
</html>
