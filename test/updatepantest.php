<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>

<body>

    <form action="../forms_datas.php" method="post" enctype="multipart/form-data" id="myForm">

        <label for="name">OLD pan:</label>
        <input type="file" id="update_old_pan_doc" name="name" required><br><br>


        <label for="name">OLD pan NUM:</label>
        <input type="text" id="update_old_pan_num" name="update_old_pan_num" required><br><br>

        <label for="age">Name:</label>
        <input type="text" id="age" name="update_call_name" required><br><br>

        <label for="city1">Aadhar:</label>
        <input type="text" id="city1" name="update_aadharNumber" required><br><br>

        <label for="state">Mobile:</label>
        <input type="number" id="state" name="update_mobileNumber" required><br><br>

        <label for="area">Email:</label>
        <input type="email" id="area" name="update_email" required><br><br>

        <label for="file3">File 3:</label>
        <input type="file" id="file3" name="update_pan_aadhar_front" required><br><br>

        <label for="file4">File 4:</label>
        <input type="file" id="file4" name="update_pan_aadhar_back" required><br><br>











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


        <label>
            <input type="checkbox" name="option" value="one" onclick="showInputs(this)"> One
        </label>
        <label>
            <input type="checkbox" name="option" value="two" onclick="showInputs(this)"> Two
        </label>
        <label>
            <input type="checkbox" name="option" value="three" onclick="showInputs(this)"> Three
        </label>

        <div id="input-one" class="input-group">
            <input type="text" id="text-one-1" name="update_firstName" placeholder="Text One 1">
            <input type="text" id="text-one-2" name="update_middleName" placeholder="Text One 2">
            <input type="text" id="text-one-3" name="update_lastName" placeholder="Text One 3">
            <input type="file" name="update_name_doc" id="file-one">
        </div>

        <div id="input-two" class="input-group">
            <input type="text" name="update_fatherName" id="text-two" placeholder="Text for Two">
            <input type="file" name="update_father_name_doc" id="file-two">
        </div>

        <div id="input-three" class="input-group">
            <input type="text" name="update_dob" id="text-three" placeholder="Text for Three">
            <input type="file" name="update_dob_doc" id="file-three">
        </div>

        <input type="submit" name="update_pan_submit" value="Submit">
    </form>















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

        // Initially hide all input groups
        document.addEventListener('DOMContentLoaded', () => {
            const inputGroups = document.querySelectorAll('.input-group');
            inputGroups.forEach(group => {
                group.style.display = 'none';
            });
        });
    </script>

</body>

</html>