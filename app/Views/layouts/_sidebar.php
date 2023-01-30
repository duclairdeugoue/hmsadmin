<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="active"> <a href="<?= base_url() ?>/dashboard/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
        <li class="list-divider"></li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/bookings/all"> All Booking </a></li>
            <li><a href="<?= base_url() ?>/bookings/edit"> Edit Booking </a></li>
            <li><a href="<?= base_url() ?>/bookings/add"> Add Booking </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/customer/all"> All customers </a></li>
            <li><a href="<?= base_url() ?>/customer/edit"> Edit Customer </a></li>
            <li><a href="<?= base_url() ?>/customer/add"> Add Customer </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/rooms/all">All Rooms </a></li>
            <li><a href="<?= base_url() ?>/rooms/edit"> Edit Rooms </a></li>
            <li><a href="<?= base_url() ?>/rooms/add"> Add Rooms </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/staff/all">All Staff </a></li>
            <li><a href="<?= base_url() ?>/staff/edit"> Edit Staff </a></li>
            <li><a href="<?= base_url() ?>/staff/add"> Add Staff </a></li>
          </ul>
        </li>
        <li> <a href="<?= base_url() ?>/pricing/pricing"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>chat"><i class="fas fa-comments"></i><span> Chat </span></a></li>
            <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-video camera"></i> <span> Calls </span> <span class="menu-arrow"></span></a>
              <ul class="submenu_class" style="display: none;">
                <li><a href="<?= base_url() ?>voice-call"> Voice Call </a></li>
                <li><a href="<?= base_url() ?>video-call"> Video Call </a></li>
                <li><a href="<?= base_url() ?>incoming-call"> Incoming Call </a></li>
              </ul>
            </li>
            <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-envelope"></i> <span> Email </span> <span class="menu-arrow"></span></a>
              <ul class="submenu_class" style="display: none;">
                <li><a href="<?= base_url() ?>compose">Compose Mail </a></li>
                <li><a href="<?= base_url() ?>inbox"> Inbox </a></li>
                <li><a href="<?= base_url() ?>mail-veiw"> Mail Veiw </a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/employees/list">Employees List </a></li>
            <li><a href="<?= base_url() ?>/employees/leaves">Leaves </a></li>
            <li><a href="<?= base_url() ?>/employees/holidays">Holidays </a></li>
            <li><a href="<?= base_url() ?>/employees/attendance">Attendance </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/accounts/invoices">Invoices </a></li>
            <li><a href="<?= base_url() ?>/accounts/payments">Payments </a></li>
            <li><a href="<?= base_url() ?>/accounts/expenses">Expenses </a></li>
            <li><a href="<?= base_url() ?>/accounts/taxes">Taxes </a></li>
            <li><a href="<?= base_url() ?>/accounts/provident_funds">Provident Fund </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>salary">Employee Salary </a></li>
            <li><a href="<?= base_url() ?>salary-veiw">Payslip </a></li>
          </ul>
        </li>
        <li> <a href="<?= base_url() ?>/calender/calendar"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/blog/blog">Blog </a></li>
            <li><a href="<?= base_url() ?>/blog/details">Blog Veiw </a></li>
            <li><a href="<?= base_url() ?>/blog/add">Add Blog </a></li>
            <li><a href="<?= base_url() ?>/blog/edit">Edit Blog </a></li>
          </ul>
        </li>
        <!-- <li> <a href="<?= base_url() ?>assets"><i class="fas fa-cube"></i> <span>Assests</span></a> </li> -->
        <li> <a href="<?= base_url() ?>/activities/activities"><i class="far fa-bell"></i> <span>Activities</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a href="<?= base_url() ?>/reports/expenses">Expense Report </a></li>
            <li><a href="<?= base_url() ?>/reports/invoices">Invoice Report </a></li>
          </ul>
        </li>
        <li> <a href="<?= base_url() ?>settings/setting"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>

      </ul>
    </div>
  </div>
</div>