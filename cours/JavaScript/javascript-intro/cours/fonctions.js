//1. les fonctions classiques

//fonction sans parametres
function direBonjour() {
    console.log("Bonjour !")
}

//appel de la fonction
direBonjour()

//fonction avec parametres
function saluer(prenom){
    console.log(`Salut ${prenom}`)
}

saluer("Alice")

//fonction retournant une valeur
function additionner(a,b){
    return a + b
}

console.log(additionner(5, 3)); //8


//2. les focntions anonymes
const multiplication = function(a,b){
    return a * b
}

//appel de la fonction
console.log(multiplication(4, 6)); //24

//3. les fonctions fléchées (arrow functions)
const soustraire = (a,b) => {
    return a - b
}

console.log(soustraire(10, 4)); //6

// version simplifiée
const soustraire2 = (a,b) => a - b

console.log(soustraire2(10, 4)); //6




