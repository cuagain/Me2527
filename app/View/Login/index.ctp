<?php
    echo $this->Form->create("login", array("method" => "post", "class" => "form-signin", "url" => array("controller" => "login", "action" => "index")));
?>
<h2 class="form-signin-heading">Please sign in</h2>
<?php
    echo $this->Flash->flash() ; 
?>
<input type="text" name="data[Login][username]" class="form-control" placeholder="Email / Username">
<input type="password" name="data[Login][password]" class="form-control" placeholder="Password">
<label class="checkbox">
    <!--        <input type="checkbox" value="remember-me"> Remember me-->
</label>
<button class="btn btn-large btn-primary" type="submit">Login</button>
<?php
    echo $this->Form->end();
?>