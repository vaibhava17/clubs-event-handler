<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/ssvgi/ssvgi-logo.jpg">
  <title>SSVGI - Activity Club</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/css/bootstrap.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/css/style.css">

  <!--Carousel part1-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/css2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/css2/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/css2/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Event Card -->

  <style type="text/css">
    a {
      text-decoration: none
    }

    /*event post*/
    .header-page {
      position: relative;
      min-height: 450px;
    }

    .header-page .inner-content {
      padding: 25px;
      background: rgba(255, 255, 255, 0.8);
      display: table;
      height: 410px;
      width: 100%;
      margin-top: 20px;
      margin-left: 20px;
    }

    .header-page .inner-content.dribble-header {
      height: 220px;
    }

    .header-page .inner-content .header-content {
      display: table-cell;
    }

    .header-page .inner-content .header-content h1 {
      text-align: center;
      font-size: 60px;
      font-family: 'Gilroy', sans-serif;
    }

    .header-page .inner-content .header-content hr {
      float: none;
    }

    .header-page .inner-content .header-content p {
      font-size: 18px;
    }

    /*about*/
    .about {
      background: url(images/ssvgi/about.png) no-repeat left;
      background-size: 55%;
      background-color: #000;
      overflow: hidden;
      padding: 50px 0;

    }

    .inner-section {
      width: 55%;
      float: right;
      background-color: #db8458;
      padding: 140px;
      box-shadow: 13px 12px 8px rgba(0, 0, 0, 0.3);
    }

    .inner-section h1 {
      margin-bottom: 30px;
      font-size: 30px;
      font-weight: 900;
    }

    .text {
      font-size: 13px;
      color: #545454;
      line-height: 30px;
      text-align: justify;
      margin-bottom: 40px;
    }

    .skills button {
      font-size: 22px;
      text-align: center;
      letter-spacing: 2px;
      border: none;
      border-radius: 20px;
      padding: 8px;
      width: 200px;
      background-color: #00999c;
      color: white;
      cursor: pointer;
    }

    .skills button:hover {
      transition: 1s;
      background-color: #ecf5f5;
      color: #00999c;
    }

    @media screen and (max-width:1200px) {
      .inner-section {
        padding: 80px;
      }
    }

    @media screen and (max-width:1000px) {
      .about {
        background-size: 100%;
        padding: 100px 40px;
      }

      .inner-section {
        width: 100%;
      }
    }

    @media screen and (max-width:600px) {
      .about {
        padding: 0;
      }

      .inner-section {
        padding: 60px;
      }

      .skills button {
        font-size: 19px;
        padding: 5px;
        width: 160px;
      }
    }

    /*contact*/
    #contact {
      width: 100%;
      height: 100%;
      background-color: #000;
      /*overflow: hidden;*/
    }

    .section-header {
      text-align: center;
      margin: 0 auto;
      padding: 40px 0;
      font: 300 60px 'Oswald', sans-serif;
      letter-spacing: 6px;
      color: #fff;
    }

    .contact-wrapper {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      margin: 0 auto;
      padding: 20px;
      position: relative;
      max-width: 820px;
    }

    /* Left contact page */
    .form-horizontal {
      /*float: left;*/
      max-width: 400px;
      font-family: 'Lato';
      font-weight: 400;
    }

    .form-control,
    textarea {
      max-width: 400px;
      background-color: #000;
      color: #fff;
      letter-spacing: 1px;
    }

    .send-button {
      margin-top: 15px;
      height: 34px;
      width: 400px;
      overflow: hidden;
      transition: all .2s ease-in-out;
    }

    .alt-send-button {
      width: 400px;
      height: 34px;
      transition: all .2s ease-in-out;
    }

    .send-text {
      display: block;
      margin-top: 10px;
      font: 700 12px 'Lato', sans-serif;
      letter-spacing: 2px;
    }

    .alt-send-button:hover {
      transform: translate3d(0px, -29px, 0px);
    }

    /* Begin Right Contact Page */
    .direct-contact-container {
      max-width: 400px;
      /*float: right;*/
      margin-top: 5px;
    }

    /* Location, Phone, Email Section */
    .contact-list {
      list-style-type: none;
      margin-left: -30px;
      padding-right: 20px;
    }

    .list-item {
      line-height: 4;
      color: #aaa;
    }

    .contact-text {
      font: 300 18px 'Lato', sans-serif;
      letter-spacing: 1.9px;
      color: #bbb;
    }

    .place {
      margin-left: 62px;
    }

    .phone {
      margin-left: 56px;
    }

    .gmail {
      margin-left: 53px;
    }

    .contact-text a {
      color: #bbb;
      text-decoration: none;
      transition-duration: 0.2s;
    }

    .contact-text a:hover {
      color: #fff;
      text-decoration: none;
    }

    /* Social Media Icons */
    .social-media-list {
      position: relative;
      font-size: 2rem;
      text-align: center;
      width: 100%;
      margin: 0 auto;
      padding: 0;
    }

    .social-media-list li a {
      color: #fff;
    }

    .social-media-list li {
      position: relative;
      display: inline-block;
      height: 60px;
      width: 60px;
      margin: 10px 3px;
      line-height: 60px;
      border-radius: 50%;
      color: #fff;
      background-color: rgb(27, 27, 27);
      cursor: pointer;
      transition: all .2s ease-in-out;
    }

    .social-media-list li:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 60px;
      height: 60px;
      line-height: 60px;
      border-radius: 50%;
      opacity: 0;
      box-shadow: 0 0 0 1px #fff;
      transition: all .2s ease-in-out;
    }

    .social-media-list li:hover {
      background-color: #fff;
    }

    .social-media-list li:hover:after {
      opacity: 1;
      transform: scale(1.12);
      transition-timing-function: cubic-bezier(0.37, 0.74, 0.15, 1.65);
    }

    .social-media-list li:hover a {
      color: #000;
    }

    .copyright {
      font: 200 14px 'Oswald', sans-serif;
      color: #555;
      letter-spacing: 1px;
      text-align: center;
    }

    /* Begin Media Queries*/
    @media screen and (max-width: 850px) {
      .contact-wrapper {
        display: flex;
        flex-direction: column;
      }

      .direct-contact-container,
      .form-horizontal {
        /*float: none;*/
        margin: 10px auto;
      }

      .direct-contact-container {
        margin-top: 60px;
        max-width: 300px;
      }

      .social-media-list li {
        height: 60px;
        width: 60px;
        line-height: 60px;
      }

      .social-media-list li:after {
        width: 60px;
        height: 60px;
        line-height: 60px;
      }
    }

    @media screen and (max-width: 569px) {

      .direct-contact-container,
      .form-wrapper {
        float: none;
        margin: 0 auto;
      }

      .form-control,
      textarea {
        max-width: 340px;
        margin: 0 auto;
      }

      .name,
      .email,
      textarea {
        width: 280px;
      }

      .direct-contact-container {
        margin-top: 60px;
        max-width: 280px;
      }

      .social-media-list {
        left: 0;
      }

      .social-media-list li {
        height: 55px;
        width: 55px;
        line-height: 55px;
        font-size: 2rem;
      }

      .social-media-list li:after {
        width: 55px;
        height: 55px;
        line-height: 55px;
      }
    }

    @media screen and (max-width: 410px) {
      .send-button {
        width: 99%;
      }
    }

    /*gallery*/
    .lightbox-gallery {

      background-repeat: no-repeat;
      color: #000;
      overflow-x: hidden
    }

    .lightbox-gallery p {
      color: #000
    }

    .lightbox-gallery h2 {
      font-weight: bold;
      margin-bottom: 40px;
      padding-top: 40px;
      color: #000
    }

    @media (max-width:767px) {
      .lightbox-gallery h2 {
        margin-bottom: 25px;
        padding-top: 25px;
        font-size: 24px
      }
    }

    .lightbox-gallery .intro {
      font-size: 16px;
      max-width: 500px;
      margin: 0 auto 40px
    }

    .lightbox-gallery .intro p {
      margin-bottom: 0
    }

    .lightbox-gallery .photos {
      padding-bottom: 20px
    }

    .lightbox-gallery .item {
      padding-bottom: 30px
    }

    @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");

    * {
      box-sizing: border-box;
    }

    .cs {
      display: flex;
      width: 1040px;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }

    .card {
      margin: 10px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      width: 400px;
    }

    .card-header img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      min-height: 250px;
    }

    .card-body h2 {
      text-align: center;
      color: darkorange;
      font-family: sans-serif;
      font-style: bold;
    }

    .tag {
      background: #cccccc;
      border-radius: 50px;
      font-size: 12px;
      margin: 0;
      color: #fff;
      padding: 2px 10px;
      text-transform: uppercase;
      cursor: pointer;
    }

    .tag-teal {
      background-color: #47bcd4;
    }

    .tag-purple {
      background-color: #5e76bf;
    }

    .tag-pink {
      background-color: #cd5b9f;
    }

    .card-body p {
      font-size: 13px;
      margin: 0 0 40px;
    }

    .user {
      display: flex;
      margin-top: auto;
    }

    .user-info {
      align-items: left;
    }

    .user img {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    .user-info h5 {
      margin: 0;
    }

    .user-info small {
      color: #545d7a;
    }

    .form2 {
      color: black;
      background-color: white;
    }

    .nav-item li {
      font-size: 30px;
    }
  </style>

</head>