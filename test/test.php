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
    <form id="myForm"  action="../forms_datas.php" method="post" enctype="multipart/form-data">
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

            <label>Select a Signature:</label><br>
            <input type="radio" id="uploadSignature" name="signature" value="upload"
                onchange="toggleSignatureFieldsfm(this);">
            <label for="uploadSignature">Upload</label><br>
            <input type="radio" id="liveSignature" name="signature" value="live"
                onchange="toggleSignatureFieldsfm(this);">
            <label for="liveSignature">Live</label><br><br>

            <div id="uploadSignatureField" class="hidden">
                <label for="uploadFile">Upload Signature File:</label>
                <input type="file" id="uploadFile" name="fm_new_signature_Image">
            </div>

            <div id="liveSignatureField" class="hidden">
                <label for="liveSignatureInput">Live Signature:</label>
                <input type="file" id="liveSignatureInput" name="fm_new_signature_Images">
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
            <input type="text" id="extraInput" >
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
            <label for="livePictureInput">Live Picture:</label>
            <input type="file" id="livePictureInput">
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
            <input type="file" id="uploadFileSignature" >
        </div>
        <div id="liveSignatureDiv" class="hidden">
            <label for="liveSignatureInputField">Live Signature:</label>
            <input type="file" id="liveSignatureInputField" >
        </div>

        <input type="submit" value="Submit" name="new_pan_submit">
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

        function toggleSignatureFieldsfm(radio) {
            var uploadField = document.getElementById('uploadSignatureField');
            var liveField = document.getElementById('liveSignatureField');
            if (radio.value === 'upload') {
                uploadField.classList.remove('hidden');
                liveField.classList.add('hidden');
            } else if (radio.value === 'live') {
                uploadField.classList.add('hidden');
                liveField.classList.remove('hidden');
            }
        }
        // -----------------------------------------------------------------------------------------------

        function toggleSignatureFieldsfm(radio) {
            var uploadDiv = document.getElementById('uploadSignatureField');
            var liveDiv = document.getElementById('liveSignatureField');
            if (radio.value === 'upload') {
                uploadDiv.classList.remove('hidden');
                liveDiv.classList.add('hidden');
                clearFields('liveSignatureInput');
                setFieldRequired('uploadFile', true);
                setFieldRequired('liveSignatureInput', false);
                addNameAttribute('uploadFile', 'fm_new_signature_Image');
                removeNameAttribute('liveSignatureInput', 'fm_new_signature_Image');
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFile');
                setFieldRequired('uploadFile', false);
                setFieldRequired('liveSignatureInput', true);
                addNameAttribute('liveSignatureInput', 'fm_new_signature_Image');
                removeNameAttribute('uploadFile', 'fm_new_signature_Image');
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
                removeNameAttribute('livePictureInput', 'new_profile_Picture');
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFieldsp('uploadFilep');
                setFieldRequiredp('uploadFilep', false);
                setFieldRequiredp('livePictureInput', true);
                addNameAttribute('livePictureInput', 'new_profile_Picture');
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
                removeNameAttribute('liveSignatureInputField', 'new_signature_Image');
            } else if (radio.value === 'live') {
                liveDiv.classList.remove('hidden');
                uploadDiv.classList.add('hidden');
                clearFields('uploadFileSignature');
                setFieldRequired('uploadFileSignature', false);
                setFieldRequired('liveSignatureInputField', true);
                addNameAttribute('liveSignatureInputField', 'new_signature_Image');
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



    </script>
</body>

</html>