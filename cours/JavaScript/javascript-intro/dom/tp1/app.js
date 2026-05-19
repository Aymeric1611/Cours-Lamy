//rechercher dans le dom l'élément dont l'id = temp
const tempElement = document.querySelector("#temp")
//const tempElement = document.getElementById("temp")
const toFahrenheit = document.querySelector("#toFahrenheit")
const toCelsius = document.querySelector("#toCelsius")
const resultat = document.querySelector("#resultat")
const bouton = document.querySelector("#convertBtn")
const form = document.querySelector("#convertForm")

//gerer le clic sur le bouton
//bouton.addEventListener("click",convertir)
form.addEventListener("submit",  (evenement) => {
    //empecher le raffraichissement de la page
    evenement.preventDefault()
    //recuperer la valeur saisie par l'utilisateur
    let temp = Number(tempElement.value)
    let unite = ""

    if(toFahrenheit.checked){
        temp = temp * 9/5 + 32
        unite = "°F"
    } else{
        temp = (temp - 32) * 5/9
        unite = "°C"
    }
    resultat.textContent = temp.toFixed(2) + unite
})

/*function convertir(evenement){
    //empecher le raffraichissement de la page
    evenement.preventDefault()
    //recuperer la valeur saisie par l'utilisateur
    let temp = Number(tempElement.value)
    let unite = ""

    if(toFahrenheit.checked){
        temp = temp * 9/5 + 32
        unite = "°F"
    } else{
        temp = (temp - 32) * 5/9
        unite = "°C"
    }
    resultat.textContent = temp.toFixed(2) + unite
}
*/