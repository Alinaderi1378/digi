
let username;
let password;
let pass;
let pass2;
let user;
    $('#btn_log').on('click',function (e){
        e.preventDefault();
        username=$('#username_log').val()
        password=$('#password_log').val()
        let data = {
            action: 'login',
            username: username,
            password: password
        };
        $.ajax({
            type: 'POST',
            url: 'https://localhost/digistyle/ajax.php',
            data: JSON.stringify(data),
            success: function (data) {
                console.log(data);
                if (data != 0) {
                    window.location.href = "https://localhost/digistyle/";
                } else {
                    alert("کاربری با این مشخصات وجود ندارد")
                }
            }
        })
    })
$('#btn_sign').on('click',function (e){
    e.preventDefault();
    user=$('#username_sign').val()
    pass=$('#pass_sing').val()
    pass2=$('#pass2_sign').val()

    let data = {
        action: 'sign',
        user: user,
        pass: pass
    };
    if (pass === pass2){

        $.ajax({
            type: 'POST',
            url: 'https://localhost/digistyle/ajax.php',
            data: JSON.stringify(data),
            success: function (data) {
                console.log(data);
                if (data != 0) {
                    alert("کاربر ثبت شد")
                   window.location.href = "https://localhost/digistyle/";
                } else {
                    alert("کاربری با این مشخصات وجود داشته")
                }
            }
        })
    }else{
        alert("پسورد ها با هم برابر نیستن")
    }

})

