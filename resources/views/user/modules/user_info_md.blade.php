<style type="text/css" media="screen">
    #h4{
        margin-left: 10px;
        
        font-size: 20px;
    }
    #h3{
        margin-top:10px;
        margin-left: 10px;
        font-size: 30px;
        color:red;
    }
    #sp{
        font-size: 20px;
    }
    #in_sdt{
        margin-top: 9px;
        font-size: 17px;
        margin-left: 1px;

    }
    #in_email{
        margin-left: 75px;
        margin-top: 5px;
        font-size: 17px;
    }
    #in_ten{
        margin-top: 30px;
        margin-left: 97px;
        margin-bottom: 5px;
        font-size: 17px;
    }
    #in_sub{
        margin-left: 75px;
        margin-bottom: 30px;
    }
    #fm{
        border: 1px solid black;
        
        border-left: 50px;
        border-right: 5px;	
    
    }
    table{
        border-collapse: collapse;
        width:100%;
        margin-top: 14px;
        }
    th,td{
        border-top:1px solid gray;
        border-bottom: 1px solid gray;
        padding:10px;
        text-align: center;
        font-size: 20px;
        }
    tr:nth-child(odd){
        background-color: #ddd;
        text-align: center;
            }
        @import url('https://fonts.googleapis.com/css?family=Amatic+SC');
 
body {
    margin: 0;
    height: 100%;
    background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
 
.button_container {
    position: absolute;
  left: 0;
  right: 0;
  top: 30%;
}
 
.button_container p {
    font-family: 'Amatic SC', cursive;
    text-align: center;
    font-size: 35px;
}
 
.btn {
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  background-color: #222;
  padding: 17px 60px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(0,0,0,0.20);
}
 
.btn span {
  position: relative; 
  z-index: 1;
}
 
.btn:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 490%;
  width: 140%;
  background: #78c7d2;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}
 
.btn:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}
</style>
<div>
    <h3 id="h3">HỒ SƠ CỦA TÔI</h3>
    <h4 id="h4">Quản lý thông tin hồ sơ để bảo mật tài khoản</h4>
</div>
<div>
    <form id="fm" action="" method="get" accept-charset="utf-8">
        <span id="sp">Tên: </span>
        <input id="in_ten" type="text" name="name" value="Nguyen Anh" placeholder="Họ Tên">
        <br>
        <span id="sp">Email: </span>
        <input id="in_email" type="email" name="email" value="abc@gmail.com" placeholder="email">
        <br>
        <span id="sp" >Số điện thoại: </span>
        <input id="in_sdt" type="text" name="phone" value="0912723123123" placeholder="số điện thoại">
        <br>
        <br>
        <button class="btn"><span>Lưu thông tin</span></button>


    </form>
</div>
<div>
    <table>
        <tr><th>ĐƠN HÀNG</th><th>TRẠNG THÁI</th></tr>
        <tr><td>iPhone 6s</td><td>Chưa giao</td></tr>
        <tr><td>Samsung galaxy s10</td><td>chưa giao</td></tr>
        <tr><td>Oppo Find X </td><td>Chưa giao</td></tr>
        <tr><td>Yasuo 20gg</td><td>Chưa giao</td></tr>
        
</tr>
</table>
</div>