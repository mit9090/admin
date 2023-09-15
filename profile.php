<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preclinic.dreamguystech.com/template/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 12:36:35 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<title>Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="main-wrapper">
<div class="header">
<div class="header-left">
<a href="index.php" class="logo">
<img src="assets/img/logo.png" width="35" height="35" alt> <span>Pre Clinic</span>
</a>
</div>
<a id="toggle_btn" href="javascript:void(0);"><img src="assets/img/icons/bar-icon.svg" alt></a>
<a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="assets/img/icons/bar-icon.svg" alt></a>
<div class="top-nav-search mob-view">
<form>
<input type="text" class="form-control" placeholder="Search here">
<a class="btn"><img src="assets/img/icons/search-normal.svg" alt></a>
</form>
</div>
<ul class="nav user-menu float-end">
<li class="nav-item dropdown d-none d-md-block">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><img src="assets/img/icons/note-icon-02.svg" alt><span class="pulse"></span> </a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span>Notifications</span>
</div>
<div class="drop-scroll">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">V</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">L</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">G</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">V</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.php">View all Notifications</a>
</div>
</div>
</li>
<li class="nav-item dropdown d-none d-md-block">
<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="assets/img/icons/note-icon-01.svg" alt><span class="pulse"></span> </a>
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
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
<a class="dropdown-item" href="settings.php">Settings</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</li>
<li class="nav-item ">
<a href="settings.php" class="hasnotifications nav-link"><img src="assets/img/icons/setting-icon-01.svg" alt> </a>
</li>
</ul>
<div class="dropdown mobile-user-menu float-end">
<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
<a class="dropdown-item" href="settings.php">Settings</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</div>
</div>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">Main</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-01.svg" alt></span> <span> Dashboard </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="index.php">Admin Dashboard</a></li>
<li><a href="doctor-dashboard.php">Doctor Dashboard</a></li>

</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-02.svg" alt></span> <span> Doctors </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="doctors.php">Doctor List</a></li>
<li><a href="add-doctor.php">Add Doctor</a></li>
<li><a href="edit-doctor.php">Edit Doctor</a></li>
<li><a href="doctor-profile.php">Doctor Profile</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-03.svg" alt></span> <span>Patients </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="patients.php">Patients List</a></li>
<li><a href="add-patient.php">Add Patients</a></li>
<li><a href="edit-patient.php">Edit Patients</a></li>
<li><a href="patient-profile.php">Patients Profile</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-08.svg" alt></span> <span> Staff </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="staff-list.php">Staff List</a></li>
<li><a href="add-staff.php">Add Staff</a></li>
<li><a href="staff-profile.php">Staff Profile</a></li>

</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-04.svg" alt></span> <span> Appointments </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="appointments.php">Appointment List</a></li>
<li><a href="add-appointment.php">Book Appointment</a></li>
<li><a href="edit-appointment.php">Edit Appointment</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-05.svg" alt></span> <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="schedule.php">Schedule List</a></li>
<li><a href="add-schedule.php">Add Schedule</a></li>
<li><a href="edit-schedule.php">Edit Schedule</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-06.svg" alt></span> <span> Departments </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="departments.php">Department List</a></li>
<li><a href="add-department.php">Add Department</a></li>
<li><a href="edit-department.php">Edit Department</a></li>
</ul>
</li>

<li>
<a href="settings.php"><span class="menu-side"><img src="assets/img/icons/menu-icon-16.svg" alt></span> <span>Settings</span></a>
</li>
<li class="menu-title">UI Elements</li>

<li>
<a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
</li>
<li class="menu-title">Extras</li>
<li class="submenu">
<a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="login.php"> Login </a></li>
<li><a href="register.php"> Register </a></li>
<li><a href="forgot-password.php"> Forgot Password </a></li>
<li><a href="change-password2.php"> Change Password </a></li>
<li><a href="lock-screen.php"> Lock Screen </a></li>
<li><a class="active" href="profile.php"> Profile </a></li>
<li><a href="gallery.php"> Gallery </a></li>
<li><a href="error-404.php">404 Error </a></li>
<li><a href="error-500.php">500 Error </a></li>

