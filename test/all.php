<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <form id="myForm" action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="city1">City:</label>
        <input type="text" id="city1" name="city1" required><br><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br><br>

        <label for="city2">City:</label>
        <input type="text" id="city2" name="city2" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required onchange="checkAge()"><br><br>

        <div id="additionalFields" class="hidden">
            <label>Select a parent:</label><br>
            <input type="radio" id="mother" name="parentMother" value="mother">
            <label for="mother">Mother</label><br>
            <input type="radio" id="father" name="parentFather" value="father">
            <label for="father">Father</label><br><br>

            <label for="file1">File 1:</label>
            <input type="file" id="file1" name="fmAadharFront"><br><br>

            <label for="file2">File 2:</label>
            <input type="file" id="file2" name="fmAadharFront"><br><br>

            <label>Select a Signature:</label><br>
            <input type="radio" id="uploadSignature" value="upload" onchange="toggleSignatureFields(this);">
            <label for="uploadSignature">Upload</label><br>
            <input type="radio" id="liveSignature" value="live" onchange="toggleSignatureFields(this);">
            <label for="liveSignature">Live</label><br><br>

            <div id="uploadSignatureField" class="hidden">
                <label for="uploadFile">Upload Signature File:</label>
                <input type="file" id="uploadFile" name="uploadFile">
            </div>
            <div id="liveSignatureField" class="hidden">
                <label for="liveSignatureInput">Live Signature:</label>
                <input type="text" id="liveSignatureInput" name="liveSignature">
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
            <input type="text" id="extraInput" name="extraInput">
        </div>
        <br>

        <label for="file3">File 3:</label>
        <input type="file" id="file3" name="file3" required><br><br>

        <label for="file4">File 4:</label>
        <input type="file" id="file4" name="file4" required><br><br>

        <label>Select picture:</label><br>
        <input type="radio" id="uploadPicture" name="picture" value="upload" onchange="togglePictureFields(this);" required>
        <label for="uploadPicture">Upload</label><br>
        <input type="radio" id="livePicture" name="picture" value="live" onchange="togglePictureFields(this);" required>
        <label for="livePicture">Live</label><br><br>
        <div id="uploadPictureField" class="hidden">
            <label for="uploadFilep">Upload Picture File:</label>
            <input type="file" id="uploadFilep" name="uploadFilep">
        </div>
        <div id="livePictureField" class="hidden">
            <label for="livePictureInput">Live Picture:</label>
            <input type="text" id="livePictureInput" name="livePictureInput">
        </div>

        <label>Select Signature:</label><br>
        <input type="radio" id="uploadSignatureField" name="signature" value="upload" onchange="toggleSignatureFields(this);" required>
        <label for="uploadSignatureField">Upload</label><br>
        <input type="radio" id="liveSignatureField" name="signature" value="live" onchange="toggleSignatureFields(this);" required>
        <label for="liveSignatureField">Live</label><br><br>
        <div id="uploadSignatureDiv" class="hidden">
            <label for="uploadFileSignature">Upload Signature File:</label>
            <input type="file" id="uploadFileSignature" name="uploadFileSignature">
        </div>
        <div id="liveSignatureDiv" class="hidden">
            <label for="liveSignatureInputField">Live Signature:</label>
            <input type="text" id="liveSignatureInputField" name="liveSignatureInputField">
        </div>

        <input type="submit" value="Submit">
    </form>

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

        function toggleSignatureFields(radio) {
            var uploadDiv = document.getElementById('uploadSignatureDiv');
            var liveDiv = document.getElementById('liveSignatureDiv');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFields('liveSignatureInputField');
                setFieldRequired('uploadFileSignature', true);
                setFieldRequired('liveSignatureInputField', false);
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFileSignature');
                setFieldRequired('uploadFileSignature', false);
                setFieldRequired('liveSignatureInputField', true);
            }
        }

        function setFieldRequired(id, isRequired) {
            document.getElementById(id).required = isRequired;
        }

        function clearFields(id) {
            var inputField = document.getElementById(id);
            inputField.value = '';
        }

        function toggleInputField(radio) {
            var extraField = document.getElementById('extraField');
            var extraInput = document.getElementById('extraInput');

            if (radio.value === 'female') {
                extraField.classList.remove('hidden');
                extraInput.required = true;
            } else {
                extraField.classList.add('hidden');
                extraInput.required = false;
                extraInput.value = '';
            }
        }

        function togglePictureFields(radio) {
            var uploadDiv = document.getElementById('uploadPictureField');
            var liveDiv = document.getElementById('livePictureField');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFields('livePictureInput');
                setFieldRequired('uploadFilep', true);
                setFieldRequired('livePictureInput', false);
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFilep');
                setFieldRequired('uploadFilep', false);
                setFieldRequired('livePictureInput', true);
            }
        }
    </script>
