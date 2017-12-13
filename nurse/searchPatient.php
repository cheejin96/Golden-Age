<?php include ('../CSS.php') ?>
<?php include ('header.php') ?>
<?php include('../connDB.php');?>

<form name="searchUser" method="post" border='1'>
	<div class="createUser">
		<span><p class="big">Search</p></span>
		<span><input id="search" name="search" type="text" value="" maxlength="255" onkeyup="showRecord(this.value)" /></span>
		<span>
			<select id="type" name="type">
				<option value="0">Name</option>
				<option value="1">ID</option>
			</select>
		</span>
	</div>
	<div id="record">
		
	</div>
</form>

<script type="text/javascript">
	function showRecord(str){
		if(str.length == 0){
			document.getElementById("record").innerHTML = "";
		}else{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("record").innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET","getRecord.php?q="+str+"&type="+type.value,true);
			xmlhttp.send();
		}
	}
</script>