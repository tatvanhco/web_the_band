<style>
    #DK{
        width:500px;
        border:5px solid #ff4700;
        margin-top:-30px;
        margin-left:30%;
        margin-bottom:20px;
    }
    #DK label{
        margin-left:20%;
    }
</style>
 <div id="DK" style="display: none;">
    <section>
    
    <form action="DKDN/xulydangky.php" method="post">
        <a href="#" onclick="closeDK1()" style="float: right; margin-right: 5%;">X</a>
        <div class="title" style="margin-bottom: 6px; text-align: center; color: rgb(238, 20, 92);"><h2>Đăng Ký</h2></div>
        <label>Name</label>
        <input type="text" name="user" required="" placeholder="Name"><br>
        <label>UserName</label>
        <input type="text" name="userID" required="" placeholder="UserName"><br>
        <label>Email</label>
        <input type="text" name="email" required="" placeholder="Email"><br>
        <label>Password</label>
        <input type="password" name="password" required="" placeholder="Password"><br>
        <label>RPPassword</label>
        <input type="password" name="passwordrp" required="" placeholder="RepetPassword"><br>
         <label>&nbsp</label>
        <input type="submit" class="btn btn-success" name="submit" value="ĐĂNG KÝ">
        <a href="#" class="btn btn-success" onclick="showDN()">ĐĂNG NHẬP</a>


        
    </form>
    
    
</section> 
</div>