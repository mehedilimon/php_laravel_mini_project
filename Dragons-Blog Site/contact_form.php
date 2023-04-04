<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
</head>
<body>
  <header class="flex items-center justify-between p-4 bg-yellow-50">
    <div class="flex items-center">
      <img class="h-10" src="https://seeklogo.com/images/D/dragon-logo-7BF2E0A4DB-seeklogo.com.png" alt="Dragons">
      <h1 class="text-3xl text-red-600 font-extrabold ml-2">Dragons</h1>
    </div>
    <nav>
      <ul class="flex items-center space-x-4">
        <li class="text-green-600"><a href="homepage.html">Home</a></li>
        <li class="text-green-600"><a href="#">Blog</a></li>
      </ul>
    </nav>
  </header>
    <div class="container mx-auto my-8">
        
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <form action="process.php" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Enter your email address">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="subject">
                    Subject
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" type="text" name="subject" placeholder="Enter the subject of your message">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="message">
                    Message
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</body>
</html>
