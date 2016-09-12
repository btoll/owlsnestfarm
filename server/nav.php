<?php
if ($device === 'desktop') {
echo <<<NAV
<nav>
            <div class="nav-container">
                <ul>
                    <li><a href="/" title="Home">Home</a></li>
                    <li><a href="/history/" title="History">History</a></li>
                    <li><a href="/animals/" title="Animals">Animals</a></li>
                    <li><a href="/about/" title="About Us">About Us</a></li>
                    <li><a href="/contact/" title="Contact Us">Contact Us</a></li>
                </ul>
            </div>
        </nav>
NAV;
} else {
echo <<<NAV
    <nav>
        <div>
            <p>The Owl's Nest Farm</p>
            <a href="#"><img alt="Owl" src="../resources/images/owl_menu_icon.png"></a>
        </div>

        <div>
            <ul>
                <li><a href="/" title="Home">Home</a></li>
                <li><a href="/history/" title="History">History</a></li>
                <li><a href="/animals/" title="Animals">Animals</a></li>
                <li><a href="/about/" title="About Us">About Us</a></li>
                <li><a href="/contact/" title="Contact Us">Contact Us</a></li>
            </ul>
        </div>
    </nav>
NAV;
}
?>

