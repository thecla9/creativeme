        <form role="form" action="process_login.php" method="post" id="frm">     <!--form start here-->        
            <div class="form-group"> 
               <input type="text" class="form-control" id="issued_id" name="issued_id" placeholder="Issued Id..." style="width:300px; margin-left: 380;">
            </div>                      
            <div class="form-group">   
               <input type="password" class="form-control" id="pwd" name="password" placeholder="Password....." style="width:300px; margin-left: 380;">
            </div>                
            <div class="form-group">                 
                <a href="vendor_prompt.php" class="text-danger">Forgot Password ?</a> 
            </div>

            <button type="submit" class="btn btn-success" id="btn">Login</button>
            <button type="button" onclick="window.location = 'index.php'" class="btn btn-danger">	Cancel</button>
        </form> <!--form end here--> 