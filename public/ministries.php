<?php include('../components/header.php'); ?>

<main>
    <section class="py-20 text-center text-white hero-section" style="background-image: url('../assets/images/ministry.jpg'); background-size: cover; background-position: center 30%; background-repeat: no-repeat; /*background-attachment: fixed;*/ min-height: 100vh; display:flex; align-items:center;">
        <div class="max-w-4xl mx-auto px-4">
            
        </div>
    </section>

    <section style="background:#fff; min-height:50vh; display:flex; align-items:center; justify-content:center;">
        <div class="text-center px-4">
            <h2 class="text-2xl font-bold text-gray-900">Our Ministries</h2>
            <p class="text-gray-700 mt-4">Explore the ministries at our church and find where you belong.</p>
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
        const offset = (current * speed) / window.innerHeight * base;
        const posY = base - offset;
        section.style.backgroundPosition = `center ${posY}%`;
        rafId = null;
    }

    window.addEventListener('scroll', onScroll, {passive:true});
    onScroll();
})();
</script>
