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
    alert("Thank you for confidence in me but at this stage of my development this button is here for comedic purposes only. If you would like to get in touch please use the contact page. I would love to hear from you.")
}


function displayAnotherFunny() {
    alert("One day they will sort something out. Just not yet")
}
