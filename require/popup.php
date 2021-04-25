   <!-- POPUP NOUVEAU SITE -->
   <section id="nouveauSite">
       <div>
           <a href="https://quentinperou.fr" target="_blank">Nouvelle version du portfolio ici</a>
           <p id="FermerNouveauSite">Fermer</p>
       </div>
   </section>

   <style>
       #nouveauSite {
           position: fixed;
           width: 100%;
           height: calc(100vh - 70px);
           background-color: rgba(255, 255, 255, 0.3);
           z-index: 2;
           display: flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
           font-size: 40px;
           color: white;
           font-weight: bold;
           text-align: center;
       }

       #nouveauSite div {
           background-color: #3d3d3d;
           padding: 50px;
           border-radius: 20px;
           border: solid #3d3d3d 5px;
       }

       #nouveauSite a {
           color: white;
           cursor: pointer;
           text-decoration: underline;
       }

       #nouveauSite p {
           margin: 20px 0 0 0;
           cursor: pointer;
       }

       #nouveauSite p:hover {
           text-decoration: line-through;
       }

       #nouveauSite a:hover {
           color: #d3d3d3;
       }

   </style>

   <script>
       document.addEventListener("DOMContentLoaded", function(evt) {
           $("#nouveauSite div").click(function (evt) {
            evt.stopPropagation();
        });
           $("#FermerNouveauSite, #nouveauSite").click(function() {
               $("#nouveauSite").hide();
           });
       });

   </script>
   <!-- FIN -- POPUP NOUVEAU SITE -->
