 <!-- this is for registration form -->
 <form action="http://localhost/FoodOrdering/landingpage/post_for_registration.php" id="for-form" method="POST">
         <img src="./../images/loginImageIcon.jpg" class="avatar" alt="">
         <div id="registration-components">
             <p class="component">
                 <i class="fas fa-times-circle icon-close" onclick="closeNewPanel();"></i>
                 Full Name:
                 <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 
                 <input type="text" class="coverClass" id="fullName" name="fullName" >
             </p>
             <p class="component">
                 Address:
                 <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 
                 <input type="text" class="coverClass" id="address" name="address">
             </p>
             <p class="component">
                 Phone Number:
                 <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 
                 <input type="number" class="coverClass" id="number" name="number">
             </p>
             <p class="component">
                 Email:
                 <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 
                 <input type="text" class="coverClass" id="email" name="email">
             </p>
             <p class="component">
                 Username:
                 <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 

                 <input type="text" class="coverClass" id="username" name="username">
             </p>
             <p class="component">
                 Password:
                 <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 
                 <input type="password" class="coverClass" id="password" name="password">
             </p>
             <p class="component">
                 Re-enter Password: <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 
                 <input type="password" class="coverClass" id="reEnteredPassword" name="reEnteredPassword">
                 <br>
             </p>
             <p class="for-center-vertically-horizontally">
                 <input type="submit" value="submit" class="button">
             </p>
             <p class="for-center-vertically-horizontally ">
                <a href="#username-for-login" class="hovering-effect" onclick="closeNewPanel();"> already have an account</a>
             </p>
         </div>
     </form>