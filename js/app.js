 document.addEventListener("DOMContentLoaded", e => {
     console.log(navigator.userAgent);

     let el, modal, closed, open_modal, closed_all,img, accueil;
     el = document.querySelectorAll(".grid-picture-large li");
     modal = document.querySelector(".parent-modale");
     closed = document.querySelector(".modale button");
     closed_all = document.querySelector(".modale img");

     /* property elements */

     open_modal = function () {
         console.log(this.dataset);
         /* les variables */
         let image = this.dataset.image;
         let title = this.dataset.title;
         let desc = this.dataset.description;
         let dates = this.dataset.dates;
         let idimg = this.dataset.id;
         modal.classList.add("modale-active"); /* ajouter la classe active */
         /* sélectionner les sélecteurs html*/
         document.querySelector(".modale img").setAttribute("src", image);
         document.querySelector(".modale .desc h3").innerText = title;
         document.querySelector(".modale .desc p").innerHTML = `<strong>Déscription : </strong>${desc}`;
         document.querySelector(".modale .desc time").innerText = `Annee ${dates}`;
         document.querySelector(".modale .desc time").setAttribute("datetime", dates);

         let btn = document.querySelector("main .grid-picture-large");
		btn.addEventListener("click", (e) => {
			e.preventDefault();
			window.history.pushState(1, "Projet", "accueil_membre.php?id_event=" + idimg);
		});
     };
     for (rows of el) {
         rows.addEventListener("click", open_modal);
     }
     closed.addEventListener("click", () => {
         modal.classList.remove("modale-active");
     });
     closed_all.addEventListener("click", () => {
       modal.classList.remove("modale-active");
     });

         img = document.querySelector("header #toggle");
     accueil = document.querySelector("header img");

     accueil.addEventListener("click", () => {
         window.location.href = "index.html";
     });
    
     img.addEventListener("click", () => {
         if (img.innerHTML === `<img src="./asset/soleil.png" id="theme">`) {
             img.innerHTML = `<img src="./asset/lune.png" id="theme">`;
             img.classList.add("rota");
             img.classList.remove("rota2");
         } else {
             img.innerHTML = `<img src="./asset/soleil.png" id="theme">`;
             img.classList.remove("rota");
             img.classList.add("rota2");
         }
         document.body.classList.toggle("light");
       
     });


         let btn = document.querySelector(".menu");
         let ele = document.querySelector("header div");
       
    
         btn.addEventListener("click", () => {
             ele.classList.toggle("open");
             btn.innerHTML === "☰" ? btn.innerHTML = "X" : btn.innerHTML = "☰";
    
        
            
         });
    });
    
   

