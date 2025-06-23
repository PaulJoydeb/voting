<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Voting System  </title>
<!-- bootstrap css 4.1.3 link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- bootstrap css 5.6 link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>  

<!-- bootstrap css jquery 3.3.1 link-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
  <body class="bg-dark" >

    <h1 class="text-info text-center p-3"> voting system </h1>


  <div class="bg-info py-4">
        <h2 class="text-center" > Login</h2>
    <div class="container text-center">
        <form action="" >
            <div class="mb-3" >
                <input type="text" class="form-contol w-50 m-auto" 
                name="username" placeholder="Enter your username" required="required">
            </div>
            
            <div class="mb-3" >
                <input type="text" class="form-contol w-50 m-auto" 
                name="mobile" placeholder="Enter your mobile number" required="required" maxLength="11" minLenth ="11">
            </div>
             
            <div class="mb-3" >
                <input type="text" class="form-contol w-50 m-auto" 
                name="password" placeholder="Enter your password" required="required">
            </div>

              <div class="mb-3">
               <select name="std" id="" class="form-select w-50 m-auto">
                    <option value="group">Group</option>    
                    <option value="voter">Voter</option>  
            
                </select>
            </div>
                <button type="submit" class="btn btn-dark my-4"> Login</button>
                 <p> Don't Have account ? <a href="./partials/registration.php" class ="text-white"> Register Here</a> </p>
        </form>
    </div>

  </div>
<script></script>


</body>
</html>