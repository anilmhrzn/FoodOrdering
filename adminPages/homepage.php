
<?php
include 'admin-header.php';
include 'admin-navbar.php';
?> 
 <script>
        window.onload = ()=> {
            document.getElementById('home-for-navbar').classList.add('active');
        }
    </script>
<div>

<h1>Welcome Admin</h1>
     
<h3>
    
    <div class="homepage" >
        <ol>Features 
            <li>You can view different categories of food .</li>
            <li>You can perform crud operation on food or drinks .</li>
            <li>You can view orders and thier respective time date and order status .</li>
            <li>You can change status of order from not delivered to deliver .</li>
        </ol>
    </div>
</h3>
    
</div>
<?php include 'admin-footer.php';
?>