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