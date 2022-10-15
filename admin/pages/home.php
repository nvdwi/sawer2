            <!-- With Captions -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
                  <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from donasi where status='Sudah Dikirim'");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">TERKIRIM</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="15" data-fresh-interval="20"></div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from donasi where status='Belum Terkirim'");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">BELUM DIKIRIM</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from donasi");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">JUMLAH DONASI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from user");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">ANGGOTA DONASI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <!-- Basic Card -->
            <!-- #END# Basic Card -->