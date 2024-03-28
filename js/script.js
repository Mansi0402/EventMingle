let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider",{
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});













document.addEventListener('DOMContentLoaded', function() {
    const accessibilityBtn = document.getElementById('accessibility-btn');
    const accessibilityIcon = document.querySelector('#accessibility-btn img');
    const contentElements = document.querySelectorAll('.content p, .content h3, .content h1, .content a , .navbar a, .footer a,.content li');
    
    accessibilityBtn.addEventListener('click', function() {
        accessibilityIcon.classList.toggle('active');
        accessibilityBtn.classList.toggle('active');
        if (accessibilityIcon.classList.contains('active')) {
            accessibilityIcon.style.filter = 'invert(100%)';
            contentElements.forEach(element => {
                element.addEventListener('mouseover', highlightText);
                element.addEventListener('mouseout', removeHighlight);
            });
            
            //range.style.display = 'block';
        } else {
            accessibilityIcon.style.filter = 'none';
            contentElements.forEach(element => {
                element.removeEventListener('mouseover', highlightText);
                element.removeEventListener('mouseout', removeHighlight);
            });
            //range.style.display = 'none';
        }
    });

    function highlightText(event) {
        event.target.classList.add('highlight');
        event.target.classList.add('increase');
    }

    function removeHighlight(event) {
        event.target.classList.remove('highlight');
        event.target.classList.remove('increase');
    }
});

function validateForm() {
    var name = document.forms["bookForm"]["name"].value;
    var phone = document.forms["bookForm"]["phone"].value;
    var email = document.forms["bookForm"]["email"].value;
    var date = document.forms["bookForm"]["date"].value;
    var time = document.forms["bookForm"]["time"].value;
    var guests = document.forms["bookForm"]["guests"].value;

    if (name == "") {
        alert("Please enter your name");
        return false;
    }
    if (phone == "") {
        alert("Please enter your phone number");
        return false;
    }
    if (email == "") {
        alert("Please enter your email");
        return false;
    }
    if (date == "") {
        alert("Please select a date");
        return false;
    }
    if (time == "") {
        alert("Please select a time");
        return false;
    }
    if (guests == "") {
        alert("Please enter number of guests");
        return false;
    }
}


      
