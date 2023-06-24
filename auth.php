<?php 

// ob_start();
$content = 
`<form>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name='remmeber'>
    <label class="form-check-label" for="exampleCheck1">Remmber Me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>`;
// ob_get_clean();

require_once './layout.php';