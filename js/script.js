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

// var swiper = new Swiper(".reviews-slider", {
//     loop:true,
//     // spaceBetween:20,
//     // autoHeight:true,
//     grabCursor:true,
//     breakpoints: {
//         640: {
//             slidesPerView:4,
//             spaceBetween : 40,
//         },
//         768: {
//             slidesPerView: 5,
//             spaceBetween : 50,
//         },
//         1024: {
//             slidesPerView: 6,
//             spaceBetween : 60
//         },
//     },
// });

var swiper = new Swiper(".reviews-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-slider",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 50,
      },
    },
});














document.addEventListener('DOMContentLoaded', function() {
    const accessibilityBtn = document.getElementById('accessibility-btn');
    const accessibilityIcon = document.querySelector('#accessibility-btn img');
    const contentElements = document.querySelectorAll('.content p, .content h3, .content h1, .content a , .navbar a, .footer a,.content li, .about span, .about p , .booking span , .booking input');
    
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



// document.addEventListener('DOMContentLoaded', function () {
//     const timeButtons = document.querySelectorAll('.time-btn');
//     const selectedTimeInput = document.getElementById('selected-time');

//     timeButtons.forEach(button => {
//         button.addEventListener('click', function () {
//             // Remove the 'selected' class from all buttons
//             timeButtons.forEach(btn => btn.classList.remove('selected'));

//             // Add the 'selected' class to the clicked button
//             this.classList.add('selected');

//             // Set the value of the hidden input field to the selected time
//             const selectedTime = this.value;
//             selectedTimeInput.value = selectedTime;
//         });
//     });
// });

document.addEventListener('DOMContentLoaded', function () {
    const timeButtons = document.querySelectorAll('.time-btn');
    const selectedTimeInput = document.getElementById('selected-time');
    const dateInput = document.getElementsByName('date')[0];

    dateInput.addEventListener('change', function () {
        const selectedDate = this.value;
        fetchBookedTimeSlots(selectedDate);
    });

    function fetchBookedTimeSlots(selectedDate) {
        fetch('fetch_booked_time_slots.php', {
            method: 'POST',
            body: JSON.stringify({ date: selectedDate }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('Booked Time Slots:', data.bookedTimeSlots);

            const bookedTimeSlots = data.bookedTimeSlots;

            // Disable booked time slots
            timeButtons.forEach(button => {
                const buttonValue = button.value;
                console.log('Button Value:', buttonValue);

                if (bookedTimeSlots.includes(buttonValue)) {
                    console.log('Disabling button:', buttonValue);
                    button.disabled = true;
                } else {
                    console.log('Enabling button:', buttonValue);
                    button.disabled = false;
                }
            });
        })
        .catch(error => console.error('Error:', error));
    }

    timeButtons.forEach(button => {
        button.addEventListener('click', function () {
            timeButtons.forEach(btn => btn.classList.remove('selected'));
            this.classList.add('selected');
            selectedTimeInput.value = this.value;
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const bookForm = document.getElementById('book-form');

    bookForm.addEventListener('submit', function (event) {
        event.preventDefault(); 

        window.alert('Your entry has been saved!');
        
        // bookForm.reset();
    });
});




// document.addEventListener('DOMContentLoaded', function () {
//     const selectWarning = document.getElementById('select-warning');
//     const copyWarning = document.getElementById('copy-warning');
//     const dragWarning = document.getElementById('drop-warning');

//     function showSelectWarning() {
//         selectWarning.style.display = 'block';
//         setTimeout(function () {
//             selectWarning.style.display = 'none';
//         }, 3000);
//     }

//     function showDragWarning() {
//         dragWarning.style.display = 'block';
//         setTimeout(function () {
//             dragWarning.style.display = 'none';
//         }, 3000);
//     }

//     function showCopyWarning() {
//         copyWarning.style.display = 'block';
//         setTimeout(function () {
//             copyWarning.style.display = 'none';
//         }, 2000); 
//     }

//     document.addEventListener('mousedown', function (event) {
//         if (event.button === 2) { 
//             document.addEventListener('contextmenu', showSelectWarningOnce);
//         }
//     });

//     function showSelectWarningOnce(event) {
//         showSelectWarning();
//         event.preventDefault();
//         document.removeEventListener('contextmenu', showSelectWarningOnce);
//     }

//     document.addEventListener('copy', function (event) {
//         event.preventDefault(); 
//         showCopyWarning();
//     });

//     document.addEventListener('dragover', ev=>{
//         ev.dataTransfer.dropEffect = "none";
//         showDragWarning();
//         ev.preventDefault();
//     });
// });

