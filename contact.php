 <?php
  include('include/header.php');
  ?>
 <section class="ftco-section contact-section bg-light">
   <div class="container">
     <div class="row d-flex mb-5 contact-info">
       <div class="col-md-12 mb-4">
         <h2 class="h3">Contact Information</h2>
       </div>
       <div class="w-100"></div>
       <div class="col-md-3">
         <p><span>Addresse:</span> 12 rue Quincampoix 75002 Paris</p>
       </div>
       <div class="col-md-3">
         <p><span>Téléphone:</span> <a href="tel://01 34 65 67 98">01 34 65 67 98
           </a></p>
       </div>
       <div class="col-md-3">
         <p><span>Email:</span> <a href="mailto:info@yoursite.com"> info@trtconseil.com</a></p>
       </div>
       <div class="col-md-3">
         <p><span>Website</span> <a href="#">trtconseil.com</a></p>
       </div>
     </div>
     <div class="row block-9">
       <div class="col-md-6 order-md-last d-flex">
         <form action="#" class="bg-white p-5 contact-form">
           <div class="form-group">
             <input type="text" class="form-control" placeholder="Votre Nom">
           </div>
           <div class="form-group">
             <input type="text" class="form-control" placeholder="Votre Email">
           </div>
           <div class="form-group">
             <input type="text" class="form-control" placeholder="Titre">
           </div>
           <div class="form-group">
             <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
           </div>
           <div class="form-group">
             <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
           </div>
         </form>

       </div>

       <div class="col-md-6 d-flex">
         <div id="map" class="bg-white"></div>
       </div>
     </div>
   </div>
 </section>

 <section class="ftco-section-parallax">
   <div class="parallax-img d-flex align-items-center">
     <div class="container">
       <div class="row d-flex justify-content-center">
         <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
           <h2>Inscrivez-vous à notre Newsletter</h2>
           <p>Suivez toutes les informations sur l'hôtellerie et la restauration</p>
           <div class="row d-flex justify-content-center mt-4 mb-4">
             <div class="col-md-8">
               <form action="#" class="subscribe-form">
                 <div class="form-group d-flex">
                   <input type="text" class="form-control" placeholder="Entrez votre email">
                   <input type="submit" value="Subscribe" class="submit px-3">
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <?php
  include('include/footer.php');
  ?>