<header id="main-header" class="header-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php">

                        <img src="images/logo.png" alt="logo">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-btn d-inline-block" id="menu-btn">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </span>
                        <span class="ion-navicon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end
                  text-uppercase">
                            <li class="nav-item dropdown">
                                <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/index.php") {
                                                        echo 'active';
                                                    } ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/mission.php") {
                                                        echo 'active';
                                                    } ?>" href="mission.php">Our Mission</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/anthony.php") {
                                                        echo 'active';
                                                    } ?>" href="anthony.php">Anthony</a>

                            </li>
                            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == "/partners.php") {
                                                    echo 'active';
                                                } ?>">
                                <a class="nav-link" href="partners.php">Our Partners</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/event.php") {
                                                        echo 'active';
                                                    } ?>" href="event.php">Events</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/news.php") {
                                                        echo 'active';
                                                    } ?>" href="news.php">News</a>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>