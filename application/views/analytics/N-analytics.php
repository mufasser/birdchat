<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Analytics</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <?php
    include FCPATH . 'application/views/include/new.php';
    include FCPATH . 'application/views/include/js_include_back.php';
    ?>
</head>

<style>
    .navbar {
        Type: "Button primary";
        Size: "sm";
        Full width: False;
        Breakpoint: "Desktop";
        width: Fixed (1, 080px)px;
        height: Hug (84px)px;
        padding: var(--containermd);
        gap: var(--spacing-md);
        border: 0px 0px 1px 0px;
        opacity: 0px;
        border-bottom: 1px solid var(--Border-Base-main, #D1D5DB);
        margin-top: -81px;

    }

    .navpill {
        Current: False;
        Size: "sm";
        Type: "Button primary";
        Full-width: False;
        Badge: False;
        State: "Default";
        width: Hug (82px)px;
        height: Fixed (36px)px;
        padding: var(--spacing-md) var(--spacing-lg) var(--spacing-md) var(--spacing-lg);
        gap: var(--spacing-md);
        border-radius: var(--radius-sm);
        opacity: 0px;
        color: #667085;



    }

    .nav-link {
        color: #667085 !important;
    }

    .minibadge {

        font-size: small;
        background-color: #F9FAFB;
        border-radius: 50px;

    }

    .minibadged {
        font-size: small;
        background-color: #47e247;
        border-radius: 50px;
    }

    .table-body {
        border-style: none;
    }

    .prev-button {
        display: inline-block;
        padding: 4px 20px;
        border: 1px solid #ccc;
        border-radius: 9px;
        font-size: 16px;
        color: #333;
        text-decoration: none
    }

    .prev-button:hover {
        background-color: #f0f0f0;
    }
</style>

<body class="hold-transition  sidebar-gone  layout-fixed" style="height: auto; background-color: #FFFFFF;">
    <div id="app">
        <div class="main-wrapper">
            <?php
            $menus = $this->basic->get_data('menu', '', '', '', '', '', 'serial asc');
            $data['menus'] = $menus;
            // include(FCPATH . 'application/views/admin/theme/header.php');
            include FCPATH . 'application/views/admin/theme/sidebar.php';
            
            echo '<div class="main-content">';
            ?>
            <div class="container" style="  display: flex;justify-content: space-between  ;   margin-right: 440px; ">
                <div>
                    <h2>Analytics</h2>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-secondary me-2">Export</button>
                    <button type="button" class="btn btn-primary">Manage Segments</button>
                </div>

            </div>
            <div class="container" style="    margin-right: 440px;">
                <div class="d-flex flex-row-reverse mt-3">
                    <select class="form-select form-control" id="" style="width: 136px ;margin-top 12px;">
                        <option value="all">Training status: All </option>
                        <option value="uploaded">Uploaded</option>
                        <option value="trained">Trained</option>
                    </select>
                </div>
            </div>

            <div class="container mt-5 "style="    margin-right: 440px;">
                <h2>Overview</h2>

                <div class="row mt-4">

                    <!-- First Column -->
                    <div class="col-md-4">
                        <div class="card  p-3 mb-3 ">
                            <div class="d-flex justify-content-between">
                                <h6>Response Time to All Messages</h6>
                                <p><span class="badge bg-success">+0%</span></p>
                            </div>

                            <h4>0m 0s</h4>
                            <div class="d-flex justify-content-between">
                                <p>+40 <span style="color: #999;">from last month</span></p>
                                <a href="#" class="" style="color: #4F46C7;     text-decoration: none;">More
                                    &rarr;</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card  p-3 mb-3 ">
                            <div class="d-flex justify-content-between">
                                <h6>Response Time to All Messages</h6>
                                <p><span class="badge bg-success">+0%</span></p>
                            </div>

                            <h4>0m 0s</h4>
                            <div class="d-flex justify-content-between">
                                <p>+40 <span style="color: #999;">from last month</span></p>
                                <a href="#" class="" style="color: #4F46C7;     text-decoration: none;">More
                                    &rarr;</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card  p-3 mb-3 ">
                            <div class="d-flex justify-content-between">
                                <h6>Response Time to All Messages</h6>
                                <p><span class="badge bg-success">+0%</span></p>
                            </div>

                            <h4>0m 0s</h4>
                            <div class="d-flex justify-content-between">
                                <p>+40 <span style="color: #999;">from last month</span></p>
                                <a href="#" class="" style="color: #4F46C7;     text-decoration: none;">More
                                    &rarr;</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card  p-3 mb-3 ">
                            <div class="d-flex justify-content-between">
                                <h6>Response Time to All Messages</h6>
                                <p><span class="badge bg-success">+0%</span></p>
                            </div>

                            <h4>0m 0s</h4>
                            <div class="d-flex justify-content-between">
                                <p>+40 <span style="color: #999;">from last month</span></p>
                                <a href="#" class="" style="color: #4F46C7;     text-decoration: none;">More
                                    &rarr;</a>

                            </div>
                        </div>
                    </div>

                    <!-- Second Column -->
                    <!-- ... Repeat similar structure for other columns ... -->

                </div>
                <div class="container mt-5">
                    <h2>Messages</h2>

                    <div class="row mt-4">

                        <!-- First Card -->
                        <div class="col-md-4">
                            <div class="card  p-3 mb-3 ">
                                <div class="d-flex justify-content-between">
                                    <h6>Response Time to All Messages</h6>
                                    <p><span class="badge bg-success">+0%</span></p>
                                </div>

                                <h4>0m 0s</h4>
                                <div class="d-flex justify-content-between">
                                    <p>+40 <span style="color: #999;">from last month</span></p>
                                    <a href="#" class=""
                                        style="color: #4F46C7;     text-decoration: none;">More
                                        &rarr;</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card  p-3 mb-3 ">
                                <div class="d-flex justify-content-between">
                                    <h6>Response Time to All Messages</h6>
                                    <p><span class="badge bg-success">+0%</span></p>
                                </div>

                                <h4>0m 0s</h4>
                                <div class="d-flex justify-content-between">
                                    <p>+40 <span style="color: #999;">from last month</span></p>
                                    <a href="#" class=""
                                        style="color: #4F46C7;     text-decoration: none;">More
                                        &rarr;</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card  p-3 mb-3 ">
                                <div class="d-flex justify-content-between">
                                    <h6>Response Time to All Messages</h6>
                                    <p><span class="badge bg-success">+0%</span></p>
                                </div>

                                <h4>0m 0s</h4>
                                <div class="d-flex justify-content-between">
                                    <p>+40 <span style="color: #999;">from last month</span></p>
                                    <a href="#" class=""
                                        style="color: #4F46C7;     text-decoration: none;">More
                                        &rarr;</a>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="container mt-5">
                        <h2>Broadcast Messages</h2>

                        <canvas id="myBarChart" width="800" height="400"></canvas>

                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-3 ">
                                    <div class="card text-center p-3 mb-3 " style="background-color:#E7EEEC80 ;">
                                        <h6>Delivery rate</h6>
                                        <p>$0</p>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="card text-center p-3 mb-3 " style="background-color:#E7EEEC80 ;">
                                        <h6>Children</h6>
                                        <p>$0</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card text-center p-3 mb-3 " style="background-color:#E7EEEC80 ;">
                                        <h6>Non fiction</h6>
                                        <p>$0</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card text-center p-3 mb-3 ">
                                        <h6>Science</h6>
                                        <p>$0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        const ctx = document.getElementById('myBarChart').getContext('2d');
                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Sent', 'Delivered', 'Bounced', 'Read', 'Replied'],
                                datasets: [{
                                        label: 'Company Total',
                                        data: [1, 2, 3, 4, 5],
                                        backgroundColor: 'rgba(11, 105, 216, 1)',

                                    },
                                    {
                                        label: 'Previous 7 days',
                                        data: [6, 7, 8, 9, 5],
                                        backgroundColor: 'rgba(96, 213, 68, 0.7)',


                                    },
                                ],
                            },
                            options: {
                                scales: {
                                    x: {
                                        grid: {
                                            display: false,
                                        },
                                    },
                                    y: {
                                        grid: {
                                            display: false,
                                        },

                                        ticks: {
                                            beginAtZero: true,
                                            callback: (value) => value + '%',
                                        },
                                    },
                                },
                            },
                        });
                    </script>
                </div>
                <?php
                echo '</div>';
                ?>

            </div>
        </div>
</body>

</html>
