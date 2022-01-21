
<style>
    #DN{
        width:500px;
        border:5px solid #ff4700;
        margin-top:-30px;
        margin-left:30%;
        margin-bottom:20px;
    }
    #DN label{
        margin-left:20%;
    }
</style>
<div id="DN" style="display: none;">
            <section>
           
    <form action="DKDN/xulydangnhap.php" method="post">
    	<a href="#" onclick="closeDN1()" style="float: right; margin-right: 5%;">X</a>
         <div class="title" style="margin-bottom: 6px; text-align: center; color: rgb(238, 20, 92);"><h2>Đăng Nhập</h2></div>
        <label>USERNAME</label>
        <input type="text" name="Uid" placeholder="Username" required=""><br>
        <label>PASSWORD</label>
        <input type="password" name="psd" placeholder="Password" required=""><br>
        <label>&nbsp</label>
 
        <input type="submit" class="btn btn-success" name="submit1" value="ĐĂNG NHẬP">
        <a href="#" class="btn btn-success" onclick="showDK()">ĐĂNG KÝ</a>
        

    </form>
    
    
    </section>
    </div>


