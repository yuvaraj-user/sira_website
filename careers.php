<?php include('partials/top_head.php') ?>
    
<?php include('partials/header.php') ?>

    <link rel="stylesheet" type="text/css" href="css/separate_page.css">
    
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="relative jarallax text-light">
                <img src="images/rasi/About Us Cover page 3.png" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Careers</li>
                            </ul>
                            <h1 class="text-uppercase">Careers</h1>
                            <p class="col-lg-10">Start Your Career Journey with Us</p>
                        </div>
                    </div>
                </div>
                <img src="images/rasi/Asset 2.svg" class="abs end-0 z-2 w-20 side-logo-section" alt="">

                <div class="de-overlay"></div>
            </section>

            <section class="career_section" data-wow-delay=".2s">
                <h1 class="text-uppercase wow fadeInUp f-57 animated text-center" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <span class="font-bolder site-blue">Easy</span>
                                <span class="font-lighter site-green">Apply</span>
                </h1>
                <p class="wow fadeInUp text-center" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    We are always looking for talents that help grow our team and reach our goals! Apply here and we will reach back to you if there is a fit.
                </p>
                <div class="container wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card career-card">
                                <div class="card-body">
                                    <form class="row p-3 needs-validation" id="career_form" novalidate>
                                      <div class="col-md-6 mb-4">
                                        <label for="validationCustom01" class="form-label">First name<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control career-input" name="first_name" id="first_name" required>
                                          <div class="invalid-feedback">
                                            Please enter your first name.
                                          </div>
                                      </div>
                                      <div class="col-md-6 mb-4">
                                        <label for="validationCustom02" class="form-label">Last name</label>
                                        <input type="text" class="form-control career-input" name="last_name" id="last_name" required>
                                          <div class="invalid-feedback">
                                            Please enter your last name.
                                          </div>
                                      </div>
                                      <div class="col-md-6 mb-4">
                                        <label for="validationCustomUsername" class="form-label">Email<span class="text-danger"> *</span></label>
                                        <div class="input-group has-validation">
                                          <input type="email" class="form-control career-input" name="email" id="email" aria-describedby="inputGroupPrepend" required>
                                          <div class="invalid-feedback">
                                            Please enter your email.
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-4">
                                        <label for="validationCustom05" class="form-label">Mobile<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control career-input" name="mobile" id="mobile" required>
                                        <div class="invalid-feedback">
                                          Please enter your mobile no.
                                        </div>
                                      </div>

                                    <div class="col-md-12 mb-4">
                                        <label for="validationCustom05" class="form-label">address<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control career-input" name="address" id="address" required>
                                        <div class="invalid-feedback">
                                          Please enter your address.
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="validationCustom05" class="form-label">Resume<span class="text-danger"> *</span></label>
                                        <div id="fileUpload" class="file-container">
                                          <label for="fileUpload-1" class="file-upload">
                                            <div>
                                              <i class="fa-solid fa-cloud-arrow-up"></i>
                                              <p>Drag &amp; Drop Files Here</p>
                                              <span>OR</span>
                                              <div>Browse Files</div>
                                            </div>
                                            <input type="file" id="fileUpload-1" accept="application/pdf,application/msword" name="resume" required >
                                          </label>
                                        </div>
                                        <div class="invalid-feedback resume_file">
                                          Please choose your resume.
                                        </div>
                                    </div>

                                    <div class="col-12 text-end">
                                        <button class="btn-main site-green-bg text-white" type="submit">
                                            <i class="fa-solid fa-check me-2"></i>Submit Your Resume</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </section>
            
        </div>

        
    	<?php include('partials/footer.php') ?>

    </div>

    <?php include('partials/bottom_script.php') ?>

    <script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()

    $(document).ready(function()
    {
        $("#fileUpload").fileUpload();

    });


    function showLoader() {
        $('#de-loader').css('display','flex');
    }

    // Function to hide the loader
    function hideLoader() {
        $('#de-loader').hide();
    }


    function alert_msg(title,message,icon) {
        swal({
            title: title,
            text: message,
            icon: icon,
        });
    }

    function getFileExtension() {
            var fileInput = document.getElementById('fileUpload-1');  // Get the file input element
            var filePath = fileInput.value;  // Get the full file path
            var fileName = fileInput.files[0].name;  // Get the file name (with extension)
            
            // Extract the file extension (use the last part after the dot)
            var fileExtension = fileName.split('.').pop().toLowerCase();
            
            // Display the file extension in the console
            console.log('File extension: ' + fileExtension);

            // Optionally: Check if it's a valid file type (e.g., PDF or Word)
            var allowedExtensions = ['pdf', 'doc', 'docx'];
            if (allowedExtensions.indexOf(fileExtension) === -1) {
                // alert('Invalid file type. Only PDF, DOC, and DOCX files are allowed.');
                alert_msg('Warning','Invalid file type. Only PDF, DOC, and DOCX files are allowed.','warning')
                fileInput.value = '';  // Clear the file input
                $("#fileUpload").fileUpload();

            }
    }


    function validateEmail(mail_input){
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

      if (reg.test(mail_input) == false) 
      {
          return false;
      }

      return true;
    }

    $(document).on('change','#fileUpload-1',function(){
         getFileExtension();
    });

    $(document).on('submit','#career_form',function(e){
        e.preventDefault();
        // console.log($(this).files);
          var form = $(this)[0];
          var form_data = new FormData(form);
          form_data.append('Action','career_submit');  
            $.ajax({
                url: 'common_ajax.php',
                type: 'POST',
                data:  form_data,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function(){
                    showLoader();
                },
                success: function(response) {
                    if(response.status == 200) {
                        swal({
                                icon: "success",
                                title: "Success!",
                                text: response.message,
                                button: true 
                            }).then((result) => {
                                if (result) {
                                    location.reload(true);
                                }
                        });

                    } else {
                        alert_msg('Failed',response.message,'error');
                    }
                },
                complete:function() {
                    hideLoader();
                }
            });

    });
    </script>

</body>

</html>