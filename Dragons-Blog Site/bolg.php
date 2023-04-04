<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="flex items-center justify-between bg-yellow-50 p-4">
      <div class="flex items-center">
        <img class="h-10" src="https://seeklogo.com/images/D/dragon-logo-7BF2E0A4DB-seeklogo.com.png" alt="Dragons" />
        <h1 class="ml-2 text-3xl font-extrabold text-red-600">Dragons</h1>
      </div>
      <nav>
        <ul class="flex items-center space-x-4">
          <li class="text-green-600"><a href="homepage.html">Home</a></li>
          <li class="text-green-600"><a href="blog.php">Blog</a></li>
          <li class="text-green-600"><a href="contact_form.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <!-- Main Content Section -->
    <section class="container mx-auto py-8">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
        <!-- Blog Posts -->
        <div class="col-span-2">
          <!-- Blog Post 1 -->
          <div class="rounded-lg bg-white p-4 shadow-md">
            <div class="mb-2 flex items-center justify-between">
              <h2 class="text-2xl font-bold text-red-700">Vhagar - Dragon of House Targaryen.</h2>
              <span class="text-sm text-gray-500">April 1, 2023</span>
            </div>
            <img class="h-64 w-full object-cover" src="https://wallpapercave.com/dwp1x/wp4855935.jpg" alt="Post Image 1" />
            <p class="mb-2 font-extralight text-red-950">Vhagar was a she-dragon of House Targaryen. She was ridden by Queen Visenya Targaryen during Aegon's Conquest, alongside Aegon the Conqueror's Balerion and their sister Rhaenys's Meraxes. Other known riders of Vhagar are Prince Baelon Targaryen, Lady Laena Velaryon and Prince Aemond Targaryen.</p>
          </div>
          <!-- Blog Post 2 -->
          <div class="mt-4 rounded-lg bg-white p-4 shadow-md">
            <div class="mb-2 flex items-center justify-between">
              <h2 class="text-2xl font-bold text-red-700">Balerion the Black Dread</h2>
              <span class="text-sm text-gray-500">March 29, 2023</span>
            </div>
            <img class="flex h-full w-full object-cover" src="https://awoiaf.westeros.org/images/thumb/d/d4/Aegon_on_Balerion.jpg/800px-Aegon_on_Balerion.jpg" alt="Post Image 2" />
            <p class="mb-2 font-extralight text-red-950">The largest dragon to have ever lived in the history of Westeros, Balerion was ridden by Aegon the Conqueror during his conquest of the Seven Kingdoms. He was black-scaled and had a wingspan that could blot out the sun. He lived for more than 200 years before dying of old age</p>
          </div>
          <!-- Blog Post 3 -->
          <div class="mt-4 rounded-lg bg-white p-4 shadow-md">
            <div class="mb-2 flex items-center justify-between">
              <h2 class="text-2xl font-bold text-red-700">Meraxes</h2>
              <span class="text-sm text-gray-500">March 29, 2023</span>
            </div>
            <img class="h-full w-full object-cover" src="https://awoiaf.westeros.org/images/thumb/8/8b/Rhaenys_Targaryen_by_Alexandra_Boshevska.jpg/800px-Rhaenys_Targaryen_by_Alexandra_Boshevska.jpg" alt="Post Image 3" />
            <p class="mb-2 font-extralight text-red-950">Meraxes was one of the three dragons ridden by Aegon the Conqueror's sister-wives during the Conquest. She was smaller than Balerion, but still large enough to crush a man with her claws. She was named after one of the gods of Old Valyria.</p>
          </div>

          <!-- Blog Post 4 -->
          <div class="mt-4 rounded-lg bg-white p-4 shadow-md">
            <div class="mb-2 flex items-center justify-between">
              <h2 class="text-2xl font-bold text-red-700">Viserion</h2>
              <span class="text-sm text-gray-500">March 29, 2023</span>
            </div>
            <img class="h-full w-full object-cover" src="https://www.telegraph.co.uk/content/dam/tv/2017/08/21/Game-of-Thrones-Season-7-ice-dragon_trans_NvBQzQNjv4BqZoBOWHUy9TFokI8lTDwfYn2hjAzSWh9Zr8e1J_H7z3E.jpg?imwidth=960" alt="Post Image 4" />
            <p class="mb-2 font-extralight text-red-950">Viserion was one of the three dragons born to Daenerys Targaryen during her time in Essos, along with Drogon and Rhaegal. He was named after Daenerys' brother Viserys, and had cream and gold-colored scales. Later, he was killed and resurrected by the Night King as an undead dragon</p>
          </div>
          <!-- Blog Post 5 -->
          <div class="mt-4 rounded-lg bg-white p-4 shadow-md">
            <div class="mb-2 flex items-center justify-between">
              <h2 class="text-2xl font-bold text-red-700">Drogon</h2>
              <span class="text-sm text-gray-500">March 29, 2023</span>
            </div>
            <img class="h-full w-full object-cover" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0156d00e-7f44-419d-a703-5abb6bcec846/dd7l3ce-e210e9ad-7cb3-4c53-a37f-fc0c38fa975f.png/v1/fill/w_1253,h_637/game_of_thrones___dragon_drogon_by_irenbee_dd7l3ce-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODE0IiwicGF0aCI6IlwvZlwvMDE1NmQwMGUtN2Y0NC00MTlkLWE3MDMtNWFiYjZiY2VjODQ2XC9kZDdsM2NlLWUyMTBlOWFkLTdjYjMtNGM1My1hMzdmLWZjMGMzOGZhOTc1Zi5wbmciLCJ3aWR0aCI6Ijw9MTYwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Pmf6trkvtQLA3h_AHn0pSBDeYrsuhZ15ZO5f_mJopwA" alt="Post Image 5" />
            <p class="mb-2 font-extralight text-red-950">Drogon is the largest of Daenerys' dragons, with black and red scales. He was named after Daenerys' late husband Khal Drogo. He was the most loyal to Daenerys and played a pivotal role in her conquests before ultimately flying away with her body after her death.</p>
          </div>
          <!-- Blog Post 6 -->
          <div class="mt-4 rounded-lg bg-white p-4 shadow-md">
            <div class="mb-2 flex items-center justify-between">
              <h2 class="text-2xl font-bold text-red-700">Rhaegal</h2>
              <span class="text-sm text-gray-500">March 29, 2023</span>
            </div>
            <img class="h-full w-full object-cover" src="https://wallpapercave.com/wp/wp9923291.jpg" alt="Post Image 6" />
            <p class="mb-2 font-extralight text-red-950">Rhaegal was the smallest of the three dragons born to Daenerys, with green and bronze scales. He was named after Daenerys' deceased brother Rhaegar Targaryen. He was killed by Euron Greyjoy during the last season of "Game of Thrones".</p>
          </div>
      </div>
    </section>
  </body>
</html>