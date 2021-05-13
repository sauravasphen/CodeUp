<?php
  SESSION_start();

  if (isset($_SESSION['name']) && isset($_SESSION['contact_num'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <div class="sidebar">
      <div class="sidebar-header">
        <h3 class="brand">
          <span class="ti-nlink"></span>
          <span>CodeUp</span>
        </h3>
      </div>
      <div class="sidebar-menu">
        <ul>
                <li>
                  <a href="">
                      <span class="ti-user"></span>
                      <span><?php echo $_SESSION['name']; ?></span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="ti-ticket"></span>
                    <span>Tickets</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="ti-settings"></span>
                  <span>Accounts</span>
              </a>
            </li>
            <li>
              <a href="logout.php">
                <span class="ti-shift-right-alt"></span>
                <span>LogOut</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
    <div class="main-content">
      <header>
        <div class="search-wrap">
          <span class="ti-search"></span>
          <input type="search" placeholder="Search">
        </div>
        <div class="social-icons">
          <span class="ti-bell"></span>
          <span class="ti-comment"></span>
          <div class="">

          </div>
        </div>
      </header>
      <main>
        <h2 class="dash-title">Overview</h2>

        <div class="dash-cards">
          <div class="card-single">
            <div class="card-body">
              <span class="ti-briefcase"></span>
              <div class="">
                <h5>Account balance</h5>
                <h4>$30,659.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span class="ti-reload"></span>
              <div class="">
                <h5>Pending</h5>
                <h4>$19,500.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span class="ti-checkbox"></span>
              <div class="">
                <h5>Processed</h5>
                <h4>$19,500.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>

        </div>
        <section class="recent">
          <div class="activity-grid">
            <div class="activity-card">
              <h3>Recent Activities</h3>
              <table>
                <thead>
                  <tr>
                    <th>Projects</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Team</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>App Development</td>
                    <td>15 August,2020</td>
                    <td>22 August, 2020 </td>
                    <td>
                      <div class="img-1"></div>
                      <div class="img-2"></div>
                      <div class="img-3"></div>
                    </td>
                    <td>
                      .<span class="badge success">Success</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Front-end Design</td>
                    <td>15 August,2020</td>
                    <td>22 August, 2020 </td>
                    <td>
                      <div class="img-1"></div>
                      <div class="img-2"></div>
                      <div class="img-3"></div>
                    </td>
                    <td>
                      .<span class="badge success">Success</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Logo Design</td>
                    <td>15 August,2020</td>
                    <td>22 August, 2020 </td>
                    <td>
                      <div class="img-1"></div>
                      <div class="img-2"></div>
                      <div class="img-3"></div>
                    </td>
                    <td>
                      .<span class="badge success">Success</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Server setup</td>
                    <td>15 August,2020</td>
                    <td>22 August, 2020 </td>
                    <td>
                      <div class="img-1"></div>
                      <div class="img-2"></div>
                      <div class="img-3"></div>
                    </td>
                    <td>
                      .<span class="badge success">Success</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Web Development</td>
                    <td>15 August,2020</td>
                    <td>22 August, 2020 </td>
                    <td>
                      <div class="img-1"></div>
                      <div class="img-2"></div>
                      <div class="img-3"></div>
                    </td>
                    <td>
                      .<span class="badge success">Success</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="summary">
              <div class="summary-card">
                <div class="summary-single">
                  <span class="ti-id-badge"></span>
                  <div >
                    <h5>196</h5>
                    <small>Number of staff</small>
                  </div>
                </div>
                <div class="summary-single">
                  <span class="ti-id-calender"></span>
                  <div >
                    <h5>6</h5>
                    <small>Number of leave</small>
                  </div>
                </div>
                <div class="summary-single">
                  <span class="ti-face-smile"></span>
                  <div>
                    <h5>12</h5>
                    <small>Profile Update Request</small>
                  </div>
                </div>
              </div>
              <div class="bday-card">
                <div class="bday-img">
                  <div class="bday-info">
                    <h5>Bwayne F. San </h5>
                    <small>Birthday Today</small>
                    <div>
                      <button type="button" name="button">
                        <span class="ti-gift"></span>
                        wish him
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </main>
    </div>
  </body>
</html>

<?php
}else{
  header("location:mainpage.php");
  exit();
}
?>
