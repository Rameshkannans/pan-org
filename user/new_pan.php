<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply New Pan Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: "Bree Serif", serif;
        }

        .hidden {
            display: none;
        }

        .invisible {
            display: none;
        }

        #signature-pad {
            border: 2px solid #000;
        }

        .selfie-container-custom {
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video-element-custom {
            display: block;
        }

        .canvas-element-custom {
            display: none;
        }

        /* .col1 {
            background: linear-gradient(to right, rgba(0, 168, 253, 1), #fff 35%);
            background-size: 500% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient 3s linear infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 75%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 70%;
            }
        } */

        .selector {
            color: green;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <marquee behavior="scroll" direction="left"><span class="text-warning">Apply New Pan Card in Easy Way</span>
        </marquee>
        <div class="row justify-content-between">





            <div class="col-md-3 shadow-lg p-4 rounded-4  bg-info">

            </div>





            <div class="col-md-9 p-3  rounded-4 ">
                <a href="../index.php"> <button class="btn btn-danger btn-sm mb-5">
                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            viewBox="0 0 1024 1024">
                            <path
                                d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                            </path>
                        </svg>
                        <span>Back</span>
                    </button></a>
                <form action="../forms_datas.php" method="post" enctype="multipart/form-data">


                    <!-- <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control border-info rounded-0"
                                    oninput="validateInput('fathername')" pattern="[a-zA-Z\s]+" id="fathername"
                                    placeholder="Enter Full Name" name="new_call_father_name">
                                <label for="fathername" class="text-secondary">Father Name (As per Aadhar card)</label>
                            </div>
                        </div>
                    </div> -->


                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control border-info rounded-0"
                                    oninput="validateInput('newname')" pattern="[a-zA-Z\s]+" id="newname"
                                    placeholder="Enter Full Name" name="new_call_name" required>
                                <label for="newname" class="text-secondary">Full Name (As per Aadhar card)</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control border-info rounded-0" id="aadharNumber"
                                    placeholder="Enter Aadhar Number" name="new_aadharNumber"
                                    title="Please enter a Valid Aadhar number" maxlength="14" oninput="formatAadhar()"
                                    required>
                                <label for="aadharNumber" class="text-secondary">Aadhar Number</label>
                            </div>
                            <div id="messageaadhaar"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control border-info rounded-0" id="mobileNumber"
                                    placeholder="Enter Mobil Number" name="new_mobileNumber"
                                    oninput="this.value = this.value.replace(/[^6789\d]/g, '');" pattern="[6789]\d{9}"
                                    title="Please enter a 10-digit number starting with 6, 7, 8, or 9" maxlength="10"
                                    required>
                                <label for="mobileNumber" class="text-secondary">Mobil Number (As per Aadhar
                                    card)</label>
                            </div>
                            <div id="messagemobile"></div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="form-floating mt-3 mb-3">
                                <input type="email" class="form-control border-info rounded-0" id="newemail"
                                    placeholder="Enter email" name="new_email">
                                <label for="newemail" class="text-secondary">Email (Optional)</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="form-floating mb-3 mt-3">
                                <input type="date" class="form-control border-info rounded-0" id="dob"
                                    placeholder="Enter Date of Birth" name="new_pan_dob" onchange="checkAge()" required>
                                <label for="dob" class="text-secondary">Date Of Birth</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-2 text-center border border-warning rounded-0" id="fileUploadFields"
                            style="display: none;">
                            <span class="selector">You are the minor, Please provide the parent's photo and
                                signature</span>
                            <div class="d-flex justify-content-center ">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="fatherRadio" name="new_choose_fm"
                                        value="father" onchange="checkGender()">
                                    <label class="form-check-label" for="fatherRadio">Father</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="motherRadio" name="new_choose_fm"
                                        value="option2" nchange="checkGender()">
                                    <label class="form-check-label" for="motherRadio">Mother</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row gap-5 justify-content-center mt-2">
                        <div class="col-md-5 text-center p-2 border border-warning border-2" id="fileUploadFieldslaf"
                            style="display: none;">
                            <h6 class="my-4 text-info">Upload Parent's Aadhar Front Side</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="fm_new_pan_aadhar_front" class="form-control form-control-lg"
                                    id="fmaadharfront" accept="image/*">
                            </div>
                            <div class="border rounded-lg text-center p-3">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview6" alt="Preview" />
                            </div>
                        </div>
                        <div class="col-md-5 text-center p-2 border border-warning border-2" id="fileUploadFieldslab"
                            style="display: none;">
                            <h6 class="my-4 text-info">Upload Parent's Aadhar Front Side</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="fm_new_pan_aadhar_back" class="form-control form-control-lg"
                                    id="fmaadharback" accept="image/*">
                            </div>
                            <div class="border rounded-lg text-center p-3">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview7" alt="Preview" />
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-evenly">



                        <!-- <span class="selector">Please upload parent's photo</span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="fmphup" name="uploadType"
                                        value="fnormal" onclick="fshowUploadInput('fnormal')">
                                    <label class="form-check-label" for="fmphup">Upload</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="fmphupc" name="uploadType"
                                        value="flive" onclick="fshowUploadInput('flive')">
                                    <label class="form-check-label" for="fmphupc">Capture</label>
                                </div>
                            </div>
                            <div id="fnormalUpload" style="display: none;">
                                <div class="row">
                                    <label for="profilePictureUploadfm" class="mb-3 fs-5 exlabel text-info">Upload
                                        Photo</label>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control form-control-lg"
                                                id="profilePictureUploadfm" accept="image/*">
                                        </div>
                                        <div class="border rounded-lg text-center p-3">
                                            <img src="https://via.placeholder.com/140?text=IMAGE" width="20%"
                                                height="20%" class="img-fluid" id="preview2" alt="Preview" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="fliveUpload" style="display: none;">
                                <h6 class="header3-custom text-warning">Take a selfie</h6>
                                <div class="selfie-container-custom">
                                    <video id="fvideoCustom" class="video-element-custom" width="320" height="240"
                                        autoplay></video>
                                    <canvas id="fcanvasCustom" class="canvas-element-custom" width="320"
                                        height="240"></canvas>
                                </div>
                                <div id="fresultsCustom"></div>
                                <div class="my-2">
                                    <button class="btn btn-warning btn-sm rounded-0"
                                        onclick="ftakeSnapshotCustom()">Take Snapshot</button>
                                </div>
                                <input type="hidden" id="fm_profile_Picture" value="" accept="image/*">
                            </div>  -->






                        <div class="col-md-5 p-2 text-center border border-warning my-4" id="fileUploadFieldss"
                            style="display: none;">
                            <span class="selector">Please upload parent's signature</span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="fmsigup" name="uploadTypeSignature"
                                        value="fnormals" onclick="fshowUploadInputSignature('fnormals')">
                                    <label class="form-check-label" for="fmsigup">Upload</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="fmsigupc"
                                        name="uploadTypeSignature" value="flives"
                                        onclick="fshowUploadInputSignature('flives')">
                                    <label class="form-check-label" for="fmsigupc">Capture</label>
                                </div>
                            </div>
                            <div id="fnormalUploads" style="display: none;">
                                <div class="row">
                                    <label for="signatureImageUploadfm" class="fs-5 mb-3 exlabel text-info">Upload
                                        Signature
                                        Image</label>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control form-control-lg"
                                                id="signatureImageUploadfm" accept="image/*">
                                        </div>
                                        <div class="border rounded-lg text-center p-3">
                                            <img src="https://via.placeholder.com/140?text=IMAGE" width="20%"
                                                height="20%" class="img-fluid" id="preview3" alt="Preview" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="fliveUploads" style="display: none;">
                                <h6 class="text-warning">Draw your signature below:</h6>
                                <div id="signature-pad">
                                    <canvas id="fcanvas" width="400" height="200"></canvas>
                                </div>
                                <br>
                                <input type="hidden" id="fm_profile_Pictures" accept="image/*">
                                <div class="my-2">
                                    <button class="btn btn-danger btn-sm rounded-0"
                                        onclick="fclearSignature()">Clear</button>
                                    <button class="btn btn-success btn-sm rounded-0" onclick="fsaveSignature()">Save
                                        Signature</button>
                                </div>
                                <h6 class="text-info" style="font-weight: 700;">Saved Signature:</h6>
                                <img id="fdisplay-signature" src="" alt="Saved Signature">
                            </div>
                        </div>




                        <!-- <div class="col-md-5 p-2 text-center border border-warning my-1" id="fileUploadFieldsl"
                            style="display: none;">
                            <div class="form mt-3 mb-3">
                                <div class="my-2">
                                    <label for="enableFileUpload" class="form-check-label selector">
                                        upload parents
                                        Aadhar card</label>
                                </div>
                                <div id="fileUploadContainer">
                                    <input type="file" class="form-control border-info rounded-0" id="fileUploadfm"
                                        name="new_fm_AadhaarUpload" accept=".pdf,.doc,.docx" multiple>
                                </div>
                            </div>
                        </div> -->
                    </div>




<hr/>


                    <div class="row justify-content-evenly my-2 ">
                        <div class="col-md-5 p-2 text-center border border-info my-1">
                            <span class="selector">Select Gender</span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="female" name="gender"
                                        value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="other" name="gender" value="other">
                                    <label class="form-check-label" for="other">Others</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3 mt-3" id="fatherNameField" style="display: none;">
                                <input type="text" class="form-control border-info rounded-0" o
                                    oninput="validateInput('fatherName')" pattern="[a-zA-Z\s]+" id="fatherName"
                                    placeholder="Enter Full Name" name="new_fatherName">
                                <label for="fatherName" class="text-secondary">father's Name</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-5  border border-info my-1">
                            <div class="form mt-3 mb-3">
                                <div class="my-2">
                                    <input class="form-check-input" type="checkbox" id="enableFileUpload" name="option1"
                                        value="something">
                                    <label for="enableFileUpload" class="form-check-label selector">
                                        upload
                                        Aadhar</label>
                                </div>
                                <div id="fileUploadContainer">
                                    <input type="file" class="form-control border-info rounded-0" id="fileUpload"
                                        name="new_AadhaarUpload" accept=".pdf,.doc,.docx" multiple>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row justify-content-evenly my-5">
                        <div class="col-md-5 p-2 text-center border border-info my-1">
                            <span class="selector">Please upload photo</span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="proup" name="uploadType"
                                        value="normal" onclick="showUploadInput('normal')">
                                    <label class="form-check-label" for="proup">Upload</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="proupc" name="uploadType"
                                        value="live" onclick="showUploadInput('live')">
                                    <label class="form-check-label" for="proupc">Capture</label>
                                </div>
                            </div>
                            <div id="normalUpload" style="display: none;">
                                <div class="row">
                                    <label for="profilePictureUpload" class="mb-3 fs-5 exlabel text-info">Upload
                                        Photo</label>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control form-control-lg"
                                                id="profilePictureUpload" accept="image/*">
                                        </div>
                                        <div class="border rounded-lg text-center p-3">
                                            <img src="https://via.placeholder.com/140?text=IMAGE" width="20%"
                                                height="20%" class="img-fluid" id="preview" alt="Preview" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="liveUpload" style="display: none;">
                                <h6 class="header3-custom text-warning">Take a selfie</h6>
                                <div class="selfie-container-custom">
                                    <video id="videoCustom" class="video-element-custom" width="320" height="240"
                                        autoplay></video>
                                    <canvas id="canvasCustom" class="canvas-element-custom" width="320"
                                        height="240"></canvas>
                                </div>
                                <div id="resultsCustom"></div>
                                <div class="my-2">
                                    <button class="btn btn-warning btn-sm rounded-0" onclick="takeSnapshotCustom()">Take
                                        Snapshot</button>
                                </div>
                                <input type="hidden" id="new_profile_Picture" value="" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-5 p-2 text-center border border-info my-1">
                            <span class="selector text">Please upload signature</span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="prosign" name="uploadTypeSignature"
                                        value="normals" onclick="showUploadInputSignature('normals')">
                                    <label class="form-check-label" for="prosign">Upload</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="prosignc"
                                        name="uploadTypeSignature" value="lives"
                                        onclick="showUploadInputSignature('lives')">
                                    <label class="form-check-label" for="prosignc">Capture</label>
                                </div>
                            </div>
                            <div id="normalUploads" style="display: none;">
                                <div class="row">
                                    <label for="signatureImageUpload" class="fs-5 mb-3 exlabel text-info">Upload
                                        Signature
                                        Image</label>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control form-control-lg"
                                                id="signatureImageUpload" accept="image/*">
                                        </div>
                                        <div class="border rounded-lg text-center p-3">
                                            <img src="https://via.placeholder.com/140?text=IMAGE" width="20%"
                                                height="20%" class="img-fluid" id="preview1" alt="Preview" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="liveUploads" style="display: none;">
                                <h6 class="text-warning">Draw your signature below:</h6>
                                <div id="signature-pad">
                                    <canvas id="canvas" width="400" height="200"></canvas>
                                </div>
                                <br>
                                <input type="hidden" id="signature-input" accept="image/*">
                                <div class="my-2">
                                    <button class="btn btn-danger btn-sm rounded-0"
                                        onclick="clearSignature()">Clear</button>
                                    <button class="btn btn-success btn-sm rounded-0" onclick="saveSignature()">Save
                                        Signature</button>
                                </div>
                                <h6 class="text-info" style="font-weight: 700;">Saved Signature:</h6>
                                <img id="display-signature" src="" alt="Saved Signature">
                            </div>
                        </div>
                    </div>




                    <div class="row gap-5 justify-content-center my-5">
                        <div class="col-md-5 text-center p-2 border border-warning border-2">
                            <h6 class="my-4 text-info">Upload Aadhar Front Side</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="new_pan_aadhar_front" class="form-control form-control-lg"
                                    id="aadharfront" accept="image/*">
                            </div>
                            <div class="border rounded-lg text-center p-3">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview4" alt="Preview" />
                            </div>
                        </div>
                        <div class="col-md-5 text-center p-2 border border-warning border-2">
                            <h6 class="my-4 text-info">Upload Aadhar Front Side</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="new_pan_aadhar_back" class="form-control form-control-lg"
                                    id="aadharback" accept="image/*">
                            </div>
                            <div class="border rounded-lg text-center p-3">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview5" alt="Preview" />
                            </div>
                        </div>
                    </div>




                    <div class="text-center" style="display: block;" id="final">
                        <input class="form-check-input" type="checkbox" id="confirm" name="option1" value="something"
                            required>
                        <label class="form-check-label text-primary" for="confirm" style="font-weight: 500;">If you
                            given deatais are
                            correct ,
                            please click the check box
                        </label>
                    </div>
                    <input type="hidden" name="new_pan_recept_num">
                    <div class="text-center my-5">
                        <input type="submit" class="btn btn-outline-success rounded-0" name="new_pan_submit"
                            value="Submit the Document">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        // function fshowUploadInput(type) {
        //     if (type === 'fnormal') {
        //         document.getElementById('fnormalUpload').style.display = 'block';
        //         document.getElementById('fliveUpload').style.display = 'none';
        //         document.getElementById('profilePictureUploadfm').setAttribute('name', 'fm_new_profile_Picture');
        //         document.getElementById('profilePictureUploadfm').setAttribute('required', '');
        //         document.getElementById('fm_profile_Picture').removeAttribute('name');
        //         document.getElementById('fm_profile_Picture').removeAttribute('required');
        //     } else if (type === 'flive') {
        //         document.getElementById('fnormalUpload').style.display = 'none';
        //         document.getElementById('fliveUpload').style.display = 'block';
        //         document.getElementById('fm_profile_Picture').setAttribute('name', 'fm_new_profile_Pictures');
        //         document.getElementById('fm_profile_Picture').setAttribute('required', '');
        //         document.getElementById('profilePictureUploadfm').removeAttribute('name');
        //         document.getElementById('profilePictureUploadfm').removeAttribute('required');
        //     }
        // }

        function fshowUploadInputSignature(type) {
            if (type === 'fnormals') {
                document.getElementById('fnormalUploads').style.display = 'block';
                document.getElementById('fliveUploads').style.display = 'none';
                document.getElementById('signatureImageUploadfm').setAttribute('name', 'fm_new_signature_Image');
                document.getElementById('signatureImageUploadfm').setAttribute('required', '');
                document.getElementById('fm_profile_Pictures').removeAttribute('name');
                document.getElementById('fm_profile_Pictures').removeAttribute('required');
            } else if (type === 'flives') {
                document.getElementById('fnormalUploads').style.display = 'none';
                document.getElementById('fliveUploads').style.display = 'block';
                document.getElementById('fm_profile_Pictures').setAttribute('name', 'fm_new_signature_Images');
                document.getElementById('fm_profile_Pictures').setAttribute('required', '');
                document.getElementById('signatureImageUploadfm').removeAttribute('name');
                document.getElementById('signatureImageUploadfm').removeAttribute('required');
            }
        }

        function showUploadInput(type) {
            if (type === 'normal') {
                document.getElementById('normalUpload').style.display = 'block';
                document.getElementById('liveUpload').style.display = 'none';
                document.getElementById('profilePictureUpload').setAttribute('name', 'new_profile_Picture');
                document.getElementById('profilePictureUpload').setAttribute('required', '');
                document.getElementById('new_profile_Picture').removeAttribute('name');
                document.getElementById('new_profile_Picture').removeAttribute('required');
            } else if (type === 'live') {
                document.getElementById('normalUpload').style.display = 'none';
                document.getElementById('liveUpload').style.display = 'block';
                document.getElementById('new_profile_Picture').setAttribute('name', 'new_profile_Pictures');
                document.getElementById('new_profile_Picture').setAttribute('required', '');
                document.getElementById('profilePictureUpload').removeAttribute('name');
                document.getElementById('profilePictureUpload').removeAttribute('required');
            }
        }

        function showUploadInputSignature(type) {
            if (type === 'normals') {
                document.getElementById('normalUploads').style.display = 'block';
                document.getElementById('liveUploads').style.display = 'none';
                document.getElementById('signatureImageUpload').setAttribute('name', 'new_signature_Image');
                document.getElementById('signatureImageUpload').setAttribute('required', '');
                document.getElementById('signature-input').removeAttribute('name');
                document.getElementById('signature-input').removeAttribute('required');
            } else if (type === 'lives') {
                document.getElementById('normalUploads').style.display = 'none';
                document.getElementById('liveUploads').style.display = 'block';
                document.getElementById('signature-input').setAttribute('name', 'new_signature_Images');
                document.getElementById('signature-input').setAttribute('required', '');
                document.getElementById('signatureImageUpload').removeAttribute('name');
                document.getElementById('signatureImageUpload').removeAttribute('required');
            }
        }

        function checkAge() {
            var dobInput = document.getElementById('dob');
            var dob = new Date(dobInput.value);
            var today = new Date();
            var age = today.getFullYear() - dob.getFullYear();
            var monthDiff = today.getMonth() - dob.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }

            if (age < 18) {
                document.getElementById('fileUploadFields').style.display = 'block';
            } else {
                document.getElementById('fileUploadFields').style.display = 'none';
            }

            // if (age < 18) {
            //     document.getElementById('fileUploadFieldsl').style.display = 'block';
            // } else {
            //     document.getElementById('fileUploadFieldsl').style.display = 'none';
            // }

            if (age < 18) {
                document.getElementById('fileUploadFieldss').style.display = 'block';
            } else {
                document.getElementById('fileUploadFieldss').style.display = 'none';
            }

            if (age < 18) {
                document.getElementById('fileUploadFieldslaf').style.display = 'block';
            } else {
                document.getElementById('fileUploadFieldslaf').style.display = 'none';
            }
            if (age < 18) {
                document.getElementById('fileUploadFieldslab').style.display = 'block';
            } else {
                document.getElementById('fileUploadFieldslab').style.display = 'none';
            }
        }

        $(document).ready(function () {
            $('#mobileNumber').keyup(function () {
                var new_mobileNumber = $(this).val();
                $.ajax({
                    url: '../forms_datas.php',
                    type: 'post',
                    data: { new_mobileNumber: new_mobileNumber },
                    success: function (response) {
                        $('#messagemobile').html(response);
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#aadharNumber').keyup(function () {
                var new_aadharNumber = $(this).val();
                $.ajax({
                    url: '../forms_datas.php',
                    type: 'post',
                    data: { new_aadharNumber: new_aadharNumber },
                    success: function (response) {
                        $('#messageaadhaar').html(response);
                    }
                });
            });
        });

        $(document).ready(function () {
            // Get file and preview image
            $("#profilePictureUpload").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

        $(document).ready(function () {
            // Get file and preview image
            $("#profilePictureUploadfm").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview2').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
        $(document).ready(function () {
            $("#signatureImageUploadfm").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview3').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

        $(document).ready(function () {
            $("#aadharfront").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview4').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

        $(document).ready(function () {
            $("#aadharback").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview5').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });


        $(document).ready(function () {
            $("#fmaadharfront").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview6').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

        $(document).ready(function () {
            $("#fmaadharback").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview7').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });



        $(document).ready(function () {
            $("#signatureImageUpload").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview1').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('.js-input');

            inputs.forEach(input => {
                input.addEventListener('input', function () {
                    if (this.value.trim() !== '') {
                        this.classList.add('not-empty');
                    } else {
                        this.classList.remove('not-empty');
                    }
                });
            });
        });

        function formatAadhar() {
            var aadharInput = document.getElementById("aadharNumber");
            var value = aadharInput.value.replace(/\D/g, '');
            var formattedValue = '';

            for (var i = 0; i < value.length; i++) {
                if (i === 0 && (value[i] < '2' || value[i] > '9')) {
                    continue;
                }
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }
            aadharInput.value = formattedValue;
        }

        function validateInput(inputId) {
            const inputField = document.getElementById(inputId);
            const input = inputField.value;
            const regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(input)) {
                inputField.value = input.replace(/[^a-zA-Z\s]/g, '');
            }
        }

        var fcanvas = document.getElementById('fcanvas');
        var fsignaturePad = new SignaturePad(fcanvas);
        var fsignatureInput = document.getElementById('fm_profile_Pictures');
        function fclearSignature() {
            fsignaturePad.clear();
        }
        function fsaveSignature() {
            if (fsignaturePad.isEmpty()) {
                alert("Please provide a signature first.");
            } else {
                var fdataURL = fsignaturePad.toDataURL();
                fsignatureInput.value = fdataURL;
                document.getElementById('fdisplay-signature').setAttribute('src', fdataURL);
            }
        }

        // const fvideoCustom = document.getElementById('fvideoCustom');
        // const fcanvasCustom = document.getElementById('fcanvasCustom');
        // const fcontextCustom = fcanvasCustom.getContext('2d');
        // navigator.mediaDevices.getUserMedia({ video: true })
        //     .then(stream => {
        //         fvideoCustom.srcObject = stream;
        //         fvideoCustom.play();
        //     })
        //     .catch(err => {
        //         console.error("An error occurred: " + err);
        //     });
        // function ftakeSnapshotCustom() {
        //     fcontextCustom.drawImage(fvideoCustom, 0, 0, fcanvasCustom.width, fcanvasCustom.height);
        //     const fdataUriCustom = fcanvasCustom.toDataURL('image/jpeg');
        //     document.getElementById('fm_profile_Picture').value = fdataUriCustom;
        //     const imgCustom = new Image();
        //     imgCustom.onload = function () {
        //         fcontextCustom.fillStyle = '#ffffff';
        //         fcontextCustom.fillRect(0, 0, fcanvasCustom.width, fcanvasCustom.height);
        //         fcontextCustom.drawImage(imgCustom, 0, 0, fcanvasCustom.width, fcanvasCustom.height);
        //         const resultsDivCustom = document.getElementById('fresultsCustom');
        //         resultsDivCustom.innerHTML = '<h6>Captured Picture</6>';
        //         const resultImgCustom = new Image();
        //         resultImgCustom.src = fcanvasCustom.toDataURL('image/jpeg');
        //         resultsDivCustom.appendChild(resultImgCustom);
        //     };
        //     imgCustom.src = fdataUriCustom;
        // }

        var canvas = document.getElementById('canvas');
        var signaturePad = new SignaturePad(canvas);
        var signatureInput = document.getElementById('signature-input');
        function clearSignature() {
            signaturePad.clear();
        }

        function saveSignature() {
            if (signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
            } else {
                var dataURL = signaturePad.toDataURL();
                signatureInput.value = dataURL;
                document.getElementById('display-signature').setAttribute('src', dataURL);
            }
        }

        const videoCustom = document.getElementById('videoCustom');
        const canvasCustom = document.getElementById('canvasCustom');
        const contextCustom = canvasCustom.getContext('2d');
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                videoCustom.srcObject = stream;
                videoCustom.play();
            })
            .catch(err => {
                console.error("An error occurred: " + err);
            });
        function takeSnapshotCustom() {
            contextCustom.drawImage(videoCustom, 0, 0, canvasCustom.width, canvasCustom.height);
            const dataUriCustom = canvasCustom.toDataURL('image/jpeg');
            document.getElementById('new_profile_Picture').value = dataUriCustom;
            const imgCustom = new Image();
            imgCustom.onload = function () {
                contextCustom.fillStyle = '#ffffff';
                contextCustom.fillRect(0, 0, canvasCustom.width, canvasCustom.height);
                contextCustom.drawImage(imgCustom, 0, 0, canvasCustom.width, canvasCustom.height);
                const resultsDivCustom = document.getElementById('resultsCustom');
                resultsDivCustom.innerHTML = '<h6>Captured Picture</6>';
                const resultImgCustom = new Image();
                resultImgCustom.src = canvasCustom.toDataURL('image/jpeg');
                resultsDivCustom.appendChild(resultImgCustom);
            };
            imgCustom.src = dataUriCustom;
        }

        const fileInput = document.getElementById('signatureImageUpload');
        const uploadButton = document.getElementById('final');
        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                uploadButton.style.display = 'block';
            } else {
                uploadButton.style.display = 'none';
            }
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-a7M8NThdh8Q+qk5IQN92L/mqs5Dh5G+RTq9RZF3V9b4ktz2GXAwC1NCTK+4P2rsz"
        crossorigin="anonymous"></script>
    <script>
        function toggleFatherNameField() {
            var gender = document.querySelector('input[name="gender"]:checked').value;
            var fatherNameField = document.getElementById('fatherNameField');
            if (gender === 'female') {
                fatherNameField.style.display = 'block';
            } else {
                fatherNameField.style.display = 'none';
            }
        }
        var genderRadios = document.querySelectorAll('input[name="gender"]');
        genderRadios.forEach(function (radio) {
            radio.addEventListener('change', toggleFatherNameField);
        });
        toggleFatherNameField();

    </script>
    <!-- <script>
        $(document).ready(function () {
            $('#enableFileUpload').change(function () {
                $('#fileUploadContainer').toggle(this.checked);
            });
        });

    </script> -->
</body>

</html>