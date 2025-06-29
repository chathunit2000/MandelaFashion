<link href="/style/styles.css" rel="stylesheet">
<style>
    /* ------------------login css ----------------------*/
    .body {
        display: flex;
        flex-direction: column;
    }

    .content {
        background-color: rgb(255, 255, 255);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: auto;
        ;
        width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        display: grid;
        flex-direction: column;
        justify-content: center;
        min-height: 100vh;
        z-index: 0;
    }

    .wrapper {

        top: 50%;
        position: fixed;
        left: 35%;
        top: 20%;
        display: none;
        width: 420px;
        height: 410px;
        background-color: transparent;
        color: #ffffff;
        border-radius: 20px;
        z-index: 1;
        padding: 30px 40px;
        backdrop-filter: blur(24px);
    }

    .wrapper .form-box {
        position: absolute;
        top: 0;
        width: 80%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .wrapper .input-box {
        position: relative;
        width: 93%;
        height: 50px;
        margin: 30px 0;
        border-radius: 40px;
        color: #ffffff;
    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-40%);
        font-size: 18px;
        color: #ffffff;
        pointer-events: none;
        padding-left: 35px;
        transition: .5s;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        top: -4px;
        color: white;
        font-weight: bold;

    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        color: #ffffff;
        font-size: 18px;
        padding-left: 20px;
        transition: .5s;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        border-bottom-color: #0ef;
    }

    .input-box input::placeholder {
        color: transparent;
        font-size: 18px;
        padding-left: 20px;
    }

    .input-box i {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        color: #ffffff;
    }

    .wrapper .remember-forget {
        display: flex;
        justify-content: space-between;
        margin: 15px 0;
        font-size: 20px;
        padding-left: 10px;
        padding-right: 10px;
    }

    .remember-forget label input {
        accent-color: #ffffff;
        margin-right: 3px;
    }

    .remember-forget a {
        color: #ffffff;
        text-decoration: none;
    }

    .remenber-forget a:hover {
        text-decoration: underline;
    }

    .wrapper .btn {
        width: 100%;
        height: 45px;
        border: none;
        outline: none;
        background: #ffffff;
        cursor: pointer;
        color: #2b547e;
        font-size: 18px;
        font-weight: 1000;
        margin: 20px 0;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    }

    .btn:hover {
        background: #2b547e;
        color: #ffffff;
        transition: 0.5s;
        transform: scale3d(1.1, 1.1, 1.1);
        margin: 5px;
    }

    .wrapper .register-link {
        font-size: 20px;
        text-align: center;
        margin-top: 20px;
    }

    .register-link p a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 1000;
    }

    .register-link p a:hover {
        text-decoration: underline;
    }

    .bg-img1 .btn2 {
        height: 30px;
        width: 100px;
        justify-self: right;
        background-color: transparent;
        color: #ffffff;
        border-radius: 10px;
        font-weight: 1000;
        margin-left: 90%;
        margin-top: 20px;
        backdrop-filter: blur(24px);
    }

    .btn2:hover {
        background: transparent;
        color: white;
        transition: 0.2s;
        transform: scale(1.2);
    }

    .wrapper .close {
        position: relative;
        margin-left: 100%;
        color: #000;
        font-size: 30px;
        font-weight: bold;
        padding: top 0px;
    }

    .close:hover,
    .close:focus {
        color: red;
        transition: 0.5s;
        cursor: pointer;
    }
</style>
<div id="login" class="wrapper">
    <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="form-box" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <div class="input-box">
            <input type="text" name="user" required>
            <label>User Name</label>
            <i class="bi bi-person-fill"></i>
        </div>

        <div class="input-box">

            <input type="password" name="password" required>
            <label>Password</label>
            <i class="bi bi-shield-lock-fill"></i>
        </div>

        <div class="remember-forget">
            <label>
                <input type="checkbox"> remember me
            </label>
            <a href="#">Forget Password</a>
        </div>

        <button type="submit" class="btn">Sign-in</button>

        <div class="register-link">
            <p>Don't have an Account?
                <a href="/Clothing-Web-Application-Development/register.php"> Register</a>
            </p>
        </div>

    </form>
</div>
