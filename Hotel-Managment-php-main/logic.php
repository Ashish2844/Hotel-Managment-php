<?php
session_start();

class mydb{

private $host;
private $username;
private $password;
private $dbname;

function dbconct(){
  $this->host="127.0.0.1";
  $this->username="root";
  $this->password="";
  $this->dbname="project3";

  $box=new mysqli($this->host,$this->username,$this->password,$this->dbname);

  return $box;
 }
}

class myinsrtquery extends mydb{

  public function insrtdt($table,$field,$values){

    $data="INSERT INTO $table ($field) VALUES ($values)";

    $insrtquery=$this->dbconct()->query($data);

    if($insrtquery){
      return "inserted";
    }

  }

}

class myslctquery extends mydb{
 
  public function slctdt($tables,$condition){

    $data1="SELECT * FROM $tables WHERE $condition";

    $slctquery=$this->dbconct()->query($data1);

      if($slctquery->num_rows>0){
         
        $result1=$slctquery->fetch_assoc();

        $_SESSION['email']=$result1['email'];

        $_SESSION['name']=$result1['firstname'];

        $_SESSION['number']=$result1['contact'];
        
        return "selected";
      }

  }

}

class slctquery extends mydb{
  public function getdt($gtable){

    $get="SELECT * FROM $gtable";

    $getquery=$this->dbconct()->query($get);

    if($getquery->num_rows>0){
      while($result=$getquery->fetch_assoc()){
       

        $getrow[]=$result;

        
      }
      return $getrow;

    }
  }
}

class updquery extends mydb{
  public function upddt($utable,$set,$onbasis){
    $upd="UPDATE $utable SET $set WHERE $onbasis";

    $updatequery=$this->dbconct()->query($upd);

    if($updatequery){
      return "updated";
    }
  }
}

class slctquery1 extends mydb{

  public function slctdt1($stable,$scondition){

    $data="SELECT * FROM $stable $scondition";

    $data_query=$this->dbconct()->query($data);

    if($data_query->num_rows > 0){
      while($res=$data_query->fetch_assoc()){
        $getres[]=$res;
      }
      return $getres;
    }
  }
}

class slctquery2 extends mydb{

  public function slctdt2($sstable,$sscondition){
  
    $data3="SELECT * FROM $sstable WHERE $sscondition";
  
    $data_query3=$this->dbconct()->query($data3);

    if($data_query3->num_rows > 0){
      while($result2=$data_query3->fetch_assoc()){
         
        $getresult2[]=$result2;
      }
      return $getresult2;
    }
  }
}

class slctquery3 extends mydb{

  public function slctdt3($atable,$acondition){

    $data4="SELECT * FROM $atable WHERE $acondition";
     
    $data_query4=$this->dbconct()->query($data4);

    if($data_query4->num_rows > 0){

      $rev=$data_query4->fetch_assoc();

      $_SESSION['userr']=$rev['username'];

      return "selectedd";
    }
  }
}

class updatequery extends mydb{

