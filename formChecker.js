function validate() {
    // login info
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    // waterbottle info
    var q1 = document.getElementById('q1').value;
    var q2 = document.getElementById('q2').value;
    var q3 = document.getElementById('q3').value;
    // 
    var s1 = document.getElementById('s1');
    var s2 = document.getElementById('s2');
    var s3 = document.getElementById('s3');

    var testArray = [false, false, false, false]
    var testMessage = []
    var messagePass = "";
    var messageFail = "";

    // username
    var state = false;
    console.log("Checking if username is valid...");
    if (username.search("@domain.com") >= 0) {
        testArray[0] = true;
        console.log("test 1 passed");
        messagePass = "PASS: Username contained '@domain.com";
        state = true;
        testMessage.push(messagePass);
    }
    else {
        console.log("test1 failed");
        messageFail = "FAIL: Username did not contain '@domain.com";
        state = false;
        testMessage.push(messageFail);
    }
    console.log(testMessage[0]);

    // password
    state = false;
    console.log("Checking if password is valid...");
    if (password.length > 0) {
        testArray[1] = true;
        console.log("test 2 passed");
        messagePass = "PASS: password length was greater that 0";
        state = true;
        testMessage.push(messagePass);
    }
    else {
        console.log("test2 failed");
        messageFail = "FAIL: Password length was 0";
        state = false;
        testMessage.push(messageFail);
    }
    console.log(testMessage[1]);

    // item quantity
    state = false;
    console.log("Checkng if quaitity is valid...");
    if (q1.length > 0 || q2.length > 0 || q3.length > 0) {
        testArray[2] = true;
        console.log("test 3 passed");
        messagePass = "PASS: Atleast 1 quantity field is filled";
        state = true;
        testMessage.push(messagePass);
    }
    else {
        console.log("test3 failed");
        messageFail = "FAIL: All quantity fields are blank";
        state = false;
        testMessage.push(messageFail);
    }
    console.log(testMessage[2]);


    // shipping
    state = false;
    console.log("Checking if shipping is valid ...");
    if (s1.checked > 0 || s2.checked || s3.checked) {
        testArray[3] = true;
        console.log("test 4 passed");
        messagePass = "PASS: A shipping option was selected";
        state = true;
        testMessage.push(messagePass);
    }
    else {
        console.log("test4 failed");
        messageFail = "FAIL: no shipping option was selected";
        state = false;
        testMessage.push(messageFail);
    }
    console.log(testMessage[3]);


    console.log(testArray[0]);
    console.log(testArray[1]);
    console.log(testArray[2]);
    console.log(testArray[3]);

   if (testArray[0] && testArray[1] && testArray[2] && testArray[3]) {
	return true;
   }
   else {
     window.alert(
         "Error messages: \n" +
         testMessage[0] + "\n" +
         testMessage[1] + "\n" +
         testMessage[2] + "\n" +
         testMessage[3] + "\n"
     );
    return false;
   }
}
