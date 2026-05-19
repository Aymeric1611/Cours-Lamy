//les chaines de caractères
let phrase = "Bonjour les bts sio1 !"
console.log(phrase.toUpperCase())
console.log(phrase.length)

//rechercher si la chaine "les" est présente dans la phrase
if (phrase.includes("les")){
    console.log("'les' est présente dans la phrase.")
} else {
    console.log("'les' n'est pas présente dans la phrase.")
}

//afficher la position de "les" dans la phrase
console.log(phrase.indexOf("les"))