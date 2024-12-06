 <!-- build:js backend/ assets/vendor/js/core.js -->

 <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
 <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
 <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
 <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>

 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

 <!-- Main JS -->
 <script src="{{asset ('backend/assets/js/main.js') }}"></script>

 <!-- Page JS -->
 <script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>

 <!-- Place this tag before closing body tag for github widget button. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>




 <script>
     function previewImage(event) {
         const reader = new FileReader();
         const imageField = document.getElementById('imagePreview');

         reader.onload = function() {
             if (reader.readyState === 2) {
                 imageField.src = reader.result;
             }
         }
         reader.readAsDataURL(event.target.files[0]);
     }
 </script>

 <script>
     const modal = document.getElementById('my_modal_2');

     // Function to open the modal
     function openModal() {
         modal.classList.remove('hidden'); // Show the modal by removing the 'hidden' class
     }

     // Function to close the modal
     function closeModal() {
         modal.classList.add('hidden'); // Hide the modal by adding the 'hidden' class
     }

     // Close the modal when clicking outside the modal box
     modal.addEventListener('click', function(event) {
         if (event.target === modal) {
             closeModal();
         }
     });

     // Close the modal when pressing the ESC key
     window.addEventListener('keydown', function(event) {
         if (event.key === 'Escape') {
             closeModal();
         }
     });
 </script>


 <!-- m -->
 <script>
     // Image preview function
     function previewImage(event) {
         const reader = new FileReader();
         reader.onload = function() {
             const output = document.getElementById('imagePreview');
             output.src = reader.result;
         };
         reader.readAsDataURL(event.target.files[0]);
     }
 </script>


 <!-- JavaScript to preview uploaded image -->

 <script>
     function previewImage(event) {
         const input = event.target;
         const imagePreview = document.getElementById('imagePreview');

         if (input.files && input.files[0]) {
             const reader = new FileReader();
             reader.onload = function(e) {
                 imagePreview.src = e.target.result;
                 imagePreview.classList.remove('hidden');
             }
             reader.readAsDataURL(input.files[0]);
         }
     }
 </script>


 </body>

 </html>