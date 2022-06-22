var btnModifMail = document.querySelector("#btnModifMail");
var btnValidModifMail = document.querySelector("#btnValidModifMail");
var divMail = document.querySelector("#mail");
var divModificationMail = document.querySelector("#modificationMail");

btnModifMail.addEventListener("click", function(){
    divMail.classList.add("d-none"); // cacher la div 
    console.log(divModificationMail);
    divModificationMail.classList.remove("d-none");
})