 <?php include_once("header.php");?> 
 <?php
 include_once("config.php");
 
 $keys = $db->query("SELECT * FROM passkey");


 ?>
 
   <div class="container mb-5">
    <style>
      .container{
        padding-top: 120px;
      }

      .offset-md-5{
        margin-right: 550px;
      }
    </style>
     <div class="row mb-5">
          <div class="col-lg-4">
            <div class="card d-flex align-items-center">
                <h3 class="text-center">Generate Passkey</h3>
                <form action="admin-action.php" method="post">
                   <input class="offset-md-5 btn  btn-primary" type="submit" value="generate" name="submit">
                </form>
            </div> 
          </div>

           <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Info Panel</h5>
              <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                  <thead>
                    <tr class="border-2 border-bottom border-primary border-0"> 
                      <th scope="col" class="ps-0">Keyid</th>
                      <th scope="col" >Passkey</th>
                      <th scope="col" >Delete Passkey</th>
                      <th scope="col" class="text-center">Page Value</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    <?php if($keys->num_rows > 0): ?>
                      <?php while($key = $keys->fetch_assoc()): ?>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium border-0">
                        <span class="table-link1 text-truncate d-block"><?=$key['keyid']?></span>
                      </th>
                      
                      <td class="border-0">
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block"><?=$key['passkey']?></a>
                      </td>
                      <td>
                        <a href="delete.php?keyid=<?=$key['keyid']?>" class="badge badge-pill bg-danger text-decoration-none">X</a>
                      </td>
                      <td class="text-center fw-medium border-0">No data</td>
                     
                    </tr>
                    <?php endwhile; ?>
                    <?php else: ?>
                           <tr>
                      <th scope="row" class="ps-0 fw-medium border-0">
                        <span class="table-link1 text-truncate d-block">No data</span>
                      </th>
                      
                      <td class="border-0">
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">No data</a>
                      </td>
                      <td class="text-center fw-medium border-0"></td>
                      <td class="text-center fw-medium border-0">No data</td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table><br><br>

                <table class="table text-nowrap align-middle mb-0">
                  <thead>
                    <tr class="border-2 border-bottom border-primary border-0"> 
                      <th scope="col" class="ps-0">Uid</th>
                      <th scope="col" >Name</th>
                      <th scope="col" class="text-center">Email</th>
                      <th scope="col" class="text-center">Activity Log</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">No data</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">No data</a>
                      </td>
                      <td class="text-center fw-medium">No data</td>
                      <td class="text-center fw-medium">No data</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">No data</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">No data</a>
                      </td>
                      <td class="text-center fw-medium">No data</td>
                      <td class="text-center fw-medium">No data</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">No data</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">No data</a>
                      </td>
                      <td class="text-center fw-medium">No data</td>
                      <td class="text-center fw-medium">No data</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">No data</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">No data</a>
                      </td>
                      <td class="text-center fw-medium">No data</td>
                      <td class="text-center fw-medium">No data</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium border-0">
                        <span class="table-link1 text-truncate d-block">No data</span>
                      </th>
                      <td class="border-0">
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">No data</a>
                      </td>
                      <td class="text-center fw-medium border-0">No data</td>
                      <td class="text-center fw-medium border-0">No data</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
<?php include_once("footer.php");?>
