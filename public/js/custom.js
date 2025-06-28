$(document).ready(function () {
    sliceText();

    // jQuery: Set first link (LUTHER.) as active by default
    $('.nav-links a').first().addClass('active');
});

function sliceText() {
    $('.desc').each(function () { 
         const content = $(this).text().trim();
         const container = $(this).closest('.container_desc'); //method jQuery untuk mencari elemen parent/ancestor terdekat
         const maxContent = 300;

         if (content.length > maxContent) {
            const truncateContent = content.substring(0, maxContent);
            
            const htmlContent = 
            truncateContent + '...';
            $(this).html(htmlContent);

            container.find('.full-content').text(content);
            container.find('.toggle-action').text('Show More').addClass("show-more");
         }
    });
}

$(document).on('click', '.toggle-action', function () {
    const container = $(this).closest('.container_desc');
    const truncatedContent = container.find('.desc'); //find, method jQuery untuk mencari elemen children
    const fullContent = container.find('.full-content');
    const toggleAction = container.find('.toggle-action');
    if ($(this).hasClass("show-more")) {
        truncatedContent.hide();
        fullContent.show();
        toggleAction.removeClass("show-more");
        toggleAction.html("Show Less").addClass("show-less");
    } else {
        truncatedContent.show();
        fullContent.hide();
        toggleAction.removeClass("show-less");
        toggleAction.html("Show More").addClass("show-more");
    }
});

//Function to handle active nav link
$('.nav-links a').on('click', function () {
    //Remove active class from all links
    $('.nav-links a').removeClass('active');

    // Add active class to clicked link
    $(this).addClass('active');
});

// Function to update active nav link, when scroll
function updateActiveNav() {
    const navLinks = document.querySelectorAll('.nav-links a');
    const sections = document.querySelectorAll('section');

    let currentSection = '';
    const scrollPosition = window.scrollY + 200; // Offset for better UX
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            currentSection = section.getAttribute('id');
        }
    });
    
    // Remove active class from all nav links
    navLinks.forEach(link => {
        link.classList.remove('active');
    });
    
    // Add active class to current section's nav link
    if (currentSection) {
        const activeLink = document.querySelector(`.nav-links a[href="#${currentSection}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
        }
    }
}

// Listen for scroll events
window.addEventListener('scroll', updateActiveNav);

// $(document).on('click', '.folio-list__item', function () {
//     const projectId = $(this).data('project-id');
//     //ambil data parsing dari blade
//     const url = window.bladeData.projectRoute.replace('PLACEHOLDER', projectId); //cara terbaru handle route di laravel 12. default parameter route tidak boleh kosong, karena akan terdeteksi missing parameter.
//     $.get(url, function (data) {
//         $('#imagePath').attr("src", data.projects.image_path);
//     });
// });