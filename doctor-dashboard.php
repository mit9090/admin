<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preclinic.dreamguystech.com/template/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 12:36:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" width="35" height="35" alt> <span>Pre Clinic</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><img src="assets/img/icons/bar-icon.svg" alt></a>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="assets/img/icons/bar-icon.svg"
                    alt></a>
            <div class="top-nav-search mob-view">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <a class="btn"><img src="assets/img/icons/search-normal.svg" alt></a>
                </form>
            </div>
            <ul class="nav user-menu float-end">
                <li class="nav-item dropdown d-none d-md-block">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><img
                            src="assets/img/icons/note-icon-02.svg" alt><span class="pulse"></span> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title">Appointment booking
                                                        with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">L</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span
                                                        class="noti-title">Claire Mapes</span> to project <span
                                                        class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">G</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video
                                                        conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-md-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img
                            src="assets/img/icons/note-icon-01.svg" alt><span class="pulse"></span> </a>
                </li>
                <li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                        <div class="user-names">
                            <h5>Liam Michael </h5>
                            <span>Admin</span>
                        </div>
                        <span class="user-img">
                            <img src="assets/img/user-06.jpg" alt="Admin">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="settings.html" class="hasnotifications nav-link"><img
                            src="assets/img/icons/setting-icon-01.svg" alt> </a>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-01.svg" alt></span>
                                <span> Dashboard </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="index.html">Admin Dashboard</a></li>
                                <li><a class="active" href="doctor-dashboard.html">Doctor Dashboard</a></li>
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-02.svg" alt></span>
                                <span> Doctors </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="doctors.html">Doctor List</a></li>
                                <li><a href="add-doctor.html">Add Doctor</a></li>
                                <li><a href="edit-doctor.html">Edit Doctor</a></li>
                                <li><a href="doctor-profile.html">Doctor Profile</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-03.svg" alt></span>
                                <span>Patients </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="patients.html">Patients List</a></li>
                                <li><a href="add-patient.html">Add Patients</a></li>
                                <li><a href="edit-patient.html">Edit Patients</a></li>
                                <li><a href="patient-profile.html">Patients Profile</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-08.svg" alt></span>
                                <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="staff-list.html">Staff List</a></li>
                                <li><a href="add-staff.html">Add Staff</a></li>
                                <li><a href="staff-profile.html">Staff Profile</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-04.svg" alt></span>
                                <span> Appointments </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="appointments.html">Appointment List</a></li>
                                <li><a href="add-appointment.html">Book Appointment</a></li>
                                <li><a href="edit-appointment.html">Edit Appointment</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-05.svg" alt></span>
                                <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="schedule.html">Schedule List</a></li>
                                <li><a href="add-schedule.html">Add Schedule</a></li>
                                <li><a href="edit-schedule.html">Edit Schedule</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-06.svg" alt></span>
                                <span> Departments </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="departments.html">Department List</a></li>
                                <li><a href="add-department.html">Add Department</a></li>
                                <li><a href="edit-department.html">Edit Department</a></li>
                            </ul>
                        </li>
                        
                        
                        <li>
                            <a href="settings.html"><span class="menu-side"><img src="assets/img/icons/menu-icon-16.svg"
                                        alt></span> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                    
                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"> Login </a></li>
                                <li><a href="register.html"> Register </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="change-password2.html"> Change Password </a></li>
                                <li><a href="lock-screen.html"> Lock Screen </a></li>
                                <li><a href="profile.html"> Profile </a></li>
                                <li><a href="gallery.html"> Gallery </a></li>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                               
                            </ul>
                        </li>
                        
                    </ul>
                    <div class="logout-btn">
                        <a href="login.html"><span class="menu-side"><img src="assets/img/icons/logout.svg" alt></span>
                            <span>Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard </a></li>
                                <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                                <li class="breadcrumb-item active">Doctor Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="good-morning-blk">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="morning-user">
                                <h2>Good Morning, <span>Dr.Smith Wayne</span></h2>
                                <p>Have a nice day at work</p>
                            </div>
                        </div>
                        <div class="col-md-6 position-blk">
                            <div class="morning-img">
                                <img src="assets/img/morning-img-02.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="doctor-list-blk">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="doctor-widget border-right-bg">
                                <div class="doctor-box-icon flex-shrink-0">
                                    <img src="assets/img/icons/doctor-dash-01.svg" alt>
                                </div>
                                <div class="doctor-content dash-count flex-grow-1">
                                    <h4><span class="counter-up">30</span><span> </span></h4>
                                    <h5>Appointments</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="doctor-widget border-right-bg">
                                <div class="doctor-box-icon flex-shrink-0">
                                    <img src="assets/img/icons/doctor-dash-02.svg" alt>
                                </div>
                                <div class="doctor-content dash-count flex-grow-1">
                                    <h4><span class="counter-up">20</span><span> </span></h4>
                                    <h5>Patient</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="doctor-widget border-right-bg">
                                <div class="doctor-box-icon flex-shrink-0">
                                    <img src="assets/img/icons/doctor-dash-03.svg" alt>
                                </div>
                                <div class="doctor-content dash-count flex-grow-1">
                                    <h4><span class="counter-up">12</span><span></span></h4>
                                    <h5>Departments</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="doctor-widget">
                                <div class="doctor-box-icon flex-shrink-0">
                                    <img src="assets/img/icons/doctor-dash-04.svg" alt>
                                </div>
                                <div class="doctor-content dash-count flex-grow-1">
                                    <h4><span class="counter-up">30</span><span></span></h4>
                                    <h5>Time Schedule</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-title patient-visit mb-0">
                                    <h4> Patient Chart</h4>
                                    <div class="income-value">
                                        <h3><span></span> 200</h3>
                                        <p> last month</p>
                                    </div>
                                    <div class="form-group mb-0">
                                        <select class="form-control select">
                                            <option>2022</option>
                                            <option>2021</option>
                                            <option>2020</option>
                                            <option>2019</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="apexcharts-area"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
                        <div class="card">
                            <div class="card-body">
                                <div id="radial-patients"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-2 d-flex">
                        <div class="struct-point">
                            <div class="card patient-structure">
                                <div class="card-body">
                                    <h5>New Patients</h5>
                                    <h3>56<span class="status-green"><img src="assets/img/icons/sort-icon-01.svg" alt
                                                class="me-1">60%</span></h3>
                                </div>
                            </div>
                            <div class="card patient-structure">
                                <div class="card-body">
                                    <h5>Old Patients</h5>
                                    <h3>35<span class="status-pink"><img src="assets/img/icons/sort-icon-02.svg" alt
                                                class="me-1">-20%</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12  col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-title patient-visit">
                                    <h4>Activity Chart</h4>
                                    <div>
                                        <ul class="nav chat-user-total">
                                            <li><i class="fa fa-circle low-users" aria-hidden="true"></i>Low</li>
                                            <li><i class="fa fa-circle current-users" aria-hidden="true"></i> High</li>
                                        </ul>
                                    </div>
                                    <div class="form-group mb-0">
                                        <select class="form-control select">
                                            <option>This Week</option>
                                            <option>Last Week</option>
                                            <option>This Month</option>
                                            <option>Last Month</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="activity-chart"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12  col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title d-inline-block">Recent Appointments</h4> <a
                                            href="appointments.html" class="patient-views float-end">Show all</a>
                                    </div>
                                    <div class="card-body p-0 table-dash">
                                        <div class="table-responsive">
                                            <table class="table mb-0 border-0 custom-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="table-image appoint-doctor">
                                                            <img width="28" height="28" class="rounded-circle"
                                                                src="assets/img/profiles/avatar-02.jpg" alt>
                                                            <h2>Dr.Jenny Smith</h2>
                                                        </td>
                                                        <td class="appoint-time text-center">
                                                            <h6>Today 5:40 PM</h6>
                                                            <span>Typoid Fever</span>
                                                        </td>
                                                        <td>
                                                            <button class="check-point status-green me-1"><i
                                                                    class="feather-check"></i></button>
                                                            <button class="check-point status-pink "><i
                                                                    class="feather-x"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-image appoint-doctor">
                                                            <img width="28" height="28" class="rounded-circle"
                                                                src="assets/img/profiles/avatar-03.jpg" alt>
                                                            <h2>Dr.Angelica Ramos</h2>
                                                        </td>
                                                        <td class="appoint-time text-center">
                                                            <h6>Today 5:40 PM</h6>
                                                            <span>Typoid Fever</span>
                                                        </td>
                                                        <td>
                                                            <button class="check-point status-green me-1"><i
                                                                    class="feather-check"></i></button>
                                                            <button class="check-point status-pink "><i
                                                                    class="feather-x"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-image appoint-doctor">
                                                            <img width="28" height="28" class="rounded-circle"
                                                                src="assets/img/profiles/avatar-04.jpg" alt>
                                                            <h2>Dr.Martin Doe</h2>
                                                        </td>
                                                        <td class="appoint-time text-center">
                                                            <h6>Today 5:40 PM</h6>
                                                            <span>Typoid Fever</span>
                                                        </td>
                                                        <td>
                                                            <button class="check-point status-green me-1"><i
                                                                    class="feather-check"></i></button>
                                                            <button class="check-point status-pink "><i
                                                                    class="feather-x"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12  col-xl-4 d-flex">
                                <div class="card wallet-widget">
                                    <div class="circle-bar circle-bar2">
                                        <div class="circle-graph2" data-percent="66">
                                            <b><img src="assets/img/icons/timer.svg" alt></b>
                                        </div>
                                    </div>
                                    <div class="main-limit">
                                        <p>Next Appointment in</p>
                                        <h4>02h:12m</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-5 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block">Recent Appointments</h4> <a
                                    href="appointments.html" class="patient-views float-end">Show all</a>
                            </div>
                            <div class="card-body">
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>08:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity hide-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li class="stick-line"><i class="fas fa-circle me-2"></i>08:00
                                                        <span>Benjamin Bruklin</span></li>
                                                    <li class="stick-line"><i class="fas fa-circle me-2"></i>08:00
                                                        <span>Andrea Lalema</span></li>
                                                    <li class=" dropdown ongoing-blk ">
                                                        <a href="#" class="dropdown-toggle  active-doctor"
                                                            data-bs-toggle="dropdown">
                                                            <i class="fas fa-circle me-2 active-circles"></i>08:00
                                                            <span>Andrea Lalema</span><span
                                                                class="ongoing-drapt">Ongoing <i
                                                                    class="feather-chevron-down ms-2"></i></span>
                                                        </a>
                                                        <ul class="doctor-sub-list dropdown-menu">
                                                            <li class="patient-new-list dropdown-item">
                                                                Patient<span>Marie kennedy</span><a href="javascript:;"
                                                                    class="new-dot status-green"><i
                                                                        class="fas fa-circle me-1 fa-2xs"></i>New</a>
                                                            </li>
                                                            <li class="dropdown-item">Time<span>8:30 - 9:00
                                                                    (30min)</span></li>
                                                            <li class="schedule-blk mb-0 pt-2 dropdown-item">
                                                                <ul class="nav schedule-time">
                                                                    <li><a href="javascript:;"><img
                                                                                src="assets/img/icons/trash.svg"
                                                                                alt></a></li>
                                                                    <li><a href="javascript:;"><img
                                                                                src="assets/img/icons/profile.svg"
                                                                                alt></a></li>
                                                                    <li><a href="javascript:;"><img
                                                                                src="assets/img/icons/edit.svg" alt></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="btn btn-primary appoint-start">Start
                                                                    Appointment</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>09:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li><i class="fas fa-circle me-2"></i>09:00 <span>Galaviz
                                                            Lalema</span></li>
                                                    <li><i class="fas fa-circle me-2"></i>09:20 <span>Benjamin
                                                            Bruklin</span></li>
                                                    <li><i class="fas fa-circle me-2"></i>09:40 <span>Jenny Smith</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>10:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li><i class="fas fa-circle me-2"></i>10:00 <span>Cristina
                                                            Groves</span></li>
                                                    <li><i class="fas fa-circle me-2"></i>10:30 <span>Benjamin
                                                            Bruklin</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>11:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li><i class="fas fa-circle me-2"></i>11:00 <span>Cristina
                                                            Groves</span></li>
                                                    <li><i class="fas fa-circle me-2"></i>11:30 <span>Benjamin
                                                            Bruklin</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff></div>

    <script src="assets/js/jquery-3.6.1.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/circle-progress.min.js"></script>

    <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from preclinic.dreamguystech.com/template/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 12:36:54 GMT -->

</html>