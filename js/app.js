//updating the copyright year
(function(){
	const currentYear = document.querySelector(".year" );

	let thisYear = new Date();
	let newYear = thisYear.getFullYear();

	currentYear.textContent = newYear ;
	currentYear.innerText = newYear;
}());

$(function() {
			$("#portfolio").magnificPopup({
					delegate: 'a', // child items selector, by clicking on it popup will open
					type: 'image',
					gallery: {
							enabled: true
					}
			});
			console.log("magnifkies o[pop responding...]")
});


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
const dbModal  = document.querySelector("#db-modal");



//Branche Modal Functionality;
const branchModalOpen = () => openModal(branchModal);
const branchModalClose = () => closeModal(branchModal);
//Database Modal Functionality;
const dbModalOpen = () => openModal(dbModal);


//const dbModalOpen = () => console.log(dbModal);


const dbModalClose = () => closeModal(dbModal);
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
  });
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
/* ========================= OPEN CARDS ============================= */
/* =============================================================== */
const donate = checkSingle(document.querySelector(".donate .add-more"));
const donateDetails = checkSingle(document.querySelector(".card-wrapper"));


donate.addEventListener("click", (e)=>{
		let btn = e.target;
		showHidden(donateDetails, btn)
});

function showHidden(elem, btn){
	elem.classList.toggle("show-opacity");

	if(elem.className === "card-wrapper show-opacity"){
		btn.textContent = "Hide Details" ;
	}else{
		btn.textContent = "Donate" ;
	}
}

/* =============================================================== */
/* ========================= Read More  ============================= */
/* =============================================================== */

let statusShowRead = false;

if(checkSingle(document.querySelector("#about-us button")) != undefined){
  let content = document.querySelector("#about-us aside .content");

  document.querySelector("#about-us button").addEventListener("click", (e)=>{
    // if(statusShowRead === false){
    //   content.classList.add("opening-modal");
    //   e.target.textContent = "Read Less";
		//
    //   statusShowRead = true;
    // }else if (statusShowRead === true) {
    //   content.classList.remove("opening-modal");
    //   e.target.textContent = "Read More";
		//
    //   statusShowRead = false;
    // }


		alert(123)


  })
}
/* =============================================================== */
/* ========================= HOVER POP FORWARDS ============================= */
/* =============================================================== */
const popIcons  = checkUp(document.querySelectorAll("#our-professions article"));

if(popIcons !== null){
  popIcons.forEach((item) => {
    item.addEventListener("mouseover", function(){
      item.childNodes[5].classList.add("show-up");
    });

    item.addEventListener("mouseout", function(){
      item.childNodes[5].classList.remove("show-up");
    })
  });
}
/* =============================================================== */
/* ========================= SLIDE ANINAMTIONSS ============================= */
/* =============================================================== */
const newsArticles  = checkUp(document.querySelectorAll(".articles aside"));

if(newsArticles !== null){
  newsArticles.forEach((item) => {
    item.addEventListener("mouseover", function(){
      item.firstElementChild.classList.add("slide-forwards");
    });

    item.addEventListener("mouseout", function(){
			item.firstElementChild.classList.remove("slide-forwards");
    })
  });
}


/* =============================================================== */
/* ========================= SHARE BUTTON ============================= */
/* =============================================================== */

const shareBtn = document.querySelector("footer button a");
const shareLink = "https://rebangwefunerals.co.za";
shareBtn.href = `https://www.facebook.com/share.php?u=${shareLink}`;


/* =============================================================== */
/* ========================= HAMBURGER ============================= */
/* =============================================================== */
const hamburger = document.querySelector("#hamburger");
const hamburgerLines = Array.from(document.querySelectorAll("#hamburger .lines"));
const navLinks = document.querySelector("header article .flexy-cen ul")
let hamburgerStatus = false;


hamburger.addEventListener("click", function(){
  if(!hamburgerStatus){
    navLinks.classList.add("show-ul");
    setTimeout(()=> navLinks.classList.add("open-hamburder"), 500);

    hamburgerLines[0].classList.add("upperline");
    hamburgerLines[1].classList.add("middleline");
    hamburgerLines[2].classList.add("lowerline");

    hamburgerStatus = true;

  }else if(hamburgerStatus){
    setTimeout(()=> navLinks.classList.remove("open-hamburder"), 500);

    hamburgerLines[0].classList.remove("upperline");
    hamburgerLines[1].classList.remove("middleline");
    hamburgerLines[2].classList.remove("lowerline");

    navLinks.classList.remove("show-ul");
    hamburgerStatus = false;

  }
})

/* =============================================================== */
/* ========================= CHECK IF DOCUEMNET HAS AN ITEM ============================= */
/* =============================================================== */
const showBtns  = checkUp(document.querySelectorAll(".waite-load-more .btn"));

if(showBtns !== null){
	let currentHidden;
	let currentBtn;
	const allHidenContent = document.querySelectorAll(".waite-load-more .hid-cotent");

  showBtns.forEach((item) => {

		item.addEventListener("click", function(){
		currentBtn = item;

			currentHidden = item.parentElement.nextElementSibling;
			currentHidden.classList.remove("fade");
			closeOther(currentHidden);
			currentHidden.classList.toggle("load-more");
			removeBtnClass(currentBtn);
			currentBtn.classList.add("btn-active");
		})
  });

	function removeBtnClass(currentBtn){
		showBtns.forEach(item => item == currentBtn ? "" : item.classList.remove("btn-active"));
	}

	function closeOther(currentHidden){
		allHidenContent.forEach(item=> {
			if(item != currentHidden){
				item.classList.add("fade");
				item.classList.remove("load-more");
			}
		});
	}
}


// const waiteLoadMore = document.querySelector("#waite-load-more");
// const waiteLoadMoreOther = document.querySelector("#waite-load-more-other");
// let loadMoreFqs = document.querySelector("#load-more");
//
// loadMoreFqs.addEventListener("click", ()=>{
// 	loadMoreFqs.classList.add("fade");
// 	 waiteLoadMore.classList.add("load-more");
// 	 waiteLoadMoreOther.classList.add("load-more");
// 	 setTimeout(()=>{
// 			loadMoreFqs.remove();
// 			loadMoreFqs = "";
// 	 },1500)
//  });
/* =============================================================== */
/* ========================= Hover The imgs ============================= */
/* =============================================================== */
// const trophyImg = checkUp(document.querySelector("#catergories article img"));
//
// trophyImg.addEventListener("mouse", scaleUp);
//
// function scaleUp() {
//
// }

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
