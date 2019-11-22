<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class=" fas fa-fw fa-tachometer-alt "></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-book "></i>
                <span>Evaluation</span>
            </a>
            <div class="dropdown-menu " aria-labelledby="pagesDropdown ">
                <h6 class="dropdown-header ">Health Evaluation</h6>
                <a class="dropdown-item " href="../forms/evaluateHealth.php ">Health Form</a>
                <a class="dropdown-item " href="../questions/healthAns.php ">Health Answers</a>




                <h6 class="dropdown-header ">Security Evaluation:</h6>
                <a class="dropdown-item " href="../forms/evaluatesecurity.php ">Security Form</a>
                <a class="dropdown-item " href="../questions/securityAns.php">Security Answers</a>


            </div>
        </li>






        <li class="nav-item " data-toggle="tooltip " data-placement="right " title="Components ">
            <a class="nav-link nav-link-collapse collapsed " data-toggle="collapse " href="#collapseComponents " data-parent="#exampleAccordion ">
                <i class="fa fa-fw fa-wrench "></i>
                <span class="nav-link-text ">Appearance</span>
            </a>
            <ul class="sidenav-second-level collapse " id="collapseComponents ">
                <li>
                    <a href="# ">Themes</a>
                </li>
                <li>
                    <a href="# ">Menus</a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a class="nav-link " href="charts.html ">
                <i class="fas fa-fw fa-chart-area "></i>
                <span>Charts</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="tables.html ">
                <i class="fas fa-fw fa-table "></i>
                <span>Tables</span></a>
        </li>

        <ul class="navbar-nav ml-auto">

<li class="nav-item">
    <a class="nav-link" href="../views/login.php?logout=true">
        <!-- <a class="nav-link" href="index.php?logout=true"> -->
        <i class="fa fa-fw fa-sign-out"></i>Logout
    </a>
</li>
</ul>

    </ul>