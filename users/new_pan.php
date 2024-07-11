<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../newStyles.css">
    <title>Apply New Pan Card</title>
    <style>
        body {
            font-family: "Bree Serif", serif;
            background-image: url('../image/wa.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .hidden {
            display: none;
        }

        .cansize {
            border: 2px solid #000;
        }


        .selfie-container-custom {
            border: 1px solid #ccc;
            border-radius: 50%;
            overflow: hidden;
            width: 320px;
            height: 320px;
            position: relative;
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

        .cansize {
            border: 2px solid #000;
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


        #imagefm {
            max-width: 100%;
        }

        .cropper-containerfm {
            display: block;
        }

        #croppedImagefm {
            display: none;
            margin-top: 20px;
        }

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



        .blur-background {
            filter: blur(5px);
            pointer-events: none;
        }

        .offcanvas-backdrop {
            display: none !important;
        }

        /* -------------------------------------------- */
        input[type="radio"] {
            display: none;
        }

        .genderradio {
            display: inline-block;
            cursor: pointer;
        }

        .genderradio .imgs {
            width: 50px;
            height: 50px;
            border: 5px solid transparent;
            border-radius: 50%;
        }

        input[type="radio"]:checked+label .imgs {
            border-color: greenyellow;
        }

        /* ------------------------------------------------------- */

        .photoradio {
            display: inline-block;
            cursor: pointer;
        }

        .photoradio .imgph {
            width: 50px;
            height: 50px;
            border: 5px solid transparent;
            border-radius: 50%;
        }

        input[type="radio"]:checked+label .imgph {
            border-color: greenyellow;
        }

        /* ------------------------------------------------------ */
        .signradio {
            display: inline-block;
            cursor: pointer;
        }

        .signradio .imgsi {
            width: 50px;
            height: 50px;
            border: 5px solid transparent;
            border-radius: 50%;
        }

        input[type="radio"]:checked+label .imgsi {
            border-color: greenyellow;
        }

        /* -------------------------------------------------------------- */
        .fmsignradio {
            display: inline-block;
            cursor: pointer;
        }

        .fmsignradio .fmimgsi {
            width: 50px;
            height: 50px;
            border: 5px solid transparent;
            border-radius: 50%;
        }

        input[type="radio"]:checked+label .fmimgsi {
            border-color: greenyellow;
        }

        /* -------------------------------------------------------------- */
        .fmradio {
            display: inline-block;
            cursor: pointer;
        }

        .fmradio .fmimg {
            width: 50px;
            height: 50px;
            border: 5px solid transparent;
            border-radius: 50%;
        }

        input[type="radio"]:checked+label .fmimg {
            border-color: greenyellow;
        }

        /* ------------------------------------------------------------------------ */

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
    </style>
</head>

<body>
    <div class="others">
        <div class="offcanvas offcanvas-end" id="cropperOffcanvas">
            <div class="offcanvas-header d-flex justify-content-center">
                <h5 class="offcanvas-title">Crop Image</h5>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex justify-content-center gap-5 my-4 mt-3">
                    <button type="button" id="cropButton" class="btn btn-success rounded-0">Confirm
                        Crop</button>
                    <button type="button" id="cancelButton" class="btn btn-danger rounded-0 me-3"
                        data-bs-dismiss="offcanvas">Cancel</button>
                </div>
                <img id="image" style="max-width: 100%; max-height: 80vh;">
            </div>
        </div>
        <div class="offcanvas offcanvas-end" id="cropperOffcanvasfm">
            <div class="offcanvas-header d-flex justify-content-center">
                <h5 class="offcanvas-title">Crop Image</h5>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex justify-content-center gap-5 my-4 mt-3">
                    <button type="button" id="cropButtonfm" class="btn btn-success rounded-0">Confirm
                        Crop</button>
                    <button type="button" id="cancelButtonfm" class="btn btn-danger me-3 rounded-0"
                        data-bs-dismiss="offcanvas">Cancel</button>
                </div>
                <img id="imagefm" style="max-width: 100%; max-height: 80vh;">
            </div>
        </div>

        <div class="overlay" id="overlay"></div>
        <div class="loader" id="loader"></div>

    </div>





    <span id="content">

        <div class="sidebar">
            <a href="../index.php"><i class="fa fa-home me-2" style="font-size: 30px;" aria-hidden="true"></i>
                <span>Home</span>
            </a>
            <a class="active" href=""><i class="fa fa-id-card me-2" style="font-size: 25px;" aria-hidden="true"></i>
                <span>New Pan</span>
            </a>
            <a href="update_pan.php"><i class="fa fa-address-card-o me-2" style="font-size: 25px;"
                    aria-hidden="true"></i>
                <span>Correction Pan</span>
            </a>
            <a href="statussearch.php"><i class="fa fa-search me-2" style="font-size: 28px;" aria-hidden="true"></i>
                <span>Check Status</span>
            </a>
            <a href="contactus.php"><i class="fa fa-phone-square me-2" style="font-size: 28px;" aria-hidden="true"></i>
                <span>Contact US</span>
            </a>
        </div>




        <div class="content">
            <marquee behavior="scroll" direction="left"><span class="text-warning">Apply New Pan Card in Easy Way</span>
            </marquee>

            <div class="container-fluid pb-5">
                <form id="myForm" action="../forms_datas.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" id="newname" name="new_call_name"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" required oninvalid="onInvalidInput('newname')"
                                    oninput="validateInput('newname')" pattern="[a-zA-Z\s]+">
                                <label for="" class="text-secondary text-opacity-50">Full Name (As per Aadhar card)
                                    <span class="text-danger">*</span></label>
                            </div>
                            <span class="aerror" id="newnameError"></span>
                        </div>
                        <div class="col-md-4 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" id="aadharNumber" name="new_aadharNumber"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" required title="Please enter a Valid Aadhar number" minlength="14"
                                    maxlength="14" pattern="\d{4} \d{4} \d{4}"
                                    oninvalid="onInvalidInput('aadharNumber')" oninput="formatAadhar()">
                                <label for="" class="text-secondary text-opacity-50">Aadhaar Number <span
                                        class="text-danger">*</span></label>
                            </div>
                            <span class="aerror" id="aadharNumberError"></span>
                            <div id="messageaadhaar"></div>
                        </div>
                        <div class="col-md-4 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" id="mobileNumber" name="new_mobileNumber"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" required oninvalid="onInvalidInput('mobileNumber')"
                                    oninput="this.value = this.value.replace(/[^6789\d]/g, ''); hideError('mobileNumber');"
                                    pattern="[6789]\d{9}"
                                    title="Please enter a 10-digit number starting with 6, 7, 8, or 9" maxlength="10">
                                <label for="" class="text-secondary text-opacity-50">Mobile Number<span
                                        class="text-danger">*</span></label>
                            </div>
                            <div id="messagemobile"></div>
                            <span class="aerror" id="mobileNumberError"></span>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" id="newemail" name="new_email"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" oninvalid="onInvalidInput('newemail')"
                                    oninput="hideError('newemail')">
                                <label for="" class="text-secondary text-opacity-50">Email (Optional) </label>
                            </div>
                            <span class="aerror" id="newemailError"></span>
                        </div>
                        <div class="col-md-6 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="date" name="new_pan_dob" id="dob"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" required onchange="checkAge()" oninvalid="onInvalidInput('dob')"
                                    oninput="hideError('dob')">
                                <label for="dob" class="text-secondary">Date Of Birth (As per Aadhar card)<span
                                        class="text-danger">*</span></label>
                            </div>
                            <small id="dobHelp" class="form-text text-warning"></small>
                            <span class="aerror" id="dobError"></span>
                        </div>
                    </div>


                    <div class="row my-5 hidden" id="additionalFields">
                        <div class="col-md-12 col-sm-12 p-4 border border-2 border-warning shadow-lg">
                            <div class="row justify-content-center">
                                <span class="text-center text-info my-2">You are the minor, Please provide the parents
                                    Deatails (Father or
                                    Mother)</span>
                                <div
                                    class="col-md-6 col-sm-12 p-2 d-flex text-algin-center border border-opacity-50 shadow-lg border-2 border-secondary justify-content-center">
                                    <div class="col-cm-12 mx-5">
                                        <input type="radio" id="mother" name="new_choose_fm" value="mother"
                                            oninput="hideError('father')" oninvalid="onInvalidInput('mother')">
                                        <label for="mother" class="fmradio">
                                            <img src="../image/mother.png" class="fmimg" alt="Option 1">
                                            Mother
                                        </label>
                                    </div>
                                    <div class="col-cm-12 mx-5">
                                        <input type="radio" id="father" name="new_choose_fm" value="father"
                                            oninput="hideError('father')" oninvalid="onInvalidInput('father')">
                                        <label for="father" class="fmradio">
                                            <img src="../image/father.png" class="fmimg" alt="Option 1">
                                            Father
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="aerror" id="fatherError"></span>
                                </div>
                            </div>
                            <div class="row justify-content-center my-5">
                                <div class="col-md-6 col-sm-12">
                                    <h6 class="my-4 text-info text-center">Upload <b>Parent's</b> Aadhar Front Side
                                        (Format
                                        Support by jpeg,
                                        jpg, png)</h6>
                                    <div class="input-group mb-3">
                                        <input type="file" name="fm_new_pan_aadhar_front"
                                            class="form-control form-control-lg rounded-0 shadow-lg" id="fmaadharfront"
                                            accept="image/jpeg, image/jpg"
                                            onchange="previewImage(this,'fmimagePreviewf')"
                                            oninput="hideError('fmaadharfront')"
                                            oninvalid="onInvalidInput('fmaadharfront')">
                                    </div>
                                    <div class="border rounded-lg text-center p-3" id="fmimagePreviewf"
                                        style="display: none;">
                                        <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                            class="img-fluid" id="preview6" alt="Preview" />
                                    </div>
                                    <span class="aerror" id="fmaadharfrontError"></span>
                                </div>
                                <div class="col-md-6 col-sm-12 ">
                                    <h6 class="my-4 text-info text-center">Upload <b>Parent's</b> Aadhar Back Side
                                        (Format
                                        Support by jpeg,
                                        jpg, png)</h6>
                                    <div class="input-group mb-3">
                                        <input type="file" name="fm_new_pan_aadhar_back"
                                            class="form-control form-control-lg rounded-0 shadow-lg" id="fmaadharback"
                                            accept="image/jpeg, image/jpg"
                                            onchange="previewImage(this,'fmimagePreviewb')"
                                            oninput="hideError('fmaadharback')"
                                            oninvalid="onInvalidInput('fmaadharback')">
                                    </div>
                                    <div class="border rounded-lg text-center p-3" id="fmimagePreviewb"
                                        style="display: none;">
                                        <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                            class="img-fluid" id="preview7" alt="Preview" />
                                    </div>
                                    <span class="aerror" id="fmaadharbackError"></span>
                                </div>
                            </div>
                            <div class="row justify-content-center my-5">
                                <div
                                    class="col-md-5 p-4 text-center col-sm-12 border border-opacity-50 border-2 border-secondary shadow-lg">
                                    <div class="mb-4">
                                        <span class="text-center my-2 text-info">Please upload parent's signature</span>
                                    </div>
                                    <div class="d-flex text-algin-center justify-content-center">
                                        <div class="col-cm-12 mx-5">
                                            <input type="radio" id="fmupload" name="signature" value="fmupload"
                                                onchange="toggleFmSignatureFields(this);" required
                                                oninput="hideError('fmupload')" oninvalid="onInvalidInput('fmupload')">
                                            <label for="fmupload" class="fmsignradio">
                                                <img src="../image/image.png" class="fmimgsi" alt="Option 1">
                                                Upload
                                            </label>
                                        </div>
                                        <div class="col-cm-12 mx-5">
                                            <input type="radio" id="fmlive" name="signature" value="fmlive"
                                                onchange="toggleFmSignatureFields(this);" required
                                                oninput="hideError('fmupload')" oninvalid="onInvalidInput('fmlive')">
                                            <label for="fmlive" class="fmsignradio">
                                                <img src="../image/sign.png" class="fmimgsi" alt="Option 1">
                                                Draw
                                            </label>
                                        </div>
                                    </div>

                                    <div id="fmuploaddiv" class="hidden my-4">
                                        <label for="fmuploadsign" class="my-2 text-secondary">Upload Parent's Signature
                                            Image (Format
                                            Support by jpeg, jpg, png) <span class="text-warning">Please Upload White
                                                backround image</span></label>
                                        <input type="file"
                                            class="form-control border-success border-2 border-opacity-50 rounded-0"
                                            id="fmuploadsign" accept="image/jpeg, image/jpg, image/png"
                                            onchange="previewImage(this,'fmimagePreviews')"
                                            oninput="hideError('fmuploadsign')"
                                            oninvalid="onInvalidInput('fmuploadsign')">
                                        <div class="border rounded-lg text-center" id="fmimagePreviews"
                                            style="display: none;">
                                            <div class="container d-flex justify-content-center">
                                                <div id="croppedImageContainerfm">
                                                    <img id="croppedImagefm" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="aerror" id="fmuploadsignError"></span>
                                    </div>



                                    <div id="fmlivediv" class="hidden my-4">
                                        <h6 class="text-warning" class="my-2">Draw Parent's signature below</h6>
                                        <canvas id="fmcanvas" class="cansize"></canvas>
                                        <br>
                                        <input type="hidden" id="fmlivesign" accept="image/*">
                                        <div class="my-2">
                                            <button class="btn btn-danger btn-sm rounded-0"
                                                onclick="clearFmSignature()">Clear</button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="aerror" id="fmuploadError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center my-5">
                        <div class="col-md-6 text-center p-4 col-sm-12 border-2 border border-success shadow-lg">
                            <div class="mb-4">
                                <span class=" text-success">Please Select Candidate Gender</span>
                            </div>
                            <div class="d-flex text-algin-center border-opacity-25  justify-content-center">
                                <div class="mx-5">
                                    <input type="radio" name="gender" value="male" id="male" required
                                        onclick="toggleInputField(this)" oninvalid="onInvalidInput('male')"
                                        oninput="hideError('male')">
                                    <label for="male" class="genderradio">
                                        <img src="../image/male.png" class="imgs" alt="Option 1">
                                        Male
                                    </label>
                                </div>
                                <div class="mx-5">
                                    <input type="radio" name="gender" value="female" id="female"
                                        onclick="toggleInputField(this)" oninvalid="onInvalidInput('female')"
                                        oninput="hideError('male')">
                                    <label for="female" class="genderradio">
                                        <img src="../image/female.png" class="imgs" alt="Option 1">
                                        Female
                                    </label>
                                </div>
                                <div class="mx-5">
                                    <input type="radio" name="gender" value="other" id="others"
                                        onclick="toggleInputField(this)" oninvalid="onInvalidInput('others')"
                                        oninput="hideError('male')">
                                    <label for="others" class="genderradio">
                                        <img src="../image/people.png" class="imgs" alt="Option 1">
                                        Others
                                    </label>
                                </div>
                            </div>
                            <div id="extraField" class="hidden">
                                <div class="my-2 text-info">
                                    <label for="extraInput">Enter Father's Name</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" id="extraInput"
                                        class="form-control border-success border-2 shadow-lg border-opacity-50 rounded-0"
                                        placeholder="" required oninvalid="onInvalidInput('extraInput')"
                                        oninput="hideError('extraInput'); validateInput('extraInput')"
                                        pattern="[a-zA-Z\s]+">
                                    <label for="" class="text-secondary text-opacity-50">Father Name</label>
                                </div>
                                <span class="aerror" id="extraInputError"></span>
                            </div>
                            <span class="aerror" id="maleError"></span>
                        </div>
                    </div>


                    <div class="row justify-content-center my-5">
                        <div
                            class="col-md-5 mx-5 my-2 col-sm-12 p-2 border border-opacity-25 border-2 border-success shadow-lg">
                            <h6 class="my-4 text-success text-center">Upload <b>Canditate</b> Aadhar Front Side (Format
                                Support by jpeg,
                                jpg, png)</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="new_pan_aadhar_front"
                                    class="form-control form-control-lg rounded-0" id="aadharfront"
                                    accept="image/jpeg, image/jpg, image/png" required
                                    onchange="previewImage(this,'imagePreviewf')"
                                    oninvalid="onInvalidInput('aadharfront')" oninput="hideError('aadharfront')">
                            </div>
                            <div class="border rounded-lg text-center p-3" id="imagePreviewf" style="display: none;">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                    class="img-fluid" id="preview4" alt="Preview" />
                            </div>
                            <span class="aerror" id="aadharfrontError"></span>
                        </div>
                        <div
                            class="col-md-5 mx-5 my-2 col-sm-12 p-2 border border-opacity-25 border-2 border-success shadow-lg">
                            <h6 class="my-4 text-success text-center">Upload <b>Canditate</b> Aadhar Back Side (Format
                                Support by jpeg,
                                jpg, png)</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="new_pan_aadhar_back"
                                    class="form-control form-control-lg rounded-0" id="aadharback"
                                    accept="image/jpeg, image/jpg, image/png" required
                                    onchange="previewImage(this,'imagePreviewb')" oninput="hideError('aadharback')"
                                    oninvalid="onInvalidInput('aadharback')">
                            </div>
                            <div class="border rounded-lg text-center p-3" id="imagePreviewb" style="display: none;">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                    class="img-fluid" id="preview5" alt="Preview" />
                            </div>
                            <span class="aerror" id="aadharbackError"></span>
                        </div>
                    </div>


                    <div class="row justify-content-center my-5">
                        <div
                            class="col-md-5 col-sm-12 mx-5 my-2 p-4 border border-opacity-25 border-2 border-success shadow-lg">
                            <span class="d-flex text-align-center justify-content-center mb-4 text-success">Please
                                upload
                                Candidate photo
                                (Passport Size)<span class="text-warning">*</span></span>
                            <div class="d-flex text-align-center justify-content-center">
                                <div class="col-cm-12 mx-5 ">
                                    <input type="radio" id="uploadPicture" name="picture" value="upload"
                                        onchange="togglePictureFields(this);" required
                                        oninput="hideError('uploadPicture')"
                                        oninvalid="onInvalidInput('uploadPicture')">
                                    <label for="uploadPicture" class="photoradio">
                                        <img src="../image/image.png" class="imgph" alt="Option 1">
                                        Upload
                                    </label>
                                </div>
                                <div class="col-cm-12 mx-5">
                                    <input type="radio" id="livePicture" name="picture" value="live"
                                        onchange="togglePictureFields(this);" required
                                        oninput="hideError('uploadPicture')" oninvalid="onInvalidInput('livePicture')">
                                    <label for="livePicture" class="photoradio">
                                        <img src="../image/camera.png" class="imgph" alt="Option 1">
                                        Selfie
                                    </label>
                                </div>

                            </div>
                            <div id="uploadPictureField" class="hidden">
                                <div class="text-center my-2">
                                    <label for="uploadFilep" class="text-secondary">Upload Candidate Photo (Format
                                        Support by jpeg, jpg, png)</label>
                                </div>
                                <input type="file"
                                    class="form-control border-success border-2 shadow-lg border-opacity-50 rounded-0"
                                    id="uploadFilep" onchange="previewImage(this,'imagePreviewp')"
                                    accept="image/jpeg, image/jpg, image/png" oninput="hideError('uploadFilep')"
                                    oninvalid="onInvalidInput('uploadFilep')">
                                <div class="border rounded-lg text-center p-3" id="imagePreviewp"
                                    style="display: none;">
                                    <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                        class="img-fluid" id="preview" alt="Preview" />
                                </div>
                                <span class="aerror" id="uploadFilepError"></span>
                            </div>


                            <div id="livePictureField" class="hidden text-center">
                                <h6 class="header3-custom my-4 text-warning">Take a selfie <a href="#photorule"
                                        data-bs-toggle="modal"> Background should be White or
                                        Plain</a></h6>
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
                                                    <img src="../image/photoHelp.png" style="width: 80%;" alt="">
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
                                        <video id="videoCustom" class="video-element-custom" width="320" height="320"
                                            autoplay style="border-radius: 100%;"></video>
                                        <canvas id="canvasCustom" class="canvas-element-custom cam_size" width="320"
                                            height="320"></canvas>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <button class="btn btn-warning btn-sm rounded-0" onclick="takeSnapshotCustom()">Take
                                        Snapshot</button>
                                </div>
                                <div id="resultsCustom"></div>
                                <input type="hidden" id="livePictureInput" accept="image/*">
                            </div>
                            <div class="text-center">
                                <span class="aerror" id="uploadPictureError"></span>
                            </div>
                        </div>

                        <div
                            class="col-md-5 col-sm-12 mx-5 my-2 p-4 border border-opacity-25 border-2 border-success shadow-lg">
                            <span class="d-flex text-align-center justify-content-center mb-4 text-success">Please
                                upload
                                Candidate signature<span class="text-warning">*</span></span>
                            <div class="d-flex text-align-center justify-content-center">
                                <div class="col-cm-12 mx-5">
                                    <input type="radio" id="uploadSignatureField" name="signature" value="upload"
                                        onchange="toggleSignatureFields(this);" required
                                        oninput="hideError('uploadSignatureField')"
                                        oninvalid="onInvalidInput('uploadSignatureField')">
                                    <label for="uploadSignatureField" class="signradio">
                                        <img src="../image/image.png" class="imgsi" alt="Option 1">
                                        Upload
                                    </label>
                                </div>
                                <div class="col-cm-12 mx-5">
                                    <input type="radio" id="liveSignatureField" name="signature" value="live"
                                        onchange="toggleSignatureFields(this);" required
                                        oninput="hideError('uploadSignatureField')"
                                        oninvalid="onInvalidInput('liveSignatureField')">
                                    <label for="liveSignatureField" class="signradio">
                                        <img src="../image/sign.png" class="imgsi" alt="Option 1">
                                        Draw
                                    </label>
                                </div>
                            </div>
                            <div id="uploadSignatureDiv" class="hidden">
                                <div class="text-center my-2">
                                    <label for="uploadFileSignature" class="text-secondary">Upload Candidate
                                        Signature (Format
                                        Support by jpeg, jpg, png)<br><span class="text-warning">Please Upload White
                                            backround image</span></label>
                                </div>
                                <input type="file"
                                    class="form-control border-success shadow-lg border-2 border-opacity-50 rounded-0"
                                    id="uploadFileSignature" onchange="previewImage(this,'imagePreviews')"
                                    accept="image/jpeg, image/jpg, image/png" oninput="hideError('uploadFileSignature')"
                                    oninvalid="onInvalidInput('uploadFileSignature')">
                                <div class="border rounded-lg text-center" id="imagePreviews" style="display: none;">
                                    <div class="container d-flex justify-content-center">
                                        <div id="croppedImageContainer" class="">
                                            <img id="croppedImage" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                                <span class="aerror" id="uploadFileSignatureError"></span>
                            </div>

                            <div id="liveSignatureDiv" class="hidden text-center">
                                <h6 class="text-warning">Draw your signature below</h6>
                                <canvas id="canvas" class="cansize"></canvas>
                                <br>
                                <input type="hidden" id="liveSignatureInputField" accept="image/*">
                                <div class="my-2">
                                    <button class="btn btn-danger btn-sm rounded-0"
                                        onclick="clearSignature()">Clear</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="aerror" id="uploadSignatureFieldError"></span>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="new_pan_recept_num">

                    <div class="ps-5 p-5" style="display: block;" id="final">
                        <input class="form-check-input border border-warning border-2" type="checkbox" id="confirm"
                            name="option1" value="something" required>
                        <label class="form-check-label text-primary" for="confirm" style="font-weight: 500;">I hereby
                            consent to provide my Aadhaar Number/data for Aadhaar based authentication for the purpose
                            of pan card application only. <br>
                        </label>
                        <label class="form-check-label text-primary" for="confirm">(பான் கார்டு விண்ணப்பத்திற்காக
                            மட்டுமே ஆதார் அடிப்படையிலான
                            அங்கீகாரத்திற்காக எனது ஆதார் எண்/தரவை வழங்க நான் ஒப்புக்கொள்கிறேன்.)</label>
                    </div>



                    <div class="text-center p-4">
                        <input type="submit" class="btn btn-outline-success border-2 border-success rounded-0"
                            name="new_pan_submit" value="Submit the Application">
                    </div>
                </form>
            </div>
        </div>
    </span>













    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>
    <script>
        function checkAge() {
            var dob = new Date(document.getElementById('dob').value);
            var today = new Date();
            var age = today.getFullYear() - dob.getFullYear();
            var monthDiff = today.getMonth() - dob.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            var additionalFields = document.getElementById('additionalFields');
            additionalFields.classList.toggle('hidden', age >= 18);
            setRequired(age < 18);
        }

        function setRequired(isRequired) {
            var fields = document.querySelectorAll('#additionalFields input');
            fields.forEach(field => {
                field.required = isRequired;
                if (!isRequired) {
                    if (field.type === 'radio') {
                        field.checked = false;
                    } else {
                        field.value = '';
                        clearPreviewsign('fmimagePreviews');
                    }
                }
            });
        }

        // function toggleSignatureFieldsfm(radio) {
        //     var uploadField = document.getElementById('fmuploadSignatureFieldDiv');
        //     var liveField = document.getElementById('fmliveSignatureFieldDiv');
        //     if (radio.value === 'upload') {
        //         uploadField.classList.remove('hidden');
        //         liveField.classList.add('hidden');
        //     } else if (radio.value === 'live') {
        //         uploadField.classList.add('hidden');
        //         liveField.classList.remove('hidden');
        //     }
        // }
        // -----------------------------------------------------------------------------------------------




        function toggleFmSignatureFields(radio) {
            var uploadDiv = document.getElementById('fmuploaddiv');
            var liveDiv = document.getElementById('fmlivediv');
            if (radio.value === 'fmupload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFieldsfm('fmlivesign');
                setFieldRequiredfm('fmuploadsign', true);
                setFieldRequiredfm('fmlivesign', false);
                addNameAttributefm('fmuploadsign', 'fm_new_signature_Image');
                removeNameAttributefm('fmlivesign', 'fm_new_signature_Images');
                clearFmSignature();
            } else if (radio.value === 'fmlive') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFieldsfm('fmuploadsign');
                setFieldRequiredfm('fmuploadsign', false);
                setFieldRequiredfm('fmlivesign', true);
                addNameAttributefm('fmlivesign', 'fm_new_signature_Images');
                removeNameAttributefm('fmuploadsign', 'fm_new_signature_Image');
            }
        }
        function setFieldRequiredfm(id, isRequired) {
            document.getElementById(id).required = isRequired;
        }
        function clearFieldsfm(id) {
            var inputField = document.getElementById(id);
            inputField.value = '';
            clearPreviewsign('fmimagePreviews');
        }
        function addNameAttributefm(id, name) {
            document.getElementById(id).setAttribute('name', name);
        }
        function removeNameAttributefm(id, name) {
            var element = document.getElementById(id);
            if (element.getAttribute('name') === name) {
                element.removeAttribute('name');
            }
        }



        // -----------------------------------------------------------------------------------------------

        function togglePictureFields(radio) {
            var uploadDiv = document.getElementById('uploadPictureField');
            var liveDiv = document.getElementById('livePictureField');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFieldsp('livePictureInput');
                setFieldRequiredp('uploadFilep', true);
                setFieldRequiredp('livePictureInput', false);
                addNameAttribute('uploadFilep', 'new_profile_Picture');
                removeNameAttribute('livePictureInput', 'new_profile_Pictures');
                clearSnapshotCustom();
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFieldsp('uploadFilep');
                setFieldRequiredp('uploadFilep', false);
                setFieldRequiredp('livePictureInput', true);
                addNameAttribute('livePictureInput', 'new_profile_Pictures');
                removeNameAttribute('uploadFilep', 'new_profile_Picture');
            }
        }
        function setFieldRequiredp(id, isRequired) {
            document.getElementById(id).required = isRequired;
        }
        function clearFieldsp(id) {
            var inputField = document.getElementById(id);
            inputField.value = '';
            clearPreviewImage('imagePreviewp');
        }
        function addNameAttribute(id, name) {
            document.getElementById(id).setAttribute('name', name);
        }
        function removeNameAttribute(id, name) {
            var element = document.getElementById(id);
            if (element.getAttribute('name') === name) {
                element.removeAttribute('name');
            }
        }

        // -----------------------------------------------------------------------------------------------

        function toggleSignatureFields(radio) {
            var uploadDiv = document.getElementById('uploadSignatureDiv');
            var liveDiv = document.getElementById('liveSignatureDiv');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFields('liveSignatureInputField');
                setFieldRequired('uploadFileSignature', true);
                setFieldRequired('liveSignatureInputField', false);
                addNameAttribute('uploadFileSignature', 'new_signature_Image');
                removeNameAttribute('liveSignatureInputField', 'new_signature_Images');
                clearSignature();
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFileSignature');
                setFieldRequired('uploadFileSignature', false);
                setFieldRequired('liveSignatureInputField', true);
                addNameAttribute('liveSignatureInputField', 'new_signature_Images');
                removeNameAttribute('uploadFileSignature', 'new_signature_Image');
            }
        }
        function setFieldRequired(id, isRequired) {
            document.getElementById(id).required = isRequired;
        }
        function clearFields(id) {
            var inputField = document.getElementById(id);
            inputField.value = '';
            clearPreviewsign('imagePreviews');
        }
        function addNameAttribute(id, name) {
            document.getElementById(id).setAttribute('name', name);
        }
        function removeNameAttribute(id, name) {
            var element = document.getElementById(id);
            if (element.getAttribute('name') === name) {
                element.removeAttribute('name');
            }
        }

        // -----------------------------------------------------------------------------------------------


        function toggleInputField(radio) {
            var extraField = document.getElementById('extraField');
            var extraInput = document.getElementById('extraInput');
            if (radio.value === 'female') {
                extraField.classList.remove('hidden');
                extraInput.required = true;
                extraInput.setAttribute('name', 'new_fatherName');
            } else {
                extraField.classList.add('hidden');
                extraInput.required = false;
                extraInput.removeAttribute('name');
                extraInput.value = '';
            }
        }
        // -----------------------------------------------------------------------------------------------

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
                resultsDivCustom.innerHTML = '<h6>Saved Picture</h6>';
                const resultImgCustomZoomed = new Image();
                resultImgCustomZoomed.src = canvasCustom.toDataURL('image/jpeg');
                resultsDivCustom.appendChild(resultImgCustomZoomed);
                document.getElementById('livePictureInput').value = canvasCustom.toDataURL('image/jpeg');
            };
            imgCustomZoomed.src = dataUriCustom;
        }
        function clearSnapshotCustom() {
            event.preventDefault();
            contextCustom.clearRect(0, 0, canvasCustom.width, canvasCustom.height);
            document.getElementById('resultsCustom').innerHTML = '';
            document.getElementById('livePictureInput').value = '';
        }
        const form = document.getElementById('myForm');
        const hiddenFieldPhoto = document.getElementById('livePictureInput');
        const livePhoto = document.getElementById('livePicture');
        form.addEventListener('submit', function (event) {
            if (livePhoto.checked && !hiddenFieldPhoto.value.trim()) {
                event.preventDefault();
                alert('Profile photo is required!');
            }
        });

        // -----------------------------------------------------------------------------------------------


        var canvas = document.getElementById('canvas');
        var signaturePad = new SignaturePad(canvas);
        const livesign = document.getElementById('liveSignatureField');
        const capturesign = document.getElementById('uploadSignatureField');

        document.getElementById('myForm').addEventListener('submit', function (event) {
            if (!capturesign.checked && livesign.checked && signaturePad.isEmpty()) {
                event.preventDefault();
                alert("Please provide a signature first.");
            } else {
                var dataURL = signaturePad.toDataURL();
                document.getElementById('liveSignatureInputField').value = dataURL;
            }
        });

        function clearSignature() {
            event.preventDefault();
            signaturePad.clear();
        }

        // -----------------------------------------------------------------------------------------------



        var fmcanvas = document.getElementById('fmcanvas');
        var signaturePadfm = new SignaturePad(fmcanvas);
        const livesignfm = document.getElementById('fmlive');
        const capturesignfm = document.getElementById('fmupload');

        document.getElementById('myForm').addEventListener('submit', function (event) {
            if (!capturesignfm.checked && livesignfm.checked && signaturePadfm.isEmpty()) {
                event.preventDefault();
                alert("Please provide a Parent signature first.");
            } else {
                var dataURL = signaturePadfm.toDataURL();
                document.getElementById('fmlivesign').value = dataURL;
            }
        });

        function clearFmSignature() {
            event.preventDefault();
            signaturePadfm.clear();
        }
        // -----------------------------------------------------------------------------------------------------
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

        // -----------------------------------------------------------------------------------------------

        function onInvalidInput(inputId) {
            const inputElement = document.getElementById(inputId);
            const errorElement = document.getElementById(inputId + 'Error');

            if (inputElement.validity.valueMissing) {
                errorElement.textContent = 'Please enter a data.';
            }
            else {
                errorElement.textContent = 'Enter valid data.';
            }

            errorElement.style.display = 'inline';
        }

        // -----------------------------------------------------------------------------------------------------

        function validateInput(inputId) {
            const inputField = document.getElementById(inputId);
            let input = inputField.value;
            const regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(input)) {
                input = input.replace(/[^a-zA-Z\s]/g, '');
            }
            input = input.replace(/\s\s+/g, ' ');
            inputField.value = input;

            const errorElement = document.getElementById(inputId + 'Error');
            errorElement.style.display = 'none';
        }

        // ---------------------------------------------------------------------------------


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

            const errorElement = document.getElementById("aadharNumber" + 'Error');
            errorElement.style.display = 'none';
        }
        // ------------------------------------------------------------------------------------

        function hideError(inputId) {
            const errorElement = document.getElementById(inputId + 'Error');
            errorElement.style.display = 'none';
        }

        // -------------------------------------------------------------------------------------------

        document.getElementById('newemail').addEventListener('input', function (event) {
            const emailInput = event.target;
            const emailValue = emailInput.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailValue)) {
                emailInput.setCustomValidity('Invalid email address. The domain must end with .com');
            } else {
                emailInput.setCustomValidity('');
            }
        });
        // ------------------------------------------------------------------------------------------

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
        // --------------------------------------------------------------------------------------------------

        var offcanvasElementfm = document.getElementById('cropperOffcanvasfm');
        var contentElementfm = document.getElementById('content');
        offcanvasElementfm.addEventListener('show.bs.offcanvas', function () {
            contentElementfm.classList.add('blur-background');
        });
        offcanvasElementfm.addEventListener('hide.bs.offcanvas', function () {
            contentElementfm.classList.remove('blur-background');
        });
        var myOffcanvasfm = new bootstrap.Offcanvas(offcanvasElementfm, {
            backdrop: false,
            keyboard: false
        });



        const fileUploadInput = document.getElementById('fmuploadsign');
        const displayImg = document.getElementById('imagefm');
        const cropBtn = document.getElementById('cropButtonfm');
        const cancelBtn = document.getElementById('cancelButtonfm');
        const croppedImg = document.getElementById('croppedImagefm');
        const croppedImgContainer = document.getElementById('croppedImageContainerfm');
        const hiddenUploadInput = document.getElementById('fmuploadsign');
        let imageCropper;

        fileUploadInput.addEventListener('change', function (e) {
            const selectedFile = e.target.files[0];
            if (selectedFile) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    displayImg.src = event.target.result;
                    if (imageCropper) {
                        imageCropper.destroy();
                    }
                    imageCropper = new Cropper(displayImg, {
                        aspectRatio: 4 / 1,
                        viewMode: 1,
                    });
                    const cropperOffcanvas = new bootstrap.Offcanvas(document.getElementById('cropperOffcanvasfm'));
                    cropperOffcanvas.show();
                };
                reader.readAsDataURL(selectedFile);
            }
        });

        cropBtn.addEventListener('click', function () {
            const canvas = imageCropper.getCroppedCanvas({
                width: 400,
                height: 100,
                imageSmoothingQuality: 'high',
            });
            canvas.toBlob(function (blob) {
                const url = URL.createObjectURL(blob);
                croppedImg.src = url;
                croppedImg.style.display = 'block';
                croppedImgContainer.style.display = 'block';
                let modifiedURL = url.replace('blob:http://localhost/', '') + '.jpg';
                const dataTransfer = new DataTransfer();
                const croppedFile = new File([blob], modifiedURL, { type: 'image/jpg' });
                dataTransfer.items.add(croppedFile);
                hiddenUploadInput.files = dataTransfer.files;
                const cropperOffcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('cropperOffcanvasfm'));
                cropperOffcanvas.hide();
            }, 'imagefm/jpg');
        });

        cancelBtn.addEventListener('click', function () {
            fileUploadInput.value = '';
            const cropperOffcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('cropperOffcanvasfm'));
            cropperOffcanvas.hide();
        });






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


        const fileInputs = document.getElementById('uploadFileSignature');
        const image = document.getElementById('image');
        const cropButton = document.getElementById('cropButton');
        const cancelButton = document.getElementById('cancelButton');
        const croppedImage = document.getElementById('croppedImage');
        const croppedImageContainer = document.getElementById('croppedImageContainer');
        const hiddenFileInput = document.getElementById('uploadFileSignature');
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
        // -----------------------------------------------------------------------------------------------------------
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
        // ----------------------------------------------------------------------


        function clearPreviewImage(id) {
            event.preventDefault();
            var preview = document.getElementById(id);
            preview.style.display = 'none';
            preview.querySelector('img').setAttribute('src', 'https://via.placeholder.com/140?text=IMAGE');
        }

        function clearPreviewsign(id) {
            event.preventDefault();
            var preview = document.getElementById(id);
            preview.style.display = 'none';
        }

        // -----------------------------------------------------------------------------------------------------------

        document.getElementById('myForm').addEventListener('submit', function (event) {
            document.getElementById('loader').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-a7M8NThdh8Q+qk5IQN92L/mqs5Dh5G+RTq9RZF3V9b4ktz2GXAwC1NCTK+4P2rsz"
        crossorigin="anonymous"></script>

</body>

</html>