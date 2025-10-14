<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Athletiq</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<!-- HEADER -->
<header class="bg-white shadow">
    <div class="container mx-auto flex items-center justify-between p-4">
        <a href="/" class="text-2xl font-bold text-gray-900">Athletiq</a>
        <nav class="space-x-4">
            <a href="#shop" class="hover:text-indigo-600">Shop</a>
            <a href="#categories" class="hover:text-indigo-600">Categories</a>
            <a href="#about" class="hover:text-indigo-600">About</a>
            <a href="#contact" class="hover:text-indigo-600">Contact</a>
            <a href="#cart" class="bg-indigo-600 text-white px-3 py-1 rounded-md">Cart (0)</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center py-12">
    <div>
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Gear up. Train harder. Shop smarter.</h1>
        <p class="mt-4 text-lg text-gray-600">
            Premium gym & fitness equipment, apparel, and supplements — curated for every athlete.
        </p>
        <div class="mt-6 flex gap-3 pd-50">
            <a href="#shop" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-md font-medium">Shop Now</a>
            <a href="#categories" class="inline-block border border-indigo-600 text-indigo-600 px-6 py-3 rounded-md">Browse Categories</a>
        </div>
    </div>
    <div class="order-first lg:order-last">
        <img src="/images/hero-gym.jpg" alt="Gym equipment" class="rounded-lg shadow-lg w-full h-72 object-cover">
    </div>
</section>

<!-- FEATURED PRODUCTS -->
<section id="shop" class="container mx-auto py-8">
    <h2 class="text-2xl font-semibold mb-4">Featured Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <!-- Product Card Example -->
        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
            <img src="/images/product1.jpg" alt="Adjustable Dumbbells" class="w-full h-40 object-cover rounded-md">
            <div class="mt-3 flex-1">
                <div class="font-semibold">Adjustable Dumbbells</div>
                <div class="text-sm text-gray-500 mt-1">Perfect for home workouts and weight training.</div>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <div class="text-lg font-bold">£79.99</div>
                <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm">Add</button>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
            <img src="/images/product2.jpg" alt="Protein Powder" class="w-full h-40 object-cover rounded-md">
            <div class="mt-3 flex-1">
                <div class="font-semibold">Protein Powder</div>
                <div class="text-sm text-gray-500 mt-1">High-quality whey protein for muscle recovery.</div>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <div class="text-lg font-bold">£29.99</div>
                <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm">Add</button>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
            <img src="/images/product3.jpg" alt="Yoga Mat" class="w-full h-40 object-cover rounded-md">
            <div class="mt-3 flex-1">
                <div class="font-semibold">Yoga Mat</div>
                <div class="text-sm text-gray-500 mt-1">Non-slip surface for ultimate grip during workouts.</div>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <div class="text-lg font-bold">£19.99</div>
                <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm">Add</button>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
            <img src="/images/product4.jpg" alt="Resistance Bands Set" class="w-full h-40 object-cover rounded-md">
            <div class="mt-3 flex-1">
                <div class="font-semibold">Resistance Bands Set</div>
                <div class="text-sm text-gray-500 mt-1">Perfect for toning, stretching, and mobility training.</div>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <div class="text-lg font-bold">£14.99</div>
                <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm">Add</button>
            </div>
        </div>

    </div>
</section>

<!-- CATEGORIES -->
<section id="categories" class="container mx-auto py-8">
    <h2 class="text-2xl font-semibold mb-4">Shop by Category</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg p-4 flex items-center gap-3 shadow">
            <img src="/images/category1.jpg" alt="Equipment" class="w-12 h-12 object-cover rounded-md">
            <div>
                <div class="font-medium">Equipment</div>
                <div class="text-xs text-gray-500">24 items</div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-4 flex items-center gap-3 shadow">
            <img src="/images/category2.jpg" alt="Apparel" class="w-12 h-12 object-cover rounded-md">
            <div>
                <div class="font-medium">Apparel</div>
                <div class="text-xs text-gray-500">18 items</div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-4 flex items-center gap-3 shadow">
            <img src="/images/category3.jpg" alt="Supplements" class="w-12 h-12 object-cover rounded-md">
            <div>
                <div class="font-medium">Supplements</div>
                <div class="text-xs text-gray-500">12 items</div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-4 flex items-center gap-3 shadow">
            <img src="/images/category4.jpg" alt="Accessories" class="w-12 h-12 object-cover rounded-md">
            <div>
                <div class="font-medium">Accessories</div>
                <div class="text-xs text-gray-500">30 items</div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="bg-white border-t py-10">
    <div class="container mx-auto">
        <h3 class="text-2xl font-semibold mb-6">What Our Customers Say</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
                <p class="text-gray-700">"Amazing quality equipment! My home gym looks professional now."</p>
                <div class="mt-4 text-sm text-gray-600">— Sarah J.</div>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
                <p class="text-gray-700">"Fast delivery and great customer service. Highly recommended!"</p>
                <div class="mt-4 text-sm text-gray-600">— Mark D.</div>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
                <p class="text-gray-700">"The protein powder tastes great and mixes perfectly."</p>
                <div class="mt-4 text-sm text-gray-600">— Emily R.</div>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="container mx-auto py-10">
    <div class="bg-indigo-600 text-white rounded-lg p-8 flex flex-col md:flex-row items-center justify-between">
        <div>
            <h4 class="text-xl font-bold">Join Our Newsletter</h4>
            <p class="mt-2 text-sm opacity-90">Get exclusive discounts and training tips.</p>
        </div>
        <form class="mt-4 md:mt-0">
            <div class="flex gap-2">
                <input type="email" placeholder="Your email" required class="px-4 py-2 rounded-md text-gray-800">
                <button class="bg-white text-indigo-600 px-4 py-2 rounded-md">Subscribe</button>
            </div>
        </form>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <h5 class="text-white font-bold">FitMart</h5>
            <p class="mt-2 text-sm">Your one-stop shop for gym essentials.</p>
        </div>
        <div>
            <h6 class="font-semibold">Support</h6>
            <ul class="mt-2 text-sm space-y-1">
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#shipping">Shipping</a></li>
                <li><a href="#returns">Returns</a></li>
            </ul>
        </div>
        <div>
            <h6 class="font-semibold">Follow Us</h6>
            <div class="mt-2 flex gap-3">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </div>
    <div class="container mx-auto text-center text-xs text-gray-500 mt-6">
        © 2025 FitMart. All rights reserved.
    </div>
</footer>

</body>
</html>
