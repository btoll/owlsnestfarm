<?php
$menu = <<<MENU
    <ul>
        <li><a href="/" title="Home">Home</a></li>
        <li><a href="/farm/" title="The Farm">The Farm</a></li>
        <li><a href="/dogs/" title="For Dogs">For Dogs</a></li>
        <li><a href="/about/" title="About Us">About Us</a></li>
        <li><a href="/contact/" title="Contact Us">Contact Us</a></li>
    </ul>
MENU;

if ($device === 'desktop') {
echo <<<NAV
<nav>
            <div class="nav-container">
                $menu
            </div>
        </nav>
NAV;
} else {
echo <<<NAV
    <nav>
        <div>
            <p><a href="/">The Owl's Nest Farm</a></p>
            <a href="#"><img alt="Owl" src="../resources/images/logo_small.png"></a>
        </div>

        <div>
            $menu
        </div>
    </nav>
NAV;
}
?>

