<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class ProcessModel {

  public function __construct($conn){
    try{
      $this->conn = $conn;
    }catch(Exception $err){
      exit($err);
    }
  }

  public function deleteInvest(){

    if(!isset($_POST['idx'])){
      return true;
    }

    $idx = $_POST['idx'];

    for ($i = 0; $i < count($idx); $i++) {

        $stmt = $this->conn->prepare("DELETE FROM veritas_liam WHERE idx = ?");
        $stmt->bind_param("i", intval($idx[$i]));
        $stmt->execute();
    }
    return true;
  }

  public function deleteBond(){

    if(!isset($_POST['idx'])){
      return true;
    }

    $idx = $_POST['idx'];

    for ($i = 0; $i < count($idx); $i++) {

        $stmt = $this->conn->prepare("DELETE FROM veritas_building WHERE idx = ?");
        $stmt->bind_param("i", intval($idx[$i]));
        $stmt->execute();
    }
    return true;

  }

  public function deleteUserManage(){
    
    if(!isset($_POST['idx'])){
      return false;
    }

    $idx = $_POST['idx'];
    
    for ($i = 0; $i < count($idx); $i++) {

        $stmt = $this->conn->prepare("DELETE FROM veritas_users_admin WHERE _id = ?");
        $stmt->bind_param("i", intval($idx[$i]));
        $stmt->execute();
    }
    return true;
  }

  public function deleteManagerUser(){
    
    if(!isset($_POST['idx'])){
      return false;
    }

    $idx = $_POST['idx'];
    
    for ($i = 0; $i < count($idx); $i++) {

        $stmt = $this->conn->prepare("DELETE FROM veritas_investor_admin WHERE _id = ?");
        $stmt->bind_param("s", $idx[$i]);
        $stmt->execute();
    }
    return true;
  }

  public function updateManagerUser(){
      $idx = $_POST['idx'];
			$name = $_POST['name'];
			$birth = $_POST['birth'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$appendix = $_POST['appendix'];
      $manager = $_POST['manager'];
      
      for($i=0; $i <count($idx); $i++){
        $stmt = $this->conn->prepare("UPDATE veritas_investor_admin SET _id = ?, _name = ? , birth = ? , phone = ? , email = ? , address = ? , appendix = ? , manager = ?  WHERE _id = ?");
  
        $stmt->bind_param("sssssssss", $idx[$i], $name[$i], $birth[$i] , $phone[$i] , $email[$i] , $address[$i] , $appendix[$i] , $manager[$i] , $idx[$i]);
  
        $stmt->execute();
      }

      return true;
  }

  public function updateBond(){

    $idx = $_POST['idx'];
    $buliding = $_POST['buliding'];
    $o_num = $_POST['o_num'];
    $step = $_POST['step'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $date3 = $_POST['date3'];
    $date4 = $_POST['date4'];
    $date5 = $_POST['date5'];
    $date6 = $_POST['date6'];
    $date7 = $_POST['date7'];
    $date8 = $_POST['date8'];
    $date9 = $_POST['date9'];
    $date10 = $_POST['date10'];

    for($i=0; $i <count($idx); $i++){
      $stmt = $this->conn->prepare("UPDATE veritas_building SET idx = ?, buliding = ? , o_num = ?, step = ? , date1 = ?, date2 = ?, date3 = ?, date4 = ?, date5 = ?, date6 = ?, date7 = ?, date8 = ?, date9 = ?, date10 = ? WHERE idx = ?");

      $stmt->bind_param("isssssssssssssi",intval($idx[$i]), $buliding[$i] , $o_num[$i], $step[$i], $date1[$i], $date2[$i], $date3[$i], $date4[$i], $date5[$i], $date6[$i], $date7[$i], $date8[$i], $date9[$i], $date10[$i], intval($idx[$i]));

      $stmt->execute();
    }
    return true;
  }

  public function updateUserManage(){
    $id = $_POST['_id'];
    $name = $_POST['_name'];
    $team = $_POST['_team'];
    $b_sale = $_POST['b_sale'];
    $i_man = $_POST['i_man'];
    $b_man = $_POST['b_man'];
    $b_status = $_POST['b_status'];
    $a_man = $_POST['a_man'];

    for($i=0; $i <count($id); $i++){

      $stmt = $this->conn->prepare("UPDATE veritas_users_admin SET _id = ?, _name = ? , _team = ? , b_sale = ? , i_man = ? , b_man = ? , b_status = ? , a_man = ? WHERE _id = ?");

      $stmt->bind_param("sssiiiiis", $id[$i] , $name[$i] , $team[$i] , $b_sale[$i] , $i_man[$i] , $b_man[$i] , $b_status[$i] , $a_man[$i] , $id[$i]);

      $stmt->execute();

    }
    return true;
  }

  public function updateInvest(){

    $idx = $_POST['idx'];
    $idx = intval($idx);
    $investment = $_POST['investment'];
    $investment_name = explode('-', $_POST['investment_name'])[1];
    $i_id = $_POST['i_id'];
    $price = $_POST['price'];
    $p_goal = $_POST['p_goal'];
    $c_date = $_POST['c_date'];
    $c_date2 = $_POST['c_date2'];
    $c_date3 = $_POST['c_date3'];
    $agreement = $_POST['agreement'];
    $goal_in = $_POST['goal_in'];
    $goal_out = $_POST['goal_out'];
    $c_date4 = $_POST['c_date4'];
    $invest_date = $_POST['invest_date'];
    $_price = $_POST['_price'];
    $p_price = $_POST['p_price'];
    $_price2 = $_POST['_price2'];
    $t_price = $_POST['t_price'];
    $contract = $_POST['contract'];
    $c_date5 = $_POST['c_date5'];
    $_price3 = $_POST['_price3'];
    $confirm1 = $_POST['confirm1'];
    $confirm2 = $_POST['confirm2'];
    $confirm3 = $_POST['confirm3'];
    $confirm4 = $_POST['confirm4'];
    $confirm5 = $_POST['confirm5'];
    $law_office = $_POST['law_office'];
    $etc = $_POST['etc'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];

    $arr = get_defined_vars();

    foreach ( $arr as $vName => $value )
    {
        echo $vName." : ".$value."<br>";
    }


    $stmt = $this->conn->prepare("UPDATE veritas_liam SET idx = ?, investment = ?, investment_name = ?, i_id = ?, price = ?, p_goal = ?, goal_in = ?, goal_out = ?,  agreement = ?, c_date = ?, c_date2 = ?, c_date3 = ?,  c_date4 =?, invest_date = ?, _price = ?, p_price = ?, _price2 = ?, t_price = ?, contract = ?, c_date5 = ?, _price3 = ?, confirm1 = ?, confirm2 = ?, confirm3 = ?, confirm4 = ?, confirm5 = ?, law_office = ?, etc = ?, address = ?, phone = ?, birth = ?, email = ? WHERE idx = ?");

    $stmt->bind_param("isssssssssssssssssssssssssssssssi",
    $idx,$investment,$investment_name,$i_id,$price,$p_goal,$c_date,$c_date2,$c_date3,$agreement,$goal_in,$goal_out,$c_date4,$invest_date,$_price,$p_price,$_price2,$t_price,$contract,$c_date5,$_price3, $confirm1,$confirm2,$confirm3,$confirm4,$confirm5,$law_office,$etc,$address,$phone,$birth,$email,$idx);


    $stmt->execute();

    return true;

  }

  function inputExcel(){

    $investment = $_POST['investment'];
    $investment_name = $_POST['investment_name'];
    $i_id = $_POST['i_id'];
    $price = $_POST['price'];
    $p_goal = $_POST['p_goal'];
    $c_date = $_POST['c_date'];
    $c_date2 = $_POST['c_date2'];
    $c_date3 = $_POST['c_date3'];
    $agreement = $_POST['agreement'];
    $goal_in = $_POST['goal_in'];
    $goal_out = $_POST['goal_out'];
    $c_date4 = $_POST['c_date4'];
    $invest_date = $_POST['invest_date'];
    $_price = $_POST['_price'];
    $p_price = $_POST['p_price'];
    $_price2 = $_POST['_price2'];
    $t_price = $_POST['t_price'];
    $contract = $_POST['contract'];
    $c_date5 = $_POST['c_date5'];
    $_price3 = $_POST['_price3'];
    $confirm1 = $_POST['confirm1'];
    $confirm2 = $_POST['confirm2'];
    $confirm3 = $_POST['confirm3'];
    $confirm4 = $_POST['confirm4'];
    $confirm5 = $_POST['confirm5'];
    $law_office = $_POST['law_office'];
    $etc = $_POST['etc'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];

    /* 엑셀 인풋 전에 테이블 초기화 */

    $sql = "TRUNCATE TABLE veritas_liam";

    if(count($investment) > 0){
      $this->conn->query($sql);
    }else{
      return false;
    }

    for($i=0; $i <count($investment); $i++){

      $stmt = $this->conn->prepare("INSERT INTO veritas_liam (idx, investment, investment_name,i_id,price,p_goal,goal_in,goal_out,agreement, c_date,c_date2,c_date3,c_date4,invest_date,_price,p_price,_price2,t_price,contract,c_date5,_price3, confirm1  , confirm2  , confirm3  , confirm4,confirm5,law_office,etc,address,phone,birth,email)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      //32

      $stmt->bind_param("isssssssssssssssssssssssssssssss",
      intval(0),$investment[$i],$investment_name[$i],$i_id[$i],$price[$i],$p_goal[$i],$goal_in[$i],$goal_out[$i],$agreement[$i],$c_date[$i],$c_date2[$i],$c_date3[$i],$c_date4[$i],$invest_date[$i],$_price[$i],$p_price[$i],$_price2[$i],$t_price[$i],$contract[$i],$c_date5[$i],$_price3[$i], $confirm1[$i],$confirm2[$i],$confirm3[$i],$confirm4[$i],$confirm5[$i],$law_office[$i],$etc[$i],$address[$i],$phone[$i],$birth[$i],$email[$i]);

      $stmt->execute();
    }

    return true;
  }

  function inputUser(){

    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $phoneNum = $_POST['phoneNum'];

    for($i=0; $i <count($name); $i++){
      $stmt = $this->conn->prepare("INSERT INTO userManage (name, birth, phoneNum ) VALUES(?,?,?)");

      $stmt->bind_param("sss", $name[$i], $birth[$i], $phoneNum[$i]);
      $stmt->execute();
    }
    return true;
  }
  
//   function inputBondExcel(){

//     $buliding = $_POST['buliding'];
//     $o_num = $_POST['o_num'];
//     $step = $_POST['step'];
//     $date1 = $_POST['date1'];
//     $date2 = $_POST['date2'];
//     $date3 = $_POST['date3'];
//     $date4 = $_POST['date4'];
//     $date5 = $_POST['date5'];
//     $date6 = $_POST['date6'];
//     $date7 = $_POST['date7'];
//     $date8 = $_POST['date8'];
//     $date9 = $_POST['date9'];
//     $date10 = $_POST['date10'];

//     /* 엑셀 인풋 전에 테이블 초기화 */

//     $sql = "TRUNCATE TABLE veritas_building";

//     if(count($buliding) > 0){
//       $this->conn->query($sql);
//     }else{
//       return false;
//     }

//     for($i=0; $i <count($buliding); $i++){
//       $stmt = $this->conn->prepare("INSERT INTO veritas_building (idx, buliding, o_num, step, date1, date2, date3, date4, date5, date6, date7, date8, date9, date10) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

//       $stmt->bind_param("isssssssssssss",intval(0), $buliding[$i] , $o_num[$i], $step[$i], $date1[$i], $date2[$i], $date3[$i], $date4[$i], $date5[$i], $date6[$i], $date7[$i], $date8[$i], $date9[$i], $date10[$i]);
//       $stmt->execute();
//     }
//     return true;
//   }
}
 ?>
