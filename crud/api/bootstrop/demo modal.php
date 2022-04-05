<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form>
<div class="container">
<div class="row">
<div class="col-sm-5">
<a href="#" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#box">LOGIN</a>
<!---start modal--->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-center text-warning">
        <h5 class="modal-title fs-3" id="exampleModalLabel"><center>Registration form...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-2">
       NAME....<br/><input type="name" value="sudhir mohan" placeholder="enter name" class="form-control border border-2 border-warning mb-1"/>
       EMAIL ID...<br/><input type="email id" value="Sudhirmohanv@gmail.com" placeholder="enter email id" class="form-control border border-2 border-warning mb-1"/>
       PASSWORD...<br/><input type="password" value="231213" placeholder="password" class="form-control  border border-2  border-warning mb-1"/>
       MOBILE NO...<br/><input type="Phone Number" value="7860192325" placeholder="mobile no." class="form-control  border border-2  border-warning mb-1"/>
       DOB...<br/><input type="date" value="10/08/2000" class="form-control  border border-2  border-warning mb-1"/>
       massege...<br/><input type="massege" value="hello vishwakarma ji" placeholder="messege" class="form-control  border border-2  border-warning mb-1"/>
	   <input type="submit" value="LOGIN" class="btn btn-outline-danger"/>
     </div>
    </div>
  </div>
</div>
<!---end modal--->
</div>
</div>
</div>
</form>
<script src="js/bootstrap.js"></script>
</body>
</html>