  public function updtdt($utable,$set,$onbasis){
   
    $update="UPDATE $utable SET $set WHERE $onbasis";

    $up_query=$this->dbconct()->query($update);

    if($up_query){
      return "updated";
    }

  }
}
if(isset($_POST['create'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $pass=$_POST['pass'];

  $myobj=new myinsrtquery();

  $table="table1";
  $field="id,firstname,lastname,email,contact,password,date";
  $values="null,'$fname','$lname','$email','$number','$pass',null";

  $ins=$myobj->insrtdt($table,$field,$values);

  if($ins=="inserted"){
    echo "Inserted";
  }

}

if(isset($_POST['login'])){
  $emailu=$_POST['emailu'];
  $passu=$_POST['passu'];


  $myobj1=new myslctquery();

  $tables="table1";
  $condition="email='$emailu' AND password='$passu'";

  $get=$myobj1->slctdt($tables,$condition);
 
  if($get=="selected"){
    header("Location:user_page.php");
  }
}

if(isset($_POST['logout'])){
  unset($_SESSION['email']);
  unset($_SESSION['name']);
  unset($_SESSION['number']);
  header("Location:index.php");
}



if(isset($_POST['submit'])){
  $slct=$_POST['slct'];
  $checkin=$_POST['checkin'];
  $checkout=$_POST['checkout'];
  
  if($slct=="1 BHK"){
    $amount=1000;
  }

  else if($slct=="2 BHK"){
    $amount=1800;
  }

  else if($slct=="3 BHK"){
    $amount=2500;
  }

  if(isset($_POST['ac'])){
    $ac1=300;
  }

  else{
    $ac1=0;
  }

  if(isset($_POST['bf'])){
    $bf1=150;
  }

  else{
    $bf1=0;
  }

  if(isset($_POST['lh'])){
    $lh1=100;
  }

  else{
    $lh1=0;
  }

  if(isset($_POST['dr'])){
    $dr1=200;
  }

  else{
    $dr1=0;
  }

  if(isset($_POST['sp'])){
    $sp1=300;
}

else{
  $sp1=0;
}


  $email=$_SESSION['email'];
  $name=$_SESSION['name'];
  $number=$_SESSION['number'];


$myobjj= new slctquery1();

$stable="room_book";
$scondition="ORDER BY id DESC LIMIT 1";

$getdata=$myobjj->slctdt1($stable,$scondition);

if(isset($getdata['0'])){
  foreach($getdata as $outp){
   $bkid=$outp['booking_id'] +1;

   $total=$amount+$ac1+$bf1+$lh1+$dr1+$sp1;
  
   $myobj3=new myinsrtquery();
  
  $table="room_book";
  $field="id,name,email,number,room_type,price,checkin,checkout,ac,breakfast,lunch,dinner,pool,total_bill,booking_id,status";
  $values="NULL,'$name','$email','$number','$slct','$amount','$checkin','$checkout','$ac1','$bf1','$lh1','$dr1','$sp1','$total','$bkid','waiting'";
  
  $insrt=$myobj3->insrtdt($table,$field,$values);
  
  if($insrt=="inserted"){
    header("Location:user_rombok1.php");
  }

  }
}
}

if(isset($_POST['cancel'])){
 $idbk=$_POST['idbk'];
 $bgid=$_POST['bgid'];

 $myobjcancel=new updatequery();

 $utable="room_book";
 $set="status='canceled', action_by='by user'";
 $onbasis="booking_id='$bgid' AND status='waiting'";

if("status=='waiting'"){
 $canc=$myobjcancel->updtdt($utable,$set,$onbasis);

 if($canc=="updated"){
  header("Location:user_can.php");
 }
}

else if("status=='confirmed'"){
  echo "to cancel this booking you have to call on our customer care";
}


}



if(isset($_POST['ad_login'])){
 
   $user=$_POST['user'];
   $apass=$_POST['apass'];

    
   $myobj4=new slctquery3();

   $atable="admin";
   $acondition="username='$user' AND passwordd='$apass'";

   $slct1=$myobj4->slctdt3($atable,$acondition);

   if($slct1=="selectedd"){
    header("Location:admin_page.php");
   }

}

if(isset($_POST['signout'])){
  unset($_SESSION['userr']);
  header("Location:index.php");
}

if(isset($_POST['add_room'])){
 $select=$_POST['select'];
 $rooms=$_POST['rooms'];
 $id=$_POST['id'];
 
 $myobjc=new slctquery2();

 $sstable="admin_page";
 $sscondition="room_type='$select'";

 $ss=$myobjc->slctdt2($sstable,$sscondition);

 if(isset($ss['0'])){
  foreach($ss as $par){
    $addon=$par['room_available']+$rooms;
  }

  if($select=="1 BHK"){

    $myobj5=new updatequery();
  
    $utable="admin_page";
    $set="room_available='$addon'";
    $onbasis="room_type='$select'";
  
    $up=$myobj5->updtdt($utable,$set,$onbasis);
  
    if($up=="updated"){
      header("Location:ad_rom_ad.php");
    }
  
   }
  
   else if($select=="2 BHK"){
  
    $myobj5=new updatequery();
  
    $utable="admin_page";
    $set="room_available='$addon'";
    $onbasis="room_type='$select'";
  
    $up=$myobj5->updtdt($utable,$set,$onbasis);
  
    if($up=="updated"){
      header("Location:ad_rom_ad.php");
    }
  
   }
  
   else if($select=="3 BHK"){
  
    $myobj5=new updatequery();
  
    $utable="admin_page";
    $set="room_available='$addon'";
    $onbasis="room_type='$select'";
  
    $up=$myobj5->updtdt($utable,$set,$onbasis);
  
    if($up=="updated"){
      header("Location:ad_rom_ad.php");
    }
  
   }

 }
 
}


if(isset($_POST['remove_room'])){
  $rselect=$_POST['rselect'];
  $rrooms=$_POST['rrooms'];
  $idr=$_POST['idr'];
  
  $myobjc=new slctquery2();
 
  $sstable="admin_page";
  $sscondition="room_type='$rselect'";
 
  $rr=$myobjc->slctdt2($sstable,$sscondition);
 
  if(isset($rr['0'])){
   foreach($rr as $rem){
     $remov=$rem['room_available']-$rrooms;
   }
 
   if($rselect=="1 BHK"){
 
     $myobj5=new updatequery();
   
     $utable="admin_page";
     $set="room_available='$remov'";
     $onbasis="room_type='$rselect'";
   
     $up=$myobj5->updtdt($utable,$set,$onbasis);
   
     if($up=="updated"){
       header("Location:ad_rom_rem.php");
     }
   
    }
   
    else if($rselect=="2 BHK"){
   
     $myobj5=new updatequery();
   
     $utable="admin_page";
     $set="room_available='$remov'";
     $onbasis="room_type='$rselect'";
   
     $up=$myobj5->updtdt($utable,$set,$onbasis);
   
     if($up=="updated"){
       header("Location:ad_rom_rem.php");
     }
   
    }
   
    else if($rselect=="3 BHK"){
   
     $myobj5=new updatequery();
   
     $utable="admin_page";
     $set="room_available='$remov'";
     $onbasis="room_type='$rselect'";
   
     $up=$myobj5->updtdt($utable,$set,$onbasis);
   
     if($up=="updated"){
       header("Location:ad_rom_rem.php");
     }
   
    }
 
  }

 }
 

 if(isset($_POST['confirm'])){
  $bokid=$_POST['bokid'];
  $bngid=$_POST['bngid'];

  $myobj6=new updatequery();

  $utable="room_book";
  $set="status='Confirmed', action_by='Hotel managers'";
  $onbasis="booking_id='$bngid'";

  $upconf=$myobj6->updtdt($utable,$set,$onbasis);

  if($upconf=="updated"){
    header("Location:ad_con_bok.php");
  }
 }

 if(isset($_POST['ad_cancel'])){
  $bokid=$_POST['bokid'];
  $bngid=$_POST['bngid'];
  
  $myobj7=new updatequery();

  $utable="room_book";
  $set="status='Canceled', action_by='Hotel managers'";
  $onbasis="booking_id='$bngid'";

  $uptt=$myobj7->updtdt($utable,$set,$onbasis);

  if($uptt=="updated"){
    header("Location:ad_can_bok.php");
  }
 }

if(isset($_POST['change'])){
  $bokid=$_POST['bokid'];
  $bngid=$_POST['bngid'];
  $outdate=$_POST['outdate'];

  $myobj8=new updatequery();

  $utable="room_book";
  $set="checkout='$outdate'";
  $onbasis="booking_id='$bngid'";

  $upch=$myobj8->updtdt($utable,$set,$onbasis);

  if($upch=="updated"){
    header("Location:ad_dt_chng.php");
  }
}




?>