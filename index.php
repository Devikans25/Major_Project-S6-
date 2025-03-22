<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/_head.php" ?>
    <title>Triptrip - Wayanad</title>
</head>

<body>
    <div class="header">
        <nav id="navBar">
            <a href="./index.php" class="logo"> WayanGo </a>
            <ul class="nav-links">
                <li><a href="./index.php" class="active">Popular Places</a></li>
                <li><a href="./listing.php">All packages</a></li>
            </ul>
            <?php include("./components/_navBtns.php") ?>
        </nav>
        <div class="container hero">
            <h1>Online Travel Planning & Booking System - Wayanad</h1>
            <div class="search-bar">
                <form method="post" id="search_form">
                    <div class="location-input">
                        <label>Location</label>
                        <input required type="text" id="location" placeholder="Where are you going?">
                    </div>
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="sub-title">Exclusive Packages</h2>
        <div class="exclusives">
            <div>
                <img src="Edakkal-caves.jpg">
                <span>
                    <h3>Edakkal Caves</h3>
                    <p>Starts @ 4000 INR</p>
                </span>
            </div>
            <div>
                <img src="Banasura-sagar.jpg">
                <span>
                    <h3>Banasura Sagar Dam</h3>
                    <p>Starts @ 3000 INR</p>
                </span>
            </div>
            <div>
                <img src="Chembra.jpg">
                <span>
                    <h3>Chembra Peak</h3>
                    <p>Starts @ 3500 INR</p>
                </span>
            </div>
            <div>
                <img src="Meenmutty-Waterfalls.jpg">
                <span>
                    <h3>Meenmutty Waterfalls</h3>
                    <p>Starts @ 5000 INR</p>
                </span>
            </div>
        </div>

        <h2 class="sub-title">Trending Places</h2>
        <div class="tranding">
            <div>
                <img src="001.jpg">
                <h3>Kuruvadweep</h3>
            </div>
            <div>
                <img src="tholpetty-wildlife.jpg">
                <h3>Tholpetty Wildlife Sanctuary</h3>
            </div>
            <div>
                <img src="soochpara.jpg">
                <h3>Soochipara Waterfalls</h3>
            </div>
            <div>
                <img src="pookode-lake.jpg">
                <h3>Pookode Lake</h3>
            </div>
        </div>

        <div class="cta">
            <h3>Awesome Packages <br> For you and your friends/family in Wayanad.</h3>
            <p>Great combo with unbeatable prices <br> transport, accommodation & food all-inclusive.</p>
            <a href="#" class="cta-btn">Book your first tour now!</a>
        </div>

        <h2 class="sub-title">Travellers Stories</h2>
        <div class="stories">
            <div class="travellers-card">
                <img src="wynd.jpg">
                <p><a href="https://www.wayanad.com/blog">Exploring Wayanad</a></p>
            </div>
            <div class="travellers-card">
                <img src="trekking-trails.jpg">
                <p><a href="https://www.wayanad.com/blog">Best Trails in Wayanad</a></p>
            </div>
            <div class="travellers-card">
                <img src="wayanad.jpg">
                <p><a href="https://www.wayanad.com/blog">Top Sightseeing Spots</a></p>
            </div>
        </div>
        <a href="https://www.wayanad.com/blog" class="Start-btn">Go to travel blog</a>
    </div>


    
    <?php include "./components/_footer.php" ?>
    <?php include "./components/_js.php" ?>
    <script>
        $("#search_form").submit(e => {
            e.preventDefault();
            var loc = $("#location").val();
            window.location = `http://localhost/triptrip/listing.php?loc=${loc}`;
        })
    </script>
</body>
</html>