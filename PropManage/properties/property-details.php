<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Property Details | PropManage</title>

    <link
        rel="stylesheet"
        href="../css/property-details.css"
    >

</head>


<body>

<header class="navbar">
        <div class="navbar-container">
            <a href="../index.php" class="logo">
                PropManage
            </a>
            <nav class="nav-menu">
                <a href="../index.php" class="active">Home</a>
                <a href="properties/properties.php">Properties</a>
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



    <!-- ================= PAGE ================= -->

    <main class="property-page">

        <div class="property-container">


            <!-- BACK BUTTON -->

            <a
                href="properties.php"
                class="back-link"
            >
                ← Back to Properties
            </a>



            <!-- ================= PROPERTY ================= -->

            <div class="property-content">


                <!-- LEFT SIDE -->

                <div class="property-left">


                    <!-- MAIN IMAGE -->

                    <div class="main-image">

                        <img
                            id="mainPropertyImage"
                            src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=1200&auto=format&fit=crop"
                            alt="Modern Apartment"
                        >

                        <span class="available-badge">
                            AVAILABLE
                        </span>

                    </div>



                    <!-- THUMBNAILS -->

                    <div class="thumbnail-container">


                        <button
                            class="thumbnail active"
                            data-image="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=1200&auto=format&fit=crop"
                        >

                            <img
                                src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=400&auto=format&fit=crop"
                                alt="Property image 1"
                            >

                        </button>


                        <button
                            class="thumbnail"
                            data-image="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=1200&auto=format&fit=crop"
                        >

                            <img
                                src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=400&auto=format&fit=crop"
                                alt="Property image 2"
                            >

                        </button>


                        <button
                            class="thumbnail"
                            data-image="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?q=80&w=1200&auto=format&fit=crop"
                        >

                            <img
                                src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?q=80&w=400&auto=format&fit=crop"
                                alt="Property image 3"
                            >

                        </button>


                        <button
                            class="thumbnail"
                            data-image="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?q=80&w=1200&auto=format&fit=crop"
                        >

                            <img
                                src="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?q=80&w=400&auto=format&fit=crop"
                                alt="Property image 4"
                            >

                        </button>


                    </div>



                    <!-- DESCRIPTION -->

                    <div class="description-section">

                        <h2>
                            About This Property
                        </h2>

                        <p>
                            Description.
                        </p>

                    </div>



                    <!-- FEATURES -->

                    <div class="features-section">

                        <h2>
                            Property Features
                        </h2>


                        <div class="feature-grid">


                            <div class="feature-item">



                                <div>

                                    <strong>
                                        Bedrooms
                                    </strong>

                                    <p>
                                        3 Bedrooms
                                    </p>

                                </div>

                            </div>


                            <div class="feature-item">


                                <div>

                                    <strong>
                                        Bathrooms
                                    </strong>

                                    <p>
                                        2 Bathrooms
                                    </p>

                                </div>

                            </div>


                            <div class="feature-item">


                                <div>

                                    <strong>
                                        Property Size
                                    </strong>

                                    <p>
                                        1250 sqft
                                    </p>

                                </div>

                            </div>


                            <div class="feature-item">


                                <div>

                                    <strong>
                                        Property Type
                                    </strong>

                                    <p>
                                        Apartment
                                    </p>

                                </div>

                            </div>


                            <div class="feature-item">


                                <div>

                                    <strong>
                                        Parking
                                    </strong>

                                    <p>
                                        Available
                                    </p>

                                </div>

                            </div>


                            <div class="feature-item">


                                <div>

                                    <strong>
                                        Elevator
                                    </strong>

                                    <p>
                                        Available
                                    </p>

                                </div>

                            </div>


                        </div>

                    </div>


                </div>



                <!-- RIGHT SIDE -->

                <aside class="property-sidebar">


                    <div class="property-info-card">


                        <div class="property-title-row">

                            <div>

                                <span class="property-type">
                                    APARTMENT
                                </span>

                                <h1>
                                    Modern Apartment
                                </h1>

                                <p class="property-location">

                                    <svg
                                        width="16"
                                        height="16"
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

                                    Dhanmondi, Dhaka

                                </p>

                            </div>

                        </div>



                        <!-- PRICE -->

                        <div class="detail-price">

                            <span>
                                35,000 Tk
                            </span>

                            <small>
                                / month
                            </small>

                        </div>



                        <!-- QUICK INFO -->

                        <div class="quick-info">


                            <div>

                                <strong>
                                    3
                                </strong>

                                <span>
                                    Beds
                                </span>

                            </div>


                            <div>

                                <strong>
                                    2
                                </strong>

                                <span>
                                    Baths
                                </span>

                            </div>


                            <div>

                                <strong>
                                    1250
                                </strong>

                                <span>
                                    sqft
                                </span>

                            </div>


                        </div>



                        <!-- CONTACT LANDLORD -->





                        <!-- RENT BUTTON -->

                        <button
                            class="rent-btn"
                            id="rentBtn"
                        >
                            Request to Rent
                        </button>



                        <p class="login-note">

                            You need to sign in before
                            contacting the landlord.

                        </p>


                    </div>



                    <!-- LANDLORD CARD -->

                    <div class="landlord-card">

                        <h3>
                            Property Owner
                        </h3>


                        <div class="landlord-info">

                            <div class="landlord-avatar">
                                L
                            </div>


                            <div>

                                <strong>
                                    Landlord Name
                                </strong>

                                <p>
                                    Property Owner
                                </p>

                            </div>

                        </div>


                        <button
                            class="message-btn"
                            id="messageBtn"
                        >
                            Message Landlord
                        </button>

                    </div>



                    <!-- LOCATION CARD -->

                    <div class="location-card">

                        <h3>
                            Location
                        </h3>


                        <div class="map-placeholder">

                            <div class="map-icon">
                                📍
                            </div>

                            <p>
                                Dhanmondi, Dhaka
                            </p>

                        </div>

                    </div>


                </aside>


            </div>

        </div>

    </main>

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

    <script src="../js/property-details.js"></script>

</body>
</html>