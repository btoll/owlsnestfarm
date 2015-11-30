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
            <a href="#"><img alt="Owl" src="/owlsnestfarm/resources/images/owl_menu_icon_120x90.png"></a>
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
NAV;

if ($device === 'desktop') {
    echo $desktop;
} else {
    echo $mobile;
}
?>

