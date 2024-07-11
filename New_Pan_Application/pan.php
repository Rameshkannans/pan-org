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
  $fetched_new_pan_id = $db->select_new_pan_data_id($down_app);

  // echo $fetched_new_pan_id['new_call_name'];


}




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="pan.css" />
  <title>New Pan Application</title>
</head>

<body>
  <!-- <h1><?php echo $fetched_new_pan_id['new_call_name']; ?></h1> -->
  <div class="container-fluid m-0 p-0 py-5 print-container">
    <div class="container main-container">
      <!-- Row--1 -->
      <div class="row p-1">
        <div class="col-2 borders p-0" style="height: 270px">
          <div class="d-flex  justify-content-center align-items-center position-relative" style="height: 220px">
            <img src="../<?php echo $fetched_new_pan_id['new_profile_picture']; ?>" alt="Profile Photo"
              class="img-fluid ">
            <div class="position-absolute  " style="left: -20%; bottom:-10%;">
              <img src="../<?php echo $fetched_new_pan_id['new_signature']; ?>" alt="Profile Photo"
                class="img-fluid my-2 rounded-2" style="transform: rotate(-25deg);">
            </div>
          </div>
          <div style="height:auto;" class="borders  text-center pt-1 border-end-0 border-start-0 border-bottom-0">
            <p class="d-flex" style="font-size:13px">
              Signature / Left thumb impression across this photo
            </p>
          </div>
        </div>

        <div class="col-8 text-center p-0">
          <span class="h4 d-block">Form No. 49A</span>
          <span class="h5 mx-5 d-block">
            Application for Allotment of Permanent Account Number [In the case
            of Indian Citizens/lndian Companies/Entities incorporated in
            India/ Unincorporated entities formed in India]
          </span>
          <span class="h5">See Rule 114</span>
          <p class="mt-3" style="font-size: 14px">
            To avoid mistake (s), please follow the accompanying instructions
            and examples before filling up the form
          </p>
          <p class="h5 py-1" style="background-color: #eeeeee">
            Assessing officer (AO code)
          </p>

          <table class="ms-2">
            <th>
              <tr>
                <th class="borders" style="width: 50px">Area code</th>
                <th class="borders">AO type</th>
                <th class="borders">Range code</th>
                <th class="borders">AO No</th>
              </tr>
              <tbody class="border-0">
                <tr>
                  <td id="td1" class="d-flex border-0"></td>
                  <td id="td2" class="border-0"></td>
                  <td id="td3" class="border-0"></td>
                  <td id="td4" class="border-0"></td>
                </tr>
              </tbody>
            </th>
          </table>
        </div>
        <div class="col-2 borders d-flex justify-content-center align-items-center" style="height: 230px">
          <img src="../<?php echo $fetched_new_pan_id['new_profile_picture']; ?>" alt="Profile Photo" class="img-fluid">
        </div>
      </div>
      <!-- Row--1 -->

      <div class="row">
        <div class="d-flex justify-content-between">
          <p class="d-inline mt-4">
            Sir <br />
            I/We hereby request that a permanent account number be allotted to
            me/us. <br />
            I/We give below necessary particulars:
          </p>

          <div class="col-4 borders p-0">
            <div class="text-center" >
              <img  src="../<?php echo $fetched_new_pan_id['new_signature']; ?>" alt="Profile Photo" class="img-fluid w-50 ">
            </div>
            <div class="borders text-center pt-1 border-end-0 border-start-0 border-bottom-0">
              <p style="font-size: 13px">Signature / Left thumb impression</p>
            </div>
          </div>
        </div>
        <div class="col-12 p-0">
          <p class="h6 pt-1 my-1 ps-4" style="background-color: #eeeeee">
            <span>1.Full Name (Full expanded name to be mentioned as appearing in
              proof of identity/address documents: initials are not
              permitted)</span>
          </p>
          <div class="ps-4">
            <label class="form-check-label " for="flexCheckDefault">
              Please select title ,
            </label>
            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <span class=" px-3">as applicable</span>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-2 pe-5 form-check-label " for="flexCheckDefault">
              Shri
            </label>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-2 pe-5 form-check-label " for="flexCheckDefault">
              Smt
            </label>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-2 pe-5 form-check-label " for="flexCheckDefault">
              Kumari
            </label>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-3 form-check-label " for="flexCheckDefault">
              M/s
            </label>
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

        <p class="h6 ps-4 py-1 mt-2" style="background-color: #eeeeee">
          <span>2.Abbreviations of the above name, as you would like it, to be
            printed on the PAN card</span>
        </p>
        <!-- Printpan -->
        <div class="mt-1">
          <form id="Printpan" style="margin-left: 23px">
            <!-- Printpan -->
          </form>
        </div>

        <p class="h6 ps-4 py-1 mt-2" style="background-color: #eeeeee">
          <span class="">3.Have you ever been known by any other name?</span>
          <span class="px-5">
            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <span class="ps-1">Yes</span>
          </span>
          <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <span class="ps-1">No</span>

          <span class="float-end pe-5">(please tick as applicable)</span>
        </p>

        <div class="ps-4">
          <p class="">If yes, please give that other name</p>
          <!-- ddd -->
          <div class="ps-0 py-2">
            <label class="form-check-label" for="flexCheckDefault">
              Please select title ,
            </label>
            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <span class="px-1">as applicable</span>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-2 pe-5 form-check-label" for="flexCheckDefault">
              Shri
            </label>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-2 pe-5 form-check-label" for="flexCheckDefault">
              Smt
            </label>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-2 pe-5 form-check-label" for="flexCheckDefault">
              Kumari
            </label>

            <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
            <label class="ps-3 form-check-label" for="flexCheckDefault">
              M/s
            </label>
          </div>
          <!-- ddd -->
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
        <!-- Gender -->
        <div class="pt-1 ps-4 mt-1" style="background-color: #eeeeee">
          <p class="h6 ps-1 d-inline">
            <span>4 Gender (for ‘Individual’ applicant only)</span>
          </p>
          <input class="form-check-input styled-input ms-4 rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label h6" for="flexCheckDefault">
            Male
          </label>

          <input class="form-check-input styled-input ms-4 rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label h6" for="flexCheckDefault">
            Female
          </label>

          <input class="form-check-input styled-input ms-4 rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label h6" for="flexCheckDefault">
            Transgender
          </label>
          <p class="h6 d-inline float-end pe-5">
            (Please tick as applicable)
          </p>
        </div>
        <!-- Date of Birth -->
        <div class="mt-2 p-0">
          <p class="h6 ps-4 py-2" style="background-color: #eeeeee">
            <span class="ps-1">5 Date of Birth/Incorporation/Agreement/Partnership or Trust
              Deed/ Formation of Body of individuals or Association of
              Persons</span>
          </p>

          <p class="h6 ps-5 mb-0">Date/Month/Year</p>
          <form id="Dob" class="ps-5">
            <!-- Middle Name-->
          </form>
        </div>

        <div class="p-0 mt-1">
          <p class="h6 py-2 ps-4" style="background-color: #eeeeee">
            6 Details of Parents (applicable only for individual applicants)
          </p>
          <p class="ps-5">
            Whether mother is a single parent and you wish to apply for PAN by
            furnishing the name of your mother only?
          </p>
          <input class="form-check-input styled-input ms-5 rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault"> Yes </label>

          <input class="form-check-input styled-input ms-4 rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">
            No (please tick as applicable)
          </label>
          <p class="ps-5">
            If yes, please fill in mother’s name in the appropriate space
            provide below
          </p>
          <p class="ps-5 h6">
            Father’s Name (Mandatory except where mother is a single parent
            and PAN is applied by furnishing the name of mother only)
          </p>
          <!-- Father -->
          <!-- Last Name / Surname -->
          <div class="ps-5 mt-1 col-12">
            <div class="d-flex">
              <label for="" class="pe-3">Last Name / Surname</label>
              <form id="Father_name">
                <!-- Last Name / Surname -->
              </form>
            </div>
            <!-- First Name -->
            <div class="d-flex mt-1">
              <label for="" class="pe-5">First Name</label>
              <form id="FatherFirstname" style="margin-left: 43px">
                <!-- First Name -->
              </form>
            </div>

            <!-- Middlename -->
            <div class="d-flex mt-1">
              <label for="" class="pe-5">Middle Name</label>
              <form id="FatherMiddlename" style="margin-left: 23px">
                <!-- Middlename -->
              </form>
            </div>
          </div>
          <!-- Father -->
          <!-- Mother -->
          <p class="ps-5 h6">
            Mother’s Name (optional except where mother is a single parent and
            PAN is applied by furnishing the name of mother only)
          </p>

          <!-- Last Name / Surname -->
          <div class="ps-5 mt-1 col-12">
            <div class="d-flex">
              <label for="" class="pe-3">Last Name / Surname</label>
              <form id="Mother_name">
                <!-- Last Name / Surname -->
              </form>
            </div>
            <!-- First Name -->
            <div class="d-flex mt-1">
              <label for="" class="pe-5">First Name</label>
              <form id="Motherfirstname" style="margin-left: 43px">
                <!-- First Name -->
              </form>
            </div>

            <!-- Middlename -->
            <div class="d-flex mt-1">
              <label for="" class="pe-5">Middle Name</label>
              <form id="MiddleMothername" style="margin-left: 23px">
                <!-- Middlename -->
              </form>
            </div>
          </div>
          <p class="ps-5">
            Select the name of either father or mother which you may like to
            be printed on PAN card (Select one only)
          </p>
          <input class="form-check-input styled-input ms-5 rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">
            Father's Name
          </label>
          <input class="form-check-input styled-input ms-5 rounded-0" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">
            Mother's Name
          </label>
          <p class="d-inline ps-5">(Please tick as applicable)</p>
          <p class="ps-5 mt-1">
            (In case no option is provided then PAN card will be issued with
            father’s name except where mother is a single parent and you wish
            to apply for PAN by furnishing name of the mother only)’.
          </p>
        </div>

        <div class="ps-4 mt-1 pt-1 pb-0" style="background-color: #eeeeee">
          <p class="h6 ps-1 pe-4 d-inline">7 Address for Communication</p>
        </div>
      </div>
      <!-- Row--2 -->
      <!-- Row--3 -->
      <div class="row">
        <div class="ps-5 mt-2 d-flex justify-content-between">
          <label class="pe-2">Flat/Room/ Door / Block No .</label>
          <form id="Flat_Room">
            <!--Flat_Room-->
          </form>
        </div>

        <div class="ps-5 mt-2 d-flex justify-content-between">
          <label class="pe-2">Name of Premises/ Building/Village</label>
          <form id="Name_of_Premises">
            <!--Flat_Room-->
          </form>
        </div>

        <div class="ps-5 mt-2 d-flex justify-content-between">
          <label class="pe-2">Road/Street/ Lane/Post Office</label>
          <form id="Road">
            <!--Road-->
          </form>
        </div>

        <div class="ps-5 mt-2 d-flex justify-content-between">
          <label class="pe-2">Area / Locality / Taluka / Sub- Division</label>
          <form id="Area">
            <!--Area-->
          </form>
        </div>

        <div class="ps-5 mt-2 d-flex justify-content-between">
          <label class="pe-2">Town / City / District</label>
          <form id="Town">
            <!--Town-->
          </form>
        </div>

        <div class="ps-5 my-2">
          <div class="p-0 col-9 d-flex justify-content-evenly">
            <span class="text-start"> State / Union Territory </span>
            <span class="text-center">Pincode / Zip code</span>
            <span class="text-end">Country Name</span>
          </div>
          <form class="d-flex">
            <input type="text" class="styled-input" style="width:300px" />
            <div id="State"></div>
            <input type="text" class="styled-input" style="width: 300px" />
            <!--Town-->
          </form>
        </div>

        <!-- Office Address -->
        <div class="ps-5">
          <span class="h6">Office Address</span>
          <div class="mt-2 d-flex justify-content-between">
            <label class="pe-2">Name of office</label>
            <form id="officename">
              <!--Office Name-->
            </form>
          </div>

          <div class="mt-2 d-flex justify-content-between">
            <label class="pe-2">Flat/Room/ Door / Block No .</label>
            <form id="officeFlat_Room">
              <!--officeFlat_Room-->
            </form>
          </div>

          <div class="mt-2 d-flex justify-content-between">
            <label class="pe-2">Name of Premises/ Building/Village</label>
            <form id="officeName_of_Premises">
              <!--officeFlat_Room-->
            </form>
          </div>

          <div class="mt-2 d-flex justify-content-between">
            <label class="pe-2">Road/Street/ Lane/Post Office</label>
            <form id="officeRoad">
              <!--officeRoad-->
            </form>
          </div>

          <div class="mt-2 d-flex justify-content-between">
            <label class="pe-2">Area / Locality / Taluka / Sub- Division</label>
            <form id="officeArea">
              <!--officeArea-->
            </form>
          </div>

          <div class="mt-2 d-flex justify-content-between">
            <label class="pe-2">Town / City / District</label>
            <form id="officeTown">
              <!--officeTown-->
            </form>
          </div>

          <div class="px-0 my-2">
            <div class="p-0 col-9 d-flex justify-content-evenly">
              <span class="text-start"> State / Union Territory </span>
              <span class="text-center">Pincode / Zip code</span>
              <span class="text-end">Country Name</span>
            </div>
            <form class="d-flex">
              <input type="text" class="styled-input" style="width:300px" />
              <div id="OfficeState"></div>
              <input type="text" class="styled-input" style="width: 300px" />
              <!--Town-->
            </form>
          </div>

        </div>

        <div class="my-1 p-0 d-flex" style="background-color: #eeeeee">
          <p class="h6 ps-4 py-1 mt-2" style="background-color: #eeeeee">
            <span class="">8 Address for Communication</span>

            <span class="px-5">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              <span class="ps-1">Residence</span>
            </span>
            <span class="ps-5">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              <span class="ps-1">Office </span>
            </span>

            <span class="px-5">(please tick as applicable)</span>
          </p>
        </div>

        <div class="my-1 p-0 d-flex" style="background-color: #eeeeee">
          <p class="ps-4 h6 pt-1">9 Telephone Number & Email ID details</p>
        </div>

        <div class="d-flex justify-content-around">
          <div>
            <p class="h6 d-inline">Country code</p>
            <br />
            <form id="country_code" class="d-inline"></form>
          </div>
          <div>
            <p class="h6 d-inline">Area/STD Code</p>
            <br />
            <form id="STD_Code"></form>
          </div>

          <div>
            <p class="h6 d-inline">Telephone / Mobile number</p>
            <br />
            <form id="Mobile_number"></form>
          </div>
        </div>
        <div class="ps-5 my-2">
          <label for="" class="h6 ps-1">Email</label>
          <input type="text" class="w-75 text-start ps-3 styled-input" />
        </div>

        <div class="d-flex ps-4" style="background-color: #eeeeee">
          <p class="ps-1 h6 pt-1">10 Status of applicant</p>
        </div>



        <div class="my-2 m-0 p-0 row">
          <div class="d-flex justify-content-between">

            <p class="ps-5 d-inline">
              Please select status,
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              as applicable
            </p>
            <p class="pe-5 ">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Government
            </p>
          </div>
          <div class="col-2  ps-5">
            <p class="">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Individual
            </p>
            <p class="">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Trusts
            </p>
          </div>
          <div class="col ">
            <p class=" ">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Hindu undivided family
            </p>
            <p class=" ">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Body of Individuals
            </p>
          </div>
          <div class="col-2">
            <p class=" ">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Company
            </p>
            <p class=" ">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Local Authority
            </p>
          </div>
          <div class="col p-0">
            <p class="">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Partnership Firm
            </p>

            <p class="">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Artificial Juridical Persons
            </p>
          </div>
          <div class="col">

            <p class=" ">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Association of Persons
            </p>
            <p class=" ">
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              Limited Liability Partnership
            </p>
          </div>



        </div>


        <div class="p-0 my-1 py-1">
          <p class="h6 ps-4" style="background-color: #eeeeee">
            11 Registration Number (for company, firms, LLPs etc.)
          </p>

          <form class="ps-5" id="register"></form>
        </div>

        <div class="p-0 my-1">
          <p class="h6 ps-4 py-2" style="background-color: #eeeeee">
            12 In case of a person, who is required to quote Aadhaar number or
            the Enrolment ID of Aadhaar application form as per section 139 AA
          </p>
          <div class="my-1">
            <div class="d-flex">
              <p class="d-inline ps-5 pe-2">
                Please mention your AADHAAR number (if allotted)
              </p>
              <form id="AADHAAR"></form>
            </div>

            <p class="ps-5 pe-2">
              If AADHAAR number is not allotted, please mention the enrolment
              ID of Aadhaar application form
            </p>
            <div class="text-end">
              <form id="Aadhaar_allotted" class="d-block pe-5"></form>
            </div>
            <p class="ps-5 py-1">
              Name as per AADHAAR letter or card or as per the Enrolment ID of
              Aadhaar application form
            </p>
            <div class="d-flex justify-content-end">
              <div class="col-8 pe-4">
                <form id="Aadhaar_Enrolmentid"></form>
              </div>
            </div>
          </div>
          <div class="col">
            <p class="h6 ps-4 py-2" style="background-color: #eeeeee">
              13 Source of Income
            </p>
            <div class="row my-2">
              <div class="col" style="padding-left: 40px">
                <span class="d-inline-flex">
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                  <p class="ps-1">Salery</p>
                </span>
                <span class="d-inline-flex">
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                  <p class="ps-1">Income from Business / Profession</p>
                </span>
                <span>
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                  Income from House property
                </span>
              </div>
              <div class="col pt-4 p-0 pe-1">
                <span class="d-flex justify-content-end">
                  <p class="pe-2">Business/Profession code</p>
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                </span>
              </div>
              <div class="col pt-4 p-0 ps-1">
                <span class="d-inline-flex">
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                  <p class="d-inline ps-3">Business/Profession code</p>
                </span>
              </div>
              <div class="col-3">
                <span class="d-inline-flex">
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                  <p class="ps-1">Capital Gains</p>
                </span>
                <div class="d-flex">
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                  <p class="ps-1">Income from Other sources</p>
                </div>
                <span>
                  <input class="form-check-input styled-input rounded-0" type="checkbox" value=""
                    id="flexCheckDefault" />
                  No income
                </span>
              </div>
            </div>
          </div>
          <div>
            <p class="h6 ps-4 py-2" style="background-color: #eeeeee">
              14 Representative Assessee (RA)
            </p>
            <p class="px-5">
              Full name, address of the Representative Assessee, who is
              assessible under the Income Tax Act in respect of the person,
              whose particulars have been given in the column 1-13.
            </p>
          </div>

          <div>
            <p class="h6 ps-4 py-2" style="background-color: #eeeeee">
              Full Name (Full expanded name : initials are not permitted)
            </p>
            <!-- dddd -->
            <div class="ps-4 py-1">
              <label class="form-check-label" for="flexCheckDefault">
                Please select title ,
              </label>
              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              <span class="px-1">as applicable</span>

              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              <label class="ps-2 pe-5 form-check-label" for="flexCheckDefault">
                Shri
              </label>

              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              <label class="ps-2 pe-5 form-check-label" for="flexCheckDefault">
                Smt
              </label>

              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              <label class="ps-2 pe-5 form-check-label" for="flexCheckDefault">
                Kumari
              </label>

              <input class="form-check-input styled-input rounded-0" type="checkbox" value="" id="flexCheckDefault" />
              <label class="ps-3 form-check-label" for="flexCheckDefault">
                M/s
              </label>
            </div>
            <!-- dddd -->
            <!-- Full expanded name -->
            <!-- Last Name / Surname -->
            <div class="ps-4 mt-1 col-12">
              <div class="d-flex">
                <label for="" class="pe-3">Last Name / Surname</label>
                <form id="fullname">
                  <!-- Last Name / Surname -->
                </form>
              </div>
              <!-- First Name -->
              <div class="d-flex mt-1">
                <label for="" class="pe-5">First Name</label>
                <form id="Firstfullname" style="margin-left: 43px">
                  <!-- First Name -->
                </form>
              </div>

              <!-- Middlename -->
              <div class="d-flex mt-1">
                <label for="" class="pe-5">Middle Name</label>
                <form id="Firstmiddlename" style="margin-left: 23px">
                  <!-- Middlename -->
                </form>
              </div>
            </div>
          </div>

          <!-- Office Address -->
          <p class="h6 d-block ps-4 py-2 my-2" style="background-color: #eeeeee">
            Address
          </p>
          <div class="ps-4 p-0">
            <div class="mt-2 pe-5 d-flex justify-content-between">
              <label class="pe-2">Flat/Room/ Door / Block No .</label>
              <form id="officeFlat_Room2">
                <!--officeFlat_Room-->
              </form>
            </div>

            <div class="mt-2 pe-5 d-flex justify-content-between">
              <label class="pe-2">Name of Premises/ Building/Village</label>
              <form id="officeName_of_Premises2">
                <!--officeFlat_Room-->
              </form>
            </div>

            <div class="mt-2 pe-5 d-flex justify-content-between">
              <label class="pe-2">Road/Street/ Lane/Post Office</label>
              <form id="officeRoad2">
                <!--officeRoad-->
              </form>
            </div>

            <div class="mt-2 pe-5 d-flex justify-content-between">
              <label class="pe-2">Area / Locality / Taluka / Sub- Division</label>
              <form id="officeArea2">
                <!--officeArea-->
              </form>
            </div>

            <div class="mt-2 pe-5 d-flex justify-content-between">
              <label class="pe-2">Town / City / District</label>
              <form id="officeTown2">
                <!--officeTown-->
              </form>
            </div>
            <div class="my-2">
              <div class="p-0 col-6">
                <span class="text-start"> State / Union Territory </span>
                <span class="float-end pe-5">Pincode / Zip code</span>
              </div>
              <form class="d-flex">
                <input type="text" class="styled-input" style="width: 350px" />
                <div id="OfficeState2"></div>

                <!--Town-->
              </form>
            </div>
          </div>
          <p class="h6 d-block ps-4 py-2 my-2" style="background-color: #eeeeee">
            15 Documents submitted as Proof of Identity (POI), Proof of
            Address (POA) and Proof of Date of Birth (POB)
          </p>
          <div class="ps-4">
            <div class="d-flex">
              <div>
                <label for="">I/We have enclosed </label>
                <input class="styled-input text-start" type="text" style="width: 300px" />
              </div>
              <div class="ps-3">
                <label for="">as proof of identity</label>
                <input class="styled-input text-start" type="text" style="width: 300px" />
              </div>
            </div>
            <p class="my-2">
              as proof of address and
              <input class="styled-input text-start" type="text" style="width: 400px" />
              as proof of date of birth.
            </p>
            <p>
              [Please refer to the instructions (as specified in Rule 114 of
              I.T. Rules, 1962) for list of mandatory certified documents to
              be submitted as applicable] <br />
              [Annexure A, Annexure B & Annexure C are to be used wherever
              applicable]
            </p>
            <div class="d-flex">
              <div>
                <label for="">
                  <span class="h6 pe-2">16</span> I/We
                </label>
                <input class="styled-input text-start" type="text" style="width: 300px" /> ,
              </div>
              <div class="ps-3">
                <label for="" class="px-2">the applicant, in the capacity of</label>
                <input class="styled-input text-start" type="text" style="width: 300px" />
              </div>
            </div>

          </div>
          <div class="row my-2 m-0 p-0 px-2">
            <div class="col-8">
              <p class="ps-4">
                do hereby declare that what is stated above is true to the
                best of my/our information and belief.
              </p>

              <div>
                <label class="h6">Place :</label>
                <input type="text" class=" ms-4 borders styled-input" style="width: 280px;">
              </div>

              <div class="d-flex mt-4 ">
                <label class="h6 pe-4">Date :</label>
                <form class="ms-1" id="Applydate1"></form>
              </div>

            </div>
            <div class="col-4  p-0">
              <div class=" borders w-100 ">
                <div style="height: 80px"></div>
                <div class="borders text-center pt-1 border-end-0 border-start-0 border-bottom-0">
                  <p style="font-size: 13px">
                    Signature / Left Thumb Impression of Applicant (inside the
                    box)
                  </p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    <p class="fs-6 d-flex justify-content-center">
      Note: As per provisions of Section 272B of the Income Tax Act., 1961, a
      penalty of ` 10,000 can be levied on possession of more than one PAN.
    </p>
  </div>

  <script src="pan.js"></script>
  <script>
    // Registration
    const register = document.getElementById("register");
    const registerInputs = 31;

    for (let i = 0; i < registerInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      register.appendChild(input);
    }

    // / AADHAAR
    const AADHAAR = document.getElementById("AADHAAR");
    const AADHAARInputs = 12;

    for (let i = 0; i < AADHAARInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      AADHAAR.appendChild(input);
    }

    // AADHAARid
    const AADHAARid = document.getElementById("AADHAARid");
    const AADHAARidInputs = 29;

    for (let i = 0; i < AADHAARidInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      AADHAARid.appendChild(input);
    }
  </script>
  <script>
    // Aadhaar not_allotted

    const Aadhaar_allotted = document.getElementById("Aadhaar_allotted");
    const Aadhaar_allottedInputs = 29;

    for (let i = 0; i < Aadhaar_allottedInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      Aadhaar_allotted.appendChild(input);
    }
    //   Aadhaar_Enrolmentid

    const Aadhaar_Enrolmentid = document.getElementById(
      "Aadhaar_Enrolmentid"
    );
    const Aadhaar_EnrolmentidInputs = 78;

    for (let i = 0; i < Aadhaar_EnrolmentidInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "30px";
      input.style.height = "30px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      Aadhaar_Enrolmentid.appendChild(input);
    }

    //   fullname
    const fullname = document.getElementById("fullname");
    const fullnameInputs = 25;

    for (let i = 0; i < fullnameInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "30px";
      input.style.height = "30px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      fullname.appendChild(input);
    }
    //   Firstfullname
    const Firstfullname = document.getElementById("Firstfullname");
    const FirstfullnameInputs = 25;

    for (let i = 0; i < FirstfullnameInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "30px";
      input.style.height = "30px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      Firstfullname.appendChild(input);
    }
    //   Firstmiddlename
    const Firstmiddlename = document.getElementById("Firstmiddlename");
    const FirstmiddlenameInputs = 25;

    for (let i = 0; i < FirstmiddlenameInputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "30px";
      input.style.height = "30px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      Firstmiddlename.appendChild(input);
    }

    //   officeFlat_Room2
    const officeFlat_Room2 = document.getElementById("officeFlat_Room2");
    const officeFlat_Room2Inputs = 25;

    for (let i = 0; i < officeFlat_Room2Inputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "28px";
      input.style.height = "28px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      officeFlat_Room2.appendChild(input);
    }

    //   officeName_of_Premises2
    const officeName_of_Premises2 = document.getElementById(
      "officeName_of_Premises2"
    );
    const officeName_of_Premises2Inputs = 25;

    for (let i = 0; i < officeName_of_Premises2Inputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "28px";
      input.style.height = "28px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      officeName_of_Premises2.appendChild(input);
    }

    //   officeRoad2
    const officeRoad2 = document.getElementById("officeRoad2");
    const officeRoad2Inputs = 25;

    for (let i = 0; i < officeRoad2Inputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "28px";
      input.style.height = "28px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      officeRoad2.appendChild(input);
    }

    //   officeArea2
    const officeArea2 = document.getElementById("officeArea2");
    const officeArea2Inputs = 25;

    for (let i = 0; i < officeArea2Inputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "28px";
      input.style.height = "28px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      officeArea2.appendChild(input);
    }

    //   officeTown2
    const officeTown2 = document.getElementById("officeTown2");
    const officeTown2Inputs = 25;

    for (let i = 0; i < officeTown2Inputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "28px";
      input.style.height = "28px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      officeTown2.appendChild(input);
    }
    //   OfficeState2
    const OfficeState2 = document.getElementById("OfficeState2");
    const OfficeState2Inputs = 6;

    for (let i = 0; i < OfficeState2Inputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "30px";
      input.style.height = "30px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      OfficeState2.appendChild(input);
    }

    //   Applydate
    const Applydate1 = document.getElementById("Applydate1");
    const Applydate1Inputs = 8;

    for (let i = 0; i < Applydate1Inputs; i++) {
      const input = document.createElement("input");
      input.type = "text";
      input.className = "styled-input";
      input.style.width = "30px";
      input.style.height = "30px";
      input.maxLength = 1;
      input.addEventListener("input", handleInput);
      input.addEventListener("keydown", handleKeydown);
      Applydate1.appendChild(input);
    }

  </script>
</body>

</html>