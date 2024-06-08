<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button Toggle</title>
</head>

<body>

    <form action="">

        <label>
            <input type="radio" name="option" id="option1" onclick="toggleInput('option1')"> One
        </label>
        <label>
            <input type="radio" name="option" id="option2" onclick="toggleInput('option2')"> Two
        </label>

        <div id="textInput">
            <input type="text" id="text1" placeholder="Enter text" required>
        </div>

        <div id="fileInput" style="display:none;">
            <input type="file" id="file1" required>
        </div>

        <input type="submit" value="submit">

    </form>

    <script>
        function toggleInput(option) {
            var textInput = document.getElementById('textInput');
            var fileInput = document.getElementById('fileInput');

            if (option === 'option1') {
                textInput.style.display = 'block';
                fileInput.style.display = 'none';
                document.getElementById('text1').setAttribute('required', 'required');
                document.getElementById('file1').removeAttribute('required');
            } else if (option === 'option2') {
                textInput.style.display = 'none';
                fileInput.style.display = 'block';
                document.getElementById('file1').setAttribute('required', 'required');
                document.getElementById('text1').removeAttribute('required');
            }
        }
    </script>

</body>

</html>
