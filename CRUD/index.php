<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <div class="container my-3">
    <h1 class="text-center">
      CRUD APPLICATION
    </h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Add New Users
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><ion-icon name="person-circle-outline"></ion-icon></span>
              <input id="username" type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="addon-wrapping">
            </div>
            <br>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><ion-icon name="mail-outline"></ion-icon></span>
              <input id="email" type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="addon-wrapping">
            </div>
            <br>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><ion-icon name="lock-closed-outline"></ion-icon></span>
              <input id="password" type="text" class="form-control" placeholder="password" aria-label="Password"
                aria-describedby="addon-wrapping">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
            <button onclick="addUser()" type="button" class="btn btn-primary">Insert</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>

  function DisplayData() {
    var displayData = true;
    $.ajax({
      url: "display.php",
      type: "post",
      data:{
        displayDataSend: displayData

      },
      success:function(data, status) {}



  }








  function addUser() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    $.ajax({
      url: "insert.php",
      type: "POST",
      data: {
        nameSend: uername,
        emailSend: email,
        passwordSend: password

    }
    success: function(data,status) {
      DisplayData();


    })



</script>





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
