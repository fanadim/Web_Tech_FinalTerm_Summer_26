<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Properties | PropManage</title>

    <link rel="stylesheet" href="../css/properties.css"
    >

</head>

<body>

    <header class="navbar">
        <div class="navbar-container">
            <a href="../index.php" class="logo">
                PropManage
            </a>
            <nav class="nav-menu">
                <a href="../index.php">Home</a>
                <a href="../properties/properties.php" class="active">Properties</a>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
            </nav>
            <div class="nav-actions">
                <a href="../auth/login.php" class="login-btn">
                    Sign In / Sign Up
                </a>
            </div>
        </div>
    </header>

    <section class="page-header">

        <div class="page-header-container">

            <h1>
                Explore Properties
            </h1>

            <p>
                Sub Heading
            </p>

        </div>

    </section>

    <section class="search-section">

        <div class="search-container">

            <div class="search-field">
                <input type="text" id="location" placeholder="Location">
            </div>

            <div class="search-field">
                <select id="propertyType">
                    <option value="">Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="House">House</option>
                    <option value="Room">Room</option>
                    <option value="Commercial">Commercial</option>
                </select>
            </div>

            <div class="search-field">
                <select id="budget">
                    <option value="">Price Range</option>
                    <option value="10000">10,000 Tk</option>
                    <option value="20000">20,000 Tk</option>
                    <option value="30000">30,000 Tk</option>
                    <option value="50000">50,000+ Tk</option>
                </select>
            </div>

            <button class="search-btn"id="searchBtn">
                Search
            </button>

        </div>
    </section>

    <section class="properties">
        <div class="section-container">
            <div class="section-header">
                <div>
                    <h2>All Properties</h2>
                </div>
                <div class="sort-container">
                    <label for="sortBy">Sort By:</label>
                    <select id="sortBy" class="sort-select">
                        <option value="recommended">Recommended</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="newest">Newest First</option>
                    </select>
                </div>
            </div>

            <div class="filter-bar">
                <div class="filter-pills">
                    <button class="pill active" data-category="all">All</button>
                    <button class="pill" data-category="apartments">Apartments</button>
                    <button class="pill" data-category="houses">Houses</button>
                    <button class="pill" data-category="rooms">Rooms</button>
                    <button class="pill" data-category="commercial">Commercial</button>
                </div>
            </div>

            <div class="property-grid" id="propertyGrid">
                <div class="property-card" data-category="apartments" data-price="35000" data-location="Dhanmondi">
                    <div class="property-image">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop" alt="Bachelor Properties">
                        <span class="available-badge">AVAILABLE</span>
                    </div>
                    <div class="property-details">
                        <div class="card-header-row">
                            <div class="title-container">
                                <h3>Bachalor Flat</h3>

                                <p class="location">

                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                        Dhanmondi, Dhaka
                                </p>
                            </div>

                            <div class="price-container">
                                <span class="price">35,000 Tk</span>
                                <span class="per-month">/mo</span>
                            </div>

                        </div>

                        <div class="features">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>1250 sqft</span>
                        </div>

                        <a href="property-details.php" class="btn-view-details">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="property-card" data-category="apartments" data-price="45000" data-location="Gulshan">
                    <div class="property-image">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=80&w=800&auto=format&fit=crop" alt="Luxury Apartment">
                        <span class="available-badge">AVAILABLE</span>
                    </div>

                    <div class="property-details">
                        <div class="card-header-row">
                            <div class="title-container">
                                <h3>Luxury Apartment</h3>

                                <p class="location">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                   Gulshan, Dhaka
                                </p>
                            </div>

                            <div class="price-container">
                                <span class="price">45,000 Tk</span>
                                <span class="per-month">/mo</span>
                            </div>

                        </div>

                        <div class="features">
                            <span>3 Beds</span>
                            <span>3 Baths</span>
                            <span>1500 sqft</span>
                        </div>

                        <a href="property-details.php" class="btn-view-details">
                            View Details
                        </a>

                    </div>
                </div>

                <div class="property-card" data-category="houses" data-price="40000" data-location="Uttara">
                    <div class="property-image">
                       <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=800&auto=format&fit=crop" alt="Family House">
                        <span class="available-badge">AVAILABLE</span>
                    </div>

                    <div class="property-details">
                        <div class="card-header-row">
                            <div class="title-container">
                                <h3>Family House</h3>

                                <p class="location">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                        Uttara, Dhaka
                                </p>

                            </div>
                            <div class="price-container">
                                <span class="price">40,000 Tk</span>
                                <span class="per-month">/mo</span>
                            </div>
                        </div>

                        <div class="features">
                            <span>4 Beds</span>
                            <span>3 Baths</span>
                            <span>1800 sqft</span>
                        </div>

                        <a href="property-details.php" class="btn-view-details">
                            View Details
                        </a>
                    </div>
                </div>

                <div
                    class="property-card"
                    data-category="rooms"
                    data-price="15000"
                    data-location="Mirpur"
                >

                    <div class="property-image">

                        <img
                            src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=800&auto=format&fit=crop"
                            alt="Rental Room"
                        >

                        <span class="available-badge">
                            AVAILABLE
                        </span>

                    </div>


                    <div class="property-details">


                        <div class="card-header-row">


                            <div class="title-container">

                                <h3>
                                    Comfortable Room
                                </h3>


                                <p class="location">

                                    <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >

                                        <path
                                            d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                                        ></path>

                                        <circle
                                            cx="12"
                                            cy="10"
                                            r="3"
                                        ></circle>

                                    </svg>

                                    Mirpur, Dhaka

                                </p>

                            </div>


                            <div class="price-container">

                                <span class="price">
                                    15,000 Tk
                                </span>

                                <span class="per-month">
                                    /mo
                                </span>

                            </div>


                        </div>


                        <div class="features">

                            <span>
                                1 Bed
                            </span>

                            <span>
                                1 Bath
                            </span>

                            <span>
                                650 sqft
                            </span>

                        </div>


                        <a
                            href="property-details.php"
                            class="btn-view-details"
                        >
                            View Details
                        </a>


                    </div>

                </div>




                <div
                    class="property-card"
                    data-category="commercial"
                    data-price="50000"
                    data-location="Banani"
                >

                    <div class="property-image">

                        <img
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=800&auto=format&fit=crop"
                            alt="Commercial Space"
                        >

                        <span class="available-badge">
                            AVAILABLE
                        </span>

                    </div>


                    <div class="property-details">


                        <div class="card-header-row">


                            <div class="title-container">

                                <h3>
                                    Commercial Space
                                </h3>


                                <p class="location">

                                    <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >

                                        <path
                                            d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                                        ></path>

                                        <circle
                                            cx="12"
                                            cy="10"
                                            r="3"
                                        ></circle>

                                    </svg>

                                    Banani, Dhaka

                                </p>

                            </div>


                            <div class="price-container">

                                <span class="price">
                                    50,000 Tk
                                </span>

                                <span class="per-month">
                                    /mo
                                </span>

                            </div>


                        </div>


                        <div class="features">

                            <span>
                                4 Rooms
                            </span>

                            <span>
                                2 Baths
                            </span>

                            <span>
                                2000 sqft
                            </span>

                        </div>


                        <a
                            href="property-details.php"
                            class="btn-view-details"
                        >
                            View Details
                        </a>


                    </div>

                </div>




                <div
                    class="property-card"
                    data-category="houses"
                    data-price="28000"
                    data-location="Mohammadpur"
                >

                    <div class="property-image">

                        <img
                            src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop"
                            alt="Affordable House"
                        >

                        <span class="available-badge">
                            AVAILABLE
                        </span>

                    </div>


                    <div class="property-details">


                        <div class="card-header-row">


                            <div class="title-container">

                                <h3>
                                    Affordable House
                                </h3>


                                <p class="location">

                                    <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >

                                        <path
                                            d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                                        ></path>

                                        <circle
                                            cx="12"
                                            cy="10"
                                            r="3"
                                        ></circle>

                                    </svg>

                                    Mohammadpur, Dhaka

                                </p>

                            </div>


                            <div class="price-container">

                                <span class="price">
                                    28,000 Tk
                                </span>

                                <span class="per-month">
                                    /mo
                                </span>

                            </div>


                        </div>


                        <div class="features">

                            <span>
                                3 Beds
                            </span>

                            <span>
                                2 Baths
                            </span>

                            <span>
                                1200 sqft
                            </span>

                        </div>


                        <a
                            href="property-details.php"
                            class="btn-view-details"
                        >
                            View Details
                        </a>


                    </div>

                </div>


            </div>


            <div id="noResults" class="no-results">
                <h3>No properties found</h3>
                <p>Try changing your search or filter.</p>
            </div>

        </div>

    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-brand">
                <h3>PropManage</h3>
                <p>Sub Heading</p>
            </div>


            <div class="footer-column">
                <h4>Company</h4>
                <a href="#">About</a>
                <a href="#">Contact</a>
                <a href="#">Privacy Policy</a>
            </div>

            <div class="footer-column">
                <h4>Account</h4>
                <a href="../auth/login.php">Sign In</a>
                <a href="../auth/register.php">Sign Up</a>
            </div>

        </div>

        <div class="copyright">
            <p>
                © 2026 PropManage. Made by Farhan Nadim, Mashfi Rahman, Arafatullah Rifat & Fariha Akter Prity.
            </p>
        </div>
    </footer>

    <script src="../js/properties.js"></script>

</body>
</html>