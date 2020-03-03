<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="">
  
  <div>
    <label for="cc">Credit Card</label>
    <!-- Set via HTML -->
   
  
  <div>
    <label for="phone">Phone</label>
    <!-- or set via JS -->
    <input id="phone" type="text" />
  </div>

</form>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
	<script type="text/javascript">
	$(":input").inputmask();

$("#phone").inputmask({"mask": "99-9-9-9999-9"});
</script>
</html>