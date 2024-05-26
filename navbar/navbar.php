

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <!-- Unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Lobster&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Itim&family=Playfair+Display:ital,wght@1,600&family=Red+Hat+Display:wght@700&family=Vina+Sans&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Itim&family=Playfair+Display:ital,wght@1,600&family=Quicksand:wght@300&family=Red+Hat+Display:wght@700&family=Vina+Sans&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Itim&family=Josefin+Sans:wght@700&family=Playfair+Display:ital,wght@1,600&family=Quicksand:wght@300&family=Red+Hat+Display:wght@700&family=Vina+Sans&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Bricolage Grotesque', sans-serif;
  }

  body {
    min-height: 100vh;
  }

  .section-main {
    position: relative;
    width: 100%;
    min-height: 80vh;
    background: url(https://images.unsplash.com/photo-1524234107056-1c1f48f64ab8?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 100px;

  }

  .section-main h1 {
    font-size: 60px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 80px;
    color: rgba(255, 255, 255, 0.5);
  }

  header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 100px;
    z-index: 999;
    transition: 0.6s;
  }

  header.sticky {
    background-color: #ffc221;
    padding: 0px 100px;
    
  }

  header .brand {
    font-size: 30px;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
  }

  header .menu {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  header .menu a {
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    color: #fff;
    margin: 0 7px;
    padding: 5px 15px;
    text-transform: uppercase;
    border-radius: 15px;
    transition: 0.3s;
    transition-property: color, background;
  }

  /* header .menu a:hover{
  color: #000;
  background: #fff;
} */

  header .btn {
    font-size: 25px;
    cursor: pointer;
    color: #fff;
    display: none;
  }

  .section-two {
    min-height: 100vh;
    background: #222;
    padding: 20px 100px;
  }

  .section-two h2 {
    font-size: 50px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 30px 0;
    color: rgba(255, 255, 255, 0.8);
  }

  .section-two p {
    font-size: 18px;
    margin: 30px 0;
    color: rgba(255, 255, 255, 0.5);
  }

  @media (max-width: 1024px) {
    header .btn {
      display: block;
    }

    header .menu.active {
      right: 0;
    }

    header .menu {
      position: fixed;
      background: #ffc221;
      flex-direction: column;
      min-width: 320px;
      height: 100vh;
      top: 0;
      right: -100%;
      padding: 80px 50px;
      transition-property: right;
      transition: 0.5s;
    }

    header .menu .close-btn {
      position: absolute;
      top: 0;
      left: 0;
      margin: 25px;
    }

    header .menu a {
      display: block;
      font-size: 15px;
      margin: 30px;
      padding: 0 10px;
    }
  }

  @media (max-width: 580px) {
    .section-main h1 {
      font-size: 50px;
      line-height: 60px;
    }
  }


  /* for me */



  header .menu .ancor :hover {
    color: #53A3C3;;
    transition: 0.4s;
  }



  header .menu .ancor::after {
    content: '';
    display: block;
    width: 0%;
    height: 3px;
    background-color: #53A3C3;;
    transition: 0.4s;

  }

  header .menu .ancor:hover::after {
    width: 100%;

  }

  /* popup css */

  .button {
    padding: 6px 24px;
    border: 2px solid #fff;
    background: transparent;
    border-radius: 6px;
    cursor: pointer;
  }

  .button:active {
    transform: scale(0.98);
  }

  /* Home */
  /* .home {
        position: relative;
        height: 100vh;
        width: 100%;
        background-image: url(https://images.unsplash.com/photo-1683009427540-c5bd6a32abf6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
        background-size: cover;
        background-position: center;
    } */

  .home::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    /* background-color: rgba(0, 0, 0, 0.6); */
    z-index: 100;
    opacity: 0;
    pointer-events: none;
    transition: all 0.5s ease-out;
  }

  .home.show::before {
    opacity: 1;
    pointer-events: auto;
  }

  /* From */
  .form_container {
    position: fixed;
    max-width: 320px;
    width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(1.2);
    z-index: 101;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.4s ease-out;
  }

  .home.show .form_container {
    opacity: 1;
    pointer-events: auto;
    transform: translate(-50%, -50%) scale(1);
  }

  .signup_form {
    display: none;
  }

  .form_container.active .signup_form {
    display: block;
  }

  .form_container.active .login_form {
    display: none;
  }

  .form_close {
    position: absolute;
    top: 10px;
    right: 20px;
    color: #ffc221;
    font-size: 22px;
    opacity: 0.7;
    cursor: pointer;
  }

  .form_container h2 {
    font-size: 22px;
    color: #ffc221;
    text-align: center;
  }

  .input_box {
    position: relative;
    margin-top: 30px;
    width: 100%;
    height: 40px;
  }

  .input_box input {
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    padding: 0 30px;
    color: #ffc221;
    transition: all 0.2s ease;
    border-bottom: 1.5px solid #9ac100;
  }

  .input_box input:focus {
    border-color: #ffc221;
  }

  .input_box i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #ffc221;
  }

  .input_box i.email,
  .input_box i.password {
    left: 0;
  }

  .input_box input:focus~i.email,
  .input_box input:focus~i.password {
    color: #ffc221;
  }

  .input_box i.pw_hide {
    right: 0;
    font-size: 18px;
    cursor: pointer;
  }

  .option_field {
    margin-top: 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .form_container a {
    color: #ffc221;
    font-size: 12px;
  }

  .form_container a:hover {
    text-decoration: underline;
  }

  .checkbox {
    display: flex;
    column-gap: 8px;
    white-space: nowrap;
  }

  .checkbox input {
    accent-color: #ffc221;
  }

  .checkbox label {
    font-size: 12px;
    cursor: pointer;
    user-select: none;
    color: #ffc221;
  }

  .form_container .button {
    background: #ffc221;
    margin-top: 30px;
    width: 100%;
    padding: 10px 0;
    border-radius: 10px;
  }

  .login_signup {
    font-size: 12px;
    text-align: center;
    margin-top: 15px;
  }
</style>

<body>

  <header>
    <h1><span><span style="color: #53A3C3; font-size: 45px;">C</span><span style="color: #fff">reatorLAB</span><span style="color: #53A3C3;; font-size: 50px;">.</span></h1>
    <div class="menu">
      <div class="btn">
        <i class="fas fa-times close-btn"></i>
      </div>
      <a class="ancor" href="index.php">Home</a>
      <a class="ancor" href="about.php">About</a>
      <a class="ancor" href="product.php">Products</a>
      <a class="ancor" href="blog.php">Blog</a>
      <a class="ancor" href="contact.php">Contact</a>
      <div class="register" style="margin-bottom: 11px; margin-left: 1px;">
        <button class="button" id="form-open" style="color: white;">Login</button>
      </div>
    </div>

    <div class="btn">
      <i class="fas fa-bars menu-btn"></i>
    </div>
  </header>


  <section class="section-main">
    <!-- <h1>Sticky Navigation Navbar</h1> -->
  </section>
  <script>
    //Javascript for Navigation effect on scroll
    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle('sticky', window.scrollY > 0);
    });

    //Javascript for responsive navigation sidebar Nav
    var menu = document.querySelector('.menu');
    var menuBtn = document.querySelector('.menu-btn');
    var closeBtn = document.querySelector('.close-btn');

    menuBtn.addEventListener("click", () => {
      menu.classList.add('active');
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove('active');
    });
  </script>

  <!-- for popup coding -->

 

  <!-- Home -->
  <section class="home">
    <div class="form_container">
      <i class="uil uil-times form_close"></i>
      <!-- Login From -->
      <div class="form login_form">
        <form action="admin_cpri_login.php" method="POST">
          <h2>Login</h2>

          <div class="input_box">
            <input type="text" name="username" placeholder="UserName" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" name="password" placeholder="password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div class="option_field">
            <span class="checkbox">
              <input type="checkbox" id="check" />
              <label for="check">Remember me</label>
            </span>
            <a href="#" class="forgot_pw">Forgot password?</a>
          </div>

          <button class="button" type="submit">Login Now</button>

          <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
        </form>
      </div>

      <!-- Signup From -->
      <div class="form signup_form">
        <form action="#">
          <h2>Signup</h2>

          <div class="input_box">
            <input type="email" placeholder="Enter your email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Create password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Confirm password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <button class="button">Signup Now</button>

          <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
      </div>
    </div>
  </section>

  <script>
    const formOpenBtn = document.querySelector("#form-open"),
      home = document.querySelector(".home"),
      formContainer = document.querySelector(".form_container"),
      formCloseBtn = document.querySelector(".form_close"),
      signupBtn = document.querySelector("#signup"),
      loginBtn = document.querySelector("#login"),
      pwShowHide = document.querySelectorAll(".pw_hide");

    formOpenBtn.addEventListener("click", () => home.classList.add("show"));
    formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

    pwShowHide.forEach((icon) => {
      icon.addEventListener("click", () => {
        let getPwInput = icon.parentElement.querySelector("input");
        if (getPwInput.type === "password") {
          getPwInput.type = "text";
          icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
          getPwInput.type = "password";
          icon.classList.replace("uil-eye", "uil-eye-slash");
        }
      });
    });

    signupBtn.addEventListener("click", (e) => {
      e.preventDefault();
      formContainer.classList.add("active");
    });
    loginBtn.addEventListener("click", (e) => {
      e.preventDefault();
      formContainer.classList.remove("active");
    });
  </script>


</body>

</html>