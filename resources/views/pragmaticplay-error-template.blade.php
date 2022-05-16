<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
	function windowClose() {
		window.open('','_parent','');
		window.close();
	}
	function goBack() {
    window.history.back();
	}
</script>
</head>
<style>
.pageContent {
  width: 100%;
  height: 100%;
  background-color: #272727;
}
.centerContent {
  background-color: #FD8932;
  position: absolute;
  height: 300px;
  width: 100%;
  top: 35%;
  left: 0%;
}

.textContent {
  color: white;
  position: absolute;
  text-align: center;
  top: 25%;
  left: 0;
  width: 100%;
  font-size: 30px;
  font-family: 'Century Gothic', CenturyGothic, AppleGothic, Futura, sans-serif;
  letter-spacing: -1px;
}

input.MyButton {
  width: 200px;
  padding: 20px;
  cursor: pointer;
  font-size: 80%;
  background: #FD8932;
  color: #fff;
  border: 1px solid #272727;
  border-radius: 10px;
  -moz-box-shadow:: 6px 6px 5px #999;
  -webkit-box-shadow:: 6px 6px 5px #999;
  box-shadow:: 6px 6px 5px #999;
}

input.MyButton:hover {
  color: #FD8932;
  background: #272727;
  border: 1px solid #fff;
}
</style>
</head>
<body class="pageContent">
  <div class="centerContent">
    <div class="textContent">
      @php
      if($meta) {
      	echo $meta;
      } else {
      	echo 'Something weird happened. We apologize for the inconvenience.';
      }
      @endphp
      <br>
      <br>
      <br>
      <input class="MyButton" type="button" value="GO BACK" onclick="goBack();windowClose();" />
      <script>
      </script>
    </div>
  </div>
</body>

