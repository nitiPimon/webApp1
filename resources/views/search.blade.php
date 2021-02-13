<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }}
        </h2>
        <!DOCTYPE html>
<html lang="en">
<body>
<Style>

 h2{
  text-align:center;
  padding:20px
  
  
 }
 h5{
  text-align:center;
  
 }

.box{
    width: 100%;
    text-align:center;
}
   .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

    .button1 {background-color: #f76540;} 

    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
  
  
}

}
</Style>

<div>
<h2 style="font-family:verdana;" >Join for review</h2>
<h5 style="font-family:verdana;" >เว็บสำหรับการรีวิวอาหารเเละร้าน เพื่อทำให้พึงพอใจในการเลือกร้านค้า
เเละทำให้มีความสุชในการรับประทานอาหาร</h5>
</div>
<div class="box">
<input  type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">
<button class="button button1">Seacrh</button>
</div>




</body>
</html>
    </x-slot>
</x-app-layout>
