<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Text Input Fields</title>
    <style>
        .hiddens {
            display: none;
        }
    </style>
    <script>
        function toggleInput(checkbox, inputId) {
            const inputField = document.getElementById(inputId);
            if (checkbox.checked) {
                inputField.classList.remove('hiddens');
                inputField.setAttribute('required', 'required');
            } else {
                inputField.classList.add('hiddens');
                inputField.removeAttribute('required');
            }
        }
    </script>
</head>

<body>
    <form>
        <label>
            <input type="checkbox" id="checkbox1" onclick="toggleInput(this, 'input1')"> One
        </label>
        <label>
            <input type="checkbox" id="checkbox2" onclick="toggleInput(this, 'input2')"> Two
        </label>
        <label>
            <input type="checkbox" id="checkbox3" onclick="toggleInput(this, 'input3')"> Three
        </label>

        <br>

        <input type="text" id="input1" class="hiddens">
        <br>
        <input type="text" id="input2" class="hiddens">
        <br>
        <input type="text" id="input3" class="hiddens">
        <hr/>

        <input type="submit" value="submit">
    </form>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Text Input Fields</title>
    <style>
        .hiddens {
            display: none;
        }
    </style>
    <script>
        function toggleInput(checkbox, inputDivId) {
            const inputDiv = document.getElementById(inputDivId);
            const inputFields = inputDiv.querySelectorAll('input[type="text"], input[type="file"]');
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
    </script>
</head>

<body>
    <form>
        <label>
            <input type="checkbox" id="checkbox1" onclick="toggleInput(this, 'inputs1')"> One
        </label>
        <label>
            <input type="checkbox" id="checkbox2" onclick="toggleInput(this, 'inputs2')"> Two
        </label>
        <label>
            <input type="checkbox" id="checkbox3" onclick="toggleInput(this, 'inputs3')"> Three
        </label>

        <div class="hiddens" id="inputs1">
            <input type="text" id="input11">
            <input type="text" id="input12">
            <input type="text" id="input13">
        </div>
        <div class="hiddens" id="inputs2">
            <input type="text" id="input21">
            <input type="text" id="input22">
            <input type="text" id="input23">
        </div>
        <div class="hiddens" id="inputs3">
            <input type="text" id="input31">
            <input type="text" id="input32">
            <input type="text" id="input33">
        </div>

        <input type="submit" value="submit">
    </form>
</body>

</html>

