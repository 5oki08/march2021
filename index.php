<!DOCTYPE html>
<html lang="en">
<head>

<!-- CDN -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<title>php</title>
	


<style type="text/css">

body {
	max-width: 1280px;
	margin: 0 auto;
}

#grid1 {
	background-color: #32A852;
	grid-area: header;
	padding: 20px;
}
#grid2 {
	background-color: #9B5F01;
	grid-area: nav;
	padding: 20px;
}
#grid3 {
	background-color: #4F9585;
	grid-area: body;
	padding: 20px;
}
#grid4 {
	/*background-color: #7B09F9;*/
	grid-area: bodybody;
	padding: 20px;
}
#grid5 {
	/*background-color: #C2292C;*/
	grid-area: finish;
	padding: 20px;
}
#grid6 {
	background-color: #DE6BFD;
	grid-area: footer;
	padding: 20px;
}

	.grid-container {
	display: grid;
	grid-template-areas:
	'header header header header header header'
	'nav nav body body body finish'
	'nav nav bodybody bodybody bodybody finish'
	'nav nav footer footer footer finish'
	;
	grid-gap: 5px;
}



/*.grid-container {

	display: grid;
	grid-template-areas: 
	'header header header header'
	'nav body body body'
	'nav bodybody bodybody bodybody'
	'finish finish finish finish'
	'footer footer footer footer'
	;

}*/



/*grid4*/
#flextry1 {
	display: flex;
	flex-wrap: wrap;
	grid-gap: 10px;
	flex-direction: column;
}

#flex1 {
	padding: 30px;
	background-color: #8e29fa;
}
#flex2 {
	padding: 30px;
	background-color: #90abe7;
}
#flex3 {
	padding: 30px;
	background-color: #1db447;
}
#flex4 {
	padding: 30px;
	background-color: #8ff818;
}
#flex5 {
	padding: 30px;
	background-color: #bb1c6d;
}
#flex6 {
	padding: 30px;
	background-color: #ff1a90;
}




/*grid5*/
#fleximg1 {
	display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	grid-gap: 10px;
	justify-content: center;
	align-items: center;
}


#img1 {
	padding: 10px;
}
#img2 {
	padding: 10px;
}
#img3 {
	padding: 10px;
}
#img4 {
	padding: 10px;
}
#img5 {
	padding: 10px;
}
#img6 {
	padding: 10px;
}



</style>

</head>
<body>


<div class="grid-container">
	<div id="grid1">1</div>	
	<div id="grid2">2</div>
	<div id="grid3">3</div>

	<div id="grid4">
		
		<div id="flextry1">
			
			<div id="flex1">A</div>
			<div id="flex2">B</div>
			<div id="flex3">C</div>
			<div id="flex4">D</div>
			<div id="flex5">E</div>
			<div id="flex6">F</div>

		</div>
		
	</div>

	<div id="grid5">
		
		<div id="fleximg1">
			
			<div id="img1">
				<img src="images/lemans1.jpg" alt="Car Photography" width="150" height="150">
			</div>
			<div id="img2">
				<img src="images/lemans2.jpg" alt="Car Photography" width="150" height="150">
			</div>
			<div id="img3">
				<img src="images/lemans3.jpg" alt="Car Photography" width="150" height="150">
			</div>
			<div id="img4">
				<img src="images/lemans4.jpg" alt="Car Photography" width="150" height="150">
			</div>
			<div id="img5">
				<img src="images/lemans5.jpg" alt="Car Photography" width="150" height="150">
			</div> 

		</div>

	</div>
	<div id="grid6">6</div>
</div>




</body>
</html>