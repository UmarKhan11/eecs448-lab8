window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM loaded');
});

// exercise 1
function VerifyPass() {
    var pass1 = document.getElementById('pass-1').value;
    var pass2 = document.getElementById('pass-2').value;
    var status = "Failed";
    var matchStatus = "Failed";
    var lengthStatusPass1 = "Failed";
    var lengthStatusPass2 = "Failed";
    var lengthStatus = "Failed"
    var matchMessage = "No matchMessage";
    var lengthMessage1 = "No lengthMessage"
    var lengthMessage2 = "No lengthMessage"

    console.log("Password 1: " + pass1);
    console.log("Password 2: " + pass2);

    // testing matches
    if (pass1 === pass2) {
        console.log("Enter password and re-enter password matched")
        matchMessage = "Enter password and re-enter password matched";
        matchStatus = "Success";
    }
    else {
        console.log("Enter password and re-enter password did not match");
        matchMessage = "Enter password and re-enter password did not match";
    }

    // testing length for password 1
    if (pass1.length >= 8) {
        console.log("Password met length requirement");
        lengthMessage1 = "Password met length requirement";
        lengthStatusPass1 = "Success";
    }
    else {
        console.log("Password did not meet length requirement");
        lengthMessage1 = "Password length requirement, 8 characters, was not met";
    }

    // testing length for password 2
    if (pass2.length >= 8) {
        console.log("Password met length requirement");
        lengthMessage2 = "Password met length requirement";
        lengthStatusPass2 = "Success";
    }
    else {
        console.log("Password did not meet length requirement");
        lengthMessage2 = "Password length requirement, 8 characters, was not met";
    }

    if (lengthStatusPass1 == "Success" && lengthStatusPass2 == "Success") {
        lengthStatus = "Success";
    }

    if (matchStatus == "Success" && lengthStatusPass1 == "Success") {
        status = "Password was successful!"
    }
    else {
        status = "Password was unsuccessful"
    }

    window.alert("(TEST 1): " + matchMessage + ", " + matchStatus +
                "\n(TEST2): " + lengthMessage1 + ", " + lengthStatusPass1 +
                "\n(TEST3): " + lengthMessage2 + ", " + lengthStatusPass2 +
                "\n(PASSWORD STATUS): " + status
    );
}

// exercise 2
var images = [];
images[0] = "https://bloximages.newyork1.vip.townnews.com/kctv5.com/content/tncms/assets/v3/editorial/c/5a/c5a88b82-f205-11e9-9e44-ebd720d0b201/5daa55fda1bd9.image.jpg?resize=1920%2C1080";
images[1] = "https://www.ksnt.com/wp-content/uploads/sites/86/2016/08/ku_36368397_ver1.0-2.png?w=600";
images[2] = "https://www.ksnt.com/wp-content/uploads/sites/86/2021/02/KANSAS-BASEBALL-2.jpg?w=1280";
images[3] = "https://edwardscampus.ku.edu/sites/edwardscampus.ku.edu/files/images/general/program-files/employment-edwards.jpg";
images[4] = "https://gray-kwch-prod.cdn.arcpublishing.com/resizer/wf5wyIXt7hRenjDveZCqWu1PX3I=/1200x675/smart/cloudfront-us-east-1.images.arcpublishing.com/gray/HCMZJZNXMFLWZE3J4JLJJF4XSA.jpg";
var i = 0;

function prev() {
    if (i <= 0) {
        i = images.length;
    }
    i--;
    return slideShow(i);
}

function next() {
    if (i >= images.length - 1) {
        i = -1;
    }
    i++;
    return slideShow(i);
}

function slideShow(i) {
    image = document.getElementById("slideshow");
    image.src = images[i];
}

// exercise 3
var profilePicture = "https://tvline.com/wp-content/uploads/2020/04/flash-gustin-contract-talks.jpg?w=620";

function profile() {
    var profile = document.getElementById("profile");
    profile.src = profilePicture;
}

// exercise 4
var dummyText = document.getElementById("dummy-text");
var dummyDiv = document.getElementById("dummy")
var changeButton = document.getElementById("change");
var borderWidthButtonChange = document.getElementById("inp-border-width");
var borderChange = document.getElementById("border-change");

function changeBorderWidth() {
    borderChange.style.borderWidth = borderWidthButtonChange.value + "px";
}


function changeRedBG() {
    dummyDiv.style.backgroundColor = "red";
}

function changeGreenBG() {
    dummyDiv.style.backgroundColor = "green";
}

function changeBlueBG() {
    dummyDiv.style.backgroundColor = "blue";
}

function changeRedBorder() {
    dummyDiv.style.borderColor = "red";
}

function changeGreenBorder() {
    dummyDiv.style.borderColor = "green";
}

function changeBlueBorder() {
    dummyDiv.style.borderColor = "blue";
}

function changeRedBGandBorder() {
    dummyDiv.style.backgroundColor = "red";
    dummyDiv.style.borderColor = "red";
}

function changeGreenBGandBorder() {
    dummyDiv.style.backgroundColor = "green";
    dummyDiv.style.borderColor = "green";
}

function changeBlueBGandBorder() {
    dummyDiv.style.backgroundColor = "blue";
    dummyDiv.style.borderColor = "blue";
}



