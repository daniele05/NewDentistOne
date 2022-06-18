let btnModifMail = document.querySelector("#btnModifMail");
let btnValidModifMail = document.querySelector("#btnValidModifMail");
let divMail = document.querySelector("#mail");
let divModificationMail = document.querySelector("#divModificationMail");

btnModifMail.addEventListener("click", function(){
    divMail.classList.add("d-none"); // cacher la div 
    divModificationMail.classList.remove("d-none");
})