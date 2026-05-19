//tableaux indexés à une dimension
const langages = ["PHP","SQL"]

//ajouter un élment dans le tableau (à la suite)
langages.push("Python")
let taille = langages.length

//afficher les élément du tableau (for...of // equivalent à foreach en php)
for (const langage of langages) {
    console.log(langage)
}

//copie partielle du tableau langage
//copie des adresses memoires
const langagesCopie = langages
