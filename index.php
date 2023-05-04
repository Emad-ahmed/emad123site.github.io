<?php include 'navbar.php' ?>

    <style>
     
      @media(max-width: 380px)
      {
        .sub
        {
          width: 100px;
        }
        .sub:hover
        {
          width: 100px;
        }
      }


    </style>
    
   
    <h1 class="element display-4" style="font-weight: bolder; color: black; font-family: 'Lobster', cursive;"></h1>
    <p class=" text-center para">I Am A Professional You Can Hire Me For Work I Can Create All Type Of Website  </p>
    <div class=" text-center">
    <a href="#" class="btn btn-outline-dark btn-lg  mt-4" type="button"  data-toggle="modal" data-target="#exampleModal">Hire Us</a>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">HIRE US</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: #101212 ; color: white;">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary sub">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>
  </div>
 


  

  <script type="text/javascript" src="typed.js"></script>
    <script type="text/javascript">
          var typed = new Typed('.element', {
        strings: ['WELCOME Emad WEBSITE', "YOU CAN HIRE ME"],
        typeSpeed: 70,
        backSpeed: 100,
        loop:true,
      });
    </script>

