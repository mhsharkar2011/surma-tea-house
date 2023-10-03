   <!-- Contact Start -->
   <div class="container-xxl contact py-5" id="contact.php">
       <div class="container">
           <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
               <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
               <h1 class="display-6">If You Have Any Query, Please Contact Us</h1>
           </div>
           <div class="row g-5 mb-5">
               <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                   <div class="btn-square mx-auto mb-3">
                       <i class="fa fa-envelope fa-2x text-white"></i>
                   </div>
                   <p class="mb-2">info@surmatea.com</p>
                   <p class="mb-0">support@surmatea.com</p>
               </div>
               <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                   <div class="btn-square mx-auto mb-3">
                       <i class="fa fa-phone fa-2x text-white"></i>
                   </div>
                   <p class="mb-2">02-8829218</p>
                   <p class="mb-0">....</p>
               </div>
               <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                   <div class="btn-square mx-auto mb-3">
                       <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                   </div>
                   <p class="mb-2">Teliapara, Madhabpur, Habiganj, Sylhet, Bangladesh 3360 Habiganj</p>
                   <p class="mb-0">Sylhet Division, Bangladesh</p>
               </div>
           </div>
           <div class="row g-5">
               <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                   <div class="h-100">
                       <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35142.80252899753!2d91.36929850412497!3d24.380077524816937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37514f62e0c5cced%3A0x3b7566af16fcda21!2sHabiganj-Shahpur%20Rd!5e0!3m2!1sen!2sbd!4v1696273630018!5m2!1sen!2sbd" frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                   </div>
               </div>
               <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                   <h3 class="mb-4">Need a functional contact form?</h3>
                   <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                   <!-------------------- Mail Sending Form ------------------------------>
                   <form action="process.php" method="post">
                       <div class="row g-3">
                           <div class="col-md-6">
                               <div class="form-floating">
                                   <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                   <label for="name">Your Name</label>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-floating">
                                   <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                   <label for="email">Your Email</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <div class="form-floating">
                                   <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                   <label for="subject">Subject</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <div class="form-floating">
                                   <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 120px"></textarea>
                                   <label for="message">Message</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <input type="submit" name="submit" value="Send Message" class="btn btn-primary rounded-pill py-3 px-5" />
                           </div>
                       </div>
                   </form>
               </div>

           </div>
       </div>
   </div>
   <!-- Contact End -->