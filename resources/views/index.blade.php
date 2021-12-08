<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internom</title>
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <body>
        
    <div class="navigation">
        <img class="logo" src="{{ URL::asset('images/internom_white.png') }}" alt="">
        <div class="menu">
            <a class="links" href=""><img class="home" src="{{ URL::asset('images/home.png') }}" alt="">
          </a>
              <a class="links" href="">ном</a>
        </div>
        <div class="search">
            <input class="search_input" type="text" name="" id="" placeholder="Хайх">
            <div class="search_background">
            <img class="search_logo" src="{{ URL::asset('images/search.png') }}" alt="">
            </div>
        </div>
        <button onclick="document.getElementById('form_login').style.display='block';" class="button_login">Нэвтрэх</button>
    </div>
    <div class="highlights">
    </div>
        
    <div id="form_login">
        <img onclick="document.getElementById('form_login').style.display='none';" class="form_close" src="{{ URL::asset('images/close.png') }}" alt="">
        <form id="login" action="" method="POST">
            <div class="newtreh">Нэвтрэх</div>
            <div class="login_position">
                <input class="login_inputs" type="text" name="" id="" placeholder="Таны имэйл хаяг">                 
                <input class="login_inputs" type="text" name="" id="" placeholder="Таны нууц үг"><br>
                <input id="button_log_in" type="button" name="" id="" value="Нэвтрэх">
            </div>
            <p class="tosignup">Хэрэв бүртгэлгүй хэрэглэгч бол <br><span onclick="changeToSignUp()"  class="link_to_sign_up">Бүртгүүлэх</span></p>
        </form>    

        <form id="sign_up" action="" method="POST" style="display:none;">
            <div class="burtguuleh">Бүртгүүлэх</div>~
            <div class="sign_position">
                <input class="sign_inputs" type="text" name="" id="" placeholder="Нэр">                 
                <input class="sign_inputs" type="text" name="" id="" placeholder="Овог">
                <input class="sign_inputs" type="text" name="" id="" placeholder="Гэрийн хаяг">
                <input class="sign_inputs" type="text" name="" id="" placeholder="Регистрийн дугаар">
                <input class="sign_inputs" type="text" name="" id="" placeholder="Утасны дугаар">
                <input class="sign_inputs" type="text" name="" id="" placeholder="Кредит картын дугаар">
                <input class="sign_inputs" type="text" name="" id="" placeholder="Имэйл хаяг">
                <input class="sign_inputs" type="text" name="" id="" placeholder="Нууц үг"><br>
                <input id="button_sign_up" type="button" name="" id="" value="Бүртгүүлэх">
            </div>
            <p class="tologin">Хэрэв бүртгэлтэй хэрэглэгч бол <br><span onclick="changeToLogin()" class="link_to_sign_up">Нэвтрэх</span></p>
        </form>     
    </div>

    <script>
        function changeToLogin(){
            document.getElementById('login').style.display='block';
            document.getElementById('sign_up').style.display='none';
        }
        function changeToSignUp(){
            document.getElementById('login').style.display='none';
            document.getElementById('sign_up').style.display='block';
        }
    </script>
    

</body>
</html>