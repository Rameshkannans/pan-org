<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Simple Form</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
    <style>
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
    </style>
</head>

<body>

    <form id="myForm" action="../forms_datas.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="new_call_name" required><br><br>

        <label for="age">AAdhar:</label>
        <input type="text" id="age" name="new_aadharNumber" required><br><br>

        <label for="city1">Mobile:</label>
        <input type="text" id="city1" name="new_mobileNumber" required><br><br>

        <label for="state">Email:</label>
        <input type="text" id="state" name="new_email" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="new_pan_dob" required onchange="checkAge()"><br><br>

        <div id="additionalFields" class="hidden">
            <label>Select a parent:</label><br>
            <input type="radio" id="mother" name="new_choose_fm" value="mother">
            <label for="mother">Mother</label><br>
            <input type="radio" id="father" name="new_choose_fm" value="father">
            <label for="father">Father</label><br><br>

            <label for="file1">File 1:</label>
            <input type="file" id="file1" name="fm_new_pan_aadhar_front"><br><br>

            <label for="file2">File 2:</label>
            <input type="file" id="file2" name="fm_new_pan_aadhar_back"><br><br>













            <label>Select parent Signature:</label><br>
            <input type="radio" id="fmupload" name="signature" value="fmupload"
                onchange="toggleFmSignatureFields(this);" required>
            <label for="fmupload">Upload</label><br>
            <input type="radio" id="fmlive" name="signature" value="fmlive" onchange="toggleFmSignatureFields(this);"
                required>
            <label for="fmlive">Live</label><br><br>
            <div id="fmuploaddiv" class="hidden">
                <label for="fmuploadsign">Upload Signature File:</label>
                <input type="file" id="fmuploadsign">
            </div>
            <div id="fmlivediv" class="hidden">
                <!-- <label for="liveSignatureInputField">Live Signature:</label>
                <input type="file" id="liveSignatureInputField"> -->
                <h6 class="text-warning">Draw your signature below</h6>
                <canvas id="fmcanvas" class="cansize"></canvas>
                <br>
                <input type="hidden" id="fmlivesign" accept="image/*">
                <div class="my-2">
                    <button class="btn btn-danger btn-sm rounded-0" onclick="clearFmSignature()">Clear</button>
                </div>
            </div>













        </div>

        <label>
            <input type="radio" name="gender" value="male" required onclick="toggleInputField(this)"> Male
        </label>
        <label>
            <input type="radio" name="gender" value="female" onclick="toggleInputField(this)"> Female
        </label>
        <label>
            <input type="radio" name="gender" value="other" onclick="toggleInputField(this)"> Other
        </label>

        <div id="extraField" class="hidden">
            <label for="extraInput">Please specify:</label>
            <input type="text" id="extraInput">
        </div>
        <br>

        <label for="file3">File 3:</label>
        <input type="file" id="file3" name="new_pan_aadhar_front" required><br><br>

        <label for="file4">File 4:</label>
        <input type="file" id="file4" name="new_pan_aadhar_back" required><br><br>











        <label>Select picture:</label><br>
        <input type="radio" id="uploadPicture" name="picture" value="upload" onchange="togglePictureFields(this);"
            required>
        <label for="uploadPicture">Upload</label><br>
        <input type="radio" id="livePicture" name="picture" value="live" onchange="togglePictureFields(this);" required>
        <label for="livePicture">Live</label><br><br>
        <div id="uploadPictureField" class="hidden">
            <label for="uploadFilep">Upload Picture File:</label>
            <input type="file" id="uploadFilep">
        </div>
        <div id="livePictureField" class="hidden">
            <!-- <label for="livePictureInput">Live Picture:</label>
            <input type="file" id="livePictureInput"> -->
            <h6 class="header3-custom text-warning">Take a selfie</h6>
            <div class="d-flex text-align-center justify-content-center">
                <div class="selfie-container-custom">
                    <video id="videoCustom" class="video-element-custom" width="320" height="320" autoplay
                        style="border-radius: 100%;"></video>
                    <canvas id="canvasCustom" class="canvas-element-custom cam_size" width="320" height="320"></canvas>
                </div>
            </div>
            <div class="my-2">
                <button class="btn btn-warning btn-sm rounded-0" onclick="takeSnapshotCustom()">Take Snapshot</button>
                <!-- <button class="btn btn-danger btn-sm rounded-0" onclick="clearSnapshotCustom()">Clear Snapshot</button> -->
            </div>
            <div id="resultsCustom"></div>
            <input type="hidden" id="livePictureInput" accept="image/*">
        </div>









        <label>Select Signature:</label><br>
        <input type="radio" id="uploadSignatureField" name="signature" value="upload"
            onchange="toggleSignatureFields(this);" required>
        <label for="uploadSignatureField">Upload</label><br>
        <input type="radio" id="liveSignatureField" name="signature" value="live"
            onchange="toggleSignatureFields(this);" required>
        <label for="liveSignatureField">Live</label><br><br>
        <div id="uploadSignatureDiv" class="hidden">
            <label for="uploadFileSignature">Upload Signature File:</label>
            <input type="file" id="uploadFileSignature">
        </div>
        <div id="liveSignatureDiv" class="hidden">
            <!-- <label for="liveSignatureInputField">Live Signature:</label>
            <input type="file" id="liveSignatureInputField"> -->
            <h6 class="text-warning">Draw your signature below</h6>
            <canvas id="canvas" class="cansize"></canvas>
            <br>
            <input type="hidden" id="liveSignatureInputField" accept="image/*">
            <div class="my-2">
                <button class="btn btn-danger btn-sm rounded-0" onclick="clearSignature()">Clear</button>
            </div>
        </div>










        <input type="hidden" name="new_pan_recept_num">
        <input type="submit" value="Submit" name="new_pan_submit">
    </form>


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











    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-a7M8NThdh8Q+qk5IQN92L/mqs5Dh5G+RTq9RZF3V9b4ktz2GXAwC1NCTK+4P2rsz"
        crossorigin="anonymous"></script>
</body>

</html>