function userlogin() {

    var u_type = $("#u_type").val();
    var u_name = $("#u_name").val();
    var password = $("#password").val();
    console.log(u_type);
    console.log(u_name);
    console.log(password);


    if (u_type == "Administrator") {
        $.ajax({
            url: 'login.php',
            method: 'POST',
            data: {
                adminlogin : "adminlogin",
                u_type: u_type,
                u_name: u_name,
                password: password,
            },
            success: function (data) {
                if (data == 0) {
                    $("#errormsg").html('<span class="alert alert-danger">invalid email id or password</span>');
                } else if (data == 1) {
                    $("#errormsg").html('<div class="spinner-border tect-success" role="status"></div>');
                    window.location.href = "login/administrator.php";
                }
            },
        });
    }
}