<?php
$desktop = <<<NAV
<nav>
            <div class="nav-container">
                <ul>
                    <li><a href="/owlsnestfarm/" title="Home">Home</a></li>
                    <li><a href="/owlsnestfarm/about/" title="About Us">About Us</a></li>
                    <li><a href="/owlsnestfarm/history/" title="History">History</a></li>
                    <li><a href="/owlsnestfarm/animals/" title="Animals">Animals</a></li>
                    <li><a href="/owlsnestfarm/market/" title="Farmer's Market">Farmer's Market</a></li>
                    <li><a href="/owlsnestfarm/contact/" title="Contact Us">Contact Us</a></li>
                </ul>
            </div>
        </nav>
NAV;

$mobile = <<<NAV
    <nav>
        <div>
            <p>The Owl's Nest Farm</p>
            <a href="#"><img alt="Owl" src="/owlsnestfarm/resources/images/owl_menu_icon.png"></a>
        </div>

        <div>
            <ul>
                <li><a href="/owlsnestfarm/" title="Home">Home</a></li>
                <li><a href="/owlsnestfarm/about/" title="About Us">About Us</a></li>
                <li><a href="/owlsnestfarm/history/" title="History">History</a></li>
                <li><a href="/owlsnestfarm/animals/" title="Animals">Animals</a></li>
                <li><a href="/owlsnestfarm/market/" title="Farmer's Market">Farmer's Market</a></li>
                <li><a href="/owlsnestfarm/contact/" title="Contact Us">Contact Us</a></li>
            </ul>
        </div>
    </nav>

<script>
//window.onload = function () {
    var list = document.getElementsByTagName('ul')[0],
        parent = list.parentNode,
        link = document.getElementsByTagName('a')[0],
        div = document.createElement('div'),
        style = div.style,
        body = document.body,
        currentHeight = 0,
        listHeight;

    function animate(closing) {
        if (!closing) {
            parent.style.display = 'block';

            if (currentHeight < listHeight) {
                currentHeight += 10;
                list.style.height = currentHeight + 'px';

                setTimeout(function () {
                    animate(false);
                }, 10);
            }

        } else {
            if (currentHeight > 10) {
                currentHeight -= 10;
                list.style.height = currentHeight + 'px';

                setTimeout(function () {
                    animate(true);
                }, 10);
            } else {
                parent.style.display = 'none';
            }
        }
    }

    // Position the new div safely outside of the viewport.
    style.display = 'block';
    style.position = 'absolute';
    style.top = '-10000px';

    // Append the element to be measured.
    div.appendChild(list);

    // The new div must be in the DOM in order for it or any hierarchical elements to be measured.
    body.appendChild(div);

    // Measure, re-append, and cleanup.
    list.style.height = 0;
    listHeight = list.scrollHeight;
    parent.appendChild(list);
    body.removeChild(div);
    div = null;

    link.addEventListener('click', function (e) {
        animate(parent.style.display === 'block');
        e.preventDefault();
    });
//};
</script>
NAV;

if ($device === 'desktop') {
    echo $desktop;
} else {
    echo $mobile;
}
?>

