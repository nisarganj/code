<!DOCTYPE html>

<html lang="en" ng-app = "Wapp">

  <head>
      <meta charset="UTF-8">
      <link rel = "stylesheet" type = "text/css" href = "main.css">
      <title>WARD APPLICATION</title>

  </head>

  <body>
      <h1>MY WARD</h1>

      <center>
          <img src = "C:\Users\Lavanya\Documents\GitHub\DMBS-project\images\grp1.png" padding : 1px ><br>
      </center>
      <div>
              <p class = "c1 ">WELCOME TO THE WARD APPLICATION</p>
              <p class = "c2" >SELECT USER TYPE</p>
      </div>
      <center>
       <div class = "M1">
         <!-- Button1 -->
            <button class = "but" onclick="document.getElementById('mpopup1').style.display='block'">Login as Admin</button><br><br>
            <div id="mpopup1">
                Enter Admin Login Details<br><br>
                <form action="main.php" method="post">
                    <span style = "margin : 20px 80px 20px 0px ">Admin Id : </span>
                    <input type = "email" name="adminid">
                    <!-- <span class="msg" ng-show="myForm.user.$dirty && myForm.user.$invalid">
                        <span ng-show="myForm.user.$error.required"></span><br><br>
                    </span> -->
                    <span style = "margin : 20px 40px 20px 0px">Ward Number :</span> <input type = "text" name="wardno" ng-model = "wid"/><br><br>
                    <span style = "margin : 20px 80px 20px 0px">Password :</span> <input type = "password" name="password" ng-model = "password"/><br><br>
                    <input class = "but1" type = "submit"/>
                    <!-- <button class ="but1" onclick="document.getElementById('mpopup1').style.display ='none'">Cancel</button><br> -->
                </form>
            </div><br>
            <!-- Button2 -->
            <button class = "but" onclick="document.getElementById('mpopup2').style.display='block'">Voter Login</button><br><br>
            <div id="mpopup2">
               Enter Voter Login Details<br><br>
               <form>
                    <span style = "margin : 20px 20px 20px 0px ">Ward Number : </span><input type = "text" ><br><br>
                    <span style = "margin : 20px 75px 20px 0px">Voter ID:</span> <input type = "text" ><br><br>
                    <button class = "but1" type = "submit" formaction = "voterpage.html">Submit</button>
                    <button class ="but1" onclick="document.getElementById('mpopup2').style.display='none'">Cancel</button><br><br>
                </form>
            </div>
         </div>
         </center>


         <!-- <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
         <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.js" ></script>
         <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js"></script>
         <script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
        <script src = "script.js"></script>
        <script src = ""></script>
    </body>

</html>
