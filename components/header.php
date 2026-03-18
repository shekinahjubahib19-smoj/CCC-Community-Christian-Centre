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
    <div class="about-container">
        <a href="about.php" class="about">About</a>
        <div class="about-dropdown" role="menu" aria-hidden="true">
            <a class="about-option" href="about.php#church">About Church</a>
            <a class="about-option" href="about.php#senior-pastors">About Senior Pastors</a>
            <a class="about-option" href="about.php#pastors">About Pastors</a>
            <a class="about-option" href="contact.php">About Contacts</a>
            <a class="about-option" href="location.php">About Location</a>
        </div>
    </div>
    <div class="ministries-container">
        <a href="ministries.php" class="ministries">Ministries</a>
        <div class="ministries-dropdown" role="menu" aria-hidden="true">
            <a class="ministries-option" href="ministries.php#sunday-teachers">Sunday Teachers</a>
            <a class="ministries-option" href="ministries.php#ushers">Ushers</a>
            <a class="ministries-option" href="ministries.php#cleaners">Cleaners</a>
            <a class="ministries-option" href="ministries.php#sound-technical">Sound and Technical</a>
            <a class="ministries-option" href="ministries.php#broadcast">Broadcast</a>
            <a class="ministries-option" href="ministries.php#photographers">Photographers</a>
            <a class="ministries-option" href="ministries.php#musicians">Musicians</a>
            <a class="ministries-option" href="ministries.php#tambourine-dancers">Tambourine Dancers</a>
        </div>
    </div>
    <div class="departments-container">
        <a href="departments.php" class="departments">Departments</a>
        <div class="departments-dropdown" role="menu" aria-hidden="true">
            <a class="departments-option" href="departments.php#mens">Men's Department</a>
            <a class="departments-option" href="departments.php#womens">Women's Department</a>
            <a class="departments-option" href="departments.php#young-adults">Young Adults</a>
            <a class="departments-option" href="departments.php#young-ignite">Young Ignite</a>
            <a class="departments-option" href="departments.php#young-families">Young Families</a>
            <a class="departments-option" href="departments.php#kids-church">Kids' Church</a>
        </div>
    </div>
    <div class="programs-container">
        <a href="programs.php" class="programs">Programs</a>
        <div class="programs-dropdown" role="menu" aria-hidden="true">
            <a class="programs-option" href="programs.php#sunday-service">Sunday Service</a>
            <a class="programs-option" href="programs.php#holy-ghost-night">Holy Ghost Night</a>
            <a class="programs-option" href="programs.php#overnight-prayer">Overnight Prayer</a>
            <a class="programs-option" href="programs.php#water-baptism">Water Baptism</a>
            <a class="programs-option" href="programs.php#feeding-program">Feeding Program</a>
        </div>
    </div>
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