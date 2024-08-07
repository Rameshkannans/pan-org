<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Update Pan Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

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

        .cansize {
            border: 2px solid #000;
        }

        /* .selfie-container-custom {
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
        } */


        .selfie-container-custom {
            border: 1px solid #ccc;
            /* display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; */
            border-radius: 50%;
            overflow: hidden;
            width: 300px;
            height: 300px;
            position: relative;
        }

        @media (max-width: 768px) {
            .selfie-container-custom {
                left: 10px;
            }
        }

        .video-element-custom {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .canvas-element-custom {
            display: none;
        }

        #resultsCustom {
            margin-top: 10px;
            text-align: center;
        }

        #resultsCustom img {
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .selector {
            color: green;
            font-weight: 700;
        }

        .hiddens {
            display: none;
        }

        .watermark {
            background-image: url('../image/wa.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .aerror {
            color: red;
            font-size: 0.9em;
            display: none;
        }


        #image {
            max-width: 100%;
        }

        .cropper-container {
            display: block;
        }

        #croppedImage {
            display: none;
            margin-top: 20px;
        }

        /* ==================== */
        .overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9998;
        }

        .loader {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 50%;
            top: 50%;
            width: 40px;
            height: 40px;
            margin: -20px 0 0 -20px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .blur-background {
            filter: blur(5px);
            pointer-events: none;
        }

        .offcanvas-backdrop {
            display: none !important;
        }
    </style>
</head>

<body class="watermark">
    <div class="container-fluid">
        <marquee behavior="scroll" direction="left"><span class="text-warning">Apply Update Pan Card in Easy Way</span>
        </marquee>
        <div class="row justify-content-between">


            <div class="col-md-3 shadow-lg p-4 rounded-4 bg-info">
                <div class="overlay" id="overlay"></div>
                <div class="loader" id="loader"></div>
                <div class="container">
                    <div class="offcanvas offcanvas-end" id="cropperOffcanvas">
                        <div class="offcanvas-header d-flex justify-content-center">
                            <h5 class="offcanvas-title ">Crop Image</h5>
                        </div>
                        <div class="offcanvas-body">
                            <div class="d-flex justify-content-center gap-5 my-5 mt-3">
                                <button type="button" id="cropButton" class="btn btn-success rounded-0">Confirm
                                    Crop</button>
                                <button type="button" id="cancelButton" class="btn btn-danger rounded-0 me-3"
                                    data-bs-dismiss="offcanvas">Cancel</button>
                            </div>
                            <img id="image" style="max-width: 100%; max-height: 80vh;">
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-9 p-3" id="content">
                <div class="justify-content-end d-flex">
                    <a href="../index.php"> <button class="btn btn-danger btn-sm">
                            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                viewBox="0 0 1024 1024">
                                <path
                                    d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                                </path>
                            </svg>
                            <span>Back</span>
                        </button></a>
                </div>
                <form action="../forms_datas.php" method="post" enctype="multipart/form-data" id="myForm">
                    <div class="row justify-content-evenly my-2 ">
                        <div class="col-md-4 p-2 my-1 ">
                            <div class="form mt-3 mb-3">
                                <label for="oldpan" class="mb-2 selector">Upload old Pan Card <a class="text-success"
                                        href="#panrule" data-bs-toggle="modal">(Pan card Front Side)</a>
                                    <span class="text-danger">*</span></label>

                                <div class="modal fade" id="panrule">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content text-center">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Pan Card Upload(Format Support by jpeg,jpg, png)
                                                </h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <img src="../image/idCardHelp.png" style="width: 800px;" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <input type="file" class="form-control border-info rounded-0" id="oldpan"
                                    name="update_old_pan_doc" accept=".jpeg, .jpg, .png" multiple required
                                    oninvalid="onInvalidInput('oldpan')" onchange="previewImage(this,'imagePreviewp')"
                                    oninput="hideError('oldpan')">


                                <div class="border rounded-lg text-center p-3" id="imagePreviewp"
                                    style="display: none;">
                                    <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                        class="img-fluid" id="previewoldpan" alt="Preview" />
                                </div>
                            </div>




                            <span class="aerror" id="oldpanError"></span>
                        </div>
                        <div class="col-md-4 p-2 mt-3">
                            <div class="form-floating mb-3 mt-4">
                                <input type="text" class="form-control border-info rounded-0" id="upoldpannum"
                                    name="update_old_pan_num" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"
                                    title="The PAN number must be 10 characters long, starting with five uppercase letters, followed by four digits, and ending with one uppercase letter."
                                    maxlength="10" required oninvalid="onInvalidInput('upoldpannum')"
                                    oninput="hideError('upoldpannum')">
                                <label for="upoldpannum" class="text-secondary">Old PAN Card Number <span
                                        class="text-danger">*</span></label>
                            </div>
                            <span class="aerror" id="upoldpannumError"></span>
                        </div>
                        <!-- <div class="col-md-4 p-2 my-1">
                            <div class="form mt-3 mb-3 ">
                                <div class="my-2">
                                    <input class="form-check-input" type="checkbox" id="enableFileUpload" name="option1"
                                        value="something" >
                                    <label for="enableFileUpload" class="form-check-label selector"> upload
                                        Aadhar</label>
                                </div>
                                <div id="fileUploadContainer">
                                    <input type="file" class="form-control border-info rounded-0" id="fileUpload"
                                        name="update_aadhaar_doc" accept=".pdf,.doc,.docx" multiple>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control border-info rounded-0"
                                    oninput="validateInput('updatename'); hideError('updatename')" pattern="[a-zA-Z\s]+"
                                    id="updatename" placeholder="Enter Full Name" name="update_call_name" required
                                    oninvalid="onInvalidInput('updatename')">
                                <label for="updatename" class="text-secondary">Full Name (As per Aadhar)<span
                                        class="text-danger">*</span></label>
                            </div>
                            <span class="aerror" id="updatenameError"></span>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control border-info rounded-0" id="aadharNumber"
                                    placeholder="Enter Aadhar Number" name="update_aadharNumber"
                                    title="Please enter a Valid Aadhar number" maxlength="14"
                                    oninput="formatAadhar(); hideError('aadharNumber')" required
                                    oninvalid="onInvalidInput('aadharNumber')" pattern="\d{4} \d{4} \d{4}">
                                <label for="aadharNumber" class="text-secondary">Aadhar Number<span
                                        class="text-danger">*</span></label>
                            </div>
                            <div id="messageaadhaar"></div>
                            <span class="aerror" id="aadharNumberError"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control border-info rounded-0" id="mobileNumber"
                                    placeholder="Enter Mobil Number" name="update_mobileNumber"
                                    oninput="this.value = this.value.replace(/[^6789\d]/g, ''); hideError('mobileNumber')"
                                    pattern="[6789]\d{9}"
                                    title="Please enter a 10-digit number starting with 6, 7, 8, or 9" maxlength="10"
                                    required oninvalid="onInvalidInput('mobileNumber')">
                                <label for="mobileNumber" class="text-secondary">Mobil Number <span
                                        class="text-danger">*</span></label>
                            </div>
                            <div id="messagemobile"></div>
                            <span class="aerror" id="mobileNumberError"></span>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="form-floating mt-3 mb-3">
                                <input type="email" class="form-control border-info rounded-0" id="updateemail"
                                    placeholder="Enter email" name="update_email"
                                    oninvalid="onInvalidInput('updateemail')" oninput="hideError('updateemail')">
                                <label for="updateemail" class="text-secondary">Email (Optional)</label>
                            </div>
                            <span class="aerror" id="updateemailError"></span>
                        </div>
                    </div>





                    <div class="row gap-5 justify-content-center my-5">
                        <div class="col-md-5 text-center p-2 rounded-4 border border-warning border-2">
                            <h6 class="my-4 text-info">Upload <b>Candidate</b> Aadhar Front Side (Format Support by
                                jpeg,jpg, png)<span class="text-danger">*</span></h6>
                            <div class="input-group mb-3">
                                <input type="file" name="update_pan_aadhar_front" class="form-control form-control-lg"
                                    id="aadharfront" accept="image/jpeg, image/jpg" required
                                    onchange="previewImage(this,'imagePreviewf')"
                                    oninvalid="onInvalidInput('aadharfront')" oninput="hideError('aadharfront')">
                            </div>
                            <div class="border rounded-lg text-center p-3" id="imagePreviewf" style="display: none;">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                    class="img-fluid" id="preview3" alt="Preview" />
                            </div>
                            <span class="aerror" id="aadharfrontError"></span>
                        </div>
                        <div class="col-md-5 text-center p-2 rounded-4 border border-warning border-2">
                            <h6 class="my-4 text-info">Upload <b>Candidate</b> Aadhar Back Side (Format Support by
                                jpeg,jpg, png)<span class="text-danger">*</span></h6>
                            <div class="input-group mb-3">
                                <input type="file" name="update_pan_aadhar_back" class="form-control form-control-lg"
                                    id="aadharback" accept="image/jpeg, image/jpg" required
                                    onchange="previewImage(this,'imagePreviewb')"
                                    oninvalid="onInvalidInput('aadharback')" oninput="hideError('aadharback')">
                            </div>
                            <div class="border rounded-lg text-center p-3" id="imagePreviewb" style="display: none;">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                    class="img-fluid" id="preview4" alt="Preview" />
                            </div>
                            <span class="aerror" id="aadharbackError"></span>
                        </div>
                    </div>






                    <div class="row justify-content-evenly my-5">
                        <div class="col-md-5 p-2 text-center rounded-4 border border-info my-1">
                            <span class="selector">Please upload photo<span class="text-danger">*</span></span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="upload" name="photoOption"
                                        value="normal" onclick="showUploadInput('normal')" required checked>
                                    <label class="form-check-label" for="upload">Upload</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="live" name="photoOption"
                                        value="live" onclick="showUploadInput('live')" required>
                                    <label class="form-check-label" for="live">Capture</label>
                                </div>
                            </div>
                            <div id="normalUpload" style="display: none;">
                                <div class="row">
                                    <label for="profilePictureUpload" class="mb-3 fs-5 exlable text-info">Upload
                                        Photo</label>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input name="update_profile_Picture" type="file"
                                                class="form-control form-control-lg" id="profilePictureUpload"
                                                accept="image/jpeg, image/jpg*" required
                                                onchange="previewImage(this,'imagePreviewp')"
                                                oninvalid="onInvalidInput('profilePictureUpload')"
                                                oninput="hideError('profilePictureUpload')">
                                        </div>
                                        <div class="border rounded-lg text-center p-3" id="imagePreviewp"
                                            style="display: none;">
                                            <img src="https://via.placeholder.com/140?text=IMAGE" width="50%"
                                                height="50%" class="img-fluid" id="preview" alt="Preview" />
                                        </div>
                                        <span class="aerror" id="profilePictureUploadError"></span>
                                    </div>
                                </div>
                            </div>
                            <div id="liveUpload" style="display: none;" class="text-center">
                                <h6 class="header3-custom text-warning">Take a selfie <a href="#photorule"
                                        data-bs-toggle="modal"> (Background should be White or
                                        Plain)</a></h6>
                                <div class="modal fade" id="photorule">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content text-center">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Background should be White or
                                                    Plain</h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <img src="../image/photoHelp.png" style="width: 800px;" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex text-align-center justify-content-center">
                                    <div class="selfie-container-custom">
                                        <video id="videoCustom" class="video-element-custom " width="320" height="240"
                                            autoplay></video>
                                        <canvas id="canvasCustom" class="canvas-element-custom" width="320"
                                            height="350"></canvas>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <button class="btn btn-warning btn-sm rounded-0" onclick="takeSnapshotCustom()">Take
                                        Snapshot</button>
                                </div>
                                <div id="resultsCustom"></div>
                                <input type="hidden" id="update_profile_Picture" value="" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-5 p-2 text-center rounded-4 border border-info my-1">
                            <span class="selector">Please upload signature<span class="text-danger">*</span></span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="upsig" name="sign" value="normals"
                                        onclick="showUploadInputSignature('normals')" required checked>
                                    <label class="form-check-label" for="upsig">Upload</label>
                                </div>
                                <div class="form-check mx-4">
                                    <input type="radio" class="form-check-input" id="csign" name="sign" value="lives"
                                        onclick="showUploadInputSignature('lives')" required>
                                    <label class="form-check-label" for="csign">Capture</label>
                                </div>
                            </div>
                            <div id="normalUploads" style="display: none;">
                                <div class="row">
                                    <label for="signatureImageUpload" class=" fs-5 mb-3 exlable text-info">Upload
                                        Signature
                                        Image</label>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input name="update_signature_Image" type="file"
                                                class="form-control form-control-lg" id="signatureImageUpload"
                                                accept="image/jpeg, image/jpg" required
                                                onchange="previewImage(this,'imagePreviews')"
                                                oninvalid="onInvalidInput('signatureImageUpload')"
                                                oninput="hideError('signatureImageUpload')">
                                        </div>
                                        <div class="border rounded-lg text-center p-3" id="imagePreviews"
                                            style="display: none;">
                                            <!-- <img src="https://via.placeholder.com/140?text=IMAGE" width="50%"
                                                height="50%" class="img-fluid" id="preview1" alt="Preview" /> -->
                                        </div>
                                        <div id="croppedImageContainer">
                                            <img id="croppedImage" class="img-fluid">
                                        </div>
                                        <span class="aerror" id="signatureImageUploadError"></span>
                                    </div>
                                </div>
                            </div>
                            <div id="liveUploads" style="display: none;">
                                <h6 class="text-warning">Draw your signature below</h6>
                                <canvas id="canvas" class="cansize"></canvas>
                                <br>
                                <input type="hidden" id="signature_input" accept="image/*">
                                <div class="my-2">
                                    <button class="btn btn-danger btn-sm rounded-0"
                                        onclick="clearSignature()">Clear</button>
                                    <!-- <button class="btn btn-success btn-sm rounded-0" onclick="saveSignature()">Save
                                        Signature</button> -->
                                </div>
                                <!-- <h6 class="text-info" style="font-weight: 700;">Saved Signature:</h6>
                                <img id="display-signature" src="" alt="Saved Signature"> -->
                            </div>
                        </div>
                    </div>


                    <hr>
                    <h2 class="text-center text-warning">Correction details</h2>



                    <div class="text-center justify-content-center d-flex my-5">
                        <div class="mx-5">
                            <label>
                                <input type="checkbox" class="form-check-input rounded-5 border-primary border-2"
                                    id="checkbox1" onclick="toggleInput(this, 'inputs1')"> Your Name
                            </label>
                        </div>
                        <div class="mx-5">
                            <label>
                                <input type="checkbox" class="form-check-input rounded-5  border-primary border-2"
                                    id="checkbox2" onclick="toggleInput(this, 'inputs2')"> Father Name
                            </label>
                        </div>
                        <div class="mx-5">
                            <label>
                                <input type="checkbox" class="form-check-input rounded-5  border-primary border-2"
                                    id="checkbox3" onclick="toggleInput(this, 'inputs3')"> Date of Birth
                            </label>
                        </div>
                    </div>




                    <div class="hiddens" id="inputs1">
                        <div class="row p-2 border border-1 border-secondary">
                            <span style="font-weight: 900;" class="selector">Name correction</span>
                            <div class="col-md-6 p-2">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('firstName');hideError('firstName');"
                                        pattern="[a-zA-Z\s]+" id="firstName" placeholder="Enter Full Name"
                                        name="update_firstName" oninvalid="onInvalidInput('firstName')">
                                    <label for="firstName" class="text-secondary">Full Name</label>
                                </div>
                                <span class="aerror" id="firstNameError"></span>
                            </div>
                            <!-- <div class="col-md-6 p-2">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('middleName');hideError('middleName');"
                                        pattern="[a-zA-Z\s]+" id="middleName" placeholder="Enter Full Name"
                                        name="update_middleName" oninvalid="onInvalidInput('middleName')">
                                    <label for="middleName" class="text-secondary">Middle Name</label>
                                </div>
                                <span class="aerror" id="middleNameError"></span>
                            </div> -->
                            <div class="col-md-6 p-2">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('lastName');hideError('lastName');" pattern="[a-zA-Z\s]+"
                                        id="lastName" placeholder="Enter Full Name" name="update_lastName"
                                        oninvalid="onInvalidInput('lastName')">
                                    <label for="lastName" class="text-secondary">Last Name</label>
                                </div>
                                <span class="aerror" id="lastNameError"></span>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form ">
                                    <span class="text-secondary">Upload Name Proof (Driving License,
                                        Passport, Ration Card, Voters ID, 10th Mark Sheet, Birth Certificate) Format
                                        Supported by <span class="text-danger"> .pdf</span></span>
                                    <input type="file" class="form-control border-info rounded-0" id="yourNameDocument"
                                        name="update_name_doc" accept=".pdf"
                                        oninvalid="onInvalidInput('yourNameDocument')"
                                        oninput="hideError('yourNameDocument')">
                                </div>
                                <span class="aerror" id="yourNameDocumentError"></span>
                            </div>
                        </div>
                    </div>
                    <div class="hiddens" id="inputs2">
                        <div class="row my-5 p-2 border border-1 border-secondary">
                            <span style="font-weight: 900;" class="selector">Father's Name</span>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mt-4 ">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('fatherName');hideError('fatherName');"
                                        pattern="[a-zA-Z\s]+" id="fatherName" placeholder="Enter Full Name"
                                        name="update_fatherName" oninvalid="onInvalidInput('fatherName')">
                                    <label for="firstName" class="text-secondary">Father's Name</label>
                                </div>
                                <span class="aerror" id="fatherNameError"></span>
                            </div>
                            <div class="col-md-6">
                                <div class="form ">
                                    <span class="text-secondary">Upload Father Name Proof (Driving License,
                                        Passport, Ration Card, Voters ID, 10th Mark Sheet, Birth Certificate) Format
                                        Supported by <span class="text-danger"> .pdf</span>
                                        <input type="file" class="form-control border-info rounded-0"
                                            id="fatherNameDocument" name="update_father_name_doc" accept=".pdf"
                                            oninvalid="onInvalidInput('fatherNameDocument')"
                                            oninput="hideError('fatherNameDocument')">
                                </div>
                                <span class="aerror" id="fatherNameDocumentError"></span>
                            </div>
                        </div>
                    </div>
                    <div class="hiddens" id="inputs3">
                        <div class="row my-5 border border-1 border-secondary p-2">
                            <span style="font-weight: 900;" class="selector">Date Of Birth</span>
                            <div class="col-md-6 p-2">
                                <div class="form mt-4">
                                    <span class="text-secondary">Enter DOB</span>
                                    <input type="date" class="form-control border-info rounded-0" id="dob"
                                        name="update_dob" oninvalid="onInvalidInput('dob')" oninput="hideError('dob')">
                                    <small id="dobHelp" class="form-text text-warning"></small>
                                </div>
                                <span class="aerror" id="dobError"></span>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form">
                                    <span class="text-secondary">Upload DOB Proof (Driving License,
                                        Passport, Ration Card, Voters ID, 10th Mark Sheet, Birth Certificate) Format
                                        Supported by <span class="text-danger"> .pdf</span>
                                        <input type="file" class="form-control border-info rounded-0" id="dobDocument"
                                            name="update_dob_doc" accept=".pdf"
                                            oninvalid="onInvalidInput('dobDocument')"
                                            oninput="hideError('dobDocument')">
                                </div>
                                <span class="aerror" id="dobDocumentError"></span>
                            </div>
                        </div>
                    </div>


                    <div class="ps-5 mt-5" style="display: block;" id="final">
                        <input class="form-check-input border border-warning border-2" type="checkbox" id="confirm"
                            name="option1" value="something" required>
                        <label class="form-check-label text-primary" for="confirm" style="font-weight: 500;">I hereby
                            consent to provide my Aadhaar Number/data for Aadhaar based authentication for the purpose
                            of pan card application only. <br>
                        </label>
                        <label class="form-check-label text-primary" for="confirm">(பான் கார்டு விண்ணப்பத்திற்காக
                            மட்டுமே ஆதார்
                            அடிப்படையிலான
                            அங்கீகாரத்திற்காக எனது ஆதார் எண்/தரவை வழங்க நான் ஒப்புக்கொள்கிறேன்.)</label>
                    </div>
                    <input type="hidden" name="update_pan_recept_num">
                    <div class="text-center my-5">
                        <input type="submit" name="update_pan_submit" class="btn btn-outline-success rounded-0"
                            value="Submit the Document">
                    </div>
                    </>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>
    <script>

        var offcanvasElement = document.getElementById('cropperOffcanvas');
        var contentElement = document.getElementById('content');
        offcanvasElement.addEventListener('show.bs.offcanvas', function () {
            contentElement.classList.add('blur-background');
        });
        offcanvasElement.addEventListener('hide.bs.offcanvas', function () {
            contentElement.classList.remove('blur-background');
        });
        var myOffcanvas = new bootstrap.Offcanvas(offcanvasElement, {
            backdrop: false,
            keyboard: false
        });

        // document.getElementById('myForm').addEventListener('submit', function (event) {
        //     document.getElementById('loader').style.display = 'block';
        //     document.getElementById('overlay').style.display = 'block';
        // });


        const fileInputs = document.getElementById('signatureImageUpload');
        const image = document.getElementById('image');
        const cropButton = document.getElementById('cropButton');
        const cancelButton = document.getElementById('cancelButton');
        const croppedImage = document.getElementById('croppedImage');
        const croppedImageContainer = document.getElementById('croppedImageContainer');
        const hiddenFileInput = document.getElementById('signatureImageUpload');
        let cropper;
        fileInputs.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    image.src = event.target.result;
                    if (cropper) {
                        cropper.destroy();
                    }
                    cropper = new Cropper(image, {
                        aspectRatio: 4 / 1,
                        viewMode: 1,
                    });
                    const cropperOffcanvas = new bootstrap.Offcanvas(document.getElementById('cropperOffcanvas'));
                    cropperOffcanvas.show();
                };
                reader.readAsDataURL(file);
            }
        });
        cropButton.addEventListener('click', function () {
            const canvas = cropper.getCroppedCanvas({
                width: 400,
                height: 100,
                imageSmoothingQuality: 'high',
            });
            canvas.toBlob(function (blob) {
                const url = URL.createObjectURL(blob);
                croppedImage.src = url;
                croppedImage.style.display = 'block';
                croppedImageContainer.style.display = 'block';
                let modifiedString = url.replace('blob:http://localhost/', '') + '.jpg';
                const dataTransfer = new DataTransfer();
                const file = new File([blob], modifiedString, { type: 'image/jpg' });
                dataTransfer.items.add(file);
                hiddenFileInput.files = dataTransfer.files;
                const cropperOffcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('cropperOffcanvas'));
                cropperOffcanvas.hide();
            }, 'image/jpg');
        });
        cancelButton.addEventListener('click', function () {
            fileInputs.value = '';
            const cropperOffcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('cropperOffcanvas'));
            cropperOffcanvas.hide();
        });










        // ---------------------------------------------------------------------
        const form = document.getElementById('myForm');
        const hiddenFieldPhoto = document.getElementById('update_profile_Picture');
        const hiddenFieldSignature = document.getElementById('signature_input');
        const livePhoto = document.getElementById('live');
        const liveSign = document.getElementById('csign');
        form.addEventListener('submit', function (event) {
            if (livePhoto.checked && !hiddenFieldPhoto.value.trim()) {
                event.preventDefault();
                alert('Profile photo is required!');
            } else if (liveSign.checked && !hiddenFieldSignature.value.trim()) {
                event.preventDefault();
                alert('Signature is required!');
            }
        });


        function onInvalidInput(inputId) {
            const inputElement = document.getElementById(inputId);
            const errorElement = document.getElementById(inputId + 'Error');

            if (inputElement.validity.valueMissing) {
                errorElement.textContent = 'Please enter a value.';
            }
            else {
                errorElement.textContent = 'Enter vali data.';
            }

            errorElement.style.display = 'inline';
        }

        function hideError(inputId) {
            const errorElement = document.getElementById(inputId + 'Error');
            errorElement.style.display = 'none';
        }


        document.getElementById('dob').addEventListener('input', function () {
            let dob = this.value;
            let year = dob.substring(6); // Extracting year from the date string
            let dobHelp = document.getElementById('dobHelp');
            if (year.length !== 4 || isNaN(year)) {
                dobHelp.innerText = "(Kindly verify that the DOB you entered above is accurate.)";
                this.value = dob.substring(0, 10); // Limiting input to "mm/dd/yyyy"
            } else if (parseInt(year) > new Date().getFullYear()) {
                dobHelp.innerText = "Please enter a valid date.";
                this.value = '';
            } else {
                dobHelp.innerText = "";
            }
        });


        function submitForm() {
            var checkbox1 = document.getElementById('checkbox1');
            var checkbox2 = document.getElementById('checkbox2');
            var checkbox3 = document.getElementById('checkbox3');
            if (!checkbox1.checked && !checkbox2.checked && !checkbox3.checked) {
                alert('Please select at least one option.');
            } else {
                alert('Form submitted successfully!');
            }
        }

        function toggleInput(checkbox, inputId) {
            var input = document.getElementById(inputId);
            if (checkbox.checked) {
                input.removeAttribute('disabled');
            } else {
                input.setAttribute('disabled', 'disabled');
            }
        }

        function previewImage(input, ids) {
            var preview = document.getElementById(ids);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.style.display = 'block';
                    preview.querySelector('img').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
            }
        }

        function toggleInput(checkbox, inputDivId) {
            const inputDiv = document.getElementById(inputDivId);
            const inputFields = inputDiv.querySelectorAll('input[type="text"], input[type="file"], input[type="date"]');
            if (checkbox.checked) {
                inputDiv.classList.remove('hiddens');
                inputFields.forEach(inputField => {
                    inputField.setAttribute('required', 'required');
                });
            } else {
                inputDiv.classList.add('hiddens');
                inputFields.forEach(inputField => {
                    inputField.removeAttribute('required');
                });
            }
        }

        showUploadInput('normal');
        showUploadInputSignature('normals');
        function showUploadInput(type) {
            if (type === 'normal') {
                document.getElementById('normalUpload').style.display = 'block';
                document.getElementById('liveUpload').style.display = 'none';
                document.getElementById('profilePictureUpload').setAttribute('name', 'update_profile_Picture');
                document.getElementById('profilePictureUpload').setAttribute('required', '');
                document.getElementById('update_profile_Picture').removeAttribute('name');
                document.getElementById('update_profile_Picture').removeAttribute('required');
            } else if (type === 'live') {
                document.getElementById('normalUpload').style.display = 'none';
                document.getElementById('liveUpload').style.display = 'block';
                document.getElementById('update_profile_Picture').setAttribute('name', 'update_profile_Pictures');
                document.getElementById('update_profile_Picture').setAttribute('required', '');
                document.getElementById('profilePictureUpload').removeAttribute('name');
                document.getElementById('profilePictureUpload').removeAttribute('required');
            }
        }

        function showUploadInputSignature(type) {
            if (type === 'normals') {
                document.getElementById('normalUploads').style.display = 'block';
                document.getElementById('liveUploads').style.display = 'none';
                document.getElementById('signatureImageUpload').setAttribute('name', 'update_signature_Image');
                document.getElementById('signatureImageUpload').setAttribute('required', '');
                document.getElementById('signature_input').removeAttribute('name');
                document.getElementById('signature_input').removeAttribute('required');
            } else if (type === 'lives') {
                document.getElementById('normalUploads').style.display = 'none';
                document.getElementById('liveUploads').style.display = 'block';
                document.getElementById('signature_input').setAttribute('name', 'update_signature_Images');
                document.getElementById('signature_input').setAttribute('required', '');
                document.getElementById('signatureImageUpload').removeAttribute('name');
                document.getElementById('signatureImageUpload').removeAttribute('required');
            }
        }

        $(document).ready(function () {
            $('#mobileNumber').keyup(function () {
                var update_mobileNumber = $(this).val();
                $.ajax({
                    url: '../forms_datas.php',
                    type: 'post',
                    data: { update_mobileNumber: update_mobileNumber },
                    success: function (response) {
                        $('#messagemobile').html(response);
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#aadharNumber').keyup(function () {
                var update_aadharNumber = $(this).val();
                $.ajax({
                    url: '../forms_datas.php',
                    type: 'post',
                    data: { update_aadharNumber: update_aadharNumber },
                    success: function (response) {
                        $('#messageaadhaar').html(response);
                    }
                });
            });
        });

        $(document).ready(function () {
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

        $(document).ready(function () {
            $("#oldpan").on('change', function () {
                var input = $(this)[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#previewoldpan').attr('src', e.target.result);
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
                        $('#preview3').attr('src', e.target.result);
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
                        $('#preview4').attr('src', e.target.result);
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
            let input = inputField.value;
            const regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(input)) {
                input = input.replace(/[^a-zA-Z\s]/g, '');
            }
            input = input.replace(/\s\s+/g, ' ');
            inputField.value = input;
        }


        document.getElementById('updateemail').addEventListener('input', function (event) {
            const emailInput = event.target;
            const emailValue = emailInput.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailValue)) {
                emailInput.setCustomValidity('Invalid email address. The domain must end with .com');
            } else {
                emailInput.setCustomValidity('');
            }
        });


        // var canvas = document.getElementById('canvas');
        // var signaturePad = new SignaturePad(canvas);
        // var signatureInput = document.getElementById('signature_input');
        // function clearSignature() {
        //     event.preventDefault();
        //     signaturePad.clear();
        // }
        // function saveSignature() {
        //     event.preventDefault();
        //     if (signaturePad.isEmpty()) {
        //         alert("Please provide a signature first.");
        //     } else {
        //         var dataURL = signaturePad.toDataURL();
        //         signatureInput.value = dataURL;
        //         document.getElementById('display-signature').setAttribute('src', dataURL);
        //     }
        // }
        var canvas = document.getElementById('canvas');
        var signaturePad = new SignaturePad(canvas);
        function clearSignature() {
            event.preventDefault();
            signaturePad.clear();
        }
        document.getElementById('canvas').addEventListener('click', function (event) {
            event.preventDefault();
            if (signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
            } else {
                var dataURL = signaturePad.toDataURL();
                var signatureInput = document.getElementById('signature_input');
                signatureInput.value = dataURL;
                // document.getElementById('display-signature').setAttribute('src', dataURL);
            }
        });

        function togglePhotoOption() {
            const uploadSection = document.getElementById('uploadSection');
            const liveSection = document.getElementById('liveSection');
            const uploadRadio = document.getElementById('upload');
            const liveRadio = document.getElementById('live');

            if (uploadRadio.checked) {
                uploadSection.classList.remove('invisible');
                liveSection.classList.add('invisible');
            } else if (liveRadio.checked) {
                liveSection.classList.remove('invisible');
                uploadSection.classList.add('invisible');
            }
        }

        // const videoCustom = document.getElementById('videoCustom');
        // const canvasCustom = document.getElementById('canvasCustom');
        // const contextCustom = canvasCustom.getContext('2d');
        // navigator.mediaDevices.getUserMedia({ video: true })
        //     .then(stream => {
        //         videoCustom.srcObject = stream;
        //         videoCustom.play();
        //     })
        //     .catch(err => {
        //         console.error("An error occurred: " + err);
        //     });
        // function takeSnapshotCustom() {
        //     event.preventDefault();
        //     contextCustom.drawImage(videoCustom, 0, 0, canvasCustom.width, canvasCustom.height);
        //     const dataUriCustom = canvasCustom.toDataURL('image/jpeg');
        //     document.getElementById('update_profile_Picture').value = dataUriCustom;
        //     const imgCustom = new Image();
        //     imgCustom.onload = function () {
        //         contextCustom.fillStyle = '#ffffff';
        //         contextCustom.fillRect(0, 0, canvasCustom.width, canvasCustom.height);
        //         contextCustom.drawImage(imgCustom, 0, 0, canvasCustom.width, canvasCustom.height);
        //         const resultsDivCustom = document.getElementById('resultsCustom');
        //         resultsDivCustom.innerHTML = '<h6>Capture Picture</h6>';
        //         const resultImgCustom = new Image();
        //         resultImgCustom.src = canvasCustom.toDataURL('image/jpeg');
        //         resultsDivCustom.appendChild(resultImgCustom);
        //     };
        //     imgCustom.src = dataUriCustom;
        // }

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
            event.preventDefault();
            contextCustom.drawImage(videoCustom, 0, 0, canvasCustom.width, canvasCustom.height);
            const dataUriCustom = canvasCustom.toDataURL('image/jpeg');
            const scaleFactor = 1.5;
            const centerX = canvasCustom.width / 2;
            const centerY = canvasCustom.height / 2;
            const zoomedWidth = canvasCustom.width * scaleFactor;
            const zoomedHeight = canvasCustom.height * scaleFactor;
            const zoomedX = centerX - zoomedWidth / 2;
            const zoomedY = centerY - zoomedHeight / 2;
            const imgCustomZoomed = new Image();
            imgCustomZoomed.onload = function () {
                contextCustom.fillStyle = '#ffffff';
                contextCustom.fillRect(0, 0, canvasCustom.width, canvasCustom.height);
                contextCustom.drawImage(imgCustomZoomed, zoomedX, zoomedY, zoomedWidth, zoomedHeight);
                const resultsDivCustom = document.getElementById('resultsCustom');
                resultsDivCustom.innerHTML = '<h6>Zoomed-In Picture</h6>';
                const resultImgCustomZoomed = new Image();
                resultImgCustomZoomed.src = canvasCustom.toDataURL('image/jpeg');
                resultsDivCustom.appendChild(resultImgCustomZoomed);
                document.getElementById('update_profile_Picture').value = canvasCustom.toDataURL('image/jpeg');
            };
            imgCustomZoomed.src = dataUriCustom;
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

        document.getElementById('upoldpannum').addEventListener('input', function (e) {
            let value = e.target.value.toUpperCase();
            value = value.replace(/[^A-Z0-9]/g, '');
            if (value.length > 10) {
                value = value.slice(0, 10);
            }
            e.target.value = value;
        });
    </script>

    <script>
        document.getElementById('enableFileUploadu').addEventListener('change', function () {
            var fileUploadContainer = document.getElementById('fileUploadContaineru');
            fileUploadContainer.style.display = this.checked ? 'block' : 'none';
        });

        // function toggleYourNameFields() {
        //     var yourNameFields = document.getElementById('yourNameFields');
        //     yourNameFields.style.display = document.getElementById('yourNameCheckbox').checked ? 'block' : 'none';
        // }

        // function toggleFatherNameFields() {
        //     var fatherNameFields = document.getElementById('fatherNameFields');
        //     fatherNameFields.style.display = document.getElementById('fatherNameCheckbox').checked ? 'block' : 'none';
        // }

        // function toggleDOBFields() {
        //     var dobFields = document.getElementById('dobFields');
        //     dobFields.style.display = document.getElementById('dobCheckbox').checked ? 'block' : 'none';
        // }

        // function toggleAddressFields() {
        //     var addressFields = document.getElementById('addressFields');
        //     addressFields.style.display = document.getElementById('addressCheckbox').checked ? 'block' : 'none';
        // }


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-a7M8NThdh8Q+qk5IQN92L/mqs5Dh5G+RTq9RZF3V9b4ktz2GXAwC1NCTK+4P2rsz"
        crossorigin="anonymous"></script>
    <!-- <script>
        $(document).ready(function () {
            $('#enableFileUpload').change(function () {
                $('#fileUploadContainer').toggle(this.checked);
            });
        });

    </script> -->
</body>

</html>