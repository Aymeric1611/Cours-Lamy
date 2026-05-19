//gestion "moderne" des tableaux (ECMAScript 2015  6)
const etudiants = [
    {nom : "Alice", note : 1},
    {nom : "Bob", note : 12},
    {nom : "Charlie", note : 18}
]

const utilisateurs = [
    {id : 1, prenom : "Alice", nom : "Schuberg"},
    {id : 2, prenom : "Kirigaya", nom : "Kazuto"},
    {id : 3, prenom : "Asuna", nom : "Yuuki"}
];

//1. afficher le nom de chaque étudiant
//approche procédurale
for (const etudiant of etudiants) {
    console.log(etudiant.nom)
}

//approche fonctionnelle
etudiants.forEach( (etudiant) => console.log(etudiant.nom) )
//la fonction fléchée va être appelée pour chaque élément du tableau 
//chaque élément étant "contenu" dans la variable etudiant

//2.creer un new tableau contenant uniquement les etudiants ayant une note supérieure ou égale à 10
//filtrer les données
//approche procédurale
const etudiantsAdmis = []
for (const etudiant of etudiants) {
    if (etudiant.note >= 10){
        etudiantsAdmis.push(etudiant)
    }
}
console.log(etudiantsAdmis);

//approche fonctionnelle
const admis = etudiants.filter((etudiant) => etudiant.note >= 10)
console.log(admis);

//mapping de tableau
//transformer cahque element du tableau et creer un nouveau tableau contenant les elements transformés
//approche procédurale
const nomsEtudiants = []
for (const etudiant of etudiants) {
    nomsEtudiants.push(etudiant.nom)
}
console.log(nomsEtudiants);
//approche fonctionnelle
const noms = etudiants.map((etudiant) => etudiant.nom)
console.log(noms);

//recupere les noms des etudiant ayant une note >= 10
//approche procedurable
const etudiantsRecu = []
for (const etudiant of etudiants) {
    if (etudiant.note >= 10){
        etudiantsRecu.push(etudiant.nom)
    }
}
console.log(etudiantsRecu);

//approche fonctionnelle
const nomsEtudiantsAdmis = etudiants
    .filter(etudiant => etudiant.note >= 10)
    .map(etudiant => etudiant.nom)
    .forEach(nomEtudiant => console.log(nomEtudiant))

//rechercher l'utilisateur dont l'id = 2
//s'il existe, afficher son prenom et son nom
// sinon afficher "utilisateur introuvable"
//approche fonctionnelle
const user = utilisateurs.find(utilisateur => utilisateur.id === 2)
if (user){
    console.log(user.prenom)
} else {
    console.log("utilisateur introuvable")
    
}