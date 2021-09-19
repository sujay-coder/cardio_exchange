<?php include 'inc/header.php';?>
<!-- <section class="inner-ban">
  <img src="images/inner_banner.jpg" alt="">

  </div>
  	
  </div>
</section> -->


<section class="profile-section">
  <div class="container">
    <div class="row">
      <div class="sidebar col-md-3">
        <div class="pro-section">
        <div class="img-section">
          <img src="images/pro_img.png">
        </div>
          <a href="javascript:void(0);">John Deo</a>
        </div>
        <ul class="appende_tabs">
          <li>
            <a href="javascrript:void(0);" class="tablinks active" onclick="openCity(event, 'personsl-details')">Personal Details</a>
          </li>
          <li>
            <a href="javascrript:void(0);" class="tablinks" onclick="openCity(event, 'order-history')">Order History</a>
          </li>
          <li>
            <a href="javascrript:void(0);" class="tablinks" onclick="openCity(event, 'personsl-details2')">My Address</a>
          </li>
          <li>
            <a href="javascrript:void(0);" class="tablinks" onclick="openCity(event, 'personsl-details3')">Settings</a>
          </li>
          <li>
            <a href="https://www.ecollegestreet.in/tcgtester/Logout_font">Sign Out</a>
          </li>
        </ul>
      </div>
      <div class="profile-content col-md-9">
        <!-- Personal Details -->
        <div id="personsl-details" class="details-tab tabcontent" style="display: block;">
          <h2>Personal Details</h2>
          <form>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label>Full Name:</label>
                <input type="text" placeholder="John Deo">
              </div>
              <div class="form-group col-sm-6">
                <label>Email:</label>
                <input type="email" placeholder="info@gmail.com">
              </div>
              <div class="form-group col-sm-6">
                <label>Phone Number:</label>
                <input type="tel" placeholder="Phone number">
              </div>
            </div>

              <div class="btn-sec">
                <button type="submit" class="btn save_link">Save changes</button>
                <button type="submit" class="btn reset_link">Reset</button>
              </div>
          </form>
        </div>

        <div id="order-history" class="order-tab tabcontent">
          <h2>Orders</h2>
            <div class="table-responsive shop_cart_table">
              <table class="table">
                  <thead>
                      <tr>
                          <th>Order ID</th>
                          <th>Order Date</th>
                          <th>Delivered to</th>
                          <th>Status</th>
                          <th>Total Amount</th>
                          <th>Currency</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>7</td>
                        <td>11 Mar, 2021</td>
                        <td>3872 Berry Street, Genoa, 80818</td>
                        <td>Procesing</td>
                        <td>$189.08</td>
                        <td>USD</td>
                        <td>
                            <button class="track_dp" type="button" data-toggle="collapse" data-target="#track_table" aria-expanded="false" aria-controls="track_table"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="7"  id="track_table" class="track_dp_menu collapse">
                        <table>
                          <tbody>
                            <tr>
                              <td colspan="2"><a href="javascript: ;"><img src="images/m-pro-img1.jpg" alt=""></a></td>
                              <td colspan="2">cardio Bike</td>
                              <td>$189.08</td>
                              <td colspan="2">USD</td>
                            </tr>
                          </tbody>
                        </table>
                        
                          
                      </td>
                    </tr>
                  </tbody>

              </table>
          </div>
        </div>

        <div id="personsl-details2" class="details-tab2 tabcontent">
            <h2>Personal Details</h2>

            <div class="cr-address">
              <header class="">
              <h3>Billing address</h3>
              <a href="javascript: ;" class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              <a href="javascript: ;" class="trash"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </header>
              <address>
                <h4>Sanjay Dutta</h4> 
                You have not set up this type of address yet.
              </address>
            </div>


            <div class="cr-address">
              <header class="">
                <h3>Shipping address</h3>
                <a href="javascript: ;" class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="javascript: ;" class="trash"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </header>
              <address>
                <h4>Sanjay Dutta</h4> 
                You have not set up this type of address yet.
              </address>
            </div>
            <div class="address-btn">
              <button type="submit" class="btn add_link">Add Address</button>
            </div>
            <form style="display: none">
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label>Full Name:</label>
                  <input type="text" placeholder="John Deo">
                </div>
                <div class="form-group col-sm-6">
                  <label>Email:</label>
                  <input type="email" placeholder="info@gmail.com">
                </div>
                <div class="form-group col-sm-6">
                  <label>Phone Number:</label>
                  <input type="tel" placeholder="Phone number">
                </div>
              </div>

                <div class="btn-sec">
                  <button type="submit" class="btn save_link">Save changes</button>
                  <button type="submit" class="btn reset_link">Reset</button>
                </div>
            </form>
          </div>

          <div id="personsl-details3" class="details-tab3 tabcontent">
            <h2>Personal Details</h2>

            
            <form>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label>Old Password:</label>
                  <input type="password" placeholder="******">
                </div>
                <div class="form-group col-sm-6">
                  <label>New Password:</label>
                  <input type="password" placeholder="******">
                </div>
                <div class="form-group col-sm-6">
                  <label>Confirm Password:</label>
                  <input type="password" placeholder="******">
                </div>
              </div>

                <div class="btn-sec">
                  <button type="submit" class="btn save_link">Save changes</button>
                  <button type="submit" class="btn reset_link">Reset</button>
                </div>
            </form>
          </div>

      </div>
    </div>
  </div>
</section>





<div class="clearfix"></div>
<?php include 'inc/footer.php';?>