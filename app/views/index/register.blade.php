
@extends('index.master')

@section('content')

<!---start-Blog---->
<script type="text/javascript" src="assets/js/tabs.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="js/validate.js"></script>

    <div class="blog">
      <div class="destination-head">
        <div class="wrap">
          <h3>Registration</h3>
        </div>
        <!---End-destinatiuons---->
        <div class="find-place dfind-place">
          <div class="wrap">
            <div class="p-h">
              <span>PLEASE</span>
              <label>JOIN US!</label>
            </div>
            <div class="p-w">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#regUser" role="tab" data-toggle="tab"><h4><b>Create an Account (for user)</b></h4></a></li>
                <li role="presentation"><a href="#regOwner" role="tab" data-toggle="tab"><h4><b>Create an Account (for owner)</b></h4></a></li>
              </ul>
            <div class="clear"> </div>
          </div>
        </div>
        <!----//End-find-place---->
      </div>
    </div>
    </div>
    <div class="blog-grids">
      <div class="wrap">
        <div class="blog-grids-head">
          <h3>Create An Account</h3>
          <!-- Tab panes -->
        <div class="tab-content">
          <!-- User -->
            <div role="tabpanel" class="tab-pane active" id="regUser">
              <br>
    <form role="form" action="register/store" method="POST" enctype="multipart/form-data">
              <div class="row">
              <div class="form-group col-xs-6 ">
                <label class="control-label">Firstname</label>
                <input type="text" class="form-control" placeholder="Firstname" name="fname" id="firstname">
              </div>
              <div class="form-group col-xs-6">
                <label class="control-label">Lastname</label>
                <input type="text" class="form-control" placeholder="Lastname" name="lname" id="lastname">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-12">
                <label class="control-label">Email</label>
                <input type="text" class="form-control" placeholder="example@dogether.com" name="email" id="email">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label class="control-label">Password </label><span style="color:red; font-size:15px;"> ( at least 6 character and 1 number )</span>
                <input type="password" class="form-control" placeholder="Password" name="pwd" id="password">
              </div>
              <div class="form-group col-xs-6">
                <label class="control-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="repwd" id="repassword">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label class="control-label">Phone Number</label>
                <input type="text" class="form-control" placeholder="080XXXXXXX" name="tel" id="phone">
              </div>
              <div class="form-group col-xs-6">
                <label class="control-label">Date of Birth</label>
                <input type="date" class="form-control" placeholder="DD-MM-YYYY" name="dob" id="dob">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label class="control-label">Sex</label><p>
              <label class="radio-inline">
                <input type="radio" name="sex" id="inlineRadio1" value="M" > Male
              </label>
              <label class="radio-inline">
                <input type="radio" name="sex" id="inlineRadio2" value="F" > Female
              </label>
              </div>
              </div>
              <div class="row">
              <div class="form-group col-xs-12">
                <label class="control-label">Profile Picture</label>
                <input type="file" accept="image/*" class="form-control" placeholder=".col-xs-2" name="pic">
              </div>
            </div>
              <input type="hidden" name="type" value="customer">
              <input class="btn" type="submit" value="Create an Account" id="create">
            
            </div>
       </form>
            <!-- Owner -->
          <div role="tabpanel" class="tab-pane" id="regOwner">
            <br>
            <form class="form-horizontal" role="form" action="register/store" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Email" name="email" id="email2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control input-sm" placeholder="Password" name="pwd" id="password2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control input-sm" placeholder="Confirm Password" name="repwd" id="repassword2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">StoreName</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Address" name="sname" id="sname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Address" name="addr">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">District</label>
                    <div class="col-sm-10">
                      <select name="district">
                        <option value="null">---- Choose District ----</option>
                        <?php
                          foreach($arr as $r)
                          {
                            echo "<option value='$r->district'>$r->district</option>";
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Province</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Province" name="prov">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Post Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Post" name="post">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="080-000-0000">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Caption</label>
                    <div class="col-sm-10">
                      <textarea class="form-control input-sm" rows="3" name="desc"></textarea>
                    </div>
                  </div>
                  <label class="col-sm-2 control-label">Catagory</label>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="food">
                      Food
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="fashion">
                      Fashion
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="health">
                      Health
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="entertainment">
                      Entertainment
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="seminar">
                      Seminar
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="other">
                      Other
                    </label>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">          
                      <label class="col-sm-2">Profile</label>
                      <input type="file" class="col-sm-10" name="pic">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="hidden" name="type" value="owner">
                      <button type="submit" class="btn btn-default">Sign Up</button>
                    </div>
                  </div>

          </form>

          </div>

        </div>
      </div>
    </div>

  </div>
</div>

</div>

<script>
  $(document).ready(function() {
    $('#myTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')

  })
  })
</script>
        </div>
      </div>
    </div>

				

@stop