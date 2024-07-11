<?php
session_start();
if (!isset($_SESSION['admin_reg_id'])) {
  header('Location: adminlogin.php');
  exit();
}
include '../server.php';
if (isset($_GET['download_App'])) {
  $down_app = $_GET['download_App'];


  // $_SESSION['$admin_new_pan_id'] = $admin_new_pan_id;
  // $admin_new_pan_ids = $_SESSION['$admin_new_pan_id'];
  // $ad_pro = $_SESSION['admin_reg_id'];
  // $admin_profile = $db->feth_admin_pro($ad_pro);

  $db = new Database();
  $fetched_update_pan_id = $db->select_update_pan_data_id($down_app);

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Newpan.css" />
    <title>New Pan Application</title>
  </head>
  <body>
    <div class="container-fluid m-0 p-0 py-5 print-container">
      <div class="container main-container ">
        <!-- Row--1 -->
        <div class="row p-1">
          <div class="col-2 borders p-0">
          <div class="d-flex  justify-content-center align-items-center position-relative" style="height: 220px">
            <img src="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>" alt="Profile Photo"
              class="img-fluid ">
            <div class="position-absolute  " style="left: 5%; bottom:-0%;">
              <img src="../<?php echo $fetched_update_pan_id['update_signature']; ?>" alt="Profile Photo"
                class="img-fluid my-2 rounded-2" style="transform: rotate(-25deg); width:200px;">
            </div>
          </div>
            <div
              class="borders text-center pt-1 border-end-0 border-start-0 border-bottom-0"
            >
              <p style="font-size: 13px">
                Signature / Left thumb impression across this photo
              </p>
            </div>
          </div>

          <div class="col-8 text-center px-5 pt-2">
            <h4>
              Request For Changes Or Correction in PAN Data Or/ And reprint of
              New PAN Card
            </h4>

            <h5 class="pt-5">Permanent Account Number (PAN)</h5>
            <form id="dynamic-form">
              <!-- Dynamic inputs will be appended here -->
            </form>
            <p class="pt-2">
              Please read Instructions ‘h’ & ‘i’ for selecting boxes on left
              margin of this form.
            </p>
          </div>
          <div
            class="col-2 borders d-flex justify-content-center align-items-center"
            style="height: 230px"
          >
            <!-- <p style="font-size: 13px">
              Only ‘Individuals’ to affix recent photograph (3.5 cm × 2.5 cm)
            </p> -->
            <img src="../<?php echo $fetched_update_pan_id['update_profile_picture']; ?>" alt="Profile Photo" class="img-fluid">
          </div>
        </div>
        <!-- Row--1 -->
        <!-- Row--2 -->
        <div class="row">
          <div class="col-9 p-0 pe-3">
            <p class="h6 pt-1 ps-4" style="background-color: skyblue">
              <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
              <span
                >1.Full Name (Full expanded name to be mentioned as appearing in
                proof of identity/address documents: initials are not
                permitted)</span
              >
            </p>
            <div class="ps-4">
              <label
                class="form-check-label fw-bold fst-italic"
                for="flexCheckDefault"
              >
                Please select title ,
              </label>
              <input
                class="form-check-input styled-input rounded-0"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <span class="fw-bold fst-italic px-3">as applicable</span>

              <input
                class="form-check-input styled-input rounded-0"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label
                class="ps-2 pe-5 form-check-label fw-bold fst-italic"
                for="flexCheckDefault"
              >
                Shri
              </label>

              <input
                class="form-check-input styled-input rounded-0"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label
                class="ps-2 pe-5 form-check-label fw-bold fst-italic"
                for="flexCheckDefault"
              >
                Smt
              </label>

              <input
                class="form-check-input styled-input rounded-0"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label
                class="ps-2 pe-5 form-check-label fw-bold fst-italic"
                for="flexCheckDefault"
              >
                Kumari
              </label>

              <input
                class="form-check-input styled-input rounded-0"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label
                class="ps-3 form-check-label fw-bold fst-italic"
                for="flexCheckDefault"
              >
                M/s
              </label>
            </div>
          </div>
          <div class="col-3 borders p-0">
          <div class="text-center" >
              <img  src="../<?php echo $fetched_update_pan_id['update_signature']; ?>" alt="Profile Photo" class="img-fluid w-50 ">
            </div>
            <div
              class="borders text-center pt-1 border-end-0 border-start-0 border-bottom-0"
            >
              <p style="font-size: 13px">Signature / Left thumb impression</p>
            </div>
          </div>
          <!-- Last Name / Surname -->
          <div class="ps-4 mt-1 col-12">
            <div class="d-flex">
              <label for="" class="pe-3">Last Name / Surname</label>
              <form id="Lastname_surename">
                <!-- Last Name / Surname -->
              </form>
            </div>
            <!-- First Name -->
            <div class="d-flex mt-1">
              <label for="" class="pe-5">First Name</label>
              <form id="Firstname" style="margin-left: 43px">
                <!-- First Name -->
              </form>
            </div>

            <!-- Middlename -->
            <div class="d-flex mt-1">
              <label for="" class="pe-5">Middle Name</label>
              <form id="Middlename" style="margin-left: 23px">
                <!-- Middlename -->
              </form>
            </div>
          </div>
          <p class="h6 ps-4 py-1 mt-2" style="background-color: skyblue">
            <span>Name you would like it printed on the PAN card</span>
          </p>
          <!-- Printpan -->
          <div class="mt-1">
            <form id="Printpan" style="margin-left: 23px">
              <!-- Printpan -->
            </form>
          </div>
          <p class="h6 ps-4 py-1 mt-2" style="background-color: skyblue">
            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <span class="ps-2">2 Details of Parents (applicable only for Individual
              applicants)</span
            >
          </p>
          <div class="ps-4">
            <p class="fw-bold">
              Father’s Name (Mandatory. Even married women should fill in
              father’s name only)
            </p>
            <div class="d-flex">
              <label for="" class="pe-3">Last Name / Surname</label>
              <form id="Fathername">
                <!-- Father Name-->
              </form>
            </div>
            <!-- Fatherfirstname -->
            <div class="d-flex mt-1">
              <label for="" class="pe-3">First Name</label>
              <form id="Fatherfirstname" style="margin-left: 75px">
                <!-- Father Name-->
              </form>
            </div>

            <div class="d-flex mt-1">
              <label for="" class="pe-3">Middle Name</label>
              <form id="Middlefathername" style="margin-left: 55px">
                <!-- Middle Name-->
              </form>
            </div>
          </div>

          <!-- Mother Details -->
          <div class="ps-4">
            <p class="fw-bold">Mother’s Name (optional)</p>
            <div class="d-flex">
              <label for="" class="pe-3">Last Name / Surname</label>
              <form id="Mothername">
                <!-- Mother Name-->
              </form>
            </div>
            <!-- Motherfirstname -->
            <div class="d-flex mt-1">
              <label for="" class="pe-3">First Name</label>
              <form id="Motherfirstname" style="margin-left: 75px">
                <!--Mother Name-->
              </form>
            </div>

            <div class="d-flex mt-1">
              <label for="" class="pe-3">Middle Name</label>
              <form id="MiddleMothername" style="margin-left: 55px">
                <!-- Middle Name-->
              </form>
            </div>
          </div>
          <div class="ps-4">
            <p class="fw-bold mb-0">
              Select the name of either father or mother which you may like to
              be printed on PAN card (Select one only)
            </p>
            <p class="d-inline">
              (In case no option is provided then PAN card will be issued with
              father’s name)
            </p>

            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label class="form-check-label fst-italic" for="flexCheckDefault">
              Father's Name
            </label>

            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label class="form-check-label fst-italic" for="flexCheckDefault">
              Mother's Name
            </label>
            <p class="d-inline ps-2">(Please tick as applicable)</p>
          </div>
          <!-- Date of Birth -->
          <div class="mt-2 p-0">
            
            <p class="h6 ps-4" style="background-color: skyblue">
              <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
              <span class="ps-2"
                >3 Date of Birth/Incorporation/Agreement/Partnership/Trust Deed/
                Formation of Body of individuals or Association of Persons</span
              >
            </p>

            <p class="fw-bold ps-5 mb-0">Date/Month/Year</p>
            <form id="Dob" class="ps-5">
              <!-- Middle Name-->
            </form>
          </div>
          <!-- Gender -->
          <div class="pt-1 ps-4 mt-1" style="background-color: skyblue">
            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <p class="h6 ps-1 d-inline">
              <span>4 Gender (for ‘Individual’ applicant only)</span>
            </p>
            <input
              class="form-check-input styled-input ms-4 rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label
              class="form-check-label fst-italic fw-bold"
              for="flexCheckDefault"
            >
              Male
            </label>

            <input
              class="form-check-input styled-input ms-4 rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label
              class="form-check-label fst-italic fw-bold"
              for="flexCheckDefault"
            >
              Female
            </label>

            <input
              class="form-check-input styled-input ms-4 rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label
              class="form-check-label fst-italic fw-bold"
              for="flexCheckDefault"
            >
              Transgender
            </label>
            <p class="fw-bold d-inline float-end pe-5">
              (Please tick as applicable)
            </p>
          </div>
          <div class="ps-4 py-1 mt-1" style="background-color: skyblue">
            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <p class="h6 ps-1 d-inline">5 Photo Mismatch</p>
          </div>

          <div class="ps-4 py-1 mt-1" style="background-color: skyblue">
            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <p class="h6 ps-1 d-inline">6 Signature Mismatch</p>
          </div>
          <div class="ps-4 mt-1 pt-1 pb-0" style="background-color: skyblue">
            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <p class="h6 ps-1 pe-4 d-inline">7 Address for Communication</p>
            <input
              class="form-check-input styled-input ms-4 rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label
              class="form-check-label fst-italic fw-bold"
              for="flexCheckDefault"
            >
              Residence
            </label>

            <input
              class="form-check-input styled-input ms-4 rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label
              class="form-check-label fst-italic fw-bold"
              for="flexCheckDefault"
            >
              Office
            </label>
            <p class="fw-bold d-inline float-end pe-5">
              (Please tick as applicable)
            </p>
          </div>
        </div>
        <!-- Row--2 -->
        <!-- Row--3 -->
        <div class="row">
         <div class="ps-2 mt-2 d-flex justify-content-between">
          <label class="">Name of Office (to be filled only in case of office address)</label>
          <form id="Nameofoffice" >
            <!-- Middle Name-->
          </form>
         </div>

         <div class="ps-2 mt-2 d-flex justify-content-between">
          <label class="pe-2">Flat/Room/ Door / Block No .</label>
          <form id="Flat_Room" >
            <!--Flat_Room-->
          </form>
         </div>

         <div class="ps-2 mt-2 d-flex justify-content-between">
          <label class="pe-2">Name of Premises/ Building/Village</label>
          <form id="Name_of_Premises" >
            <!--Flat_Room-->
          </form>
         </div>

         <div class="ps-2 mt-2 d-flex justify-content-between">
          <label class="pe-2">Road/Street/ Lane/Post Office</label>
          <form id="Road" >
            <!--Road-->
          </form>
         </div>

         <div class="ps-2 mt-2 d-flex justify-content-between">
          <label class="pe-2">Area / Locality / Taluka / Sub- Division</label>
          <form id="Area" >
            <!--Area-->
          </form>
         </div>

         <div class="ps-2 mt-2 d-flex justify-content-between">
          <label class="pe-2">Town / City / District</label>
          <form id="Town" >
            <!--Town-->
          </form>
         </div>

         <div class="ps-2 mt-2  ps-5">
          <div class="pe-2 ms-5 col-10 bg-info  d-flex justify-content-evenly">
            <span>
            State / Union Territory
          </span>
            <span>Pincode / Zip code</span>
            <span>Country Name</span>
          </div>
          <form  class="d-flex justify-content-center">
            <input type="text" class="styled-input" style="width: 350px;">
            <div id="State">

            </div>
            <input type="text" class="styled-input" style="width: 350px;">
            <!--Town-->
          </form>
         </div>
          
         <div class="my-1 p-0 d-flex" style="background-color: skyblue">
          <input
          class="form-check-input styled-input ms-4 rounded-0"
          type="checkbox"
          value=""
          id="flexCheckDefault"
        />
         <p class="ps-2 h6 pt-1">8 If you desire to update your other address also, give required details In additional sheet.</p>
         </div>

         <div class="my-1 p-0 d-flex" style="background-color: skyblue">
          <input
          class="form-check-input styled-input ms-4 rounded-0"
          type="checkbox"
          value=""
          id="flexCheckDefault"
        />
         <p class="ps-2 h6 pt-1">9 Telephone Number & Email ID details </p>
         </div>

          <div class="d-flex justify-content-around">
            <div>
              <p class="h6 d-inline">Country code</p><br>
             <form id="country_code" class="d-inline"></form>
            </div>
             <div>
              <p class="h6 d-inline">Area/STD Code</p><br>
             <form id="STD_Code"></form>
             </div>

             <div>
              <p class="h6 d-inline">Telephone / Mobile number</p><br>
             <form id="Mobile_number"></form>
             </div>
             

          </div>
          <div class="ps-5 my-2">
            <label for="" class="fw-bold ps-1">Email</label>
             <input type="text" class="w-75 text-start ps-3 styled-input ">
           </div>
          
           <div class="d-flex ps-4" style="background-color: skyblue">
            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <p class="ps-2 h6 pt-1">10 AADHAAR number (if allotted)</p>
            <form id="Aadhaar" class="mx-auto"></form>
           </div>
           <div >
            <p class="h6 ps-5">Name as per AADHAAR letter/card</p>
            <form id="Name_as_AADHAAR" class="col-6 m-0 ms-5 "></form>
           </div>

           <div class="d-flex ps-4 my-1 py-1" style="background-color: skyblue">
            <input
              class="form-check-input styled-input rounded-0"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
           <p class="h6 ps-2">11 Mention other Permanent Account Numbers (PANs) inadvertently allotted to you</p>
          </div>
          <div class="d-flex ps-5 my-1">
            <div class="d-flex">
              <p class="h6 px-2 d-inline">
                PAN 1 
              </p>
              <form id="Pan1">
                <!-- Pan1 -->
              </form>
            </div>

            <div class="d-flex">
              <p class="h6 px-2 d-inline">
                PAN 2 
              </p>
              <form id="Pan2">
                <!-- Pan2 -->
              </form>
            </div>

            <div class="d-flex">
              <p class="h6 px-2 d-inline">
                PAN 3 
              </p>
              <form id="Pan3">
                <!-- Pan3 -->
              </form>
            </div>
          </div>
          <div class="p-0">
            <p class="h6  ps-5" style="background-color: skyblue">12 Verification</p>
           <div class="d-flex my-1">
             <p class="h6 d-inline ps-5 pe-2" >I/We</p>
            <input type="text" class="styled-input" style="width: 350px;">
            <p class="h6 d-inline ps-1 pe-2" >, the applicant, in the capacity of</p>
             <input type="text" class="styled-input" style="width: 350px;">

             <p class="h6 d-inline ps-2 pe-2" >do hereby</p>
           </div>
           <div class="d-flex">
            <div class="ps-4 col-8 ">
              <p class="h6 ps-4 pe-2" >declare that what is stated above is true to the best of my/our information and belief. </p>
              <p class="h6 d-inline ps-4 pe-2" >I/We have enclosed 
               <input
               class="form-check-input styled-input rounded-0"
               type="checkbox"
               value=""
               id="flexCheckDefault"
             />
               (number of documents) in support of proposed changes / corrections</p>
             <div class="col-7 ms-5 my-2  justify-content-center ">
              <div>
                <label class="fw-bold">Place</label>
              <input type="text" class="w-75 ms-4 borders styled-input">
              </div>

             <div class="d-flex mt-4 ">
              <label class="fw-bold pe-4">Date</label>
              <form class="ms-1" id="Applydate"></form>
             </div>

             </div>
            </div>
            <div class="col-4  borders p-0">
              <div style="height: 110px"></div>
              <div
              style="height: 30px !important;"
                class="borders text-center pt-1 border-end-0 border-start-0 border-bottom-0"
              >
                <p style="font-size: 13px">Signature / Left Thumb Impression of
                  Applicant (inside the box)</p>
              </div>
            </div>
           </div>
          </div>
        </div>
        
      </div>
      <p class="h6 d-flex justify-content-center">Note: As per provisions of Section 272B of the Income Tax Act., 1961, a penalty of ` 10,000 can be levied on possession of more than one PAN.</p>

    </div>

    <script src="Newpan.js"></script>
  </body>
</html>
