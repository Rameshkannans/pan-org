 // JavaScript to dynamically create input fields
 const form = document.getElementById("dynamic-form");
 const numberOfInputs = 10;

 for (let i = 0; i < numberOfInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   form.appendChild(input);
 }

 // Move to the next input when the current one is filled
 function handleInput() {
   if (this.value.length === this.maxLength) {
     const nextInput = this.nextElementSibling;
     if (nextInput) nextInput.focus();
   }
 }

 function handleKeydown(event) {
   if (event.key === "Backspace" && this.value.length === 0) {
     const prevInput = this.previousElementSibling;
     if (prevInput) prevInput.focus();
   }
 }

 //   Last Name / Surname

 const Lastname_surename = document.getElementById("Lastname_surename");
 const Lastname_surenameInputs = 25;

 for (let i = 0; i < Lastname_surenameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Lastname_surename.appendChild(input);
 }
 //   Firstname
 const Firstname = document.getElementById("Firstname");
 const FirstnameInputs = 25;

 for (let i = 0; i < FirstnameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Firstname.appendChild(input);
 }

 //   Middlename
 const Middlename = document.getElementById("Middlename");
 const MiddlenameInputs = 25;

 for (let i = 0; i < MiddlenameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Middlename.appendChild(input);
 }

 //   Printpan
 const Printpan = document.getElementById("Printpan");
 const PrintpanInputs = 76;

 for (let i = 0; i < PrintpanInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Printpan.appendChild(input);
 }

 //   Fathername
 const Fathername = document.getElementById("Fathername");
 const FathernameInputs = 25;

 for (let i = 0; i < FathernameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Fathername.appendChild(input);
 }

 const Fatherfirstname = document.getElementById("Fatherfirstname");
 const FatherfirstnameInputs = 25;

 for (let i = 0; i < FatherfirstnameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Fatherfirstname.appendChild(input);
 }

 // Middlefathername
 const Middlefathername = document.getElementById("Middlefathername");
 const MiddlefathernameInputs = 25;

 for (let i = 0; i < MiddlefathernameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Middlefathername.appendChild(input);
 }

 // Mothername
 const Mothername = document.getElementById("Mothername");
 const MothernameInputs = 25;

 for (let i = 0; i < MothernameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Mothername.appendChild(input);
 }
 // Motherfirstname
 const Motherfirstname = document.getElementById("Motherfirstname");
 const MotherfirstnameInputs = 25;

 for (let i = 0; i < MotherfirstnameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Motherfirstname.appendChild(input);
 }

 // MiddleMothername
 const MiddleMothername = document.getElementById("MiddleMothername");
 const MiddleMothernameInputs = 25;

 for (let i = 0; i < MiddleMothernameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   MiddleMothername.appendChild(input);
 }

 // Date-of-Birth
 const Dob = document.getElementById("Dob");
 const DobInputs = 8;

 for (let i = 0; i < DobInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Dob.appendChild(input);
 }

//  Nameofoffice
const Nameofoffice = document.getElementById("Nameofoffice");
 const NameofofficeInputs = 25;

 for (let i = 0; i < NameofofficeInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Nameofoffice.appendChild(input);
 }

//  Flat_Room
 const Flat_Room = document.getElementById("Flat_Room");
 const Flat_RoomInputs = 25;

 for (let i = 0; i < Flat_RoomInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Flat_Room.appendChild(input);
 }

//  Name_of_Premises

const Name_of_Premises = document.getElementById("Name_of_Premises");
const Name_of_PremisesInputs = 25;

for (let i = 0; i < Name_of_PremisesInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Name_of_Premises.appendChild(input);
}

// Area/Street/ Lane/Post Office

const Road = document.getElementById("Road");
const RoadInputs = 25;

for (let i = 0; i < RoadInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Road.appendChild(input);
}

// Area / Locality / Taluka / Sub- Division
const Area = document.getElementById("Area");
const AreaInputs = 25;

for (let i = 0; i < AreaInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Area.appendChild(input);
}

// Town / City / District

const Town = document.getElementById("Town");
const TownInputs = 25;

for (let i = 0; i < TownInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Town.appendChild(input);
}

// State / Union Territory

const State = document.getElementById("State");
const StateInputs = 6;

for (let i = 0; i < StateInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  State.appendChild(input);
}

// country_code
const country_code = document.getElementById("country_code");
const country_codeInputs = 3;

for (let i = 0; i < country_codeInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  country_code.appendChild(input);
}

// STD_Code
const STD_Code = document.getElementById("STD_Code");
const STD_CodeInputs = 7;

for (let i = 0; i < STD_CodeInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  STD_Code.appendChild(input);
}

// Mobile_number
const Mobile_number = document.getElementById("Mobile_number");
const Mobile_numberInputs = 10;

for (let i = 0; i < Mobile_numberInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Mobile_number.appendChild(input);
}

// Aadhaar
const Aadhaar = document.getElementById("Aadhaar");
const AadhaarInputs = 12;

for (let i = 0; i < AadhaarInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Aadhaar.appendChild(input);
}


// Name as per AADHAAR letter/card

const Name_as_AADHAAR = document.getElementById("Name_as_AADHAAR");
const Name_as_AADHAARInputs = 76;

for (let i = 0; i < Name_as_AADHAARInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Name_as_AADHAAR.appendChild(input);
}

// PAN1
const Pan1 = document.getElementById("Pan1");
const Pan1Inputs = 10;

for (let i = 0; i < Pan1Inputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Pan1.appendChild(input);
}

// PAN2
const Pan2 = document.getElementById("Pan2");
const Pan2Inputs = 10;

for (let i = 0; i < Pan2Inputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Pan2.appendChild(input);
}

// PAN3
const Pan3 = document.getElementById("Pan3");
const Pan3Inputs = 10;

for (let i = 0; i < Pan3Inputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Pan3.appendChild(input);
}

// Applydate

const Applydate = document.getElementById("Applydate");
const ApplydateInputs = 8;

for (let i = 0; i < ApplydateInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  Applydate.appendChild(input);
}
