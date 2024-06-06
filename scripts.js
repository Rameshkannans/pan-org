
// // Function to toggle visibility of Father's Name field based on gender selection
// function toggleFatherNameField() {
//     var gender = document.querySelector('input[name="gender"]:checked').value;
//     var fatherNameField = document.getElementById('fatherNameField');
//     if (gender === 'female') {
//         fatherNameField.style.display = 'block';
//     } else {
//         fatherNameField.style.display = 'none';
//     }
// }

// // Event listener for gender radio buttons
// var genderRadios = document.querySelectorAll('input[name="gender"]');
// genderRadios.forEach(function (radio) {
//     radio.addEventListener('change', toggleFatherNameField);
// });

// // Initial call to set initial visibility of Father's Name field
// toggleFatherNameField();

// // Toggle file upload section
// document.getElementById('enableFileUpload').addEventListener('change', function () {
//     var fileUploadContainer = document.getElementById('fileUploadContainer');
//     fileUploadContainer.style.display = this.checked ? 'block' : 'none';
// });

