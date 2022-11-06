const allSidemenu = document.querySelectorAll('#sidebar .side-menu.top li a');
allSidemenu.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', function () {
        li.classList.add('active');
    })
});