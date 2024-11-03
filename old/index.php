<?php include('header.php') ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2">
    <div class="container">
        <a class="navbar-brand" href="#">
            <p class="fs-3 mt-3"><img src="https://media.tenor.com/Uvw2ilLXmnYAAAAj/pixel-heart.gif" alt="" class="me-3 ">WAIFU WEB 2.0</p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form action="">
            <div class="search ms-5">
                <span class="search-icon material-symbols-outlined">search</span>
                <input class="search-input" type="search" placeholder="Search">
            </div>
        </form>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Browse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Streams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="profile.jpg" class="rounded-circle" width="30" alt="Profile"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Container -->
<div class="main-section container mt-2 my-5 p-5">

    <!-- Header Section -->
    <div class="header-section container-fluid text-center text-light py-5">
        <h1>Welcome To Cyborg</h1>
        <h2 class="fw-bold text-uppercase">Browse Our Popular Games Here</h2>
        <button class="browse-btn mt-3">Browse Now</button>
    </div>
    <!-- End of Header Section -->

    <!-- Popular Games Section -->
    <div class="popular-games-section container-fluid mt-5 px-4 py-5 position-relative">
        <h2 class="pb-3 text-center">Most Popular Right Now</h2>
        <div class="row mt-4 gx-4">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="image/honkai_starrail/honkai_starrail_logo.png" class="card-img-top" alt="honkai_starrail">
                    <p class="text-center fs-5 mt-3">Honkai Starrail</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="image/genshin_impact/genshin_impact_logo.jpeg" class="card-img-top" alt="Game 2">
                    <p class="text-center fs-5 mt-3">Genshin Impact</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="image/wuthering_waves/wuthering_waves_logo.jpg" class="card-img-top" alt="Game 3">
                    <p class="text-center fs-5 mt-3">Wuthering Waves</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="image/anime/anime_logo.jpg" class="card-img-top" alt="Game 4">
                    <p class="text-center fs-5 mt-3">Anime Character</p>
                </div>
            </div>
        </div>
        <button class="view-btn">View All</button>
    </div>
    <!-- End of Popular Games Section -->

    <!-- Library Section -->
    <div class="character-library-section container-fluid mt-5 px-4 py-5 position-relative">
        <h2 class="pb-3 text-center">Your Library</h2>
        <div class="character-row mt-4">
            <!-- Item 1 -->
            <div class="character">
                <div class="character-image"><img src="image/anime/anime_logo.jpg" alt=""></div>
                <div class="character-info">
                    <p class="character-name">Dota 2</p>
                    <p class="character-origin">Sandbox</p>
                </div>
                <div class="character-info">
                    <p class="character-name">Date Added</p>
                    <p class="character-origin">24/08/2036</p>
                </div>
                <div class="character-info">
                    <p class="character-name">Hours Played</p>
                    <p class="character-origin">634 H 22 Mins</p>
                </div>
                <button class="download-btn">Downloaded</button>
            </div>

            <!-- Item 2 -->
            <div class="character">
                <div class="character-image"><img src="image/anime/anime_logo.jpg" alt=""></div>
                <div class="character-info">
                    <p class="character-name">Dota 2</p>
                    <p class="character-origin">Sandbox</p>
                </div>
                <div class="character-info">
                    <p class="character-name">Date Added</p>
                    <p class="character-origin">24/08/2036</p>
                </div>
                <div class="character-info">
                    <p class="character-name">Hours Played</p>
                    <p class="character-origin">634 H 22 Mins</p>
                </div>
                <button class="download-btn">Downloaded</button>
            </div>

            <!-- Item 3 -->
            <div class="character">
                <div class="character-image"><img src="image/anime/anime_logo.jpg" alt=""></div>
                <div class="character-info">
                    <p class="character-name">Dota 2</p>
                    <p class="character-origin">Sandbox</p>
                </div>
                <div class="character-info">
                    <p class="character-name">Date Added</p>
                    <p class="character-origin">24/08/2036</p>
                </div>
                <div class="character-info">
                    <p class="character-name">Hours Played</p>
                    <p class="character-origin">634 H 22 Mins</p>
                </div>
                <button class="download-btn">Downloaded</button>
            </div>
        </div>
        <button class="view-btn">View Your Library</button>
    </div>
    <!-- End of Library Section -->

</div>
<!-- End of Main Container -->

<?php include('footer.php') ?>