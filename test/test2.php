<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submit Loader Example</title>
    <style>
        .loader-container {
            position: relative;
        }

        .loader {
            display: none;
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .form-submitting .loader {
            display: block;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
        }
    </style>
</head>

<body>
    <!-- Overlay -->
    <div id="overlay" class="overlay"></div>

    <form id="myForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <div id="loaderContainer" class="loader-container">
        <div id="loader" class="loader"></div>
    </div>

    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var form = this;
            var loaderContainer = document.getElementById('loaderContainer');
            var overlay = document.getElementById('overlay');

            loaderContainer.classList.add('form-submitting');
            overlay.style.display = 'block';

            setTimeout(function () {
                form.submit();
            }, 2000);
        });
    </script>
</body>

</html>
