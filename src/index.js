const todaysDate = new Date().toDateString()
const displayDate = document.getElementById('date') 
const hamburgerButton = document.getElementById('hamburger')
const navList = document.getElementById('nav-list')

displayDate.innerHTML = (todaysDate)


function toggleButton() {
    navList.classList.toggle('show')
}

hamburgerButton.addEventListener('click', toggleButton)


function displayFunny() {
    alert("At this stage of my development the HIRE ME button is only here for comedic purposes. However you can contact me via the contact page")
}
