<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PropManage</title>

    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <header class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="logo">
                PropManage
            </a>
            <nav class="nav-menu">
                <a href="index.php" class="active">Home</a>
                <a href="properties/properties.php">Properties</a>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
            </nav>
            <div class="nav-actions">
                <a href="auth/login.php" class="login-btn">
                    Sign In / Sign Up
                </a>
            </div>
        </div>
    </header>

    <section class="hero">

        <div class="hero-container">

            <div class="hero-content">

                <h1>
                    PropManage
                </h1>

                <p>
                    Sub Heading
                </p>

            </div>

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
                    <h2>Explore</h2>
                </div>
            </div>

            <div class="filter-bar">
                <div class="filter-pills">
                    <button class="pill active" data-category="all">All</button>
                    <button class="pill" data-category="apartments">Apartments</button>
                    <button class="pill" data-category="houses">Houses</button>
                    <button class="pill" data-category="commercial">Commercial</button>
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

            <div class="property-grid">

                <div class="property-card">
                    <div class="property-image">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop" alt="Modern 3-Bed Apartment">
                        <span class="available-badge">AVAILABLE</span>
                    </div>

                    <div class="property-details">
                        <div class="card-header-row">
                            <div class="title-container">
                                <h3>Flat Type</h3>
                                <p class="location">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    Location
                                </p>
                            </div>
                            <div class="price-container">
                                <span class="price">Price BDT</span>
                                <span class="per-month">/mo</span>
                            </div>
                        </div>

                        <div class="features">
                            <span>Beds</span>
                            <span>Baths</span>
                            <span>sqft</span>
                        </div>

                        <a href="#" class="btn-view-details">View Details</a>
                    </div>
                </div>

                <div class="property-card">
                    <div class="property-image">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop" alt="Modern 3-Bed Apartment">
                        <span class="available-badge">AVAILABLE</span>
                    </div>

                    <div class="property-details">
                        <div class="card-header-row">
                            <div class="title-container">
                                <h3>Flat Type</h3>
                                <p class="location">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    Location
                                </p>
                            </div>
                            <div class="price-container">
                                <span class="price">Price BDT</span>
                                <span class="per-month">/mo</span>
                            </div>
                        </div>

                        <div class="features">
                            <span>Beds</span>
                            <span>Baths</span>
                            <span>sqft</span>
                        </div>

                        <a href="#" class="btn-view-details">View Details</a>
                    </div>
                </div>
                <div class="property-card">
                    <div class="property-image">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop" alt="Modern 3-Bed Apartment">
                        <span class="available-badge">AVAILABLE</span>
                    </div>

                    <div class="property-details">
                        <div class="card-header-row">
                            <div class="title-container">
                                <h3>Flat Type</h3>
                                <p class="location">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    Location
                                </p>
                            </div>
                            <div class="price-container">
                                <span class="price">Price BDT</span>
                                <span class="per-month">/mo</span>
                            </div>
                        </div>

                        <div class="features">
                            <span>Beds</span>
                            <span>Baths</span>
                            <span>sqft</span>
                        </div>

                        <a href="#" class="btn-view-details">View Details</a>
                    </div>
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
                <a href="auth/login.php">Sign In</a>
                <a href="auth/register.php">Sign Up</a>
            </div>

        </div>

        <div class="copyright">
            <p>
                © 2026 PropManage. Made by Farhan Nadim, Mashfi Rahman, Arafatullah Rifat & Fariha Akter Prity.
            </p>
        </div>
    </footer>

    <script src="js/index.js"></script>

</body>
</html>