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
            table
            {
              background-color: rgb(255, 196, 125);
              width: 45%;
              height: 300px;
              border: 10px groove rgb(249, 249, 246);
              padding: 50px;
              border-radius: 10px;
              opacity: 0.9;
              display: flex;
              justify-content: center;
              align-items: center;
              margin-left: 430px;
              margin-top: 100px;
              font-size: 20;
           }
        </style>
    </head>
    <body style="background-image: url('2.png');">
        <br>
        <H1 style="text-align: center;color: rgb(5, 164, 249);">STUDENT DETAILS</H1>
        <BR>
            <HR>
                <center style="padding: 15px;">
                  <a href="home1.html">Home</a>
                  <a href="add.html"> New student </a>
                  <a href="rem.php">Remove student</a>
                  <a href="vi.php">View student</a>
                </center>
            </hr>
            <table width="50%" border="2" align="center">
  <tr>
    <th scope="col" colspan="4">STUDENT AVAILABLE</th>
   
  </tr>
  <tr>
    <td>FIRST NAME</td>
    <td>LAST NAME</td>
    <td>G MAIL</td>
    <td>ID NUMBER</td>
  
  </tr>

    <?php
 $host='localhost';
 $user='root';
 $pass='';
 $db='std';
 

    $conn=new mysqli($host,$user,$pass,$db);

    $sql="select * from persons";

   $res=$conn->query($sql);


    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['fname'].'</td>';
      echo '<td>'.$row['lname'].'</td>';
      echo '<td>'.$row['gmail'].'</td>';
      echo '<td>'.$row['id'].'</td>';

    echo "</tr>";
    }
    echo "</table>";

?>
            </table>

</body>
</html>