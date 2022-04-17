<?php 

include('header.php');
 ?>
   <div class="app-main__outer">
                        <div class="app-main__inner">
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <div class="page-title-icon">
                                            <i class="pe-7s-display2 icon-gradient bg-mean-fruit">
                                            </i>
                                        </div>
                                        <div>Stuffs
                                            <div class="page-title-subheading">
                                            	Roles, and Fire staff here.
                                            </div>
                                        </div>
                                    </div>
           </div>
       </div>
       <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Certification</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	  <?php 
                                            $connect=mysqli_connect('localhost','root','','ewsd');
     $query='SELECT s.*,r.name as role,f.name as fac FROM staffs s inner join roles r on r.role_id=s.role_id inner join faculties f on f.faculty_id=s.faculty_id where s.deleted_at is NULL ';
                                                $ret=mysqli_query($connect,$query);
                                             $count=mysqli_num_rows($ret);

                                             while ($row =mysqli_fetch_assoc($ret)) :
                                                  $SID=$row['staff_id'];
                                             ?>
                                            <tr>
                                                <td class="text-center text-muted">  <?php echo $row['staff_id'] ?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"> <?php echo $row['name'] ?></div>
                                                                <div class="widget-subheading opacity-7"><?php echo $row['role'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><?php echo $row['fac'] ?></td>
                                                <td class="text-center">
                                                   <?php echo $row['email'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="fire.php?QID=<?php echo $SID ?> ">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Fire</button>
                                                    </a>
                                                </td>
                                            </tr>
                                                   <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                            <br><br><br>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                               
                                   <p>© 2020 KMD University, Incorporated</p>
                                
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
