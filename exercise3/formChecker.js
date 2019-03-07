function validate(event) {
    // This is all able to be done by html attributes, but here is some checking just in case
    
    event.preventDefault();
    
    let message = document.getElementById("message");
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username.length == 0) {
        message.innerText = "Username is empty.";
        return;
    }
    if (password.length == 0) {
        message.innerText = "Password is empty.";
        return;
    }

    // It's not actually possible to catch all email's with regex, but this will do for now.
    let re = /[a-zA-Z0-9\.]+@[a-zA-Z0-9\.]+/;

    if (!re.test(username)) {
        message.innerText = "Username is empty.";
        return;
    }
    
    let shipping = null;
    let shippingOptions = document.getElementsByName("shipping");
    
    for (let i = 0; i < 3; i++) {
        if (shippingOptions[i].checked) {
            shipping = shippingOptions;
        }
    }
    if (shipping == null) {
        message.innerText = "Must pick a shipping option.";
        return;
    }

    let cube1 = document.getElementsByName("cube1")[0].value;
    let cube2 = document.getElementsByName("cube2")[0].value;
    let cube3 = document.getElementsByName("cube3")[0].value;

    if (cube1.length == "" || cube1 < 0) {
        message.innerText = "Enter a quantity for the White Rubik's Cube";
        return;
    }

    if (cube2.length == "" || cube2 < 0) {
        message.innerText = "Enter a quantity for the American Rubik's Cube";
        return;
    }

    if (cube3.length == "" || cube3 < 0) {
        message.innerText = "Enter a quantity for the 8x8 Rubik's Cube";
        return;
    }

    document.getElementById("storeForm").submit();
}