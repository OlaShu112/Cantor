document.addEventListener('DOMContentLoaded', function () {
    var welcomeMessage = document.querySelector('.welcomeMessage');

    function toggleVisibility() {
        if (welcomeMessage) {
            welcomeMessage.classList.toggle('hidden');
        }
    }

    let interval = setInterval(toggleVisibility, 1000);

    setInterval(() => {
        if (interval) {
            clearInterval(interval);
            interval = null;
            if (welcomeMessage) {
                welcomeMessage.classList.remove('hidden');
            }
        } else {
            if (welcomeMessage) {
                welcomeMessage.classList.add('hidden');
                interval = setInterval(toggleVisibility, 1000);
            }
        }
    }, 10000);




    document.querySelectorAll('nav ul li a:not(:only-child)').forEach(function (el) {
        el.addEventListener('click', function (e) {
            var dropdown = this.nextElementSibling;
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';

            document.querySelectorAll('.nav-dropdown').forEach(function (item) {
                if (item !== dropdown) {
                    item.style.display = 'none';
                }
            });

            e.stopPropagation();
        });
    });

    document.querySelector('html').addEventListener('click', function () {
        document.querySelectorAll('.nav-dropdown').forEach(function (item) {
            item.style.display = 'none';
        });
    });

    document.getElementById('nav-toggle').addEventListener('click', function () {
        var navUl = document.querySelector('nav ul');
        navUl.style.display = navUl.style.display === 'block' ? 'none' : 'block';
        this.classList.toggle('active');
    });

    var images = document.querySelectorAll('img[data-src-webp]');
    images.forEach(function (img) {
        var jpegSource = img.getAttribute('data-src-jpeg');
        var imgSource = img.getAttribute('data-src');
        var supportsJPEG = (function () {
            var elem = document.createElement('canvas');
            return elem.getContext && elem.getContext('2d') && elem.toDataURL('image/jpeg').indexOf('data:image/jpeg') === 0; // Change to image/jpeg
        })();
        img.setAttribute('src', supportsJPEG ? jpegSource : imgSource);
    });

    var allImages = document.querySelectorAll('img');
    allImages.forEach(function (img) {
        img.setAttribute('loading', 'lazy');
    });

    document.addEventListener('DOMContentLoaded', function () {
        function openTab(tabName) {
            var tabContent = document.querySelectorAll('.tab-content');
            tabContent.forEach(function (tab) {
                tab.classList.remove('active');
            });

            document.getElementById(tabName).classList.add('active');
        }

        document.querySelectorAll('.tab-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                var tabName = this.getAttribute('data-tab');
                openTab(tabName);
            });
        });
    
        openTab('global-leadership');
        openTab('innovation-technology');
        openTab('communication-media-arts');
    });
});
