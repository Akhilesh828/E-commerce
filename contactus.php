<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <style>
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      padding: 0 10px;
      min-height: 100vh;
      background: #fffefc;
      align-items: center;
      justify-content: center;
    }

    .logo {
      display: flex;
      position: relative;
      right: 150px;
    }

    ::selection {
      color: #fff;
      background: #07f7ff;
    }

    .contactus {
      width: 715px;
      background: #c300ff;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0px 0px 500px #c300ff;
    }

    .contactus header {
      color: #00ffff;
      font-size: 22px;
      font-weight: 600;
      padding: 20px 30px;
      border-bottom: 1px solid rgb(255, 255, 255);
    }

    .contactus form {
      margin: 35px 30px;
    }

    .contactus form.disabled {
      pointer-events: none;
      opacity: 0.7;
    }

    form .dbl-field {
      display: flex;
      margin-bottom: 25px;
      justify-content: space-between;
    }

    .dbl-field .field {
      height: 50px;
      display: flex;
      position: relative;
      width: calc(100% / 2 - 13px);
    }

    .wrapper form i {
      position: absolute;
      top: 50%;
      left: 18px;
      color: rgb(0, 217, 255);
      font-size: 17px;
      pointer-events: none;
      transform: translateY(-50%);
    }

    form .field input,
    form .message textarea {
      width: 100%;
      height: 100%;
      outline: none;
      padding: 0 18px 0 48px;
      font-size: 16px;
      border-radius: 5px;
      border: 5px solid #07f7ff;
    }
    form .field input:hover,
    form:hover .message:hover textarea:hover{
      box-shadow: -10px 10px 100px #07f7ff;
    }

    .field input::placeholder,
    .message textarea::placeholder {
      color: rgb(183, 0, 255);
    }

    .field input:focus,
    .message textarea:focus {
      padding-left: 47px;
      border: 5px solid #07f7ff;
    }

    .field input:focus~i,
    .message textarea:focus~i {
      color: #34ff0b;
    }

    form .message {
      position: relative;
    }

    form .message i {
      top: 30px;
      font-size: 20px;
    }

    form .message textarea {
      min-height: 130px;
      max-height: 230px;
      max-width: 100%;
      min-width: 100%;
      padding: 15px 20px 0 48px;
    }

    form .message textarea::-webkit-scrollbar {
      width: 0px;
    }

    .message textarea:focus {
      padding-top: 14px;
    }

    form .button-area {
      margin: 25px 0;
      display: flex;
      align-items: center;
    }

    .button-area button {
      color: #fff;
      border: none;
      outline: none;
      font-size: 18px;
      cursor: pointer;
      border-radius: 5px;
      padding: 13px 25px;
      background: #0D6EFD;
      transition: background 0.3s ease;
    }

    .button-area button:hover {
      background: #07f7ff;
    }

    .button-area span {
      font-size: 17px;
      margin-left: 30px;
      display: none;
    }

    @media (max-width: 600px) {
      .contactus header {
        text-align: center;
      }

      .contactus form {
        margin: 35px 20px;
      }

      form .dbl-field {
        flex-direction: column;
        margin-bottom: 0px;
      }

      form .dbl-field .field {
        width: 100%;
        height: 45px;
        margin-bottom: 20px;
      }

      form .message textarea {
        resize: none;
      }

      form .button-area {
        margin-top: 20px;
        flex-direction: column;
      }

      .button-area button {
        width: 100%;
        padding: 11px 0;
        font-size: 16px;
      }

      .button-area span {
        margin: 20px 0 0;
        text-align: center;
      }
    }
  </style>

</head>

<body>

  <div class="logo">

    <a href="Project.php"><img src="images/LOGO-BACKGROUND.png" alt="" width="260px"></a>

  </div>
  <div class="contactus">
    <header>Send us a Message</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email" required>
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="website" placeholder="Enter your website">
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message" required></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>
        <span></span>
      </div>
    </form>
  </div> 

  <script src="script.js"></script>

</body>

</html>