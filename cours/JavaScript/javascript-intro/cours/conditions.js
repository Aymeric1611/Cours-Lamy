//les structures conditionnelles
const age = 2

if (age >= 18){
    console.log("Vous êtes majeur.");
} else if (age === 17){
    console.log("Vous êtes presque majeur.");
    
} else {
    console.log("Vous êtes mineur.");
}

//ternaire
const statut = (age >= 18) ? "majeur" : "mineur";
console.log(statut)
