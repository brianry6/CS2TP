<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Athletiq</title>
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <!-- NAVBAR -->
  <header class="header">
    <div class="container header-container">
      <a href="/" class="logo">Athletiq</a>
      <button id="menu-btn" class="hamburger">☰</button>

      <nav id="menu" class="menu">
        <a href="#shop" class="nav-link">Shop</a>
        <a href="#categories" class="nav-link">Categories</a>
        <a href="/about" class="nav-link">About</a>
        <a href="/contact" class="nav-link">Contact</a>

        @auth
          <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit" class="nav-link">Logout</button>
          </form>
          <a href="/cart" class="cart-btn"><i class="fa fa-shopping-cart"></i>  Cart ({{ $cartCount }})</a>
        @else
          <a href="{{ route('login') }}" class="nav-link">Sign In</a>
          <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
        @endauth
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-container">
      <div class="hero-text">
        <h1>Gear Up. Train Harder. Be Unstoppable.</h1>
        <p>Discover elite gym gear, apparel, and nutrition designed to power your every move.</p>
        <div class="hero-buttons">
          <a href="#shop" class="btn-primary">Shop Now</a>
          <a href="#categories" class="btn-secondary">Browse Categories</a>
        </div>
      </div>
      <div class="hero-image">
        <img src="/images/hero-gym.jpg" alt="Hero">
      </div>
    </div>
  </section>

  <!-- FEATURED PRODUCTS -->
  <section id="shop" class="products">
    <h2>🔥 Featured Products</h2>
    <div class="product-grid">
      @foreach ($featuredProducts as $product)
        <div class="product-card">
          <img src="{{ asset('images/' . $product->Product_image) }}" alt="{{ $product->Product_name }}">
          <h3>{{ $product->Product_name }}</h3>
          <p class="product-desc">Premium quality to enhance your workouts.</p>

          @if($product->specifications->count() > 0)
            <ul class="product-specs">
              @foreach($product->specifications as $spec)
                @if(strtolower($spec->Spec_name) === 'others')
                  <li>{{ $spec->pivot->Spec_value }}</li>
                @else
                  <li><strong>{{ $spec->Spec_name }}:</strong> {{ $spec->pivot->Spec_value }}</li>
                @endif
              @endforeach
            </ul>
          @else
            <p class="no-specs">Specifications not available</p>
          @endif

          <div class="product-footer">
            <span>£{{ number_format($product->Price, 2) }}</span>
            @auth
              <form method="POST" action="{{ route('cart.add') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->Product_ID }}">
                <button type="submit" class="cart-btn">Add</button>
              </form>
            @else
              <a href="{{ route('login') }}" class="button">Login to Buy</a>
            @endauth
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- CATEGORIES -->
  <section id="categories" class="categories">
    <h2>🏋️ Shop by Category</h2>
    <div class="category-grid">
      @foreach ($categories as $category)
        <a href="{{ route('category.subcategories', $category->Category_ID) }}" class="category-card">
          @if($category->image)
            <img src="{{ asset('images/categories/' . $category->image) }}" alt="{{ $category->name }}">
          @else
            <div class="category-icon">💪</div>
          @endif
          <h3>{{ $category->Category_name }}</h3>
          <p>{{ $category->description ?? 'Explore top picks' }}</p>
        </a>
      @endforeach
    </div>
  </section>

  <!-- CHATBOT -->
 
    <button id="chat-toggle">💬 Chat</button>
    <div id="chat-box">
      <div id="chat-header">Chat with Athletiq</div>
      <div id="chat-messages"></div>
      <input type="text" id="chat-input" placeholder="Type a message..." />
    </div>


  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-grid">
      <div>
        <h3>Athletiq</h3>
        <p>Your ultimate destination for fitness gear and style.</p>
      </div>
      <div>
        <h4>Support</h4>
        <ul>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#shipping">Shipping</a></li>
          <li><a href="#returns">Returns</a></li>
        </ul>
      </div>
      <div>
        <h4>Follow Us</h4>
        <div class="social">
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">© 2025 Athletiq. All rights reserved.</div>
  </footer>

