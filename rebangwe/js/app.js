/* =============================================================== */
/* ========================= HOVER POP FORWARDS ============================= */
/* =============================================================== */
const popForward  = checkUp(document.querySelectorAll(".pop-forwards"));

if(popForward !== null){
  popForward.forEach((item) => {
    item.addEventListener("mouseover", function(){
      item.classList.add("y-zindex");
    });

    item.addEventListener("mouseout", function(){
      item.classList.remove("y-zindex");
    })
  });
}


/* =============================================================== */
/* ========================= MODALS COSTUMIZED ============================= */
/* =============================================================== */
const allCustomedModals  = document.querySelectorAll(".customed-modal");
const branchModal  = document.querySelector("#branches-modal");
const formModal  = document.querySelector("#form-modal");


//Branche Modal Functionality;
const branchModalOpen = () => openModal(branchModal);
const branchModalClose = () => closeModal(branchModal);
//From Modal Functionality;
const formModalOpen = () => openModal(formModal);
const formModalClose = () => closeModal(formModal);


//Modal Helper Function
function openModal(modal){

  modal.classList.add("opening-modal");
  window.addEventListener("click", function(e){
    if(e.target == modal){
       closeModal(modal)
    }
  })
}

function closeModal(modal){
  modal.classList.remove("opening-modal");
}


window.addEventListener("scroll",(e)=> allCustomedModals.forEach(item =>{
let screenSize = screen.width;

  if(screenSize <= 780){
    if(item.className == "container-fluid customed-modal opening-modal" && scrollY >= 980){
      closeModal(item);
      setTimeout(()=> window.scrollTo(0, 545), 1500);
    }
  }else if(item.className == "container-fluid customed-modal opening-modal" && scrollY >= 390){
    closeModal(item);
  }

}))

/* =============================================================== */
/* ========================= Read More  ============================= */
/* =============================================================== */
let statusShowRead = false;

if(checkSingle(document.querySelector("#about-us button")) != undefined){
  let content = document.querySelector("#about-us aside .content");

  document.querySelector("#about-us button").addEventListener("click", (e)=>{
    if(statusShowRead === false){
      content.classList.add("opening-modal");
      e.target.textContent = "Read Less";

      statusShowRead = true;
    }else if (statusShowRead === true) {
      content.classList.remove("opening-modal");
      e.target.textContent = "Read More";

      statusShowRead = false;
    }
  })
}

/* =============================================================== */
/* ========================= CHECK IF DOCUEMNET HAS AN ITEM ============================= */
/* =============================================================== */
function checkUp(item){

 if(item.length === 0) {
   return null;
 }
   return item;
}

function checkSingle(elem){
  if(elem !== null){
    return elem;
  }
}
