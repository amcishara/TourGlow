
  document.addEventListener("DOMContentLoaded", function () {
    // Get references to HTML elements
    const commentInput = document.getElementById("commentInput");
    const commentButton = document.getElementById("commentButton");
    const commentList = document.getElementById("commentList");
    const likeButton = document.getElementById("likeButton");
    const likeCount = document.getElementById("likeCount");
    const commentCount = document.getElementById("commentCount");

    // Initialize like count and comment count
    let likes = 0;
    let comments = 0;

    // Event listener for clicking the comment button
    commentButton.addEventListener("click", function () {
        // Get the comment input value
        const commentText = commentInput.value.trim();
        if (commentText !== "") {
            // Create a new list item for the comment
            const commentItem = document.createElement("li");
            commentItem.textContent = commentText;
            // Append the comment to the comment list
            commentList.appendChild(commentItem);
            // Increment comment count and update display
            comments++;
            commentCount.textContent = comments + " Comments";
            // Clear the comment input field
            commentInput.value = "";
        }
    });

    // Event listener for clicking the like button
    likeButton.addEventListener("click", function () {
        // Increment like count and update display
        likes++;
        likeCount.textContent = likes;
    });
});



document.addEventListener("DOMContentLoaded", function () {
  const fromCurrencySelect = document.getElementById("fromCurrency");
  const toCurrencySelect = document.getElementById("toCurrency");
  const amountInput = document.getElementById("amount");
  const convertedAmountInput = document.getElementById("convertedAmount");
  const convertBtn = document.getElementById("convertBtn");

  // Populate currency dropdowns
  fetchCurrencies();

  // Add click event to the convert button
  convertBtn.addEventListener("click", convertCurrency);

  async function fetchCurrencies() {
      try {
          const response = await fetch("https://v6.exchangerate-api.com/v6/e4645403ed5472b6cf8b99d3/latest/USD");
          const data = await response.json();

          if (data && data.conversion_rates) {
              // Populate 'From' currency dropdown
              populateCurrencyDropdown(fromCurrencySelect, data.conversion_rates);

              // Populate 'To' currency dropdown
              populateCurrencyDropdown(toCurrencySelect, data.conversion_rates);
          }
      } catch (error) {
          console.error("Error fetching currencies:", error);
      }
  }

  function populateCurrencyDropdown(selectElement, conversionRates) {
      for (const currency in conversionRates) {
          const option = document.createElement("option");
          option.value = currency;
          option.text = currency;
          selectElement.add(option);
      }
  }

  async function convertCurrency() {
      const fromCurrency = fromCurrencySelect.value;
      const toCurrency = toCurrencySelect.value;
      const amount = amountInput.value;

      if (!fromCurrency || !toCurrency || !amount) {
          alert("Please select currencies and enter an amount.");
          return;
      }

      try {
          const response = await fetch(`https://v6.exchangerate-api.com/v6/e4645403ed5472b6cf8b99d3/latest/${fromCurrency}`);
          const data = await response.json();

          if (data && data.conversion_rates) {
              const exchangeRate = data.conversion_rates[toCurrency];
              const convertedAmount = (amount * exchangeRate).toFixed(2);
              convertedAmountInput.value = convertedAmount;
          }
      } catch (error) {
          console.error("Error converting currency:", error);
      }
  }
});


(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    sendMail(); // Call the sendMail function when the form is submitted
});

function sendMail() {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var subject = document.getElementById("subject").value.trim();
    var message = document.getElementById("message").value.trim();

    // Check if any of the fields are empty
    if (!name || !email || !subject || !message) {
        alert("Please fill in all fields.");
        return;
    }

    // Validate email format
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    var params = {
        name: name,
        email: email,
        subject: subject,
        message: message
    };

    const serviceID = "service_6li9jlp";
    const templateID = "template_7s6j315";

    emailjs.send(serviceID, templateID, params)
        .then(res => {
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("subject").value = "";
            document.getElementById("message").value = "";
            console.log(res);
            alert("Your message sent successfully!!");
        })
        .catch(err => console.log(err));
}

    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);



function toggleAdditionalContent(button) {
    var container = button.parentNode; // Get the parent container
    var additionalContent = container.querySelector('.additional-content');
    
    if (additionalContent.style.display === 'none' || additionalContent.style.display === '') {
        additionalContent.style.display = 'block';
        button.textContent = 'See Less';
    } else {
        additionalContent.style.display = 'none';
        button.textContent = 'See More';
    }
}





// Remove the mouse hover behavior
$dropdown.off("mouseenter mouseleave");

// Add click event to toggle the dropdown
$dropdownToggle.on("click", function() {
    const $this = $(this).parent('.dropdown');
    $this.toggleClass(showClass);
    $this.find($dropdownMenu).toggleClass(showClass);
});

$dropdown.click(function() {
  const $this = $(this);
  if (!$this.hasClass(showClass)) {
      $dropdown.removeClass(showClass);
      $dropdownToggle.attr("aria-expanded", "false");
      $dropdownMenu.removeClass(showClass);

      $this.addClass(showClass);
      $this.find($dropdownToggle).attr("aria-expanded", "true");
      $this.find($dropdownMenu).addClass(showClass);
  } else {
      $this.removeClass(showClass);
      $this.find($dropdownToggle).attr("aria-expanded", "false");
      $this.find($dropdownMenu).removeClass(showClass);
  }
});
// nav background
let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggle("shadow", window.scrollY > 0)
})

//Filter
$(document).ready(function () {
    $(".filter-item").click(function () {
        const value = $(this).attr("data-filter");
        if (value == "all"){
            $(".post-box").show("1000")
        } else{
            $(".post-box")
                .not("." + value)
                .hide(1000);
            $(".post-box")
            .filter("." + value)
            .show("1000")
        }
    });
    $(".filter-item").click(function () {
        $(this).addClass("active-filter").siblings().removeClass("active-filter")
    });
});
// JavaScript for Sigiriya modal

let products = {
  data: [
    {
      productName: "Regular White T-Shirt",
      category: "Topwear",
      price: "30",
      image: "white-tshirt.jpg",
    },
    {
      productName: "Beige Short Skirt",
      category: "Bottomwear",
      price: "49",
      image: "short-skirt.jpg",
    },
    {
      productName: "Sporty SmartWatch",
      category: "Watch",
      price: "99",
      image: "sporty-smartwatch.jpg",
    },
    {
      productName: "Basic Knitted Top",
      category: "Topwear",
      price: "29",
      image: "knitted-top.jpg",
    },
    {
      productName: "Black Leather Jacket",
      category: "Jacket",
      price: "129",
      image: "black-leather-jacket.jpg",
    },
    {
      productName: "Stylish Pink Trousers",
      category: "Bottomwear",
      price: "89",
      image: "pink-trousers.jpg",
    },
    {
      productName: "Brown Men's Jacket",
      category: "Jacket",
      price: "189",
      image: "brown-jacket.jpg",
    },
    {
      productName: "Comfy Gray Pants",
      category: "Bottomwear",
      price: "49",
      image: "comfy-gray-pants.jpg",
    },
  ],
};

for (let i of products.data) {
  //Create Card
  let card = document.createElement("div");
  //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");
  //image div
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);
  //container
  let container = document.createElement("div");
  container.classList.add("container");
  //product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);
  //price
  let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}

//parameter passed from button (Parameter same as category)
function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    //check if value equals innerText
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  //select all cards
  let elements = document.querySelectorAll(".card");
  //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
}

//Search button click
document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
});

//Initially display all products
window.onload = () => {
  filterProduct("all");
};

