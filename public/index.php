<?php include('../components/header.php'); ?>

<main>
    <section class="py-20 text-center text-white hero-section" style="background-image: url('../assets/images/worship.jpg'); background-size: cover; background-position: center 30%; background-repeat: no-repeat; /*background-attachment: fixed;*/ min-height: 100vh; display:flex; align-items:center;">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-6xl md:text-7xl font-bold uppercase text-white text-center">
                Welcome to
            </h1>
            <h1 class="text-6xl md:text-7xl font-bold uppercase text-white text-center">
                Community Christian Centre
            </h1>
            <div class="hero-chips">
                <div class="hero-chip">We are here</div>
                <a href="about.php" class="hero-chip">Learn about us</a>
            </div>
        </div>
    </section>

    <section style="background:#fff; min-height:50vh; display:flex; align-items:center; justify-content:center;">
        <div class="text-center px-4">
            <h2 class="text-2xl font-bold text-gray-900">Welcome to Our Community</h2>
            <p class="text-gray-700 mt-4">We meet every week to worship, learn and serve — you're invited.</p>
        </div>
    </section>

    <section class="py-20 text-center text-white testimonial-section" style="background-image: linear-gradient(90deg, rgba(8, 8, 8, 0.82) 0%, rgba(8, 8, 8, 0.5) 45%, rgba(8, 8, 8, 0.2) 75%, rgba(8, 8, 8, 0.06) 100%), url('../assets/images/homepage_10.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh; display:flex; align-items:center;">
        <div class="testimonial-inner max-w-5xl mx-auto px-4 w-full">
            <div class="testimonial-grid">
                <div class="testimonial-text">
                    <h2 class="text-3xl font-bold text-white">A Testimony</h2>
                    <p class="testimonial-paragraph mt-4">“I wasn't sure where I belonged until I walked into Community Christian Centre. The warmth, worship and true community I found here restored my hope. If you're looking for a place to belong, come as you are — you'll find family and purpose.”</p>
                </div>
                <div class="testimonial-media" aria-hidden="true"></div>
            </div>
        </div>
    </section>

    </main>

<?php include('../components/footer.php'); ?>

<script>
// Smooth parallax for hero background
(function(){
    const section = document.querySelector('.hero-section');
    if(!section) return;

    let current = 0;
    let target = 0;
    let rafId = null;
    const ease = 0.08; // lower = smoother/slower
    const speed = 0.25; // parallax factor
    const base = 30; // starting background-position Y (%) so header shows upper image

    function onScroll(){
        target = window.scrollY;
        if(!rafId) rafId = requestAnimationFrame(update);
    }

    function update(){
        current += (target - current) * ease;
        // compute percent position (base% at top), move by speed factor
        const offset = (current * speed) / window.innerHeight * base; // percent offset
        const posY = base - offset;
        section.style.backgroundPosition = `center ${posY}%`;
        rafId = null;
    }

    window.addEventListener('scroll', onScroll, {passive:true});
    // initialize
    onScroll();
})();
</script>