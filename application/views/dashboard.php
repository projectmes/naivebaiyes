<!DOCTYPE html>
<html lang="en">


<body>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php $this->load->view('__partials/headernav'); ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php $this->load->view('__partials/sidenav'); ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to Naive Bayes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-8">
                                                            <h4 class="text-c-purple">1</h4>
                                                            <h6 class="text-muted m-b-0">Atribut</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <i class="fa fa-bar-chart f-28"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>