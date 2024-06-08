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

        .selector {
            color: green;
            font-weight: 700;
        }

        .hiddens {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <marquee behavior="scroll" direction="left"><span class="text-warning">Apply Update Pan Card in Easy Way</span>
        </marquee>
        <div class="row justify-content-between">


            <div class="col-md-3 shadow-lg p-4 rounded-4 bg-info">

            </div>



            <div class="col-md-9 p-3">
                <a href="../index.php"> <button class="btn btn-danger mb-5 btn-sm">
                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            viewBox="0 0 1024 1024">
                            <path
                                d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                            </path>
                        </svg>
                        <span>Back</span>
                    </button></a>
                <form action="../forms_datas.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-evenly my-2 ">
                        <div class="col-md-4 p-2 my-1 ">
                            <div class="form mt-3 mb-3">
                                <label for="oldpan" class="mb-2 selector">Upload old Pan Card</label>
                                <input type="file" class="form-control border-info rounded-0" id="oldpan"
                                    name="update_old_pan_doc" accept=".pdf,.doc,.docx" multiple required>
                            </div>
                        </div>
                        <div class="col-md-4 p-2 mt-3">
                            <div class="form-floating mb-3 mt-4">
                                <input type="text" class="form-control border-info rounded-0" id="upoldpannum"
                                    name="update_old_pan_num" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"
                                    title="The PAN number must be 10 characters long, starting with five uppercase letters, followed by four digits, and ending with one uppercase letter."
                                    maxlength="10" required>
                                <label for="upoldpannum" class="text-secondary">Old PAN Card Number</label>
                            </div>


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
                                    oninput="validateInput('updatename')" pattern="[a-zA-Z\s]+" id="updatename"
                                    placeholder="Enter Full Name" name="update_call_name" required>
                                <label for="updatename" class="text-secondary">Full Name (As per Aadhar)</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control border-info rounded-0" id="aadharNumber"
                                    placeholder="Enter Aadhar Number" name="update_aadharNumber"
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
                                    placeholder="Enter Mobil Number" name="update_mobileNumber"
                                    oninput="this.value = this.value.replace(/[^6789\d]/g, '');" pattern="[6789]\d{9}"
                                    title="Please enter a 10-digit number starting with 6, 7, 8, or 9" maxlength="10"
                                    required>
                                <label for="mobileNumber" class="text-secondary">Mobil Number (As per Aadhar)</label>
                            </div>
                            <div id="messagemobile"></div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="form-floating mt-3 mb-3">
                                <input type="email" class="form-control border-info rounded-0" id="updateemail"
                                    placeholder="Enter email" name="update_email">
                                <label for="updateemail" class="text-secondary">Email (Optional)</label>
                            </div>
                        </div>
                    </div>





                    <div class="row gap-5 justify-content-center my-5">
                        <div class="col-md-5 text-center p-2 border border-warning border-2">
                            <h6 class="my-4 text-info">Upload Aadhar Front Side</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="update_pan_aadhar_front" class="form-control form-control-lg"
                                    id="aadharfront" accept="image/*" required>
                            </div>
                            <div class="border rounded-lg text-center p-3">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview3" alt="Preview" />
                            </div>
                        </div>
                        <div class="col-md-5 text-center p-2 border border-warning border-2">
                            <h6 class="my-4 text-info">Upload Aadhar Front Side</h6>
                            <div class="input-group mb-3">
                                <input type="file" name="update_pan_aadhar_back" class="form-control form-control-lg"
                                    id="aadharback" accept="image/*" required>
                            </div>
                            <div class="border rounded-lg text-center p-3">
                                <img src="https://via.placeholder.com/140?text=IMAGE" width="20%" height="20%"
                                    class="img-fluid" id="preview4" alt="Preview" />
                            </div>
                        </div>
                    </div>






                    <div class="row justify-content-evenly my-5">
                        <div class="col-md-5 p-2 text-center border border-info my-1">
                            <span class="selector">Please upload photo</span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="upload" name="photoOption"
                                        value="normal" onclick="showUploadInput('normal')" required>
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
                                                accept="image/*" required>
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
                                <input type="hidden" id="update_profile_Picture" value="" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-5 p-2 text-center border border-info my-1">
                            <span class="selector">Please upload signature</span>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="upsig" name="sign" value="normals"
                                        onclick="showUploadInputSignature('normals')" required>
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
                                                accept="image/*" required>
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
                                <input type="hidden" id="signature_input" accept="image/*">
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


                    <hr>
                    <h2 class="text-center text-warning">Correction details</h2>



                    <div class="text-center justify-content-center d-flex my-5">
                        <div class="mx-5">
                            <label>
                                <input type="checkbox" class="form-check-input rounded-5" id="checkbox1"
                                    onclick="toggleInput(this, 'inputs1')"> Your Name
                            </label>
                        </div>
                        <div class="mx-5">
                            <label>
                                <input type="checkbox" class="form-check-input rounded-5" id="checkbox2"
                                    onclick="toggleInput(this, 'inputs2')"> Father Name
                            </label>
                        </div>
                        <div class="mx-5">
                            <label>
                                <input type="checkbox" class="form-check-input rounded-5" id="checkbox3"
                                    onclick="toggleInput(this, 'inputs3')"> Date of Birth
                            </label>
                        </div>
                    </div>




                    <div class="hiddens" id="inputs1">
                        <div class="row">
                            <span style="font-weight: 900;" class="selector">Name correction</span>
                            <div class="col-md-6 p-2">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('firstName')" pattern="[a-zA-Z\s]+" id="firstName"
                                        placeholder="Enter Full Name" name="update_firstName">
                                    <label for="firstName" class="text-secondary">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('middleName')" pattern="[a-zA-Z\s]+" id="middleName"
                                        placeholder="Enter Full Name" name="update_middleName">
                                    <label for="middleName" class="text-secondary">Middle Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('lastName')" pattern="[a-zA-Z\s]+" id="lastName"
                                        placeholder="Enter Full Name" name="update_lastName">
                                    <label for="lastName" class="text-secondary">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form mt-2">
                                    <span class="text-secondary">Upload Name Proof</span>
                                    <input type="file" class="form-control border-info rounded-0" id="yourNameDocument"
                                        name="update_name_doc" accept=".pdf,.doc,.docx">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hiddens" id="inputs2">
                        <div class="row my-5">
                            <span style="font-weight: 900;" class="selector">Father's Name</span>
                            <div class="col-md-6 p-2">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control border-info rounded-0"
                                        oninput="validateInput('fatherName')" pattern="[a-zA-Z\s]+" id="fatherName"
                                        placeholder="Enter Full Name" name="update_fatherName">
                                    <label for="firstName" class="text-secondary">Father's Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form mt-2">
                                    <span class="text-secondary">Upload Father's Proof</span>
                                    <input type="file" class="form-control border-info rounded-0"
                                        id="fatherNameDocument" name="update_father_name_doc" accept=".pdf,.doc,.docx">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hiddens" id="inputs3">
                        <div class="row my-5">
                            <span style="font-weight: 900;" class="selector">Date Of Birth</span>
                            <div class="col-md-6 p-2">
                                <div class="form mt-3">
                                    <span class="text-secondary">Enter DOB</span>
                                    <input type="date" class="form-control border-info rounded-0" id="dob"
                                        name="update_dob">
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="form mt-3">
                                    <span class="text-secondary">Upload DOB Proof</span>
                                    <input type="file" class="form-control border-info rounded-0" id="dobDocument"
                                        name="update_dob_doc" accept=".pdf,.doc,.docx">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="text-center" id="final" style="display: block;">
                        <input class="form-check-input" type="checkbox" id="confirm" name="option1" value="something"
                            required>
                        <label class="form-check-label text-primary" for="confirm" style="font-weight: 500;">If you
                            given deatais are
                            correct ,
                            please click the check box
                        </label>
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
    <script>



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
            const input = inputField.value;
            const regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(input)) {
                inputField.value = input.replace(/[^a-zA-Z\s]/g, '');
            }
        }

        var canvas = document.getElementById('canvas');
        var signaturePad = new SignaturePad(canvas);
        var signatureInput = document.getElementById('signature_input');
        function clearSignature() {
            event.preventDefault();
            signaturePad.clear();
        }
        function saveSignature() {
            event.preventDefault();
            if (signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
            } else {
                var dataURL = signaturePad.toDataURL();
                signatureInput.value = dataURL;
                document.getElementById('display-signature').setAttribute('src', dataURL);
            }
        }

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
            document.getElementById('update_profile_Picture').value = dataUriCustom;
            const imgCustom = new Image();
            imgCustom.onload = function () {
                contextCustom.fillStyle = '#ffffff';
                contextCustom.fillRect(0, 0, canvasCustom.width, canvasCustom.height);
                contextCustom.drawImage(imgCustom, 0, 0, canvasCustom.width, canvasCustom.height);
                const resultsDivCustom = document.getElementById('resultsCustom');
                resultsDivCustom.innerHTML = '<h6>Capture Picture</h6>';
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