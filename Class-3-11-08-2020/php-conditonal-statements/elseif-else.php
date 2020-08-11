
<?php
    /* 
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

    } */


   if(isset($_POST['submit']))
    {
        $name   = $_POST['name'];
        $result = $_POST['result'];

        if($result == null || $name == null)
        {
            echo "The field is required";
        }
        else
        {    
            echo $name."<br/>";    
        
            if($result >=80 && $result <=100)
            {
                echo "You have got A+";
            }
            elseif ($result >=70 && $result <=79) 
            {
                echo "You have got A";
            }
            elseif ($result >=60 && $result <=69) 
            {
                echo "You have got B+";
            }
            elseif ($result >=50 && $result <=59) 
            {
                echo "You have got B";
            }
            elseif ($result >=40 && $result <=49) 
            {
                echo "You have got C";
            }
            
            elseif ($result >=33 && $result <=39) 
            {
                echo "You have got D";
            }
            else 
            {
                echo "You are failed";
            }
            

        }
        
    }

   

?>
<form action="" method="post">
    <p>
        Enter your name <br/>
        <input type="text" name="name">

    </p>
    <p>
        Enter your Mark <br/>
        <input type="number" name="result">
    </p>
    <p>
        <button type="submit" name="submit" >Check Result</button>
    </p>
</form>