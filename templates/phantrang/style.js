var Kichthuoc= document.getElementsByClassName("slide")[0].clientWidth;
var ChuyenSlide = document.getElementsByClassName("chuyenslide")[0];
var Img= ChuyenSlide.getElementsByTagName("img");
var Chuyen = 0;
var Max = Kichthuoc*4;
Max = Max-Kichthuoc;
function Next(){
    if(Chuyen < Max) Chuyen += Kichthuoc;
    else Chuyen=0;
    ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
function Back(){
    if(Chuyen==0) Chuyen=Max;
    else Chuyen-=Kichthuoc;
    ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
setInterval(function(){
    Next();
},2000);
function xoa_dau(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    return str;
}
function search(){
    var s = document.getElementById("text").value;
    s=xoa_dau(s);
    s=s.toLowerCase();
   
    var b=["!","@","#","$","%","^","&","*","(",")","~","`","?","<",">","{","}","[","]",";",":","'","/","1"
           ,"2","3","4","5","6","7","8","9","0"];
    var c=["!","@","#","$","%","^","&","*","(",")","~","`","?","<",">","{","}","[","]",";",":","'","/"]
    {
    var arry=["sen da thai","sen da hong bach","sen da do la","sen da nau dat","sen da thia xanh","sen da vien hong"
             ,"sen da vien lua","sen da banh bao","sen da chuoi ngoc","sen da ham ca map"," sen da nau","sen da tu phuong"
            ,"sen da dua","sen da canh hoa hong","sen da la tim","xuong rong tai tho","xuong rong mong rong","xuong rong bui"
        ,"xuong rong banh sinh nhat","xuong rong thanh son","xuong rong trung chim","xuong rong vang"];
    var a=0;
    document.getElementById("mid").style.display='none'; 
    document.getElementById("search").style.display='block';
    document.getElementById("sendalon").style.display='none';
    document.getElementById("sendanho").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("kq").style.display='block';
    document.getElementById("bottom").style.marginTop="4000px";
    for(var i=0;i<arry.length;i++)
    {
        document.getElementById(i+1).style.display='none';

    }
    for(var i=0;i<arry.length;i++)
    {
        if(0<=arry[i].indexOf(s) && arry[i].indexOf(s)<=arry[i].length)  
            { document.getElementById(i+1).style.display='block';  
             a++;}
    }
    document.getElementById("kq").innerHTML="KẾT QUẢ TÌM KIẾM :" +a;
    }
    for(var i=0;i<b.length;i++)
    {
        if(0<=s.indexOf(b[i]) )  
            { alert("thông tin tìm kiếm không hợp lệ"); 
            alert: '#DD6B55';
             break;}
    }
}
function dn()
{
     window.location="user-index.html";

}
function sendalon1()
{
document.getElementById("sendalon1").style.display='block';
document.getElementById("sendalon2").style.display='none';
}
function sendalon2()
{
document.getElementById("sendalon1").style.display='none';
 document.getElementById("sendalon2").style.display='block';

}
function sendalon()
{
    document.getElementById("mid").style.display='none';
    document.getElementById("search").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("sendalon").style.display='block';
    sendalon1();
    document.getElementById("sendanho").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("bottom").style.marginTop="1700px";
}
function sendanho1()
{
document.getElementById("sendanho1").style.display='block';
document.getElementById("sendanho2").style.display='none';
document.getElementById("sendanho3").style.display='none';
}
function sendanho2()
{
document.getElementById("sendanho1").style.display='none';
 document.getElementById("sendanho2").style.display='block';
 document.getElementById("sendanho3").style.display='none';

}
function sendanho3()
{
document.getElementById("sendanho1").style.display='none';
document.getElementById("sendanho2").style.display='none';
document.getElementById("sendanho3").style.display='block';
}
function sendanho()
{
    document.getElementById("mid").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("search").style.display='none';
    document.getElementById("sendanho").style.display='block';
    sendanho1();
    document.getElementById("sendalon").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("bottom").style.marginTop="1700px";
}
function xuongrong1()
{
document.getElementById("xuongrong1").style.display='block';
document.getElementById("xuongrong2").style.display='none';
}
function xuongrong2()
{
document.getElementById("xuongrong1").style.display='none';
 document.getElementById("xuongrong2").style.display='block';
}
function xuongrong()
{
    document.getElementById("mid").style.display='none';
    document.getElementById("search").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("xuongrong").style.display='block';
    xuongrong1();
    document.getElementById("sendanho").style.display='none';
    document.getElementById("sendalon").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("bottom").style.marginTop="1700px";
}
function chau1()
{
document.getElementById("chau1").style.display='block';
document.getElementById("chau2").style.display='none';
}
function chau2()
{
document.getElementById("chau1").style.display='none';
 document.getElementById("chau2").style.display='block';

}
function chau()
{
    document.getElementById("mid").style.display='none';
    document.getElementById("search").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("chau").style.display='block';
    chau1();
    document.getElementById("sendanho").style.display='none';
    document.getElementById("sendalon").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("bottom").style.marginTop="1700px";
}
function chamsocsenda()
{
    document.getElementById("mid").style.display='none';
    document.getElementById("search").style.display='none';
    document.getElementById("chamsocsenda").style.display='block';
    document.getElementById("sendanho").style.display='none';
    document.getElementById("sendalon").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("bottom").style.marginTop="1700px";
}
function chamsocxuongrong()
{
    document.getElementById("mid").style.display='none';
    document.getElementById("search").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='block';
    document.getElementById("sendanho").style.display='none';
    document.getElementById("sendalon").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("bottom").style.marginTop="1700px";
}

function trangchu()
{
    document.getElementById("mid").style.display='block';
    document.getElementById("search").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("sendanho").style.display='none';
    document.getElementById("sendalon").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
    document.getElementById("thgiohang").style.display='none';
    document.getElementById("text").value="";
    document.getElementById("bottom").style.marginTop="6000px";
}
function chitietsanpham(ten,gia,hinh,dacdiem1,dacdiem2)
{
    document.getElementById("chitietsanpham").style.height = "90%";
    document.getElementById("chitietsanpham").style.width = "80%";
    document.getElementById("ten").innerHTML=ten;
    document.getElementById("gia").innerHTML=gia;
    document.getElementById("hinh").src=hinh;
    document.getElementById("dacdiem1").innerHTML=dacdiem1;
    document.getElementById("dacdiem2").innerHTML=dacdiem2;
    closeDN();
    closeDK();
    closedsch();
    closesdlg();
    closeyn();
    closeynpt();
    document.getElementById("soluong").value="0"
}
function closeCTSP()
{
    document.getElementById("chitietsanpham").style.height = "0%";
}
var b=0;
function giam()
{
    var a=document.getElementById("soluong").value;
    if(a>=0)
    {
        a--
        if(a<0)  document.getElementById("soluong").value="0";
        else
        document.getElementById("soluong").value=a;
    }
}
function tang()
{
    var a=document.getElementById("soluong").value;
    if(a>=0)
    {
        a++
        document.getElementById("soluong").value=a;
    }
}
function giamSL(tam)
{
    var a=document.getElementById(tam).value;
    if(a>=0)
    {
        a--
        if(a<0)  document.getElementById(tam).value="0";
        else
        document.getElementById(tam).value=a;
    }
}
function tangSL(tam)
{
    var a=document.getElementById(tam).value;
    if(a>=0)
    {
        a++
        document.getElementById(tam).value=a;
    }
}
function mua()
{
    var a=document.getElementById("c").style.display;
    //var a=1;
    if(a=='none')
    alert("ban can dang ky tai khoan moi duoc mua hang");
}
function giohang()
{
    document.getElementById("mid").style.display='none';
    document.getElementById("search").style.display='none';
    document.getElementById("thgiohang").style.display='block';
    document.getElementById("sendanho").style.display='none';
    document.getElementById("sendalon").style.display='none';
    document.getElementById("xuongrong").style.display='none';
    document.getElementById("chau").style.display='none';
    document.getElementById("timnhanh").style.display='none';
    document.getElementById("chamsocsenda").style.display='none';
    document.getElementById("chamsocxuongrong").style.display='none';
}

function check() {
    var a = document.getElementsByClassName('sao'); 
    var mk1 = document.getElementById('mk1');
    var mk2 = document.getElementById('mk2');
    var x = 1;
    var y = 1;
    var z=1;
    for (var i = 0; i < a.length; i++) {
        if (a[i].value =='') {
            x = 0;
            a[i].style.border = '1px solid red';
        } else {
            a[i].style.border = '1px solid white';
        }
    }
    if (mk1.value != mk2.value) {
        y = 0;
        alert('Mật khẩu nhập lại bị sai !');
        mk2.style.outline = '1px solid red';
    }
    var s = document.getElementById("tendangnhap").value;
    var c=["!","@","#","$","%","^","&","*","(",")","~","`","?","<",">","{","}","[","]",";",":","'","/","1"
   ,"2","3","4","5","6","7","8","9","0"];
   for(var i=0;i<c.length;i++)
{
if(0<=s.indexOf(c[i]) )  
    { alert("Tên đăng nhập không hợp lệ !");z=0; 
    document.getElementById("tendangnhap").style.outline = '1px solid red';
     break;}
}
    if (x == 1 && y == 1 && z==1) {
        alert("Đăng ký tài khoản thành công !");
        openDN();
    } else {
        btn.setAttribute('type', 'button');
        alert('Nhập đầy đủ theo các điều kiện !(*)');
    }

}
function kiemtra()
{
    alert("Bạn cần đăng ký thành viên trước khi thanh toán !");
}
function openDN() {
    document.getElementById("myNav").style.height = "100%";
    document.getElementById("myNav").style.width = "50%";
    closeCTSP();
    closeDK();
    closedsch();
    closesdlg();
    closeyn();
    closeynpt();
}

/* Close */
function closeDN() {
    document.getElementById("myNav").style.height = "0%";
}
function openDK() {
    document.getElementById("myNav1").style.height = "100%";
    document.getElementById("myNav1").style.width = "50%";
    closeDN();
    closeCTSP();
    closedsch();
    closesdlg();
    closeyn();
    closeynpt();
}

/* Close */
function closeDK() {
    document.getElementById("myNav1").style.height = "0%";
}
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
function themgiohang()
{
    alert("Thêm thành công !");
}

function closesdlg() {
    document.getElementById("sdlg").style.height = "0%";
}
function opensdlg() {
    document.getElementById("sdlg").style.height = "90%";
    document.getElementById("sdlg").style.width = "80%";
    closeDK();
    closeCTSP();
    closeDN();
}
$(function () {
    $('#text').keyup(function (e) {
      if (e.keyCode == '13') {
        search();
      }
    })
  })
 function closedsch() {
    document.getElementById("dsch").style.height = "0%";
}
function opendsch() {
    document.getElementById("dsch").style.height = "100%";
    document.getElementById("dsch").style.width = "80%";
    closeDK();
    closeCTSP();
    closeDN();
}
function closeyn() {
    document.getElementById("yn").style.height = "0%";
}
function openyn() {
    document.getElementById("yn").style.height = "100%";
    document.getElementById("yn").style.width = "80%";
    closeDK();
    closeCTSP();
    closeDN();
}
function closeyn() {
    document.getElementById("yn").style.height = "0%";
}
function openyn() {
    document.getElementById("yn").style.height = "85%";
    document.getElementById("yn").style.width = "80%";
    closeDK();
    closeCTSP();
    closeDN();
}
function closeynpt() {
    document.getElementById("ynpt").style.height = "0%";
}
function openynpt() {
    document.getElementById("ynpt").style.height = "85%";
    document.getElementById("ynpt").style.width = "80%";
    closeDK();
    closeCTSP();
    closeDN();
}