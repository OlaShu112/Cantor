var el = document.querySelector("#tabs");
var tabNavigationLinks = el.querySelectorAll('.tab-link');
var tabContentContainers = el.querySelectorAll('.tab-content');
var activeIndex = 0;
var initCalled = false;


var handleClick = function (link, index) {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        goToTab(index);
    });
};
for (var i = 0; i < tabNavigationLinks.length; i++) {
    var link = tabNavigationLinks[i];
    handleClick(link, i);
}

var goToTab = function (index) {
    if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
        tabNavigationLinks[activeIndex].classList.remove('is-active');
        tabNavigationLinks[index].classList.add('is-active');
        tabContentContainers[activeIndex].classList.remove('is-active');
        tabContentContainers[index].classList.add('is-active');
        activeIndex = index;
    }
};




