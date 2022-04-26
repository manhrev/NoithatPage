<?php 
    //include header
    require_once ("header.php");
?>

<!-- <main> -->
<link rel="stylesheet" href="http://localhost:8080/WEB-212/public/styleforuserproducts.css">
<link rel="stylesheet" href="http://localhost:8080/WEB-212/public/boostrap.min.css">

<div class="container">
        <h1>
            <span class="under-line-effect under-line-effect--red" style="margin: 0;">User</span>
        </h1>

        <div class="mt-4 d-flex align-items-center">
            <div class="form-check">
              <input type="checkbox" value="" id="checkbox-all" style="margin-top: 5px;">
              <label for="checkbox-all" style="margin: 0 0 0 5px; font-size:medium">
                Select All
              </label>
            </div>
    
            <select class="form-control form-control-sm info__value" name="action" style="font-size: 1.6rem; height: 3.7rem; margin-left: 10px; margin-right: 10px; width:200px">
              <option value="">--Choose Action--</option>
              <option value="delete">Delete user</option>
              <option value="add-user">Add user</option>
            </select>
    
            <!-- <button class="btn btn-primary btn-sm btn-check-submit">Thực hiện</button> -->
            <button type="submit" class="product__item-btn btn-red" style="color: white; margin-top: 0">Action</button>
        </div>
        <table class="table mt-4" style="font-size: 1.4rem; text-align: center">
            <thead>
                <tr>
                    <th scope="col" style="text-align: left">Choose</th>
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Location</th>
                    <th scope="col">Used to buy</th>
                    <th scope="col">Revenue</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                      <div style="margin: 0;">
                        <input class="" type="checkbox" name="" value="">
                      </div>
                    </td>
                    <th scope="row">this.id</th>
                    <td>this.name</td>
                    <td>this.email</td>
                    <td>this.phonenumber</td>
                    <td>this.location</td>
                    <td>
                        <!-- {{#if this.usedtobuy}} -->
                        <input type="checkbox" checked disabled>
                        <!-- {{else}} -->
                        <!-- <input type="checkbox" disabled> -->
                        <!-- {{/if}} -->
                    </td>
                    <td>VND</td>
                    <td>
                        <a href=""  class="product__item-btn btn-red" style="color: white; margin: 0">Edit</a>
                        <a href=""  class="product__item-btn btn-red" style="color: white; margin: 0">Delete</a>
                    </td>
                </tr>
                <!-- {{else}} -->
                <tr>
                    <td colspan="9" class="text-center" style="font-weight: bold;">
                      No User!!!
                      <a href="">Add Now</a>
                    </td>
                </tr>
                <!-- {{/each}} -->
            </tbody>
        </table>

        


    </div>
<!-- </main> -->

<?php
    //include footer
    require_once ("footer.php");
?>