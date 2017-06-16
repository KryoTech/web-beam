<title>System Logs | Beam</title>
</head>
<body class="mdl-color--grey-100">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer">
<header class="mdl-layout__header mdl-color--white">
  <div class="mdl-layout__header-row">
    <span class="logo">
      <a class="text-dark mdl-layout-title">beam</a>
    </span>

    <div class="mdl-layout-spacer"></div>

    <button id="user_menu" class="mdl-layout--large-screen-only text-dark mdl-button mdl-js-button mdl-button-flat">
      Hello <?php echo ' <span class="mdl-color-text--blue">'.$this->session->userdata('first_name').'</span>'; ?><i class="material-icons">expand_more</i>
    </button>

    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="user_menu">
      <a href="<?php echo base_url('admin/dashboard') ?>">
        <li class="mdl-menu__item"><i style="vertical-align: middle !important" class="material-icons">dashboard</i> Dashboard</li>
      </a>
      <a href="<?php echo base_url('admin/profile') ?>">
        <li class="mdl-menu__item"><i style="vertical-align: middle !important" class="material-icons">account_box</i> Profile</li>
      </a>
      <a href="<?php echo base_url('admin/logout') ?>">
        <li class="mdl-menu__item mdl-color-text--red"><i style="vertical-align: middle !important" class="material-icons">exit_to_app</i> Logout</li>
      </a>
    </ul>
  </div>
</header>
<div class="mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--white">
  <span class="mdl-layout-title mdl-color--blue-grey-800">Navigation</span>
  <nav class="mdl-navigation">
    <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="<?php echo base_url('admin/manage') ?>">
      <i style="vertical-align: middle !important"  class="material-icons">person</i> Admins
    </a>
    <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="<?php echo base_url('admin/view_all/students') ?>">
      <i style="vertical-align: middle !important"  class="material-icons">school</i> Students
    </a>
    <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="<?php echo base_url('admin/view_all/teachers') ?>">
      <i style="vertical-align: middle !important"  class="material-icons">work</i> Teachers
    </a>
    <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="<?php echo base_url('admin/view_all/events') ?>">
      <i style="vertical-align: middle !important"  class="material-icons">event</i> Events
    </a>
    <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="<?php echo base_url('admin/view_all/polls') ?>">
      <i style="vertical-align: middle !important"  class="material-icons">poll</i> Polls
    </a>
    <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="<?php echo base_url('admin/view/requests/pending') ?>">
      <i class="material-icons">feedback</i>  Requests
    </a>
    <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="<?php echo base_url('admin/view/accounts/pending') ?>">
      <i class="material-icons">vpn_lock</i> Verification
    </a>
    <a class="mdl-navigation__link mdl-color--purple mdl-color-text--white" href="<?php echo base_url('admin/view/logs') ?>">
      <i class="material-icons">assignment</i> System Logs
    </a>
  </nav>
</div>
  <main class="mdl-layout__content">
    <div class="page-content">
      <div class="mdl-grid">

        <section class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">

          <div class="mdl-card__title mdl-color--purple mdl-color-text--white">
            <h2 class="mdl-card__title-text">System Logs</h2>
            <div class="mdl-layout-spacer"></div>
            <i class="material-icons">assignment</i>
          </div>

          <?php if($logs) { ?>
          <table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric">Action</th>
                <th class="mdl-data-table__cell--non-numeric">By</th>
                <th class="mdl-data-table__cell--non-numeric">Timestamp</th>
                <!-- <th class="mdl-data-table__cell--non-numeric"></th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach($logs as $log) { ?>
              <tr>
                <td class="table-action mdl-data-table__cell--non-numeric">
                  <?php echo $log->action ?>
                </td>
                  <td class="table-action mdl-data-table__cell--non-numeric">
                    <?php echo $log->last_name.", ".$log->first_name ?>
                  </td>
                <td class="table-action mdl-data-table__cell--non-numeric">
                  <?php $d = strtotime($log ->timestamp); echo date('m-d-y h:i:s:A',$d); ?>
                </td><!-- 
                <td class="mdl-data-table__cell--non-numeric">
                  <a href="<?php echo base_url('admin/view/log/'.$log->id."?v=".md5($log->id+$_SESSION['id'])); ?>" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-color-text--purple">View</a>
                </td> -->
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php } ?>
        </section>

      </div>
    </div>
  </main>
</div>