</body>

</html>






=============================================================================







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hidden {
            display: none;
        }

        .input-group {
            display: none;
        }
    </style>
</head>

<body>

    <form id="myForm" action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="city1">City:</label>
        <input type="text" id="city1" name="city1" required><br><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br><br>

        <label for="area">Area:</label>
        <input type="text" id="area" name="area" required><br><br>

        <label for="file3">File 3:</label>
        <input type="file" id="file3" name="file3" required><br><br>

        <label for="file4">File 4:</label>
        <input type="file" id="file4" name="file4" required><br><br>

        <label>Select picture:</label><br>
        <input type="radio" id="uploadPicture" name="picture" value="upload" onchange="togglePictureFields(this);"
            required>
        <label for="uploadPicture">Upload</label><br>
        <input type="radio" id="livePicture" name="picture" value="live" onchange="togglePictureFields(this);" required>
        <label for="livePicture">Live</label><br><br>

        <div id="uploadPictureField" class="hidden">
            <label for="uploadFilep">Upload Picture File:</label>
            <input type="file" id="uploadFilep" name="uploadFilep">
        </div>
        <div id="livePictureField" class="hidden">
            <label for="livePictureInput">Live Picture:</label>
            <input type="text" id="livePictureInput" name="livePictureInput">
        </div>

        <label>Select Signature:</label><br>
        <input type="radio" id="uploadSignature" name="signature" value="upload" onchange="toggleSignatureFields(this);"
            required>
        <label for="uploadSignature">Upload</label><br>
        <input type="radio" id="liveSignature" name="signature" value="live" onchange="toggleSignatureFields(this);"
            required>
        <label for="liveSignature">Live</label><br><br>

        <div id="uploadSignatureDiv" class="hidden">
            <label for="uploadFileSignature">Upload Signature File:</label>
            <input type="file" id="uploadFileSignature" name="uploadFileSignature">
        </div>
        <div id="liveSignatureDiv" class="hidden">
            <label for="liveSignatureInputField">Live Signature:</label>
            <input type="text" id="liveSignatureInputField" name="liveSignatureInputField">
        </div>




        <label>
            <input type="radio" name="option" value="one" onclick="showInputs(this)" required> One
        </label>
        <label>
            <input type="radio" name="option" value="two" onclick="showInputs(this)" required> Two
        </label>
        <label>
            <input type="radio" name="option" value="three" onclick="showInputs(this)" required> Three
        </label>

        <div id="input-one" class="input-group">
            <input type="text" id="text-one" placeholder="Text for One">
            <input type="file" id="file-one">
        </div>
        <div id="input-two" class="input-group">
            <input type="text" id="text-two" placeholder="Text for Two">
            <input type="file" id="file-two">
        </div>
        <div id="input-three" class="input-group">
            <input type="text" id="text-three" placeholder="Text for Three">
            <input type="file" id="file-three">
        </div>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        function clearFields(fieldId) {
            document.getElementById(fieldId).value = '';
        }

        function setFieldRequired(fieldId, isRequired) {
            document.getElementById(fieldId).required = isRequired;
        }

        function toggleSignatureFields(radio) {
            var uploadDiv = document.getElementById('uploadSignatureDiv');
            var liveDiv = document.getElementById('liveSignatureDiv');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFields('liveSignatureInputField');
                setFieldRequired('uploadFileSignature', true);
                setFieldRequired('liveSignatureInputField', false);
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFileSignature');
                setFieldRequired('uploadFileSignature', false);
                setFieldRequired('liveSignatureInputField', true);
            }
        }

        function togglePictureFields(radio) {
            var uploadDiv = document.getElementById('uploadPictureField');
            var liveDiv = document.getElementById('livePictureField');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFields('livePictureInput');
                setFieldRequired('uploadFilep', true);
                setFieldRequired('livePictureInput', false);
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFilep');
                setFieldRequired('uploadFilep', false);
                setFieldRequired('livePictureInput', true);
            }
        }


        function showInputs(radio) {
            // Hide all input groups and clear their values
            const inputGroups = document.querySelectorAll('.input-group');
            inputGroups.forEach(group => {
                group.style.display = 'none';
                const inputs = group.querySelectorAll('input');
                inputs.forEach(input => {
                    input.value = '';
                    input.removeAttribute('required');
                });
            });

            // Show the selected input group and set required attributes
            const selectedGroup = document.getElementById('input-' + radio.value);
            selectedGroup.style.display = 'block';
            const inputs = selectedGroup.querySelectorAll('input');
            inputs.forEach(input => {
                input.setAttribute('required', 'required');
            });
        }
    </script>

