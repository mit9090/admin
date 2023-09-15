<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preclinic.dreamguystech.com/template/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 12:38:24 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<title>Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">View all Notifications</a>
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
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>
<li class="nav-item ">
<a href="settings.html" class="hasnotifications nav-link"><img src="assets/img/icons/setting-icon-01.svg" alt> </a>
</li>
</ul>
<div class="dropdown mobile-user-menu float-end">
<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
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
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-01.svg" alt></span> <span> Dashboard </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="index.html">Admin Dashboard</a></li>
<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>

</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-02.svg" alt></span> <span> Doctors </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="doctors.html">Doctor List</a></li>
<li><a href="add-doctor.html">Add Doctor</a></li>
<li><a href="edit-doctor.html">Edit Doctor</a></li>
<li><a href="doctor-profile.html">Doctor Profile</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-03.svg" alt></span> <span>Patients </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="patients.html">Patients List</a></li>
<li><a href="add-patient.html">Add Patients</a></li>
<li><a href="edit-patient.html">Edit Patients</a></li>
<li><a href="patient-profile.html">Patients Profile</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-08.svg" alt></span> <span> Staff </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="staff-list.html">Staff List</a></li>
<li><a href="add-staff.html">Add Staff</a></li>
<li><a href="staff-profile.html">Staff Profile</a></li>

</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-04.svg" alt></span> <span> Appointments </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="appointments.html">Appointment List</a></li>
<li><a href="add-appointment.html">Book Appointment</a></li>
<li><a href="edit-appointment.html">Edit Appointment</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-05.svg" alt></span> <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="schedule.html">Schedule List</a></li>
<li><a href="add-schedule.html">Add Schedule</a></li>
<li><a href="edit-schedule.html">Edit Schedule</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-06.svg" alt></span> <span> Departments </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="departments.html">Department List</a></li>
<li><a href="add-department.html">Add Department</a></li>
<li><a href="edit-department.html">Edit Department</a></li>
</ul>
</li>

<li>
<a href="settings.html"><span class="menu-side"><img src="assets/img/icons/menu-icon-16.svg" alt></span> <span>Settings</span></a>
</li>
<li class="menu-title">UI Elements</li>

<li>
<a class="active" href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
</li>
<li class="menu-title">Extras</li>
<li class="submenu">
<a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
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

<div class="logout-btn">
<a href="login.html"><span class="menu-side"><img src="assets/img/icons/logout.svg" alt></span> <span>Logout</span></a>
</div>
</div>
</div>
</div>
<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-sm-8 col-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard </a></li>
<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
<li class="breadcrumb-item active">Calendar</li>
</ul>
</div>
<div class="col-sm-4 col-8 text-end m-b-30">
<a href="#" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#add_event"><i class="fa fa-plus"></i> Add Event</a>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card-box mb-0">
<div class="row">
<div class="col-md-12">
<div id="calendar"></div>
</div>
</div>
</div>
<div class="modal fade none-border" id="event-modal">
<div class="modal-dialog">
<div class="modal-content modal-md">
<div class="modal-header">
<h4 class="modal-title">Add Event</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body"></div>
<div class="modal-footer text-center">
<button type="button" class="btn btn-primary submit-btn save-event">Create event</button>
<button type="button" class="btn btn-danger btn-lg delete-event" data-bs-dismiss="modal">Delete</button>
</div>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<div id="add_event" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content modal-md">
<div class="modal-header">
<h4 class="modal-title">Add Event</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<label>Event Name <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Event Date <span class="text-danger">*</span></label>
<div class="cal-icon">
<input class="form-control datetimepicker" type="text">
</div>
</div>
<div class="m-t-20 text-center">
<button class="btn btn-primary submit-btn">Create Event</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="sidebar-overlay" data-reff></div>
<script src="assets/js/jquery-3.6.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/jquery.fullcalendar.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from preclinic.dreamguystech.com/template/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 12:38:25 GMT -->
</html>