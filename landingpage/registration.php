 <!-- this is for registration form -->
 <form action="http://localhost/FoodOrdering/landingpage/post_for_registration.php" id="for-form"  method="POST">
     <img src="./../images/loginImageIcon.jpg" class="avatar" alt="">
     <div id="registration-components">
         <p  class="component">
             <i class="fas fa-times-circle icon-close" onclick="closeNewPanel()"></i>
             Full Name:
             <input type="text" class="coverClass" id="fullName" name="fullName">
         </p>
         <p class="component">
             Address:
             <input type="text" class="coverClass" id="address" name="address">
         </p>
         <p class="component">
             Phone Number:
             <input type="number" class="coverClass" id="number" name="number">
         </p>
         <p class="component">
             Email:
             <input type="text" class="coverClass" id="email" name="email">
         </p>
         <p class="component">
             Username:
             <input type="text" class="coverClass" id="username" name="username">
         </p>
         <p class="component">
             Password:
             <input type="text" class="coverClass" id="password" name="password">
         </p>
         <p class="component">
             Re-enter Password:
             <input type="text" class="coverClass" id="reEnteredPassword" name="reEnteredPassword">
             <br>
         </p>
     </div>
     <!-- <table id="registration-components">
         <tr>

             <td>
                 </td>
             <td>
                 Address:
                 <input type="text" class="coverClass" id="address" name="address">
             </td>
         </tr>
         <tr>
           <td >
               Phone Number:
                 <input type="number" class="coverClass" id="number" name="number">
             </td>
         </tr>
         <tr>
             <td >
                 Email:
                 <input type="text" class="coverClass" id="email" name="email">
             </td>
         </tr>
         <tr>
             <td >
                 Username:
                 <input type="text" class="coverClass" id="username" name="username">
             </td>
             <td>

             </td>
         </tr>
         <tr>
             <td>
                 Password:
                 <input type="text" class="coverClass" id="password" name="password">
             </td>
             <td>
                 Re-enter Password:
                 <input type="text" class="coverClass" id="reEnteredPassword" name="reEnteredPassword">
                 <br>
             </td>
         </tr>
         <tr>
           <td>
               <input type="submit" id="submit" value="submit" onclick="frontentValidation();" class="button" />
            </td>
         </tr>
     </table> -->
 </form>