<script>
   const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    menuBtn.addEventListener('click', () => {
      menu.classList.toggle('show');
    });
    
const toggleBtn = document.getElementById('chat-toggle');
const chatBox = document.getElementById('chat-box');
const chatInput = document.getElementById('chat-input');
const chatMessages = document.getElementById('chat-messages');

toggleBtn.addEventListener('click', () => {
  chatBox.classList.toggle('active');
});

// Retry fetch function with exponential backoff
async function fetchDataWithRetry(url, options, maxRetries = 5, delay = 1000) {
  for (let i = 0; i < maxRetries; i++) {
    try {
      const response = await fetch(url, options);
      if (response.status === 429) {
        const retryAfter = response.headers.get('Retry-After');
        const waitTime = retryAfter ? parseInt(retryAfter, 10) * 1000 : delay * Math.pow(2, i);
        console.warn(`Too many requests (429). Retrying in ${waitTime / 1000} seconds...`);
        await new Promise(resolve => setTimeout(resolve, waitTime));
        continue;
      }
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      return await response.json();
    } catch (error) {
      console.error(`Attempt ${i + 1} failed:`, error.message);
      if (i === maxRetries - 1) throw error;
      await new Promise(resolve => setTimeout(resolve, delay * Math.pow(2, i)));
    }
  }
}

chatInput.addEventListener('keypress', async function(e) {
  if(e.key === 'Enter' && chatInput.value.trim() !== '') {
    const userText = chatInput.value;

    // Display user message
    const userMsg = document.createElement('div');
    userMsg.textContent = "You: " + userText;
    userMsg.style.fontWeight = '600';
    chatMessages.appendChild(userMsg);
    chatInput.value = '';

    const options = {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Authorization": "Bearer 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"
      },
      body: JSON.stringify({
        model: "gpt-3.5-turbo",
        messages: [
          {
  role: "system",
  content: `
You are Athletiq's virtual shopping assistant — a friendly, knowledgeable fitness companion for users visiting the Athletiq online store.

Athletiq is a modern fitness brand offering three main categories of products:
1. **Clothing** – High-performance, stylish, and comfortable activewear for men and women.  
   • Men's Gym Tops  
   • Women's Gym Tops  
   • Men's Bottoms  
   • Women's Bottoms  

2. **Equipment** – Premium training gear for home and gym workouts.  
   • Dumbbells & Weights  
   • Resistance Bands  
   • Yoga & Pilates Gear  
   • Cardio Machines  
   • Strength Training Gear  

3. **Supplements** – Nutrition essentials designed to support muscle growth, endurance, and recovery.  
   • Protein Powders  
   • Pre-Workout  
   • Post-Workout Recovery  
   • Vitamins & Health  

Your purpose is to help customers:
- Discover the right products for their goals and preferences.
- Suggest workout gear, outfits, or supplements that complement one another.
- Provide friendly, motivating advice about fitness and healthy living.
- Answer questions about Athletiq’s offerings clearly and conversationally.

Keep responses concise, encouraging, and human-like.  
If a user asks something unrelated to fitness or Athletiq, gently steer the conversation back to the shop.
`
},

          { role: "user", content: userText }
        ]
      })
    };

    try {
      const data = await fetchDataWithRetry("https://api.openai.com/v1/chat/completions", options);
      const botMsg = document.createElement('div');
      botMsg.textContent = "Bot: " + data.choices[0].message.content;
      chatMessages.appendChild(botMsg);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    } catch (err) {
      const botMsg = document.createElement('div');
      botMsg.textContent = "Bot: Sorry, something went wrong: " + err.message;
      chatMessages.appendChild(botMsg);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
  }
});
</script>
</body>
</html>
