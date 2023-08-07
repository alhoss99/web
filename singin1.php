
<?php include 'header.php';
      include 'shop/admin/db.php';
?>


    
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
          <h6>.</h6>\
          <div class="container">
           
            <form action="browse.php">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
          <h3>.</h3>
          
          First name:<br>
          <input type="text" name="firstname" value="Mickey">
          <br>
          Last name:<br>
          <input type="text" name="lastname" value="Mouse">
          <br>
          Cantre:<br>
          <select name="cars" class="custom-select mb-3">
            <option selected>Cantre</option>
            <option value="volvo">yemen</option>
            <option value="fiat">egept</option>
            <option value="audi">.......</option>
          </select>
        <br>
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <label for="password">password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name=" password">
        <label for="password">  Confirmation password:</label>
        <input type="password" class="form-control" id="password" placeholder="Confirmation password" name="password">
    <label for="Nambar">Nambar phon:</label>
    <input type="number" class="form-control" id="Nambar" placeholder="Enter Nambar phon" name="Nambar phon">
        <br> 
       
       <br>
       <button type="submit" class="btn btn-primary" style="left: auto;color: #000;">Logen</button>
        </form> 
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
          <h3>.</h3>
          <article id="contact">
            <h2 class="major">Contact</h2>
            <form method="post" action="#">
              <div class="fields">
                <div class="field half">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" />
                </div>
                <div class="field half" >
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                  <label  for="message">Message</label><br>
                  <textarea name="message" id="message" rows="4"  ></textarea>
                </div>
              </div>
              <ul class="actions">
                <li><input type="submit" value="Send Message" class="btn btn-primary" style="background-color: blue;" /></li>
                
              </ul>
            </form>
          
          </article>

        </div>
      </div>
    </div>

<span>
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#home">LOGN IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#menu1">CREAD ACCUNT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#menu2">INSTRUCTION</a>
        </li>
      </ul>
</span>
    <?php include 'footer.php';
      include 'shop/admin/db.php';
?>
