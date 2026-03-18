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
<body class="bg-transparent text-gray-900 page-transition page-hidden">

<div class="footer" id="footer-id">
    <footer class="site-footer" role="contentinfo">
        <div class="footer-inner">
            <a href="index.php" class="footer-logo">
                <img src="../assets/images/ccc.png" alt="CCC logo" class="footer-logo-img">
            </a>

            <p class="footer-tagline">I belong to CCC</p>

            <div class="footer-actions">
                <a class="footer-action" href="https://www.google.com/maps" target="_blank" rel="noopener">Find Us</a>
                <a class="footer-action" href="https://www.facebook.com" target="_blank" rel="noopener">Facebook</a>
            </div>
        </div>

        <div class="footer-copy">@2026 Community Christian Centre CCC. All Right Reserved.</div>
    </footer>
</div>
<script>
// Move the footer element into the last section and pin it to the section bottom
(function(){
    try {
        var footerWrap = document.getElementById('footer-id');
        if(!footerWrap) return;
        var main = document.querySelector('main');
        var lastSection = main ? main.querySelector('section:last-of-type') : null;
        var target = lastSection || document.body;

        // ensure target is positioned so absolute footer is relative to it
        var targetStyle = window.getComputedStyle(target);
        if(targetStyle.position === 'static') target.style.position = 'relative';

        // add class that positions footer absolutely
        footerWrap.classList.add('floating-footer');

        // append footer into target (moves DOM node)
        target.appendChild(footerWrap);

        // ensure enough padding so page content isn't hidden behind footer
        var fbHeight = footerWrap.offsetHeight || 72;
        var currentPad = parseFloat(window.getComputedStyle(target).paddingBottom) || 0;
        if(currentPad < fbHeight + 16) {
            target.style.paddingBottom = (fbHeight + 16) + 'px';
        }
    } catch(e) {
        // fail silently — keep footer in original position if error
        console.error('Floating footer script error:', e);
    }
})();
</script>

</body>
</html>
