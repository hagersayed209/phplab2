<?php
//$family2=["Father"=>"ahmed","Sons"=>["son1"=>"mohammed","son2"=>"mahmoud"],"sibling"=>"ali"];
$arr= array("php", "open source", "iti","day2","arrays");

$count= count($arr);
for($i=0;$i<$count;$i++) {
    echo $arr[$i];
}
echo "<br>";
foreach ($arr as $val)
{
 echo $val;   
}
echo "<br>";
$inform=array ( "name"=>"hager","age"=>"23", "email"=>"hager@gmail.com","college"=>"education");
echo "<table border=1>
<tr>
<td>name:</td>
<td>$inform[name]</td>

</tr>
<tr>
<td>Age</td>
<td>$inform[age]</td>
</tr>
<td>email:</td>
<td>$inform[email]</td>
</tr>
<tr>
<td>college:</td>
<td>$inform[college]</td>
  </tr>
  </table> ";


  class Todo{
   public $name;
    public $staties =false;
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function check(){
        $this->staties= true;
        
        

        }
    public function strike()
    {
        if($this->staties){
            return $this->name=$this->name."done";;
        }
    }
    }


$obj1=new Todo("task 1");
$obj2=new Todo("task 2");
$obj2->check();
$obj2->strike();
$obj3=new Todo("task 3");
$obj4=new Todo("task 4");
$obj5=new Todo("task 5");
$obj6=new Todo("task6");




$arr_todos=[$obj1,$obj2,$obj3,$obj4,$obj5,$obj6];
if($obj1->check()){
    echo"<strike>$obj1->name<strike>";  
}
?>

<table border="2">
<tr>
<td>Id</td>
<td>ToDO Name</td>
</tr>

<?php
$i=0;
foreach ($arr_todos as $todo){
$i++;
?>
<tr>
<td><?= $i;?></td>
<td><?=$todo->name;  ?></td>
</tr>
<?php }
?>
</table>

<?php
echo "<br>";

$family2=["Father"=>"ahmed","Sons"=>["son1"=>"mohammed","son2"=>"mahmoud"],"sibling"=>"ali"];


if (is_array($family2) || is_object($family2))
{
foreach ($family2 as $familykey=>$member)
{
    print_r($member);
    echo "<br>";
    if (is_array($member) || is_object($member))
    {

    foreach($member as $key=>$son)
    {
        echo "$key:$son"."<br>";
    }

}
}

}


echo "<hr>";
?>
