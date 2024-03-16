import './bootstrap';


const theme = document.querySelector('.theme');
const userTheme = localStorage.getItem('theme');

theme.children[0].addEventListener('click', ()=> {
    theme.children[1].classList.remove('hidden');
    theme.children[0].classList.add('hidden');
});

theme.children[1].addEventListener('click', ()=> {
    theme.children[0].classList.remove('hidden');
    theme.children[1].classList.add('hidden');
});

// Hover effect on the pictures
const machines = document.querySelectorAll('.rig, .forklift, .tractor, .mixer');

machines.forEach(operator => {
    operator.addEventListener("mouseover", ()=>{
        machines.forEach(child => {
            child.children[1].classList.add('hidden');
        })
        operator.children[1].classList.toggle('hidden');
    })
    operator.addEventListener("mouseout", ()=>{
        machines.forEach(child => {
            child.children[1].classList.add('hidden');
        });
    })
})

// Slider Effect on the images in the hero section and their respective text.
document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll('.slider img');
    const services = ['CIVIL & STRUCTURAL ENGINEERING.', 'CONSTRUCTION SERVICES.', 'PROJECT MANAGEMENT.', 'WATER DIVISION ENGINEERING.'];

    let currentIndex = 0;
    let currentText = '';
    let letterIndex = 0;
    let isDeleting = false;
    let currentServiceIndex = 0;

    function type() {
      const text = services[currentServiceIndex];

      if (isDeleting) {
        currentText = text.substring(0, currentText.length - 1);
      } else {
        currentText = text.substring(0, currentText.length + 1);
      }

      document.getElementById('typewriter').innerHTML = currentText;

      if (!isDeleting && currentText === text) {
        isDeleting = true;
        setTimeout(nextSlide, 5000); // Start slide change after typing finishes
      } else if (isDeleting && currentText === '') {
        isDeleting = false;
        currentServiceIndex = (currentServiceIndex + 1) % services.length;
        setTimeout(type, 100); // Start typing animation for the next word
      } else {
        setTimeout(type, isDeleting ? 20 : 50); // Adjust timeout for typewriter effect
      }
    }

    function showSlide() {
      images.forEach((img, i) => {
        if (i === currentIndex) {
          img.classList.add('active');
        } else {
          img.classList.remove('active');
        }
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % images.length;
      showSlide(); // Call showSlide to display the next image
      type(); // Start typing animation immediately after slide change
    }

    showSlide(); // Show initial slide
    type(); // Start typing animation

  });


//   Effect on the Insights
const parent = document.querySelectorAll('.parent');

parent.forEach(parent => {
    parent.addEventListener('mouseover', function () {
        parent.children[0].classList.remove('h-20');
        parent.children[0].classList.add('h-14');
        parent.classList.add('text-sm');
    });
    parent.addEventListener('mouseout', function () {
        parent.children[0].classList.remove('h-14');
        parent.children[0].classList.add('h-20');
        parent.classList.remove('text-sm');
    });
});


// Services Effect
// const services = document.querySelectorAll('.services');

// services.forEach(service => {
//     service.addEventListener('mouseover', function() {
//         service.classList.remove('h-80');
//     });

//     service.addEventListener('mouseout', function() {
//         service.classList.add('h-80');
//     });
// });
