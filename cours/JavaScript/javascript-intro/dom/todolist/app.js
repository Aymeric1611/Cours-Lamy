//recuperer les elements dans le dom
const taskForm = document.querySelector("#taskForm")
const taskInput = document.querySelector("#taskInput")
const taskList = document.querySelector("#taskList")
//const erreur = document.querySelector("#erreur")

//gerer la soumission du formularie - evenement "submit"
taskForm.addEventListener("submit", (event) => {
    //empecher le rafraichissement de la page
    event.preventDefault()
    //ajouter une nouvelle tache
    addTask()
})

//fonction permettant d'ajouter une nouvelle tache
function addTask(){
    //recuperer la valeur
    const taskTitle = taskInput.value.trim()
    //verifier si taskTitle est une chaine vide
    if (taskTitle === ""){
        err
        return "Veuillez saisir une tache non vide!"
    }
    //creer un new element <li>
    const tastkItem = document.createElement("li")
    //definir le text de l'element avec le titre de la tache
    tastkItem.textContent = taskTitle
    //ajouter le nouvel element <li> dans le dom en tant qu'enfant de l'element <ul>
    taskList.prepend(tastkItem)
    //vider le champ de saisie taskInput
    taskInput.value = ""
}