<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=\, initial-scale=1.0"> -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <style>
    @import 'https://fonts.googleapis.com/css?family=Titillium+Web:400,700';

    body {
      position: relative;
      background-color: #272a2f;
      font-family: 'Titillium Web', sans-serif;
      -webkit-font-smoothing: antialiased;
      height: 100%;
      width: 100%;
    }

    #restartbtn {
      text-align: center;
      color: #fff;
      cursor: pointer;
      margin: 20px;
    }

    .table {
      display: table;
      height: 100%;
      width: 100%;
      position: relative;
    }

    .cell {
      display: table-cell;
      vertical-align: middle;
      position: relative;
      width: 100%;
      text-align: center;
    }


    /*------
# Pincode
----*/

    #pincode {
      position: fixed;
      overflow: hidden;
      height: 667px;
      width: 375px;
      z-index: 9999;
      background-color: #272a2f;
      background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/214624/mountain.jpg");
      background-size: cover;
      background-position: center;
      color: #fff;
      border-radius: 10px;
      text-align: center;
      -webkit-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.6);
      -moz-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.6);
      box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.6);
      top: 50%;
      left: 50%;
      margin-top: -335px;
      /* Negative half of height. */
      margin-left: -188px;
      /* Negative half of width. */
    }

    #numbers {
      max-width: 300px;
      padding: 0 20px;
      margin: 0 auto;
      position: relative;
      display: block;
      -webkit-transition: all 1s ease-out;
      -moz-transition: all 1s ease-out;
      transition: all 1s ease-out;
      opacity: 1;
    }

    #numbers.hide {
      opacity: 0.3;
    }

    #pincode button {
      width: 70px;
      height: 70px;
      margin-bottom: 10px;
      background-color: rgba(0, 0, 0, 0.35);
      border: 0;
      color: #fff;
      font-size: 25px;
      line-height: 50px;
      border-radius: 100%;
      opacity: 1;
      outline: 0;
      border: 2px solid #272a2f;
    }

    #pincode button:active {
      background-color: rgba(0, 0, 0, 0.6);
      outline: 0;
    }

    #fields {
      max-width: 200px;
      padding: 0 20px;
      margin: 50px auto;
      position: relative;
      display: block;
    }

    #fields .numberfield {
      text-align: center;
    }

    #fields .numberfield span {
      height: 10px;
      width: 10px;
      border: 2px solid #fff;
      background-color: transparent;
      border-radius: 100%;
      position: relative;
      display: inline-block;
      text-align: center;
    }

    #fields .numberfield.active span {
      background-color: #fff;
    }

    #fields .numberfield.right span {
      background-color: #272a2f;
      border-color: #272a2f;
      transition: all .5s ease-in-out;
      -webkit-transition: all .5s ease-in-out;
    }


    /*------
# Toast Grid
----*/

    .grid {
      list-style: none;
      margin-left: -20px;
    }

    .grid__col--1-of-3,
    .grid__col--2-of-6,
    .grid__col--4-of-12 {
      width: 33.33333%;
    }

    .grid__col--1-of-4,
    .grid__col--2-of-8,
    .grid__col--3-of-12 {
      width: 25%;
    }

    .grid__col {
      box-sizing: border-box;
      display: inline-block;
      margin-right: -.25em;
      min-height: 1px;
      padding-left: 20px;
      vertical-align: top;
    }

    .grid__col--centered {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .grid__col--d-first {
      float: left;
    }

    .grid__col--d-last {
      float: right;
    }

    .grid--no-gutter {
      margin-left: 0;
      width: 100%;
    }

    .grid--no-gutter .grid__col {
      padding-left: 0;
    }

    .grid--no-gutter .grid__col--span-all {
      margin-left: 0;
      width: 100%;
    }

    .grid__col--ab {
      vertical-align: bottom;
    }

    .grid__col--am {
      vertical-align: middle;
    }

    .miss {
      -webkit-animation: miss .8s ease-out 1;
      animation: miss .8s ease-out 1;
    }

    @-webkit-keyframes miss {
      0% {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
      }

      10% {
        -webkit-transform: translate(-25px, 0);
        transform: translate(-25px, 0);
      }

      20% {
        -webkit-transform: translate(25px, 0);
        transform: translate(25px, 0);
      }

      30% {
        -webkit-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
      }

      40% {
        -webkit-transform: translate(20px, 0);
        transform: translate(20px, 0);
      }

      50% {
        -webkit-transform: translate(-10px, 0);
        transform: translate(-10px, 0);
      }

      60% {
        -webkit-transform: translate(10px, 0);
        transform: translate(10px, 0);
      }

      70% {
        -webkit-transform: translate(-5px, 0);
        transform: translate(-5px, 0);
      }

      80% {
        -webkit-transform: translate(5px, 0);
        transform: translate(5px, 0);
      }

      100% {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
      }
    }

    @keyframes miss {
      0% {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
      }

      10% {
        -webkit-transform: translate(-25px, 0);
        transform: translate(-25px, 0);
      }

      20% {
        -webkit-transform: translate(25px, 0);
        transform: translate(25px, 0);
      }

      30% {
        -webkit-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
      }

      40% {
        -webkit-transform: translate(20px, 0);
        transform: translate(20px, 0);
      }

      50% {
        -webkit-transform: translate(-10px, 0);
        transform: translate(-10px, 0);
      }

      60% {
        -webkit-transform: translate(10px, 0);
        transform: translate(10px, 0);
      }

      70% {
        -webkit-transform: translate(-5px, 0);
        transform: translate(-5px, 0);
      }

      80% {
        -webkit-transform: translate(5px, 0);
        transform: translate(5px, 0);
      }

      100% {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
      }
    }

    #hastylink {
      position: fixed;
      bottom: 5px;
      left: 0;
      right: 0;
      font-size: 13px;
      color: #fff;
      text-decoration: none;
      text-align: center;
    }
  </style>
