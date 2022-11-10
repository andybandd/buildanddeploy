const hamburgerButton = document.getElementById('hamburger')
const navList = document.getElementById('nav-list')

function toggleButton() {
    navList.classList.toggle('show')
}

hamburgerButton.addEventListener('click', toggleButton)


function displayFunny() {
    alert("At this stage on my development the HIRE ME button is only here for comedic purposes")
}
