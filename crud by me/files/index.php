<?php
include('header.php');
?>



 <body>
        <div class="container">
            <div class="first">
                <div class="one">
                    <div class="user">
                        <div class="image">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <p>Name</p>
                    </div>
                    <div class="edit">
                        <div id="user_ic">Users</div>
                        <div id="add_ic">Add Customers</div>
                        <div id="my_ic">My Customers</div>
                    </div>

                </div>
                <div class="two">
                    <form action="" method="post" id="form" style="display:none;" enctype="multipart/form-data">
                        <h1 style="margin: auto;width:50%;text-align:center;">Add Customer</h1>
                        <div class="inps">
                            <label for="" class="lab">Name</label>
                            <input type="text" name="name" id="name" class="in">
                        </div>
                        <div class="inps">
                            <label for="" class="lab">Phone</label>
                            <input type="tel" name="phone" id="phone" class="in">
                        </div>
                        <div class="inps">
                            <label for="" class="lab">Email</label>
                            <input type="email" name="mail" id="mail" class="in">
                        </div>
                        <div class="inps">
                            <label for="" class="lab">Passport ID</label>
                            <input type="text" name="passport" id="passport" class="in">
                        </div>
                        <div class="inps">
                            <label for="" class="lab">Photo</label>
                            <input type="file" name="picfile" id="picfile" class="in">
                            <input type="hidden" name="hidden" id="hidden" value="create">
                        </div>
                        <div class="inps_btn">
                            <button type="button" class="btnns">Cancel</button>
                            <button type="submit" class="btnns" id="submit" value="">Submit</button>
                        </div>
                    </form>
                    <div id="projector" style="display:none;"></div>
                </div>

            </div>

        </div>
        <script src="../js/code.js"></script>
        <script src="../js/stylecode.js"></script>
        <script src="../js/phpcode.js"></script>

</body>