</head>

<body>

  <body>
    <div id="pincode">
      <div class="table">
        <div class="cell">

          <div id="anleitung">
            <p>
              <strong>Please enter the correct PIN-Code.</strong><br> It is: 1234 / Also try a wrong code
            </p>
          </div>

          <div id="fields">
            <div class="grid">
              <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
              <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
              <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
              <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
            </div>
          </div>

          <div id="numbers">
            <div class="grid">
              <div class="grid__col grid__col--1-of-3"><button>1</button></div>
              <div class="grid__col grid__col--1-of-3"><button>2</button></div>
              <div class="grid__col grid__col--1-of-3"><button>3</button></div>

              <div class="grid__col grid__col--1-of-3"><button>4</button></div>
              <div class="grid__col grid__col--1-of-3"><button>5</button></div>
              <div class="grid__col grid__col--1-of-3"><button>6</button></div>

              <div class="grid__col grid__col--1-of-3"><button>7</button></div>
              <div class="grid__col grid__col--1-of-3"><button>8</button></div>
              <div class="grid__col grid__col--1-of-3"><button>9</button></div>

              <div class="grid__col grid__col--1-of-3"></div>
              <div class="grid__col grid__col--1-of-3"><button>0</button></div>
              <div class="grid__col grid__col--1-of-3"></div>

            </div>
          </div>

        </div>
      </div>
    </div>
    <div id="restartbtn">RESTART</div>
    <a id="hastylink" target="_blank" href="https://www.wp-hasty.com/">Are you a WordPress developer?<br>Then click to check out my latest project Hasty!</a>
  </body>
  <script>
    $(document).ready(function() {

      // http://www.jsfuck.com/
      //   var pin = (+!![] + []) + (!+[] + !![] + []) + (!+[] + !![] + !![] + []) + (!+[] + !![] + !![] + !![] + []);

      var pin = "1235";
      var enterCode = "";
      enterCode.toString();

      $("#numbers button").click(function() {

        var clickedNumber = $(this).text().toString();
        enterCode = enterCode + clickedNumber;
        var lengthCode = parseInt(enterCode.length);
        lengthCode--;
        $("#fields .numberfield:eq(" + lengthCode + ")").addClass("active");

        if (lengthCode == 3) {

          // Check the PIN
          if (enterCode == pin) {
            // Right PIN!
            $("#fields .numberfield").addClass("right");
            $("#numbers").addClass("hide");
            $("#anleitung p").html("Amazing!<br>You entered the correct Code!");

          } else {
            // Wrong PIN!
            $("#fields").addClass("miss");
            enterCode = "";
            setTimeout(function() {
              $("#fields .numberfield").removeClass("active");
            }, 200);
            setTimeout(function() {
              $("#fields").removeClass("miss");
            }, 500);

          }

        } else {}

      });

      $("#restartbtn").click(function() {
        enterCode = "";
        $("#fields .numberfield").removeClass("active");
        $("#fields .numberfield").removeClass("right");
        $("#numbers").removeClass("hide");
        $("#anleitung p").html("<strong>Please enter the correct PIN-Code.</strong><br> It is: 1234 / Also try a wrong code");
      });

    });
  </script>

</html>