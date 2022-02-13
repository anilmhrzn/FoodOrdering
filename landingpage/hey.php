 <?php
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Document</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <style>
     :root {
         --code-color: darkred;
         --code-bg-color: #f6f6f6;
         --code-font-size: 14px;
         --code-line-height: 1.4;
         --scroll-bar-color: #c5c5c5;
         --scroll-bar-bg-color: #f6f6f6;
     }

     .content-except-register-form {
         overflow-x: hidden;
     }

     #registration-components {
         position: fixed;
         top: 16vh;
         left: 50%;
         transform: translate(-50%, 0);
         margin: auto;
         /* position: none; */
         height: 60vh;
         width: 30vw;
         border-radius: 5px;
         background-color: white;
         padding: 4vw 2vw 0 2vw;
         background-color: white;
         border: 1px solid black;
         overflow-y: scroll;
         z-index: 1;
         /* background-color:red; */
     }

     /* for thinner scrollbar */
     #registration-components::-webkit-scrollbar {
         width: 12px;
     }

     #registration-components::-webkit-scrollbar-track {
         background: var(--scroll-bar-bg-color);
     }

     #registration-components::-webkit-scrollbar-thumb {
         background-color: var(--scroll-bar-color);
         border-radius: 20px;
         border: 2px solid var(--scroll-bar-bg-color);
     }

     #for-form {
         display: none;

     }

     .icon-close {
         position: absolute;
         right: 1vh;
         top: 1vh;
         transition: transform 0.2s;
     }

     .icon-close:hover {
         cursor: pointer;
         transform: scale(1.5);
     }

     /* .transitionClass {
  /* opacity: 1; */
     /* visibility: visible; */
     /* } */

     .avatar {
         position: fixed;
         top: 8vh;
         left: 45vw;
         height: 15vh;
         border-radius: 50%;
         overflow: hidden;
         z-index: 100;
     }

     .coverClass {
         width: 100%;
         height: 4vh;
         border: none;
         border: 1px solid black;
         outline: none;
     }

     .component {
         margin-top: 4vh;
         /* height: 8vh; */
         /* padding: 4vh 0; */
     }

     #submit {
         position: relative;
         top: 3vh;
         left: 50%;
         transform: translate(-50%, -50%);
         margin-bottom: 2vh;
         background-color: #adefd1ff;
     }

     /* for removing arrow key in input type number */
     input::-webkit-outer-spin-button,
     input::-webkit-inner-spin-button {
         -webkit-appearance: none;
         margin: 0;
     }
     </style>
 </head>

 <body>
     <input type="button" value="click" onclick="newPanel();" style="position:sticky; top:0px">
     <!-- this is for registration form -->
     <div>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, asperiores, eveniet qui provident illum quisquam numquam, quod ducimus dolorem cum mollitia tempora odit? Maxime modi ipsum exercitationem, cupiditate omnis assumenda! Commodi distinctio enim optio expedita illum facere nisi soluta non beatae corrupti. Est unde eveniet culpa debitis tempore facere sed dicta tempora laborum eaque sapiente labore maiores consequuntur, id dolorem, eum incidunt mollitia. Doloribus similique, molestias consequuntur doloremque quaerat voluptatem, eveniet dolorum sequi animi facilis omnis accusamus quae quas laudantium optio dignissimos totam! Dolorem voluptate minima voluptatibus commodi vel, sit et nobis nisi, illo doloremque esse nihil cumque hic dolor ratione unde! Laborum, veniam officia facilis excepturi illum non mollitia delectus repudiandae esse maxime dolor! Velit nemo culpa ex, cupiditate neque magni, deleniti alias natus rerum quis itaque? Assumenda cumque corporis in maxime. Distinctio voluptatibus quasi enim voluptates cupiditate! Est voluptate quisquam dolor, et repudiandae dolore sequi voluptates incidunt eaque aperiam alias vero, molestias quas in similique itaque distinctio reiciendis commodi quos ut veniam totam? Voluptatem laborum fuga eum, amet saepe veniam nesciunt vero repellat, dicta deserunt, numquam nisi. Commodi accusamus, quibusdam itaque officia deserunt facere? Totam tempora voluptate recusandae eveniet veniam. Ipsa hic possimus veniam iusto porro, laudantium officia nobis similique voluptatum suscipit dolores optio pariatur eaque eos qui soluta laboriosam explicabo sapiente temporibus sunt. Provident expedita architecto debitis non ea delectus consequatur itaque quaerat impedit exercitationem facilis corporis esse, deserunt quasi quam porro quidem id animi harum neque pariatur laudantium? Illum, quo quisquam! A quae temporibus porro pariatur impedit sequi. Aliquid quam reiciendis, exercitationem consequatur nemo provident autem officia, dolorem maxime voluptas laudantium deleniti veritatis, ut nulla? Molestiae deleniti amet quisquam, quam consequuntur voluptatem commodi, repellat officiis praesentium iste nostrum non dignissimos, beatae quia possimus adipisci. Inventore neque deserunt enim, nihil libero quibusdam quod sint fuga praesentium sapiente molestiae consequuntur mollitia maxime placeat ipsa corporis quam amet exercitationem dicta nobis cumque, facilis dolorem? Quas architecto deleniti recusandae cum velit perspiciatis nisi autem incidunt in perferendis, accusantium unde? Accusamus, laboriosam eligendi. Perspiciatis, aspernatur? Vitae iste voluptate soluta nihil tenetur sequi laudantium magni. Aliquid veritatis quis non itaque, corporis autem at recusandae debitis adipisci vero illum iure magnam magni sit, quaerat, molestiae ab earum id tenetur officia sed deserunt error eos. Doloremque quos id vitae harum magnam sed cum quas optio, maiores dicta. At nisi repudiandae quam sequi sapiente animi, atque laudantium quasi similique quos, inventore laborum quod assumenda vel, omnis quibusdam sunt tenetur fugit deserunt. Est voluptates ratione eius accusantium dolore necessitatibus facere consequuntur iste consequatur exercitationem velit id fugit sunt ea quod officia, nostrum quas reprehenderit? Delectus nulla maiores fuga laboriosam explicabo tempore hic eum, perspiciatis atque cum, expedita, voluptas beatae blanditiis possimus sunt? Veniam maiores vitae quod quae culpa aperiam consectetur, a maxime delectus voluptatum dolorem nihil, repellendus, doloremque voluptates facere dolores tenetur modi molestias explicabo minus laudantium adipisci. Suscipit recusandae, nobis aliquam dolore praesentium non illo maxime? Odit tenetur nihil, sit aliquid velit mollitia repudiandae eligendi nobis quia harum praesentium corporis autem maxime? Fugit voluptas beatae atque voluptate tempora tenetur cupiditate iste commodi eaque. Minima libero dignissimos quam facilis cum reprehenderit dolor consequuntur, commodi numquam a odio beatae eveniet voluptas dolores exercitationem aspernatur voluptatum optio voluptates id ex? Odit, quaerat eligendi. Laboriosam unde impedit quod adipisci culpa? Est impedit dolor sunt corrupti, possimus aliquid explicabo in. Enim accusamus, cum itaque molestias explicabo quam sed! Animi magni, illum nobis voluptatem assumenda sit ea explicabo! Dicta impedit facilis harum, laboriosam accusamus laborum enim nihil molestias officiis veniam sed exercitationem possimus blanditiis atque recusandae quia temporibus ipsam deleniti rerum similique. Laborum dicta culpa iste saepe blanditiis placeat. Est tenetur nostrum quas aliquam inventore voluptates atque. Neque reiciendis doloribus enim! Quis adipisci tenetur odit debitis? Corporis ab ex in accusantium natus voluptate harum, maiores incidunt quam repellat porro dolor, nostrum commodi asperiores obcaecati laborum sint fuga vitae beatae id dolore temporibus ducimus quibusdam eveniet. Alias eum error labore quam repellendus, distinctio accusamus, sequi praesentium itaque voluptatibus libero et. Corrupti nulla neque ut tempore hic natus reiciendis. Explicabo, eveniet maxime, culpa dolores ex delectus illum inventore officiis non laudantium nisi laborum nesciunt voluptas facere vero voluptates alias aliquam odit voluptate molestias corporis provident repudiandae! Dolor rerum odio quo eveniet. Veniam nobis dignissimos facilis id in nulla incidunt architecto excepturi similique quod explicabo dolore maxime quas provident, quam, eos nisi aut veritatis voluptas, consequuntur eum. Quia, rem? Dolorum, totam aperiam? Ea, et officiis dolorum rerum maxime voluptatem at perspiciatis modi error architecto reiciendis. In, magni dolorem adipisci aspernatur deleniti, est sint non doloremque recusandae perferendis sunt nulla vel possimus dignissimos iusto eum sequi totam quis explicabo inventore? Consequuntur delectus deserunt ipsa, laborum totam earum inventore saepe omnis veniam. Eius magni obcaecati voluptates eveniet, tempora laborum quisquam rerum? Tempore earum accusamus aliquam, laboriosam dicta totam pariatur molestias, qui, labore facilis expedita sit suscipit alias optio odio. Facilis culpa cupiditate temporibus, delectus incidunt quibusdam molestiae soluta hic repellendus necessitatibus voluptatum aliquam dolorem porro dignissimos inventore adipisci odit autem facere, voluptates rerum enim ratione voluptas! Mollitia voluptate facere reprehenderit doloribus nesciunt nam sit amet architecto id quia tempora, eveniet ullam nisi fugiat voluptas consequuntur maiores odit eos? Est earum dicta reprehenderit voluptate. Veniam maiores culpa ab porro voluptate, sapiente dolore delectus voluptatum error debitis laborum! Harum recusandae, sit voluptates alias, fugit at voluptas facilis excepturi, esse neque beatae hic qui reiciendis reprehenderit eius maiores eaque. Inventore neque placeat rem voluptatem provident non aperiam possimus ipsum! Nemo fuga non explicabo asperiores! Neque expedita mollitia labore laborum perferendis praesentium delectus natus asperiores sapiente aspernatur facilis blanditiis tempore, temporibus hic ea consequatur et explicabo porro ab. Sequi quisquam quia ea cupiditate officiis autem voluptatem optio ducimus unde rerum, odio recusandae, necessitatibus iusto facere maxime, quos modi similique accusamus ab qui? Nesciunt voluptate mollitia soluta aperiam excepturi quis, enim quisquam quia molestiae exercitationem esse ex est quae, accusantium neque dolorem doloremque quos eaque, sunt praesentium possimus maiores magni. Earum laudantium, animi consequatur sit soluta a cupiditate fugit facilis itaque? Ut harum ipsam architecto deleniti et non repudiandae natus quis?
     </div>
     <form action="http://localhost/FoodOrdering/landingpage/post_for_registration.php" id="for-form" method="POST">
         <img src="./../images/loginImageIcon.jpg" class="avatar" alt="">
         <div id="registration-components">
             <p class="component">
                 <i class="fas fa-times-circle icon-close" onclick="closeNewPanel()"></i>
                 Full Name:
                 <span style="color:red;"><b class="icon-foo" style="font-family: FontAwesome;" >&#xf06a;  </b> error message</span> <br>
                 
                 <input type="text" class="coverClass" id="fullName" name="fullName">
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
             <p>
                 <input type="submit" value="submit">
             </p>
         </div>
     </form>
 <script>
    function newPanel(){
        element= document.getElementById("for-form");
        element.style.display="block";
        
    }
        
    </script>
 </body>

 </html>