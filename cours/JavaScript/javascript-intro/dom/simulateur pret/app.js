const capitalPlace = document.querySelector('#capitalPlace')
const afficheCapitalPlace = document.querySelector('#afficheCapitalPlace')
afficheCapitalPlace.textContent = capitalPlace.value + " €"
capitalPlace.addEventListener('input', (event) => {
    afficheCapitalPlace.textContent = event.target.value + " €"
})

const tauxAnnuel = document.querySelector('#tauxAnnuel')
const afficheTauxAnnuel = document.querySelector('#afficheTauxAnnuel')
afficheTauxAnnuel.textContent = tauxAnnuel.value + " %"
tauxAnnuel.addEventListener('input', (event) => {
    afficheTauxAnnuel.textContent = event.target.value + " %"
})

const duree = document.querySelector('#dureePlacement')
const afficheDuree = document.querySelector('#afficheDureePlacement')
afficheDuree.textContent = duree.value + " ans"
duree.addEventListener('input', (event) => {
    afficheDuree.textContent = event.target.value + " ans"
})

const capitalFinal = document.querySelector('#afficheCapitalFinal')
capitalFinal.textContent = (capitalPlace.value * (1 + tauxAnnuel.value / 100) ** dureePlacement.value).toFixed(2) + " €"