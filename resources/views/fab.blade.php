<!DOCTYPE html>
<html>

<head>
    <title>Floating Action Button Example</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
     <!-- Include Font Awesome for FAB icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-200">
    <!-- Hero section -->
    <section class="hero py-16">
      <div class="container mx-auto">
          <h2 class="text-4xl font-bold mb-8">Welcome to My Landing Page</h2>
          <p class="text-lg mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla blandit aliquet dui, at
              laoreet libero feugiat quis.</p>
          <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Learn More</a>
      </div>
  </section>

  <!-- Features section -->
  <section class="features py-16">
      <div class="container mx-auto">
          <h2 class="text-4xl font-bold mb-8">Our Features</h2>
          <div class="grid grid-cols-2 gap-8">
              <div class="bg-gray-200 p-8 rounded-lg">
                  <h3 class="text-2xl font-bold mb-4">Feature 1</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla blandit aliquet
                      dui.</p>
                  <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Learn
                      More</a>
              </div>
              <div class="bg-gray-200 p-8 rounded-lg">
                  <h3 class="text-2xl font-bold mb-4">Feature 2</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla blandit aliquet
                      dui.</p>
                  <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Learn
                      More</a>
              </div>
          </div>
      </div>
  </section>

  <!-- Features section -->
  <section class="features py-16">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-8">Our Features</h2>
        <div class="grid grid-cols-2 gap-8">
            <div class="bg-gray-200 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Feature 1</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla blandit aliquet
                    dui.</p>
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Learn
                    More</a>
            </div>
            <div class="bg-gray-200 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Feature 2</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla blandit aliquet
                    dui.</p>
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Learn
                    More</a>
            </div>
        </div>
    </div>
</section>

  <!-- Floating Action Button (FAB) -->
  <div class="fixed bottom-4 right-4">
      <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-6 rounded-full shadow-lg">
          <i class="fas fa-plus"></i>
      </a>
  </div>
</body>

</html>