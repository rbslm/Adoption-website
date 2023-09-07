/*--NAME AND ID: RYM BENSALEM, 40237684
    COURSE: SOEN 287 
    SECTION: W 
    WEBSITE: LOVELY COMPANION 
    JAVASCRIPT --*/

/*------- ALL PAGES ------- */
/*------- date and time (header) ------- */
function time() {
    const t = new Date()
    let day;
    let month;
    let d = t.getDate();
    let year = t.getFullYear();
    let hours = t.getHours();
    let minutes = t.getMinutes();
    let seconds = t.getSeconds();
    if(hours < 10) {hours = "0" + hours}
    if(minutes < 10) {minutes = "0" + minutes}
    if(seconds < 10) {seconds = "0" + seconds}
    switch(t.getDay()) {
        case 1: day = "Monday"; break; case 2: day = "Tuesday"; break; case 3: day = "Wednesday"; break;
        case 4: day = "Thursday"; break; case 5: day = "Friday"; break; case 6: day = "Saturday"; break;
        case 0: day = "Sunday"; break;
    }
    switch(t.getMonth()) {
        case 0: month = "Jan"; break; case 1: month = "Feb"; break; case 2: month = "March"; break; 
        case 3: month = "April"; break; case 4: month = "May"; break; case 5: month = "June"; break; 
        case 6: month = "July"; break; case 7: month = "Aug"; break; case 8: month = "Sep"; break; 
        case 9: month = "Oct"; break; case 10: month = "Nov"; break; case 11: month = "Dec";
    }
    let timeString = day + ", " + month + " " + d + ", " + year + "<br /><br />" + hours + ":" + minutes + ":" + seconds;
    return timeString;
  }

window.onload = function() {
    document.getElementById("time").innerHTML = time();
  };

/*------- ALL PAGES ------- */
/*------- privacy/disclaimer button (footer) ------- */
function privacy() { 
    alert(" We promise users that all their information is confidential."); 
}

/*------- HOME PAGE ------- */
/*------- images sources button (footer) ------- */
function imgSourcesHome() { 
    alert("CONTENT IMAGE SOURCE:\nhttps://www.womansworld.com/wp-content/uploads/2022/11/shutterstock_1934050523-1.jpg\n\n"+
    "LOGO IMAGE SOURCE:\nhttps://static.thenounproject.com/png/471555-200.png"); 
}

/*------- CAT CARE PAGE ------- */
/*------- images sources button (footer) ------- */
function imgSourcesCatCare() {
    alert("CONTENT IMAGE SOURCE:\nhttps://www.cdc.gov/healthypets/images/pets/cat-rubbing-medium.jpg?_=89348\n\n"+
    "LOGO IMAGE SOURCE:\nhttps://static.thenounproject.com/png/471555-200.png");
}

/*------- DOG CARE PAGE ------- */
/*------- images sources button (footer) ------- */
function imgSourcesDogCare() {
    alert("CONTENT IMAGE SOURCE:\nhttps://www.cdc.gov/healthypets/images/pets/cute-dog-headshot.jpg?_=42445\n\n"+
    "LOGO IMAGE SOURCE:\nhttps://static.thenounproject.com/png/471555-200.png");
}
/*------- HAVE A PET TO GIVE AWAY PAGE ------- */
/*------- images sources button (footer) ------- */
function imgSourceshaptga() {
    alert("LOGO IMAGE SOURCE:\nhttps://static.thenounproject.com/png/471555-200.png");
}

/*------- CONTACT US PAGE ------- */
/*------- images sources button (footer) ------- */
function imgSourcesContactUs() {
    alert("LOGO IMAGE SOURCE:\nhttps://static.thenounproject.com/png/471555-200.png");
}
/*------- BROWSE AVAILABLE PETS PAGE ------- */
/*------- images sources button (footer) ------- */
function imgSourcesbap() {
    alert("CONTENT IMAGE SOURCES:\n"+
    "Maika: https://ik.imagekit.io/yynn3ntzglc/cms/contenu1_focus_labrador_b488afbdc5_4bnvZc1bu.jpg\n\n"+
    "Cooper: https://www.monkoodog.com/wp-content/uploads/2021/07/Pomeranian-Dog-Breed.jpg\n\n"+
    "Lola: https://www.coopsandcages.com.au/wp-content/uploads/2021/10/The-Poodle-Dog-Breed-1275x800.png\n\n"+
    "Oscar: https://www.thesprucepets.com/thmb/5OSN_p9hUfPssKsJORQDGnAz_tQ=/1963x0/filters:no_upscale():strip_icc()/GettyImages-181861505-4e63227ed0a14dc9bfe86848ef54caf3.jpg\n\n"+
    "Angela: https://media.istockphoto.com/id/1076432222/photo/siamese-kitten.jpg?s=612x612&w=0&k=20&c=KjJzsMuiJYBzlxDpVeOBv9bYcjZQlnEd7W-dP7oEUh0=\n\n"+
    "Felix: https://img4.goodfon.com/wallpaper/nbig/a/f9/abissinskaia-koshka-poroda-gratsiia.jpg\n\n"+
    "LOGO IMAGE SOURCE:\nhttps://static.thenounproject.com/png/471555-200.png");
}
/*------- FIND A DOG/CAT PAGE ------- */
/*------- images sources button (footer) ------- */
function imgSourcesFindaDogCat() {
    alert("LOGO IMAGE SOURCE:\nhttps://static.thenounproject.com/png/471555-200.png"); 
}

