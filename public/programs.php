<?php include('../components/header.php'); ?>

<main>
    <section class="py-20 text-center text-white hero-section" style="background-image: url('../assets/images/homepage_13.jpg'); background-size: cover; background-position: center 30%; background-repeat: no-repeat; /*background-attachment: fixed;*/ min-height: 100vh; display:flex; align-items:center; position:relative;">
        <div class="" style="position:absolute; left:50%; top:40%; transform:translate(-50%, -50%);">
            <h1 class="text-6xl md:text-7xl font-bold uppercase text-white text-center">
               "Get to know us
            </h1>
            <h1 class="text-6xl md:text-7xl font-bold uppercase text-white text-center">
               To get to know Jesus"
            </h1>
        </div>
    </section>

    <section style="background:#fff; min-height:50vh; display:flex; align-items:center; justify-content:center;">
        <div class="text-center px-4">
            <h2 class="text-2xl font-bold text-gray-900">About Community Christian Centre</h2>
            <p class="text-gray-700 mt-4">Learn more about our mission, values, and how to get involved.</p>
        </div>
    </section>

    <section class="py-20 text-center text-white hero-section" style="background-image: url('../assets/images/homepage_13.jpg'); background-size: cover; background-position: center 30%; background-repeat: no-repeat; /*background-attachment: fixed;*/ min-height: 100vh; display:flex; align-items:center; position:relative;">
        
    </section>

</main>

<?php include('../components/footer.php'); ?>

<script>
// Smooth parallax for hero background (same as index)
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