</body>

</html>



-------------------------------------------------------------------------------------


            <!-- <div class="container-fluid">
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
                    <input type="radio" id="fmlive" name="signature" value="fmlive"
                        onchange="toggleFmSignatureFields(this);" required>
                    <label for="fmlive">Live</label><br><br>

                    <div id="fmuploaddiv" class="hidden">
                        <label for="fmuploadsign">Upload Signature File:</label>
                        <input type="file" id="fmuploadsign">
                    </div>
                    <div id="fmlivediv" class="hidden">
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
                <input type="radio" id="uploadPicture" name="picture" value="upload"
                    onchange="togglePictureFields(this);" required>
                <label for="uploadPicture">Upload</label><br>
                <input type="radio" id="livePicture" name="picture" value="live" onchange="togglePictureFields(this);"
                    required>
                <label for="livePicture">Live</label><br><br>
                <div id="uploadPictureField" class="hidden">
                    <label for="uploadFilep">Upload Picture File:</label>
                    <input type="file" id="uploadFilep">
                </div>
                <div id="livePictureField" class="hidden">
                    <h6 class="header3-custom text-warning">Take a selfie</h6>
                    <div class="d-flex text-align-center justify-content-center">
                        <div class="selfie-container-custom">
                            <video id="videoCustom" class="video-element-custom" width="320" height="320" autoplay
                                style="border-radius: 100%;"></video>
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
        </div> -->


----------------------------------------------------------------------

<!-- <div class="container-fluid">
<form action="../forms_datas.php" method="post" enctype="multipart/form-data" id="myForm">

    <label for="name">OLD pan:</label>
    <input type="file" id="update_old_pan_doc" name="update_old_pan_doc" required><br><br>


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
    <input type="radio" id="uploadPicture" name="picture" value="upload"
        onchange="togglePictureFields(this);" required>
    <label for="uploadPicture">Upload</label><br>
    <input type="radio" id="livePicture" name="picture" value="live" onchange="togglePictureFields(this);"
        required>
    <label for="livePicture">Live</label><br><br>
    <div id="uploadPictureField" class="hidden">
        <label for="uploadFilep">Upload Picture File:</label>
        <input type="file" id="uploadFilep">
    </div>

    <div id="livePictureField" class="hidden">
        <h6 class="header3-custom text-warning">Take a selfie</h6>
        <div class="d-flex text-align-center justify-content-center">
            <div class="selfie-container-custom">
                <video id="videoCustom" class="video-element-custom" width="320" height="320" autoplay
                    style="border-radius: 100%;"></video>
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
</div> -->