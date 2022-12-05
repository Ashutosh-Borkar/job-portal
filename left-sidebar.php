<div class="left-sidebar">
    <div class="accordion" id="accordionExample">
        <!-- Date Posted -->
        <!-- <div class="card rounded mt-4">
            <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                <div class="card-header" id="headingOne">
                    <h6 class="mb-0 text-dark f-18">Date Posted</h6>
                </div>
            </a>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                <div class="card-body p-0">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio1">Last Hour</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio2">Last 24 hours</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio3">Last 7 days</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio4">Last 14 days</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio5">Last 30 days</label>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Categories -->
        <div class="card rounded mt-4">
            <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                <div class="card-header" id="headingtwo">
                    <h6 class="mb-0 text-dark f-18">Categories</h6>
                </div>
            </a>
            <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                <div class="card-body p-0">
                    <?php
                    $sql = "SELECT DISTINCT `industry_type` FROM `create_job` WHERE `deleted_at` is null";
                    $result1 = $conn->query($sql);
                    $count = 7;
                    if ($result1->num_rows > 0) {
                        // output data of each row
                        while ($row = $result1->fetch_assoc()) {
                    ?>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio<?php echo $count ?>" name="industry_type" class="custom-control-input" value="<?php echo $row['industry_type'] ?>">
                                <label class="custom-control-label ml-1 text-muted" for="customRadio<?php echo $count ?>"><?php echo $row['industry_type'] ?></label>
                            </div>
                    <?php
                            $count = $count + 1;
                        }
                    }
                    // customRadio12
                    ?>
                </div>
            </div>
        </div>
        <!-- Experince -->
        <div class="card rounded mt-4">
            <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                <div class="card-header" id="headingthree">
                    <h6 class="mb-0 text-dark f-18">Experince</h6>
                </div>
            </a>
            <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                <div class="card-body p-0">
                    <?php
                    $sql = "SELECT DISTINCT `work_experience` FROM `create_job` WHERE `deleted_at` is null";
                    $result1 = $conn->query($sql);
                    $count = 13;
                    if ($result1->num_rows > 0) {
                        // output data of each row
                        while ($row = $result1->fetch_assoc()) {
                    ?>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio<?php echo $count ?>" name="work_experience" class="custom-control-input" value="<?php echo $row['work_experience'] ?>">
                                <label class="custom-control-label ml-1 text-muted" for="customRadio<?php echo $count ?>"><?php echo $row['work_experience'] ?></label>
                            </div>
                    <?php
                            $count = $count + 1;
                        }
                    }
                    // customRadio16
                    ?>
                </div>
            </div>
        </div>
        <!-- Offerd Salary -->
        <div class="card rounded mt-4">
            <a data-toggle="collapse" href="#collapsefive" class="job-list" aria-expanded="true" aria-controls="collapsefive">
                <div class="card-header" id="headingfive">
                    <h6 class="mb-0 text-dark f-18">Offerd Salary</h6>
                </div>
            </a>
            <div id="collapsefive" class="collapse show" aria-labelledby="headingfive">
                <div class="card-body p-0">
                    <?php
                    $sql = "SELECT DISTINCT `salary` FROM `create_job` WHERE `deleted_at` is null";
                    $result1 = $conn->query($sql);
                    $count = 20;
                    if ($result1->num_rows > 0) {
                        // output data of each row
                        while ($row = $result1->fetch_assoc()) {
                    ?>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio<?php echo $count ?>" name="salary" class="custom-control-input" value="<?php echo $row['salary'] ?>">
                                <label class="custom-control-label ml-1 text-muted" for="customRadio<?php echo $count ?>"><?php echo $row['salary'] ?></label>
                            </div>
                    <?php
                            $count = $count + 1;
                        }
                    }
                    // customRadio24
                    ?>
                </div>
            </div>
        </div>
        <!-- Job Type -->
        <div class="card rounded mt-4">
            <a data-toggle="collapse" href="#collapsesix" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesix">
                <div class="card-header" id="headingsix">
                    <h6 class="mb-0 text-dark f-18">Job Type</h6>
                </div>
            </a>
            <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                <div class="card-body p-0">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio25" name="customRadio5" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio25">Part Time</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio26" name="customRadio5" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio26">Internship</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio27" name="customRadio5" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio27">Full Time</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio28" name="customRadio5" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio28">Freelance</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio29" name="customRadio5" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio29">Temporary</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio30" name="customRadio5" class="custom-control-input">
                        <label class="custom-control-label ml-1 text-muted" for="customRadio30">Volunteer</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>