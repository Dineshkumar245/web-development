
<html>
    <head>
        <title>www.student details.com</title>
        <style>
            a{
                padding: 15px;
                text-decoration: none;
                font-size: 25px;
                color: aqua;
            }
            div
            {
              background-color: rgb(255, 196, 125);
              width: 35%;
              height: 200px;
              border: 10px groove rgb(249, 249, 246);
              padding: 50px;
              border-radius: 10px;
              opacity: 0.9;
              display: flex;
              justify-content: center;
              align-items: center;
              margin-left: 430px;
              margin-top: 100px;
              font-size: 20px;
           }
        </style>
    </head>
    <body style="background-image: url('2.png');">
    <br>
        <H1 style="text-align: center;color: rgb(5, 164, 249);">STUDENT DETAILS</H1>
        <br>
            <HR>
                <center style="padding: 15px;">
                  <a href="home1.html">Home</a>
                  <a href="add.html"> New student </a>
                  <a href="rem.php">Remove student</a>
                  <a href="vi.php">View student</a>
                </center>
            </hr>
             <div>
                <form action="sub.html";>
                    <h2> REMOVE STUDENT</h2>
                    <HR style="border:2PX  dashed rgb(249, 249, 246) ;">
                <label for="id">ID NO:</label>
                <input type="text" id="id" name="id" placeholder="enter your id no"><br>
                <br>
                <button>Submit</button>
              </form>
             </div>
    </body>
</html>
<?php
$host='localhost';
$user='root';
$pass='';
$db='std';


//connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['id'];

$sql="delete from persons where  id='$id'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();

?>