/*------- FIND A DOG/CAT and HAVE A PET TO GIVE AWAY PAGES ------- */
/*------- form validation ------- */
function validateDogCat() {
    let dogcat = document.getElementsByName("dogcat");
    let dogcatSelected = false;
    for(let i = 0; i<dogcat.length; i++) {
        if(dogcat[i].checked) {
            dogcatSelected = true;
            break;
        }
    }
    if(!dogcatSelected) {
        alert("Please fill out the form (Dog/Cat not specified)");
        return false;
    }
    return true;
}

function validateBreedForm1() {
    let breed = document.getElementsByName("breed");
    let breedSelected = false;
    for(let i = 0; i<breed.length; i++) {
        if(breed[i].checked) {
            if(i==0) {
                if(document.getElementById("breed").value === "") {
                    alert("Please fill out the form (Breed choice not specified)");
                    return false;
                }
            }
            breedSelected = true;
            break;
        }
    }
    if(!breedSelected) {
        alert("Please fill out the form (Breed not specified)");
        return false;
    }
    return true;
}

function validateBreedForm2() {
    let breed = document.getElementsByName("breedForm2");
    let breedSelected = false;
    for(let i = 0; i<breed.length; i++) {
        if(breed[i].checked) {
            if(i==0) {
                if(document.getElementById("breedText1").value === "") {
                    alert("Please fill out the form (Breed choice not specified)");
                    return false;
                }
            }
            else if(i==1) {
                if(document.getElementById("breedText2").value === "") {
                    alert("Please fill out the form (Mixed Breed choice not specified)");
                    return false;
                }
            }
            breedSelected = true;
            break;
        }
    }
    if(!breedSelected) {
        alert("Please fill out the form (Breed not specified)");
        return false;
    }
    return true;
}

function validateAge() {
    let option1 = document.getElementById("option1").selected; let option2 = document.getElementById("option2").selected;
    let option3 = document.getElementById("option3").selected; let option4 = document.getElementById("option4").selected;
    let option5 = document.getElementById("option5").selected; let option6 = document.getElementById("option6").selected;
    let option7 = document.getElementById("option7").selected; let option8 = document.getElementById("option8").selected;
    if(!(option1|option2|option3|option4|option5|option6|option7|option8)) {
        alert("Please fill out the form (Age not specified)");
        return false;
    }
    return true;
}

function validateGender() {
    let gender = document.getElementsByName("gender");
    let genderSelected = false;
    for(let i = 0; i<gender.length; i++) {
        if(gender[i].checked) {
            genderSelected = true;
            break;
        }
    }
    if(!genderSelected) {
        alert("Please fill out the form (Gender not specified)");
        return false;
    }
    return true;
}

function validateGetAlong1() {
    let yesno = document.getElementsByName("yesno");
    let yesnoSelected = false;
    for(let i = 0; i<yesno.length; i++) {
        if(yesno[i].checked) {
            yesnoSelected = true;
            break;
        }
    }
    if(!yesnoSelected) {
        alert("Please fill out the form (Not specified if animal gets along with other dogs, other cats and small children)");
        return false;
    }
    return true;
}

function validateGetAlong2() {
    let getAlong = document.getElementsByName("getAlong");
    let getAlongSelected = false;
    for(let i = 0; i<getAlong.length; i++) {
        if(getAlong[i].checked) {
            getAlongSelected = true;
            break;
        }
    }
    if(!getAlongSelected) {
        alert("Please fill out the form (Not specified if animal gets along with other dogs, other cats and small children)");
        return false;
    }
    return true;
}

function validateNameAndEmail() {
    if(document.getElementById("firstName").value === "") {
        alert("Please fill out the form (First name not specified)");
        return false;
    }
    if(document.getElementById("familyName").value === "") {
        alert("Please fill out the form (Family name not specified)");
        return false;
    }
    if(document.getElementById("email").value === "") {
        alert("Please fill out the form (Email not specified)");
        return false;
    }
    if(document.getElementById("email").value.search(/^\w+\@\w+\.\w+/) === -1) {
        alert("Please fill out the form (Invalid email)");
        return false;
    }
    return true;
}

function validateForm1() {
    let a = validateDogCat();
    if(!a) {return false;}
    let b = validateBreedForm1();
    if(!b) {return false;}
    let c = validateAge();
    if(!c) {return false;}
    let d = validateGender();
    if(!d) {return false;}
    let e = validateGetAlong1();
    if(!e) {return false;}
}
function validateForm2() {
    let a = validateDogCat();
    if(!a) {return false;}
    let b = validateBreedForm2();
    if(!b) {return false;}
    let c = validateAge();
    if(!c) {return false;}
    let d = validateGender();
    if(!d) {return false;}
    let e = validateGetAlong2();
    if(!e) {return false;}
    let f = validateNameAndEmail();
    if(!f) {return false;}
}