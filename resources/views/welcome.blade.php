<!DOCTYPE html>
<html>
<head>
    <title>Token Display</title>
    <!-- Include any necessary CSS and JS files here -->
    <style>
        /* Style to center the content both horizontally and vertically */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Style for the big token */
        .token {
            font-size: 48px; /* Adjust the font size as needed */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="token">
        {{ strtoupper($token) }} <!-- Convert the token to uppercase using strtoupper() -->
    </div>
</body>
</html>
