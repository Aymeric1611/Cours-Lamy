//les tableaux d'objets
const utilisateurs = [
    {id : 1, prenom : "Alice", nom : "Schuberg"},
    {id : 2, prenom : "Kirigaya", nom : "Kazuto"},
    {id : 3, prenom : "Asuna", nom : "Yuuki"}
];

//afficher le nom de chaque utilisateur
for (const utilisateur of utilisateurs) {
    console.log(utilisateur.nom);
}

//rechercher l'utilisateur dont l'id = 2
//s'il existe, afficher son prenom et son nom
// sinon afficher "utilisateur introuvable"
let utilisateurTrouve = null;

for (const utilisateur of utilisateurs) {
    if (utilisateur.id === 2){
        utilisateurTrouve = utilisateur;
        break;
    }
}

if (utilisateurTrouve === null){
    console.log("Utilisateur introuvable");
} else {
    console.log(`${utilisateurTrouve.prenom} ${utilisateurTrouve.nom}`);
}