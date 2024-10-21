$(document).ready(function() {
    // Smooth Scrolling
    $("a.nav-link").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        } 
    });

    // Navbar Background Change on Scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) { 
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });

    // Animations 
    // Function to check if an element is in the viewport
    function isInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && 
            rect.right <= (window.innerWidth || document.documentElement.clientWidth) 
        );
    }

    // Apply 'show' class to animate elements when in viewport
    function animateOnScroll() {
        $('.animate-text, .animate-button, .animate-image').each(function() {
            if (isInViewport(this)) {
                $(this).addClass('show');
            }
        });
    }

    // Initial animation check on page load
    animateOnScroll(); 

    // Animation check on scroll
    $(window).on('scroll', animateOnScroll);

    // Sample Data for Special Dishes (Replace with your own)
    const specialDishes = [
        {
            image: "images/2.jpg",
            name: "BIRIYANI",
            description: "Savor the rich, aromatic Biryani with tender meat (or vegetables) and fragrant basmati rice, perfectly layered with spices, caramelized onions, and a touch of saffron—served with raita and spicy salan for a complete culinary experience."
        },
        {
            image: "images/3.jpg",
            name: "BBQ & TANDOORI",
            description: "Experience the smoky flavors of our BBQ and Tandoori dishes, where succulent meats and vegetables are marinated in aromatic spices and grilled to perfection over open flames, delivering a deliciously charred and juicy bite every time."
        },
        {
            image: "images/4.jpg",
            name: "FRIED RICE",
            description: "Delight in our Fried Rice, a perfect blend of fluffy rice stir-fried with fresh vegetables, tender meat, and a medley of spices, creating a savory and satisfying dish with a hint of wok-tossed flavor in every bite.<br><br>"
        },
        {
            image: "images/5.jpg",
            name: "NOODLES",
            description: "Enjoy our delicious Noodles, stir-fried to perfection with a vibrant mix of fresh vegetables, tender meat, and savory sauces, offering a satisfying balance of flavors and a delightful, chewy texture in every forkful.<br><br>"
        },
        {
            image: "images/6.jpg",
            name: "VEG MASALA",
            description: "Treat yourself to our Veg Masala, a hearty mix of fresh vegetables cooked in a rich, spicy tomato-based gravy, infused with aromatic herbs and spices. Each bite is a burst of flavor, offering a perfect blend of heat and savory goodness that pairs wonderfully with rice or naan."
        },
        {
            image: "images/7.jpg",
            name: "NON VEG MASALA",
            description: "Savor our Non-Veg Masala, featuring tender marinated meat simmered in a rich, spiced gravy with a medley of aromatic herbs. This dish offers a delightful blend of flavors and heat, making it perfect for pairing with fragrant basmati rice or freshly baked naan. "
        }
    ];

    // Populate Special Dishes Dynamically
    const dishesContainer = $('#specials .row');
    specialDishes.forEach(dish => {
        const dishCard = `
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="${dish.image}" class="card-img-top" alt="${dish.name}">
                    <div class="card-body">
                        <h5 class="card-title">${dish.name}</h5>
                        <p class="card-text">${dish.description}</p>
                          
                    </div>
                </div>
            </div>
        `;
        dishesContainer.append(dishCard);
    });

});

//$(document).ready(function() {
//    // ... (Your other JavaScript code for smooth scrolling, navbar, and animations) ... 
//
//    // Sample Data for Special Dishes (Expanded)
//    const specialDishes = [
//        {
//            image: "dish1.jpg",
//            name: "Dish Name 1",
//            description: "Lorem ipsum dolor sit amet."
//        },
//        {
//            image: "dish2.jpg",
//            name: "Dish Name 2",
//            description: "Sed ut perspiciatis unde omnis."
//        },
//        {
//            image: "dish3.jpg",
//            name: "Dish Name 3",
//            description: "Neque porro quisquam est."
//        },
//        // ... Add more dishes (up to 10 or more) ...
//    ];
//
//    // Populate Special Dishes Dynamically (Without Order Button)
//    const dishesContainer = $('#specials .row');
//    specialDishes.forEach(dish => {
//        const dishCard = `
//            <div class="col-lg-4 col-md-6 mb-4"> 
//                <div class="card">
//                    <img src="${dish.image}" class="card-img-top" alt="${dish.name}">
//                    <div class="card-body">
//                        <h5 class="card-title">${dish.name}</h5>
//                        <p class="card-text">${dish.description}</p>
//                    </div>
//                </div>
//            </div>
//        `;
//        dishesContainer.append(dishCard);
//    });
//});