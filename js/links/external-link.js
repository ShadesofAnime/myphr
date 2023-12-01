document.addEventListener('DOMContentLoaded', function () {
    var externalLinks = document.querySelectorAll('a[href^="http"], a[href^="https"]');
    
    externalLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            var confirmNavigation = confirm("You are about to visit an external site. You will be redirected away from our website. We are not responsible for third-party content. Do you want to proceed?");
            
            if (confirmNavigation) {
                // If the user clicks 'OK' in the confirmation dialog, follow the link
                window.location.href = link.getAttribute('href');
            }
        });
    });
});
