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
    <title>Apply Update Pan</title>
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

        .input-group {
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

        .blur-background {
            filter: blur(5px);
            pointer-events: none;
        }

        .offcanvas-backdrop {
            display: none !important;
        }

        /* ------------------------------------------------------- */
        input[type="radio"] {
            display: none;
        }

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

        .custom-checkbox {
            width: 20px;
            height: 20px;
        }

        .custom-checkbox:checked {
            border-color: greenyellow;
        }

        /* --------------------------------------------------------------------- */

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

        <div class="overlay" id="overlay"></div>
        <div class="loader" id="loader"></div>

    </div>

    <span id="content">
        <div class="sidebar">
            <a href="../index.php"><i class="fa fa-home me-2" style="font-size: 30px;" aria-hidden="true"></i>
                <span>Home</span> </a>
            <a href="new_pan.php"><i class="fa fa-id-card me-2" style="font-size: 25px;"
                    aria-hidden="true"></i><span>New
                    Pan</span></a>
            <a class="active" href=""><i class="fa fa-address-card-o me-2" style="font-size: 25px;"
                    aria-hidden="true"></i><span>Correction Pan</span></a>
            <a href="statussearch.php"><i class="fa fa-search me-2" style="font-size: 28px;"
                    aria-hidden="true"></i><span>Check Status
                </span></a>
            <a href="contactus.php"><i class="fa fa-phone-square me-2" style="font-size: 28px;"
                    aria-hidden="true"></i><span>Contact US</span></a>
        </div>

        <div class="content">

            <marquee behavior="scroll" direction="left"><span class="text-warning">Apply Correction Pan Card in Easy
                    Way</span>
            </marquee>

            <div class="container-fluid pb-5">
                <form action="../forms_datas.php" method="post" enctype="multipart/form-data" id="myForm">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12 p-4">
                            <label for="oldpan" class="mb-2 text-success">Upload old Pan Card <a class="text-success"
                                    href="#panrule" data-bs-toggle="modal">Pan card Front Side</a>
                                <span class="text-danger">*</span></label>
                            <div class="modal fade" id="panrule">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content text-center">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Pan Card Upload(Format Support by jpeg,jpg, png)
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="../image/idCardHelp.png" style="width: 80%;" alt="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="file"
                                class="form-control form-control-lg border border-2 border-success border-opacity-50 rounded-0 shadow-lg"
                                id="oldpan" name="update_old_pan_doc" accept=".jpeg, .jpg, .png"
                                onchange="previewImage(this,'imagePreviewp')" required
                                oninvalid="onInvalidInput('oldpan')" oninput="hideError('oldpan')">
                            <div class="border rounded-lg text-center p-3" id="imagePreviewp" style="display: none;">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                    class="img-fluid" id="preview" alt="Preview" />
                            </div>
                            <span class="aerror" id="oldpanError"></span>
                        </div>

                        <div class="col-md-6 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-4">
                                <input type="text" name="update_old_pan_num"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    id="upoldpannum" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"
                                    title="The PAN number must be 10 characters long, starting with five uppercase letters, followed by four digits, and ending with one uppercase letter."
                                    maxlength="10" required oninvalid="onInvalidInput('upoldpannum')"
                                    oninput="hideError('upoldpannum')">
                                <label for="upoldpannum" class="text-secondary text-opacity-50">Old PAN Card Number
                                    <span class="text-danger">*</span></label>
                            </div>
                            <span class="aerror" id="upoldpannumError"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="update_call_name"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" required pattern="[a-zA-Z\s]+" id="updatename"
                                    oninput="validateInput('updatename'); hideError('updatename')"
                                    oninvalid="onInvalidInput('updatename')">
                                <label for="" class="text-secondary text-opacity-50">Full Name (As per Aadhar card)
                                    <span class="text-danger">*</span></label>
                            </div>
                            <span class="aerror" id="updatenameError"></span>
                        </div>
                        <div class="col-md-6 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="update_aadharNumber"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" required oninput="formatAadhar(); hideError('aadharNumber')"
                                    id="aadharNumber" maxlength="14" oninvalid="onInvalidInput('aadharNumber')"
                                    pattern="\d{4} \d{4} \d{4}">
                                <label for="" class="text-secondary text-opacity-50">Aadhaar Number <span
                                        class="text-danger">*</span></label>
                            </div>
                            <div id="messageaadhaar"></div>
                            <span class="aerror" id="aadharNumberError"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 p-4">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="update_mobileNumber" id="mobileNumber"
                                    oninput="this.value = this.value.replace(/[^6789\d]/g, ''); hideError('mobileNumber')"
                                    pattern="[6789]\d{9}"
                                    title="Please enter a 10-digit number starting with 6, 7, 8, or 9" maxlength="10"
                                    required oninvalid="onInvalidInput('mobileNumber')"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="" required>
                                <label for="" class="text-secondary text-opacity-50">Mobile Number<span
                                        class="text-danger">*</span></label>
                            </div>
                            <div id="messagemobile"></div>
                            <span class="aerror" id="mobileNumberError"></span>
                        </div>
                        <div class="col-md-6 col-sm-12 p-4 ">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="update_email" id="updateemail"
                                    oninvalid="onInvalidInput('updateemail')" oninput="hideError('updateemail')"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                    placeholder="">
                                <label for="" class="text-secondary text-opacity-50">Email (Optional) </label>
                            </div>
                            <span class="aerror" id="updateemailError"></span>
                        </div>
                    </div>

                    <div class="row justify-content-center my-5">
                        <div
                            class="col-md-5 mx-5 my-2 col-sm-12 p-2 border border-opacity-25 border-2 border-success shadow-lg">
                            <h6 class="my-4 text-success text-center">Upload <b>Canditate</b> Aadhar Front Side (Format
                                Support by jpeg, jpg, png)</h6>
                            <div class="mb-3">
                                <input type="file" name="update_pan_aadhar_front"
                                    class="form-control form-control-lg rounded-0" id="aadharfront"
                                    accept="image/jpeg, image/jpg" required
                                    onchange="previewImage(this,'imagePreviewf')"
                                    oninvalid="onInvalidInput('aadharfront')" oninput="hideError('aadharfront')">
                            </div>
                            <div class="border rounded-lg text-center p-3" id="imagePreviewf" style="display: none;">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                    class="img-fluid" id="preview3" alt="Preview" />
                            </div>
                            <span class="aerror" id="aadharfrontError"></span>
                        </div>
                        <div
                            class="col-md-5 mx-5 my-2 col-sm-12 p-2 border border-opacity-25 border-2 border-success shadow-lg">
                            <h6 class="my-4 text-success text-center">Upload <b>Canditate</b> Aadhar Back Side (Format
                                Support by jpeg, jpg, png)</h6>
                            <div class="mb-3">
                                <input type="file" name="update_pan_aadhar_back"
                                    class="form-control form-control-lg rounded-0" id="aadharback"
                                    accept="image/jpeg, image/jpg, image/png" required
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

                    <div class="row justify-content-center my-5 ">
                        <div
                            class="col-md-5 col-sm-12 mx-5 my-2 p-4 border border-opacity-25 border-2 border-success shadow-lg">
                            <span class="d-flex text-align-center justify-content-center mb-4 text-success">Please
                                upload
                                photo (Passport Size)<span class="text-warning">*</span></span>
                            <div class="d-flex text-align-center justify-content-center">
                                <div class="col-cm-12 mx-5">
                                    <input type="radio" id="uploadPicture" name="picture" value="upload"
                                        onchange="togglePictureFields(this);" required
                                        oninvalid="onInvalidInput('uploadPicture')"
                                        oninput="hideError('uploadPicture')">
                                    <label for="uploadPicture" class="photoradio">
                                        <img src="../image/image.png" class="imgph" alt="Option 1">
                                        Upload
                                    </label>
                                </div>
                                <div class="col-cm-12 mx-5">
                                    <input type="radio" id="livePicture" name="picture" value="live"
                                        onchange="togglePictureFields(this);" required
                                        oninvalid="onInvalidInput('livePicture')" oninput="hideError('uploadPicture')">
                                    <label for="livePicture" class="photoradio">
                                        <img src="../image/camera.png" class="imgph" alt="Option 1">
                                        Selfie
                                    </label>
                                </div>
                            </div>
                            <div id="uploadPictureField" class="hidden">
                                <div class="text-center my-2 ">
                                    <label for="uploadFilep" class="text-secondary">Upload Candidate Photo (Format
                                        Support by jpeg, jpg, png)</label>
                                </div>

                                <input type="file"
                                    class="form-control border-success border-2 border-opacity-50 rounded-0"
                                    id="uploadFilep" onchange="previewImage(this, 'imagePreviewcp');"
                                    accept="image/jpeg, image/jpg, image/png" oninvalid="onInvalidInput('uploadFilep')"
                                    oninput="hideError('uploadFilep'); ">

                                <div class="border rounded-lg text-center p-3" id="imagePreviewcp"
                                    style="display: none;">
                                    <img src="https://via.placeholder.com/140?text=IMAGE" width="50%" height="50%"
                                        class="img-fluid" id="preview" alt="Preview" />
                                </div>

                                <span class="aerror" id="uploadFilepError"></span>
                            </div>

                            <div id="livePictureField" class="hidden text-center">
                                <div class="my-4">
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
                                signature<span class="text-warning">*</span></span>
                            <div class="d-flex text-align-center justify-content-center">
                                <div class="col-cm-12 mx-5">
                                    <input type="radio" id="uploadSignatureField" name="signature" value="upload"
                                        onchange="toggleSignatureFields(this);" required
                                        oninvalid="onInvalidInput('uploadSignatureField')"
                                        oninput="hideError('uploadSignatureField')">
                                    <label for="uploadSignatureField" class="signradio">
                                        <img src="../image/image.png" class="imgsi" alt="Option 1">
                                        Upload
                                    </label>
                                </div>
                                <div class="col-cm-12 mx-5">
                                    <input type="radio" id="liveSignatureField" name="signature" value="live"
                                        onchange="toggleSignatureFields(this);" required
                                        oninvalid="onInvalidInput('liveSignatureField')"
                                        oninput="hideError('uploadSignatureField')">
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
                                    class="form-control border-success border-2 border-opacity-50 rounded-0"
                                    id="uploadFileSignature" onchange="previewImage(this,'imagePreviewcs')"
                                    oninvalid="onInvalidInput('uploadFileSignature')"
                                    accept="image/jpeg, image/jpg, image/png"
                                    oninput="hideError('uploadFileSignature')">
                                <div class="border rounded-lg text-center p-3" id="imagePreviewcs"
                                    style="display: none;">
                                    <div id="croppedImageContainer">
                                        <img id="croppedImage" class="img-fluid">
                                    </div>
                                </div>
                                <span class="aerror" id="uploadFileSignatureError"></span>
                            </div>




                            <div id="liveSignatureDiv" class="hidden text-center">
                                <h6 class="text-warning my-2">Draw your signature below</h6>
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

                    <hr>
                    <h1 class="text-center my-5 text-secondary">Correction Details</h1>




                    <div class="row justify-content-center shadow-lg">
                        <div class="col-md-4 col-sm-12 p-4">
                            <div class="row justify-content-center ">
                                <div
                                    class="col-md-1 col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                                    <input type="checkbox" name="option" value="one" id="cname"
                                        onclick="showInputs(this)" class="custom-checkbox">
                                </div>
                                <div
                                    class="col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                                    <label for="cname">Canditate Name Correction</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 p-4">
                            <div class="row justify-content-center ">
                                <div
                                    class="col-md-1 col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                                    <input type="checkbox" class="custom-checkbox" name="option" id="fname" value="two"
                                        onclick="showInputs(this)">
                                </div>
                                <div
                                    class="col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                                    <label for="fname">Father Name Correction</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 p-4">
                            <div class="row justify-content-center ">
                                <div
                                    class="col-md-1 col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                                    <input type="checkbox" name="option" id="dobs" value="three"
                                        onclick="showInputs(this)" class="custom-checkbox">
                                </div>
                                <div
                                    class="col-md-6 col-sm-12  d-flex flex-column justify-content-center align-items-center text-center">
                                    <label for="dobs">DOB Correction</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>



            <div class="input-group" id="input-one" style="display: none;">
                <div class="row p-4">
                    <div class="col-md-6 col-sm-12 p-2">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="update_firstName" id="firstname"
                                class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                placeholder="" oninvalid="onInvalidInput('firstname')" oninput="hideError('firstname')">
                            <label for="newname" class="text-secondary text-opacity-50">First Name</label>
                        </div>
                        <span class="aerror" id="firstnameError"></span>
                    </div>
                    <div class="col-md-6 col-sm-12 p-2">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="update_lastName" id="lastname"
                                class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                placeholder="" oninvalid="onInvalidInput('lastname')" oninput="hideError('lastname')">
                            <label for="newname" class="text-secondary text-opacity-50">Last Name</label>
                        </div>
                        <span class="aerror" id="lastnameError"></span>
                    </div>
                    <div class="col-md-6 col-sm-12 p-2 mb-5">
                        <span class="text-secondary text-center">Upload Name Proof (Driving License, Passport,
                            Ration Card, Voters ID, 10th Mark Sheet, Birth Certificate) Format Supported by
                            <span class="text-danger"> .pdf</span></span>
                        <input type="file"
                            class="form-control form-control-lg border border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                            id="nameProof" name="update_name_doc" accept=".pdf, .doc, .docx"
                            oninvalid="onInvalidInput('nameProof')" oninput="hideError('nameProof')">
                    </div>
                    <span class="aerror" id="nameProofError"></span>
                </div>
            </div>

            <div class="input-group" id="input-two" style="display: none;">
                <div class="row border-2 p-4 mb-5">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-floating mb-3 mt-5">
                            <input type="text" name="update_fatherName" id="fathername"
                                class="form-control border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                placeholder="" oninvalid="onInvalidInput('fathername')"
                                oninput="hideError('fathername')">
                            <label for="newname" class="text-secondary text-opacity-50">Father Name (Full
                                Name)</label>
                        </div>
                        <span class="aerror" id="fathernameError"></span>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <span class="text-secondary">Upload Father Name Proof (Driving License, Passport, Ration
                            Card, Voters ID, 10th Mark Sheet, Birth Certificate) Format Supported by <span
                                class="text-danger"> .pdf</span></span>
                        <input type="file"
                            class="form-control form-control-lg border border-success border-2 border-opacity-50 shadow-lg rounded-0"
                            id="fatherProof" name="update_father_name_doc" accept=".pdf, .doc, .docx"
                            oninvalid="onInvalidInput('fatherProof')" oninput="hideError('fatherProof')">
                        <span class="aerror" id="fatherProofError"></span>
                    </div>
                </div>
            </div>

            <div class="input-group" id="input-three" style="display: none;">
                <div class="row mb-5 p-4">
                    <div class="col-md-6 col-sm-12">
                        <div class="form mt-4">
                            <div class="my-2">
                                <span class="text-success">Enter DOB</span>
                            </div>
                            <input type="date" name="update_dob"
                                class="form-control border border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                                id="dob" oninvalid="onInvalidInput('dob')" oninput="hideError('dob')">
                        </div>
                        <span class="aerror" id="dobError"></span>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <span class="text-secondary">Upload DOB Proof (Driving License, Passport, Ration Card,
                            Voters ID, 10th Mark Sheet, Birth Certificate) Format Supported by <span
                                class="text-danger"> .pdf</span></span>
                        <input type="file"
                            class="form-control form-control-lg border border-success border-2 border-opacity-50 rounded-0 shadow-lg"
                            id="dobProof" name="update_dob_doc" accept=".pdf, .doc, .docx"
                            oninvalid="onInvalidInput('dobProof')" oninput="hideError('dobProof')">
                        <span class="aerror" id="dobProofError"></span>
                    </div>
                </div>
            </div>

            <input type="hidden" name="update_pan_recept_num">

            <div class="ps-5" style="display: block;" id="final">
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

            <div class="text-center p-5">
                <input type="submit" class="btn btn-outline-success border border-2 border-success rounded-0"
                    name="update_pan_submit" value="Submit the Application">
            </div>
            </form>

        </div>


        </div>
    </span>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>
    <script>

        // -------------------------------------------------------------------------------------

        function togglePictureFields(radio) {
            var uploadDiv = document.getElementById('uploadPictureField');
            var liveDiv = document.getElementById('livePictureField');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFieldsp('livePictureInput');
                setFieldRequiredp('uploadFilep', true);
                setFieldRequiredp('livePictureInput', false);
                addNameAttribute('uploadFilep', 'update_profile_Picture');
                removeNameAttribute('livePictureInput', 'update_profile_Pictures');
                clearSnapshotCustom();
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFieldsp('uploadFilep');
                setFieldRequiredp('uploadFilep', false);
                setFieldRequiredp('livePictureInput', true);
                addNameAttribute('livePictureInput', 'update_profile_Pictures');
                removeNameAttribute('uploadFilep', 'update_profile_Picture');
            }
        }
        function setFieldRequiredp(id, isRequired) {
            document.getElementById(id).required = isRequired;
        }
        function clearFieldsp(id) {
            var inputField = document.getElementById(id);
            inputField.value = '';
            clearPreviewImage('imagePreviewcp');
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
        // -------------------------------------------------------------------------------------

        function toggleSignatureFields(radio) {
            var uploadDiv = document.getElementById('uploadSignatureDiv');
            var liveDiv = document.getElementById('liveSignatureDiv');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFields('liveSignatureInputField');
                setFieldRequired('uploadFileSignature', true);
                setFieldRequired('liveSignatureInputField', false);
                addNameAttribute('uploadFileSignature', 'update_signature_Image');
                removeNameAttribute('liveSignatureInputField', 'update_signature_Images');
                clearSignature();
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFileSignature');
                setFieldRequired('uploadFileSignature', false);
                setFieldRequired('liveSignatureInputField', true);
                addNameAttribute('liveSignatureInputField', 'update_signature_Images');
                removeNameAttribute('uploadFileSignature', 'update_signature_Image');
            }
        }
        function setFieldRequired(id, isRequired) {
            document.getElementById(id).required = isRequired;
        }
        function clearFields(id) {
            var inputField = document.getElementById(id);
            inputField.value = '';
            clearPreviewsign('imagePreviewcs');
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
        // -----------------------------------------------------------------------------------------


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

        function showInputs(checkbox) {
            const selectedGroup = document.getElementById('input-' + checkbox.value);
            if (checkbox.checked) {
                selectedGroup.style.display = 'block';
                const inputs = selectedGroup.querySelectorAll('input');
                inputs.forEach(input => {
                    input.setAttribute('required', 'required');
                });
            } else {
                selectedGroup.style.display = 'none';
                const inputs = selectedGroup.querySelectorAll('input');
                inputs.forEach(input => {
                    input.value = '';
                    input.removeAttribute('required');
                });
            }
        }

        document.getElementById('myForm').addEventListener('submit', function (event) {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            let atLeastOneChecked = false;
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    atLeastOneChecked = true;
                }
            });

            if (!atLeastOneChecked) {
                event.preventDefault();
                alert('Please check at least one checkbox.');
            }
        });
        // -------------------------------------------------------------------------------------------



        function previewImage(input, previewId) {
            var preview = document.getElementById(previewId);
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


        // ---------------------------------------------------------------------------------------------

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

        function hideError(inputId) {
            const errorElement = document.getElementById(inputId + 'Error');
            errorElement.style.display = 'none';
        }
        // -----------------------------------------------------------------------------------------------

        document.getElementById('upoldpannum').addEventListener('input', function (e) {
            let value = e.target.value.toUpperCase();
            value = value.replace(/[^A-Z0-9]/g, '');
            if (value.length > 10) {
                value = value.slice(0, 10);
            }
            e.target.value = value;
        });
        // ----------------------------------------------------------------------------------------

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

        // ----------------------------------------------------------------------------------------

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

        // ----------------------------------------------------------------------------------------

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
        // ----------------------------------------------------------------------------------------
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
        // ----------------------------------------------------------------------------------------
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
        // ---------------------------------------------------------------------------
        document.getElementById('myForm').addEventListener('submit', function (event) {
            document.getElementById('loader').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        });
    </script>
</body>

</html>