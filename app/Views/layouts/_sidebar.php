<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="<?php if (url_is('/dashboard')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
        <li class="list-divider"></li>
        <li class="submenu"> <a href="<?= base_url() ?>/bookings"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/bookings')) : ?>active<?php endif ?>" href="<?= base_url() ?>/bookings"> All Booking </a></li>
            <li><a class="<?php if (url_is('/bookings/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/bookings/add"> Add Booking </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/customers"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/customers')) : ?>active<?php endif ?>" href="<?= base_url() ?>/customers"> All customers </a></li>
            <li><a class="<?php if (url_is('/customers/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/customers/add"> Add Customer </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/rooms"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/rooms')) : ?>active<?php endif ?>" href="<?= base_url() ?>/rooms">All Rooms </a></li>

            <li><a class="<?php if (url_is('/rooms/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/rooms/add"> Add Rooms </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/staffs"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/staffs')) : ?>active<?php endif ?>" href="<?= base_url() ?>/staffs">All Staff </a></li>
            <li><a class="<?php if (url_is('/staffs/edit')) : ?>active<?php endif ?>" href="<?= base_url() ?>/staffs/edit"> Edit Staff </a></li>
            <li><a class="<?php if (url_is('/staffs/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/staffs/add"> Add Staff </a></li>
          </ul>
        </li>
        <li class="<?php if (url_is('/pricings/*')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/pricings"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>/employees"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/employees') || url_is('/employees/add') || url_is('/employees/edit')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees">Employees List </a></li>
            <li><a class="<?php if (url_is('/employees/leaves/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees/leaves">Leaves </a></li>
            <li><a class="<?php if (url_is('/employees/holidays/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees/holidays">Holidays </a></li>
            <li><a class="<?php if (url_is('/employees/attendance/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees/attendance">Attendance </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/accounts"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/accounts/invoices/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/invoices">Invoices </a></li>
            <li><a class="<?php if (url_is('/accounts/payments/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/payments">Payments </a></li>
            <li><a class="<?php if (url_is('/accounts/expenses/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/expenses">Expenses </a></li>
            <li><a class="<?php if (url_is('/accounts/taxes/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/taxes">Taxes </a></li>
            <li><a class="<?php if (url_is('/accounts/provident_funds/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/provident_funds">Provident Fund </a></li>
          </ul>
        </li>

        <li class="<?php if (url_is('/calender')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/calender"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>/blog"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/blogs')) : ?>active<?php endif ?>" href="<?= base_url() ?>/blogs">All Blogs </a></li>
            <li><a class="<?php if (url_is('/blogs/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/blogs/add">Add Blog </a></li>
          </ul>
        </li>
        <li class="<?php if (url_is('/activities')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/activities"><i class="far fa-bell"></i> <span>Activities</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>/reports"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/reports/expenses')) : ?>active<?php endif ?>" href="<?= base_url() ?>/reports/expenses">Expense Report </a></li>
            <li><a class="<?php if (url_is('/reports/invoices')) : ?>active<?php endif ?>" href="<?= base_url() ?>/reports/invoices">Invoice Report </a></li>
          </ul>
        </li>
        <li> <a href="<?= base_url() ?>/settings"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>

      </ul>
    </div>
  </div>
</div>