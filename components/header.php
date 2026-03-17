<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCC - Community Christian Centre</title>
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap');
        body { font-family: 'League Spartan', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 page-transition page-hidden">

<div class="parent" id="site-header">
    <a href="index.php" class="logo">
        <img src="../assets/images/ccc.png" alt="CCC - Community Christian Centre logo" class="logo-img">
    </a>
    <a href="index.php" class="home">Home</a>
    <a href="about.php" class="about">About</a>
    <a href="ministries.php" class="ministries">Ministries</a>
    <a href="departments.php" class="departments">Departments</a>
    <a href="programs.php" class="programs">Programs</a>
    <a href="life-groups.php" class="life-groups">Life Groups</a>
    <a href="location.php" class="location">Location</a>
    <a href="online.php" class="online">Online</a>
    <a href="contact.php" class="prayer-request">Prayer Request</a>
</div>

<script>
// Toggle .scrolled on header when page is scrolled
(function(){
    const header = document.getElementById('site-header');
    if(!header) return;
    const threshold = 20; // px scrolled before background appears
    function onScroll(){
        if(window.scrollY > threshold) header.classList.add('scrolled');
        else header.classList.remove('scrolled');
    }
    window.addEventListener('scroll', onScroll, {passive:true});
    // init state
    onScroll();
})();
</script>

<script>
// Page transition: fade in on load, fade out on internal link click
(function(){
    const body = document.body;
    if(!body) return;

    // remove hidden state once DOM is ready to show page (fade-in)
    window.addEventListener('DOMContentLoaded', function(){
        // allow one frame then remove hidden to trigger CSS transition
        requestAnimationFrame(function(){
            body.classList.remove('page-hidden');
        });
    });

    // Intercept clicks on internal links to fade out before navigation
    document.addEventListener('click', function(e){
        const a = e.target.closest('a');
        if(!a) return;
        const href = a.getAttribute('href');
        if(!href) return;
        // skip external links, mailto, anchors, and links with target
        if(a.target === '_blank' || href.startsWith('http') || href.startsWith('mailto:') || href.startsWith('#')) return;

        // allow ctrl/cmd clicks to open new tab
        if(e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;

        e.preventDefault();
        body.classList.add('page-hidden');
        // navigate after transition (~match CSS duration)
        setTimeout(function(){
            window.location.href = href;
        }, 360);
    }, true);
})();
</script>