<!-- Modal -->
<div class="modal fade" id="createApplicationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog createApplicationModal" style="width:70%; ">
        <div class="modal-content createApp" style="height:100%; margin-top:20px;">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel" >New Application</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:280px; border-radius: 100px; padding: 10px; width:200px; height:40px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body createApp">
          <!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <form id="signUpForm" action="#!">
        <!-- start step indicators -->
        <div class="form-header d-flex mb-4">
            <span class="stepIndicator">Eligibility</span>
            <span class="stepIndicator">Prerequisites</span>
            <span class="stepIndicator">What to Expect</span>
        </div>
        <!-- end step indicators -->
    
        <!-- step one -->
        <div class="step">
            <p class="text-center mb-4">Create your account</p>
            <label>Program</label>
            <div class="mb-3">
                <input type="text" class="programlevel" name="programlevel">
            
                
              </div>



              <div class="mb-3">
              <p id="programlevel">Please select a student to check their eligibility for this program.</p>
              </div>
              

            <div class="form-group">
                  <label>Student</label>
 					<select id="students " name="student"  class="form-control student-list">
 						 <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
        $conn=mysqli_connect("localhost","root","","uni_study");
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        // Check if there are results
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<option value="' . $row['id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['email'] . '</option>';
            }
        } else {
            echo '<option>No Student</option>';
        }
        ?>
 					</select>
            </div>

            <p id="eligibility_status" style="font-size:20px; background-color:rgb(204, 242, 235); height:50px; border-radius:10px; color:rgb(9, 137, 114);display:none ;text-align: center;
"></p>


        </div>
          
        


        <!-- step two -->
        <div class="step">
            <p class="text-center mb-4"></p>
            <div class="mb-3">
            <input type="text" class="programlevel">
         

            </div>
            
        </div>
    
        <!-- step three -->
        <div class="step">
            <p class="text-center mb-4">We will never sell it</p>
            <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       1. Copy of Education Transcripts
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Please provide a copy of the applicant's original transcripts and English translated transcripts:</strong>
        <ul class="info-list">
               <li>acceptable formats: PDF, JPEG or PNG
               </li>
               <li>the photocopy / scan to have no cut-off at the edges and is clear to read
               </li>
               <li>file size limit of the photocopy is 20MB</li>
        </ul>
       </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        2. Copy of Education Certificate
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Please provide a copy of the applicant's original certificate and English translated certificate:</strong>
        acceptable formats: PDF, JPEG or PNG
      the photocopy / scan to have no cut-off at the edges and is clear to read
       file size limit is 20MB

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       3. Emergency Contact
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Please provide the details of the applicant’s emergency contact.</p>



      <p>The emergency contact must be a family member / guardian OR a friend of the applicant. </p>



      <p>The emergency contact can NOT be the applicant themselves, a recruitment partner, or other members of a recruitment agency.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       4. Copy of Passport Workflow
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <p> Please attach a copy of the applicant's passport - pages that include the applicant's identity information: * Acceptable formats: PDF, JPEG or PNG * the photocopy/scan to have no cut-off at the edges and is clear to read * File size limit is 20MB</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       5. No Deferral Policy Acknowledgement
    </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Applicant would NOT be able to defer from one intake to the next, if they are unsuccessful in their initial application selection or visa application.</p>



<p>They would forfeit their application fee and would require to pay for a new application fee and submit a new application for a different intake, if they wish to continue to apply to the college.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       6. English Language Proficiency Test
    </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <p> Please provide a copy of the applicant's english test scores: * acceptable formats: PDF, JPEG or PNG * the photocopy / scan to have no cut-off at the edges and is clear to read * file size limit is 20MB. If the student wishes to provide Duolingo test result, it is required to * Upload a Duolingo certificate with a verification link * Upload a Duolingo Certificate in English format</p>
      </div>
    </div>
  </div>



</div>
        </div>
    
        <!-- start previous / next buttons -->
        <div class="form-footer d-flex">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
        <!-- end previous / next buttons -->

    </form>
              
    <div id="message_login"></div>
    <div id="loader"></div>                 
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>


           
        </div>
    </div>
</div>