</ul>
</li>

<div class="logout-btn">
<a href="login.php"><span class="menu-side"><img src="assets/img/icons/logout.svg" alt></span> <span>Logout</span></a>
</div>
</div>
</div>
</div>
<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-sm-7 col-6">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard </a></li>
<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
<li class="breadcrumb-item active">My Profile</li>
</ul>
</div>
<div class="col-sm-5 col-6 text-end m-b-30">
<a href="edit-profile.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
</div>
</div>
<div class="card-box profile-header">
<div class="row">
<div class="col-md-12">
<div class="profile-view">
<div class="profile-img-wrap">
<div class="profile-img">
<a href="#"><img class="avatar" src="assets/img/doctor-03.jpg" alt></a>
</div>
</div>
<div class="profile-basic">
<div class="row">
<div class="col-md-5">
<div class="profile-info-left">
<h3 class="user-name m-t-0 mb-0">Cristina Groves</h3>
<small class="text-muted">Gynecologist</small>
<div class="staff-id">Employee ID : DR-0001</div>
<div class="staff-msg"><a href="chat.php" class="btn btn-primary">Send Message</a></div>
</div>
</div>
<div class="col-md-7">
<ul class="personal-info">
<li>
<span class="title">Phone:</span>
<span class="text"><a href>770-889-6484</a></span>
</li>
<li>
<span class="title">Email:</span>
<span class="text"><a href><span class="__cf_email__" data-cfemail="6506170c16110c0b0402170a13001625001d04081509004b060a08">[email&#160;protected]</span></a></span>
</li>
<li>
<span class="title">Birthday:</span>
<span class="text">3rd March</span>
</li>
<li>
<span class="title">Address:</span>
<span class="text">714 Burwell Heights Road, Bridge City, TX, 77611</span>
</li>
<li>
<span class="title">Gender:</span>
<span class="text">Female</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="profile-tabs">
<ul class="nav nav-tabs nav-tabs-bottom">
<li class="nav-item"><a class="nav-link active" href="#about-cont" data-bs-toggle="tab">About</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="about-cont">
<div class="row">
<div class="col-md-12">
<div class="card-box">
<h3 class="card-title">Education Informations</h3>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">International College of Medical Science (UG)</a>
<div>MBBS</div>
<span class="time">2001 - 2003</span>
</div>
</div>
</li>
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">International College of Medical Science (PG)</a>
<div>MD - Obstetrics & Gynaecology</div>
<span class="time">1997 - 2001</span>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="card-box ">
<h3 class="card-title">Experience</h3>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">Consultant Gynecologist</a>
<span class="time">Jan 2014 - Present (4 years 8 months)</span>
</div>
</div>
</li>
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">Consultant Gynecologist</a>
<span class="time">Jan 2009 - Present (6 years 1 month)</span>
</div>
</div>
</li>
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">Consultant Gynecologist</a>
<span class="time">Jan 2004 - Present (5 years 2 months)</span>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="bottom-tab2">
Tab content 2
</div>
<div class="tab-pane" id="bottom-tab3">
Tab content 3
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
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item new-message">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">John Doe</span>
<span class="message-time">1 Aug</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author"> Tarah Shropshire </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Mike Litorus</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Catherine Manseau </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">D</span>
</div>
<div class="list-body">
<span class="message-author"> Domenic Houston </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">B</span>
</div>
<div class="list-body">
<span class="message-author"> Buster Wigton </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author"> Rolland Webber </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Claire Mapes </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Melita Faucher</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Jeffery Lalor</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">L</span>
</div>
<div class="list-body">
<span class="message-author">Loren Gatlin</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author">Tarah Shropshire</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="chat.php">See all messages</a>
</div>
</div>
</div>
</div>
</div>
<div class="sidebar-overlay" data-reff></div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from preclinic.dreamguystech.com/template/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 12:36:35 GMT -->
</html>