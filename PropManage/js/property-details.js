document.addEventListener("DOMContentLoaded", function () {


    // =========================================
    // IMAGE GALLERY
    // =========================================

    const mainImage =
        document.getElementById(
            "mainPropertyImage"
        );


    const thumbnails =
        document.querySelectorAll(
            ".thumbnail"
        );


    thumbnails.forEach(function (thumbnail) {


        thumbnail.addEventListener(
            "click",
            function () {


                const image =
                    this.getAttribute(
                        "data-image"
                    );


                if (mainImage && image) {

                    mainImage.src = image;

                }


                thumbnails.forEach(
                    function (item) {

                        item.classList.remove(
                            "active"
                        );

                    }
                );


                this.classList.add(
                    "active"
                );

            }
        );

    });



    // =========================================
    // CONTACT LANDLORD
    // =========================================

    const contactBtn =
        document.getElementById(
            "contactBtn"
        );


    if (contactBtn) {

        contactBtn.addEventListener(
            "click",
            function () {

                alert(
                    "Please sign in to contact the landlord."
                );

            }
        );

    }



    // =========================================
    // REQUEST TO RENT
    // =========================================

    const rentBtn =
        document.getElementById(
            "rentBtn"
        );


    if (rentBtn) {

        rentBtn.addEventListener(
            "click",
            function () {

                alert(
                    "Please sign in before requesting to rent this property."
                );

            }
        );

    }



    // =========================================
    // MESSAGE LANDLORD
    // =========================================

    const messageBtn =
        document.getElementById(
            "messageBtn"
        );


    if (messageBtn) {

        messageBtn.addEventListener(
            "click",
            function () {

                alert(
                    "Please sign in to message the landlord."
                );

            }
        );

    }

});