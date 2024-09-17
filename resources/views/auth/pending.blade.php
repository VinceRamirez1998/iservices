<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Pending</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(9, 9, 11);
        }
        .glow {
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            transition: box-shadow 0.3s ease-in-out;
        }
        .glow:hover {
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
        }
        .shine {
            background: linear-gradient(45deg, rgb(245, 158, 11), rgb(247, 192, 98));
            background-size: 200% 200%;
            animation: shine 3.5s infinite;
        }
        @keyframes shine {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div style="background-color:rgb(24 24 27);" class="w-full max-w-md p-10 rounded-lg shadow-lg glow">
        <h2 class="text-3xl font-extrabold mb-8 text-center text-white shine">Account Pending</h2>
        <div class="text-center text-white mb-6">
            <p class="text-lg font-semibold">Account Details</p>
            <p class="mt-2">Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Phone: {{ $user->phone }}</p>
            <p>Role: {{ ucfirst($user->role) }}</p>
            <p>Status: <span class="text-yellow-400">Pending</span></p>
        </div>
        <p class="text-center text-gray-400">
            Your account is currently under review. 
        </p>
        <p class="text-center text-gray-400 mb-6">
        Please allow 1-2 days for confirmation.
        </p>
        <div class="text-center">
            <a href="{{ url('/admin/login') }}" class="text-blue-400 hover:text-blue-300 text-sm">
                Go Back to Homepage
            </a>
        </div>
    </div>
</body>
</html>
