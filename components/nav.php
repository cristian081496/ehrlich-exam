<header>
    <div class="nav-wrapper container">
        <nav class="desktop">
            <div class="left-nav">
                <ul>
                    <li>
                        <a href="#">WOMEN</a>
                    </li>
                    <li>
                        <a href="#">PLUS</a>
                    </li>
                    <li>
                        <a href="#">MEN</a>
                    </li>
                    <li>
                        <a href="#">ACCESSORIES</a>
                    </li>
                </ul>
            </div>
            <div class="site-brand">
                <img src="<?php echo assets('images', 'Logo.png'); ?>" alt="THREADED">
            </div>
            <div class="right-nav">
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo assets('images/icons', 'bx_bx-user.png'); ?>" alt="user">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo assets('images/icons', 'bx_bx-shopping-bag.png'); ?>" alt="cart">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo assets('images/icons', 'bx_bx-heart.png'); ?>" alt="whitelist">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo assets('images/icons', 'bx_bx-support.png'); ?>" alt="support">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo assets('images/icons', 'bx_bx-search.png'); ?>" alt="search">
                        </a>
                    </li>
                    <li>
                        <div id="choose-currency">
                            <div class="active-currency">
                                <img class="flag" src="<?php echo assets('images/icons', 'US_Flag.png'); ?>" alt="Flag">
                                <span>USD $</span>
                                <img class="chev" src="<?php echo assets('images/icons', 'arrow-down.png'); ?>">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="mobile">
            <div class="site-brand">
                <img src="<?php echo assets('images', 'Logo.png'); ?>" alt="THREADED">
            </div>
            <div class="right-nav">
                <ul>
                    <li>
                        <div id="choose-currency">
                            <div class="active-currency">
                                <img class="flag" src="<?php echo assets('images/icons', 'US_Flag.png'); ?>" alt="Flag">
                                <span>USD $</span>
                                <img class="chev" src="<?php echo assets('images/icons', 'arrow-down.png'); ?>">
                            </div>
                        </div>
                    </li>
                    <li id="menu-drawer">
                        <a href="#">
                            <svg viewBox="0 0 100 80" width="20" height="20">
                                <rect width="100" height="10"></rect>
                                <rect y="30" width="100" height="10"></rect>
                                <rect y="60" width="100" height="10"></rect>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>