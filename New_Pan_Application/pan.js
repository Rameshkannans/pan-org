
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
 //  td1
  const td1 = document.getElementById("td1");
  const td1Inputs = 3;
 
  for (let i = 0; i < td1Inputs; i++) {
    const input = document.createElement("input");
    input.type = "text";
    input.className = "styled-input";
    input.maxLength = 1;
    input.style.width = "50px";
    input.addEventListener("input", handleInput);
    input.addEventListener("keydown", handleKeydown);
    td1.appendChild(input);
  }
 
 //  td2
  const td2 = document.getElementById("td2");
  const td2Inputs = 2;
 
  for (let i = 0; i < td2Inputs; i++) {
    const input = document.createElement("input");
    input.type = "text";
    input.className = "styled-input";
    input.maxLength = 1;
    input.style.width = "50px";
    input.addEventListener("input", handleInput);
    input.addEventListener("keydown", handleKeydown);
    td2.appendChild(input);
  }
 
 //  td3
 const td3 = document.getElementById("td3");
 const td3Inputs = 3;
 
 for (let i = 0; i < td3Inputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.style.width = "51px";
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   td3.appendChild(input);
 }
 
 // td4
 const td4 = document.getElementById("td4");
 const td4Inputs = 2;
 
 for (let i = 0; i < td4Inputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.style.width = "85px";
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   td4.appendChild(input);
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
  const PrintpanInputs = 94;
 
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
 //  Mother
 //   Fathername
 const Mother_name = document.getElementById("Mother_name");
 const Mother_nameInputs = 25;
 
 for (let i = 0; i < Mother_nameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   Mother_name.appendChild(input);
 }
 
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
 // Mother
 
  // Fathername
  const Father_name = document.getElementById("Father_name");
  const Father_nameInputs = 25;
 
  for (let i = 0; i < Father_nameInputs; i++) {
    const input = document.createElement("input");
    input.type = "text";
    input.className = "styled-input";
    input.maxLength = 1;
    input.addEventListener("input", handleInput);
    input.addEventListener("keydown", handleKeydown);
    Father_name.appendChild(input);
  }
  // FatherFirstname
  const FatherFirstname = document.getElementById("FatherFirstname");
  const FatherFirstnameInputs = 25;
 
  for (let i = 0; i < FatherFirstnameInputs; i++) {
    const input = document.createElement("input");
    input.type = "text";
    input.className = "styled-input";
    input.maxLength = 1;
    input.addEventListener("input", handleInput);
    input.addEventListener("keydown", handleKeydown);
    FatherFirstname.appendChild(input);
  }
 
  // FatherMiddlename
  const FatherMiddlename = document.getElementById("FatherMiddlename");
  const FatherMiddlenameInputs = 25;
 
  for (let i = 0; i < FatherMiddlenameInputs; i++) {
    const input = document.createElement("input");
    input.type = "text";
    input.className = "styled-input";
    input.maxLength = 1;
    input.addEventListener("input", handleInput);
    input.addEventListener("keydown", handleKeydown);
    FatherMiddlename.appendChild(input);
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
 
 // Office start
 const officename = document.getElementById("officename");
 const officenameInputs = 25;
 
 for (let i = 0; i < officenameInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   officename.appendChild(input);
 }
 //  Flat_Room
 const officeFlat_Room = document.getElementById("officeFlat_Room");
 const officeFlat_RoomInputs = 25;
 
 for (let i = 0; i < officeFlat_RoomInputs; i++) {
   const input = document.createElement("input");
   input.type = "text";
   input.className = "styled-input";
   input.maxLength = 1;
   input.addEventListener("input", handleInput);
   input.addEventListener("keydown", handleKeydown);
   officeFlat_Room.appendChild(input);
 }
 
 //  Name_of_Premises
 
 const officeName_of_Premises = document.getElementById("officeName_of_Premises");
 const officeName_of_PremisesInputs = 25;
 
 for (let i = 0; i < officeName_of_PremisesInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  officeName_of_Premises.appendChild(input);
 }
 
 // Area/Street/ Lane/Post Office
 
 const officeRoad = document.getElementById("officeRoad");
 const officeRoadInputs = 25;
 
 for (let i = 0; i < officeRoadInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  officeRoad.appendChild(input);
 }
 
 // Area / Locality / Taluka / Sub- Division
 const officeArea = document.getElementById("officeArea");
 const officeAreaInputs = 25;
 
 for (let i = 0; i < officeAreaInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  officeArea.appendChild(input);
 }
 
 // Town / City / District
 
 const officeTown = document.getElementById("officeTown");
 const officeTownInputs = 25;
 
 for (let i = 0; i < officeTownInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  officeTown.appendChild(input);
 }
 const OfficeState = document.getElementById("OfficeState");
 const OfficeStateInputs = 6;
 
 for (let i = 0; i < OfficeStateInputs; i++) {
  const input = document.createElement("input");
  input.type = "text";
  input.className = "styled-input";
  input.maxLength = 1;
  input.addEventListener("input", handleInput);
  input.addEventListener("keydown", handleKeydown);
  OfficeState.appendChild(input);
 }
 
 // Office End
 
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
 
 