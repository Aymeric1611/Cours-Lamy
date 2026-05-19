const etudiant = {
    nom: "Martin",
    prenom: "Alice",
    moyenne: 14.5,
}

//
//
console.log(etudiant.nom);
//autre methode
console.log(etudiant["nom"]);


//afficher la liste des clé
//utiliser la boucle for...in
for (const cle in etudiant) {
    console.log(cle)
}

//afficher la liste des clé avce leur valeur respective
for (const cle in etudiant){
    console.log(`${cle} : ${etudiant[cle]}`);
}

//afficher la lsite des valeurs
console.log(`Je suis ${etudiant.prenom} ${etudiant.nom} et j'ai ${etudiant.moyenne} de moyenne`);
