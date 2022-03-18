<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Multi Step Form</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <form id="myForm" action="" method="post" autocomplete = "off">
      <h1 align = center>Register</h1>

      <div style="text-align:center;">
        <span class="step" id = "step-1">1</span>
        <span class="step" id = "step-2">2</span>
        <span class="step" id = "step-3">3</span>
        <span class="step" id = "step-4">4</span>
      </div>

      <div class="tab" id = "tab-1">
        <p>Name:</p>
        <input type = "text" placeholder="First Name" name="firstname" id = "input-1">
        <input type = "text" placeholder="Last Name" name="lastname" id = "input-2">
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(2, 1, 2);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-2">
        <p>Contact Info:</p>
        <input type = "text" placeholder="Email" name="email" id = "input-3">
        <input type = "text" placeholder="Phone" name="phone" id = "input-4">
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(0, 2, 1);">Previous</div>
          <div class="index-btn" onclick="run(4, 2, 3);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-3">
        <p>Birthday:</p>
        <input type = "text" placeholder="dd" name="dd" id = "input-5">
        <input type = "text" placeholder="mm" name="mm" id = "input-6">
        <input type = "text" placeholder="yy" name="yy" id = "input-7">
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(0, 3, 2);">Previous</div>
          <div class="index-btn" onclick="run(7, 3, 4);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-4">
        <p>Login Info:</p>
        <input type = "text" placeholder="Username" name="username" id = "input-8">
        <input type = "password" placeholder="Password" name="password" id = "input-9">
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(0, 4, 3);">Previous</div>
          <div class="index-btn" onclick="run(9, 4, 5);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-5">
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(0, 5, 4);">Previous</div>
          <button class = "index-btn" type="submit" name="submit" style = "background: blue;">Submit</button>
        </div>
      </div>
    </form>

    <script>
      // Default tab
      $(".tab").css("display", "none");
      $("#tab-1").css("display", "block");

      function run(countInput, hideTab, showTab){
        // Validation
        for (i = 1; i <= countInput; i++){
          if($('#input-'+i).val() == ""){
            $("#input-"+i).css("background", "#ffdddd");
            return false;
          }
        }

        // Progress bar
        for (i = 1; i < showTab; i++){
          $("#step-"+i).css("opacity", "1");
        }

        // Switch tab
        $("#tab-"+hideTab).css("display", "none");
        $("#tab-"+showTab).css("display", "block");
        $("input").css("background", "#fff");
      }
    </script>
  </body>
</html>
