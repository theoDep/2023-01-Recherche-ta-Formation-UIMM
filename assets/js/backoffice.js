document.addEventListener('DOMContentLoaded', function() {
    var page = document.querySelector('.page');
    var currentPage = page.dataset.current;

    document.getElementById(currentPage).classList.add('bg-primary');
    document.getElementById(currentPage).classList.add('white');
});